<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

      $Categories = DB::connection('mysql_old')->table('category')->get();

       foreach ($Categories as $Category) {
           $url_name=rtrim($Category->category_name,' ');
       		$id = DB::table('categories')->insertGetId([


       			//'id' => $Category->category_id,
            'category_id' => 0,
       			'category_type_id' => $Category->category_type_id,
            'category_level' => 1,
            'level_name' => 'Category',
             'name' => $Category->category_name,
             'url_name'=>str_replace(' ','-',strtolower($url_name)),
       			'description' => $Category->description,
       			'digital' => $Category->digital,
       			'banner' => $Category->banner,
       			'data_brands' => $Category->data_brands,
       			'data_vendors' => $Category->data_vendors,
       			'data_subset' => $Category->data_subdets,
            'status' => $Category->status,
            'active'=>1
       		]);

          $this->insertSubCategories($id,$Category->category_id);
       }
    }


    public function insertSubCategories($new_catid,$old_catid){

      $Categories = DB::connection('mysql_old')->table('sub_category')->where('category',$old_catid)->get();

      if(!empty($Categories)){
       foreach ($Categories as $Category) {
           $url_name=rtrim($Category->sub_category_name,' ');

          $id = DB::table('categories')->insertGetId([


            //'id' => $Category->category_id,
            'category_id' => $new_catid,
            'category_type_id' => $Category->sub_category_type_id,
            'category_level' => 2,
            'level_name' => 'Sub-Category',
            'name' => $Category->sub_category_name,
            'url_name'=>str_replace(' ','-',strtolower($url_name)),

            //'description' => $Category->description,
            'digital' => $Category->digital,
            'banner' => $Category->banner,
            //'data_brands' => $Category->data_brands,
            //'data_vendors' => $Category->data_vendors,
            //'data_subset' => $Category->data_subdets,
            'status' => $Category->status,
            'active'=>1
          ]);
          //dd($Category);
          $this->insertChildSubCategories($id,$Category->sub_category_id);
       }
    }

    }


    public function insertChildSubCategories($new_catid,$old_catid){

      $Categories = DB::connection('mysql_old')->table('child_sub_category')->where('sub_category',$old_catid)->get();
      if(!empty($Categories)){
       foreach ($Categories as $Category) {
           $url_name=rtrim($Category->child_sub_category_name,' ');

          $id = DB::table('categories')->insertGetId([


            //'id' => $Category->category_id,
            'category_id' => $new_catid,
            'category_type_id' => $Category->child_sub_category_type_id,
            'category_level' => 3,
            'level_name' => 'Child-Sub-Category',
            'name' => $Category->child_sub_category_name,
            'url_name'=>str_replace(' ','-',strtolower($url_name)),

            //'description' => $Category->description,
            'digital' => $Category->digital,
            'banner' => $Category->banner,
            //'data_brands' => $Category->data_brands,
            //'data_vendors' => $Category->data_vendors,
            //'data_subset' => $Category->data_subdets,
            'status' => $Category->status,
            'active'=>1
          ]);

        $this->insertProducts($Category->child_sub_category_id,$id);
       }
      }

    }

    public function insertProducts($old_catid,$new_catid){

       $products=DB::connection('mysql_old')->table('product')->where('child_sub_category',$old_catid)->get();

       //dd($products);
       foreach($products as $product){
           // variable for url
           $url_name=rtrim($product->title,' ');
           $added_by =json_decode($product->added_by);
           $added_by_id = $added_by->id;
           $added_by_type = $added_by->type;
           DB::table('products')->insert([
               'id'=>$product->product_id,
               'product_type_id'=>$product->product_type_id,
              //  'rating_num'=>$product->rating_num,
              //  'rating_total'=>$product->rating_total,
              //  'rating_user'=>$product->rating_user,
               //'rating_num'=>$product->rating_num,
               //'rating_total'=>$product->rating_total,
               //'rating_user'=>$product->rating_user,
               'name'=>$product->title,
//               $url_name = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $url_name)),


               'url_name'=> preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $url_name)),
//               'url_name'=>str_replace(' ','-',strtolower($url_name)),
               'added_by_id'=>$added_by_id,
               'added_by_type'=>$added_by_type,
              //  'added_by'=>$product->added_by,
               'category_id'=>$new_catid,
               'description'=>$product->description,
               // 'sub_category_id'=>$product->sub_category,
               // 'child_sub_category_id'=>$product->child_sub_category,
               'num_of_imgs'=>$product->num_of_imgs,
               'sale_price'=>$product->sale_price,
               'actual_price'=>$product->sale_price,
               'purchase_price'=>$product->purchase_price,
               'shipping_cost'=>$product->shipping_cost,
               'add_timestamp'=>$product->add_timestamp,
               'featured'=>$product->featured,
               'tag'=>$product->tag,
               'status'=>$product->status,
               'front_image'=>$product->front_image,
               'brand'=>$product->brand,
               'current_stock'=>$product->current_stock,
               'unit'=>$product->unit,
               'additional_fields'=>$product->additional_fields,
               'number_of_view'=>$product->number_of_view,
               'background'=>$product->background,
               'discount'=>$product->discount,
               'discount_type'=>$product->discount_type,
               'tax'=>$product->tax,
               'tax_type'=>$product->tax_type,
              //  'color'=> $this->getColor($product->color),
               'color'=> $this->getColor(),
               'options'=> $this->getOption(),
               'main_image'=>$product->main_image,
               'download'=>$product->download,
               'download_name'=>$product->download_name,
               'deal'=>$product->deal,
               'num_of_downloads'=>$product->num_of_downloads,
               'update_time'=>$product->update_time,
               'requirements'=>$product->requirements,
               'logo'=>$product->logo,
               'video'=>$product->video,
               'last_viewed'=>$product->last_viewed,
               'products'=>$product->products,
               'is_bundle'=>$product->is_bundle,
               'vendor_featured'=>$product->vendor_featured,
              //  'add_review'=>$product->add_review
               //'add_review'=>$product->add_review




           ]);


       }
    }

    public function getColor()
    {
       $color_id = DB::table('product_colors')->insertGetId([
            'name' => 'Blacky',
            'color_code' => '#0000000',
            'active' => '0'
        ]);
        $colors = array();
        //$color["color"] = explode(',',$data);
        array_push($colors,$color_id);

        return json_encode($colors);
    }

    //  public function getColor($color){
    //   $color_array =json_decode($color);
    //   $new_color =[];
    //   foreach ($color_array as $key => $value) {
    //     $value = substr($value, 0, -3);

    //     $value = str_replace("rgba(","",$value);

    //     $value = (explode(",",$value));
    //     $R=dechex($value[0]);
    //     If (strlen($R)<2)
    //     $R='0'.$R;
        
    //      $G=dechex($value[1]);
    //     If (strlen($G)<2)
    //     $G='0'.$G;
        
    //     $B=dechex($value[2]);
    //     If (strlen($B)<2)
    //     $B='0'.$B;

    //     $hexaCode= '#' . $R . $G . $B;
    //     $coloName= $this->getName($hexaCode);
         
    //   }
    //   array_push($new_color,$hexaCode);

    //   $color_id = DB::table('product_colors')->insertGetId([
    //         'name' =>  $coloName,
    //         'color_code' => $hexaCode,
    //         'status' => '1'
    //   ]);
    //   return json_encode($new_color);
 
    // }

    public function getName($color ) {
      $baseColors = [
        'ee0202' => 'red',
        'fbef00' => 'yellow',
        '1e15f6' => 'blue',
        'f47200' => 'orange',
        '2e9102' => 'green',
        '9e0bf6' => 'purple',
        'ffffff' => 'white',
        '000000' => 'black',
        'd20797' => 'pink',
        'ff00f6' => 'pink',
        '9a0005' => 'brown'
      ];
      $dist_arr = [];
      $nearest = false;
      if ($baseColors && is_array($baseColors)) {
        $this->baseColors = $baseColors;
      }
      foreach ($this->baseColors as $k => $v) {
        $dist = $this->dist2Colors($this->hex2RGB($color), $this->hex2RGB($k));
        if ($nearest === false) {
          $nearest = $dist;
        } else {
          if ($nearest > $dist) {
            $nearest = $dist;
          }
        }
        $dist_arr[$dist] = $v;
      }
      if (isset($dist_arr[$nearest])) {
        return $dist_arr[$nearest];
      } else {
        return false;
      }
    }
    public function dist2Colors($color1, $color2) {
      if (is_array($color1) && is_array($color2)) {
        $delta_r = $color1['r'] - $color2['r'];
          $delta_g = $color1['g'] - $color2['g'];
          $delta_b = $color1['b'] - $color2['b'];
          return $delta_r * $delta_r + $delta_g * $delta_g + $delta_b * $delta_b;
      } else {
        return false;
      }
  
    }

    public function hex2RGB($color) {
      if ($color != "") {
        $color = ltrim($color, '#');
        list($r,$g,$b) = array_map('hexdec',str_split($color,2));
            return array(
              'r' => $r,
              'g' => $g,
              'b'=>$b
            );
      }
      return false;
    }

    public function getOption(){
      $option = array();
      $options =array();

      $option['id'] = 1;
      $option['name'] = 'Size';
      $option['values'] = ['S','M','L'];

      array_push($options,$option);

     // $options =array();
      $option['id'] = 2;
      $option['name'] = 'Fabric';
      $option['values'] = ['Cotton','Lilon'];

      array_push($options,$option);
      //dd(json_encode($options));
      return json_encode($options);
    }

}
