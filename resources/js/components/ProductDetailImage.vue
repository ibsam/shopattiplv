<template>
      <div class="col-lg-6 col-12">
        <div class="lSSlideOuter">
          <div class="lSSlideWrapper usingCss">
            <ul id="imageGallery" class="lightSlider lsGrab lSSlide" :style="'width: 1739.62px; height: 434.891px; padding-bottom: 0%; transform: translate3d(0px, 0px, 0px);'">
              <li :data-thumb="'uploads/product_image/product_'+Product.id+'_1.jpg'" :data-src="'uploads/product_image/product_'+Product.id+'_1.jpg'" class="lslide active" style="width: 434.906px; margin-right: 0px;">
                <img class="img-fluid w-100" :src="'uploads/product_image/product_'+Product.id+'_1.jpg'" alt="">
              </li>
<!--              <div v-if="Product.num_of_imgs > 1">-->
              <li v-for="index in 5" :key="index" :data-thumb="'uploads/product_image/product_'+Product.id+'_'+index+'_thumb.jpg'" :data-src="'uploads/product_image/product_'+Product.id+'_'+index+'_thumb.jpg'" class="lslide" :style="'width: 434.906px; margin-right: 0px;'">

                <img class="img-fluid w-100" :src="'uploads/product_image/product_'+Product.id+'_'+index+'_thumb.jpg'" alt="">
              </li>
<!--              </div>-->

            </ul>
            <div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div>
          </div>
        </div>
      </div>
</template>

<script>
    export default {

      data(){
        return{

         n:1,
        }
      },
      created(){
          console.log("Component Created")
          // this.imgCount =this.Product.num_of_imgs;
      },

      computed :{
            Product:{
                get(){
                    // console
                    return this.$store.getters.getProdFormGetters
                },
                set(newValue){
                    return newValue
                }
            },
            Product_variants:{
                get(){
                    return this.$store.getters.getProdVarFormGetters
                },
                set(newValue){
                    return newValue
                }
            },
            Product_color:{
                get(){
                    return this.$store.getters.getProdColFormGetters
                },
                set(newValue){
                    return newValue
                }
            },

        },

      methods:{
        // setImageUrl:function(){
        //   var app = this
        //   //app.main_image = "uploads\images\product_image\product_"+app.Product.id+"_"+"1.jpg";
        // }
      }

    }
</script>
