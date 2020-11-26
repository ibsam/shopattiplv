<template>
      <div class="col-lg-6 col-12">
        <div class="lSSlideOuter">
          <div class="lSSlideWrapper usingCss">
            <ul id="imageGallery" class="lightSlider lsGrab lSSlide" style="width: 1739.62px; height: 434.891px; padding-bottom: 0%; transform: translate3d(0px, 0px, 0px);">
              <li :data-thumb="'uploads/product_image/product_'+Product.id+'_1.jpg'" :data-src="'uploads/product_image/product_'+Product.id+'_1.jpg'" class="lslide active" style="width: 434.906px; margin-right: 0px;">
                <img class="img-fluid w-100" :src="'uploads/product_image/product_'+Product.id+'_1.jpg'" alt=""> 
              </li> 
              <li v-for="n in Product.num_of_imgs" :key="n" :data-thumb="'uploads/product_image/product_'+Product.id+'_'+n+'_thumb.jpg'" :data-src="'uploads/product_image/product_'+Product.id+'_'+n+'_thumb.jpg'" class="lslide" style="width: 434.906px; margin-right: 0px;">
                <img class="img-fluid w-100" :src="'uploads/product_image/product_'+Product.id+'_'+n+'_thumb.jpg'" alt="">
              </li>
              <!-- <li data-thumb="'uploads/product_image/product_'+Product.id+'_1.jpg'" data-src="'uploads/product_image/product_'+Product.id+'_1.jpg'" class="lslide" style="width: 434.906px; margin-right: 0px;">
                <img class="img-fluid w-100" src="'uploads/product_image/product_'+Product.id+'_1.jpg'" alt="">
              </li>
              <li data-thumb="'uploads/product_image/product_'+Product.id+'_1.jpg'" data-src="'uploads/product_image/product_'+Product.id+'_1.jpg'" class="lslide" style="width: 434.906px; margin-right: 0px;">
                <img class="img-fluid w-100" src="'uploads/product_image/product_'+Product.id+'_1.jpg'" alt="">
              </li>     -->
            </ul>
            <div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div>
          </div>
        </div>
      </div>
</template>

<script>
    export default {
      name:'productdetailimage',
      props:['Product'],
      
      data(){
        return{
         // main_image : '',
         // thumbnail_img:[],
         n:0,
        }
      },
      // mounted(){
      //   //this.setImageUrl()
      // },
      methods:{
        // setImageUrl:function(){
        //   var app = this
        //   //app.main_image = "uploads\images\product_image\product_"+app.Product.id+"_"+"1.jpg";
        // }
      }

    }
</script>