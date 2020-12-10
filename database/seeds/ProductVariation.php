<?php

use Illuminate\Database\Seeder;

class ProductVariation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       $products=DB::table('products')->select('id','options','color')->limit(10)->get();
       foreach($products as $product){
        $this->getVariants($product->id,$product->color,$product->options);
       }
       
            
}

   public function getVariants($id ,$colors , $options){
      // dd($id);
    $colors = json_decode($colors);
       
        $options = json_decode($options);
        $variants = '';
        $price = 200;
        $stock = 2;
        
        foreach($colors as $color){
            $cname = DB::table('product_colors')->select('name')->where('id',$color)->first();
            $variants = strtolower($cname->name).'-';
            //dd($colors);
        // foreach($options as $option){
            $count =0;
            foreach($options[$count]->values as $val){
                
                $variants .= strtolower($val).'-';
             //   dd($option->values);
            //  if($count<count($options)){
                
                foreach($options[$count+1]->values as $values){
                   
                    
                       //$variants = strtolower($values).'-'.$values;
                      $variants .= strtolower($values);  
                      
                     $pid =DB::table('product_variants')->insertGetId([
                        'product_id'=>$id,
                        'stock'=>$stock,
                        'price'=>$price,
                        'variation'=>$variants,

                    ]);
                   // dd($pid);
                    $price+=20;
                    $stock+=2;
                    $variants = strtolower($cname->name).'-' .  strtolower($val) . '-';
                }
                $variants = strtolower($cname->name).'-';
               
            // }
                
            }
            $count++;
        // }
            
        }
       
    }


       

  // }
}
