<template>
<!--product details start-->
<div>
  <section>
    <div class="container">
      <!-- <keep-alive> -->
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="lSSlideOuter">
              <div class="lSSlideWrapper usingCss">
                <ul id="imageGallery" class="lightSlider lsGrab lSSlide" style="width: 1739.62px; height: 434.891px; padding-bottom: 0%; transform: translate3d(0px, 0px, 0px);">

                  <li data-thumb="assets/images/product/p11.jpg" data-src="/images/product/p11.jpg" class="lslide active" style="width: 434.906px; margin-right: 0px;">
                    <img class="img-fluid w-100" src="/images/product/p11.jpg" alt="">
                  </li>

                  <li data-thumb="assets/images/product/p13.jpg" data-src="assets/images/product/p13.jpg" class="lslide" style="width: 434.906px; margin-right: 0px;">
                    <img class="img-fluid w-100" src="/images/product/p13.jpg" alt="">
                  </li>

                  <li data-thumb="assets/images/product/p10.jpg" data-src="assets/images/product/p10.jpg" class="lslide" style="width: 434.906px; margin-right: 0px;">
                    <img class="img-fluid w-100" src="/images/product/p10.jpg" alt="">
                  </li>
                  <li data-thumb="assets/images/product/p15.jpg" data-src="assets/images/product/p15.jpg" class="lslide" style="width: 434.906px; margin-right: 0px;">
                    <img class="img-fluid w-100" src="/images/product/p15.jpg" alt="">
                  </li>

                </ul>
                <div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12 mt-5 mt-lg-0">
          <div class="product-details">
            <h1 class="h4 mb-0 font-w-6">{{ Product.name }}</h1>
            <div class="star-rating mb-4"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
            </div> <span class="product-price h5 text-pink">Rs.{{ price.toFixed(2) }}<!--<del class="text-muted h6">$35.00</del>--></span>
            <ul class="list-unstyled my-3">
              <li>
                <small>Availibility:
                  <span class="text-green" v-if="stock > 0"> In Stock</span>
                  <span class="text-danger" v-else> Out Of Stock</span>
                </small>
              </li>
              <li class="font-w-4"><small>Categories :<span class="text-muted">{{ Product.category.parent_category.parent_category.name }},{{ Product.category.parent_category.name }},{{ Product.name }} </span></small>
              </li>
            </ul>
            <p class="mb-4 desc" v-html="Product.description"></p>
            <div class="d-sm-flex align-items-center mb-5">
              <div class="d-flex align-items-center mr-sm-4">
                <button class="btn-product btn-product-up" v-on:click="qtyDec()"> <i class="las la-minus"></i>
                </button>
                <!-- <form action="/cart.htm" method="post"> -->
                  <input class="form-product" type="number" name="form-product" v-model="qty" >
                <!-- </form> -->
                <button class="btn-product btn-product-down" v-on:click="qtyInc()" :disabled="disabled"> <i class="las la-plus"></i>
                </button>
              </div>
              <div v-if="Product.is_static == 0" class="row w-100">
                <div class="col-md-4">
                  <select class="custom-select mt-3 mt-sm-0" id="inputGroupSelect02" v-model="Size" @change="getProductByVariations()">
                    <option v-for="(value,index) in Product_variants[0].values" :value="value" :key="index" >{{ value }}</option>
                  </select>
                </div>
                <div v-if="Product_variants.length > 1" class="col-md-4">
                  <select class="custom-select mt-3 mt-sm-0" id="inputGroupSelect02"  v-model="Fabric" @change="getProductByVariations()">
                    <option v-for="(value,index) in Product_variants[1].values" :value="value" :key="index" >{{ value }}</option>
                  </select>
                </div>
                <div class="d-flex text-center mt-3 mt-sm-1 col-md-4">
                  <div class="form-check pl-0 mr-2" v-for="(color, index) in Product_color" :key="index">
                    <input type="radio" class="form-check-input" id="color-filter1" name="Radios" v-model="color_index" :value="color.name" @click="getProductByVariations()">
                    <label class="form-check-label" for="color-filter1" :data-bg-color="'#'+color.color_code" :style="'background-color:'+color.color_code+';'"></label>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-sm-flex align-items-center mt-5">
              <form action="/cart.htm" method="post">
                  <input type="hidden" name="_token" :value="csrf"/>
                  <input type="hidden" name="product_id" :value="Product.id" />
                  <input type="hidden" name="variation" :value="variation" />
                  <input type="hidden" name="price" :value="price" />
                  <input type="hidden" name="stock" :value="stock" />
                  <input type="hidden" name="qty" :value="qty" />
                <button class="btn btn-primary btn-animated mr-sm-3 mb-3 mb-sm-0"><i class="las la-shopping-cart mr-2"></i>Add To Cart</button>
              <!-- <a class="btn btn-animated btn-dark" href="#"> <i class="lar la-heart mr-2 ic-1-2x"></i>Add To Wishlist</a> -->
              </form>
            </div>

          </div>
          </div>
        </div>
      <!-- </keep-alive> -->
    </div>
  </section>

  <!--product details end-->


  <!--tab start-->

  <section class="pt-0 pb-8">
  <div class="container">
    <product-detail-tabs :ProductDetail="Product" :ProductVariant="Product_variants" :ProductColor="Product_color"></product-detail-tabs>

    </div>
  </section>
</div>

<!--tab end-->

</template>



<script>
import ProductDetail from './ProductDetail';
import Product_Detail__Tabs from './Product_Detail__Tabs'
Vue.component('product-detail-tabs', Product_Detail__Tabs);
Vue.component('product-detail', ProductDetail);
export default {
    name:'productsingle',
    components: {
        ProductDetail,
        Product_Detail__Tabs
    },

    mounted(){
       this.getProductDetail()
        // this.$store.dispatch("getProductDetail")
        // this.$store.dispatch("getProductByVariations")
    },
    data(){
        return{
              Product:{},
              Product_variants:{},
              Product_color:{},
              color_index:'',
              variant_index:0,
              variant_value_index:0,
              Size:'',
              //variaton:{0:'S',1:'Cotton'},
              Fabric:'',
              price: 0,
              stock:10,
              qty:1,
              variation:'',
              stock_backup:0,
              disabled : false,
              Pid:0,
              csrf:document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            //product:props:['Product']
              n:1,
              NoImg:0
        }
    },
    // computed :{
    //     Product:{
    //         get(){
    //             // console
    //             return this.$store.getters.getProdFormGetters
    //         },
    //         set(newValue){
    //             return newValue
    //         }
    //     },
    //     Product_variants:{
    //         get(){
    //             this.Size = this.$store.getters.getProdVarFormGetters[0].values[0]
    //             this.Fabric = this.$store.getters.getProdVarFormGetters[1].values[0]
    //             return this.$store.getters.getProdVarFormGetters
    //         },
    //         set(newValue){
    //             return newValue
    //         }
    //     },
    //     Product_color:{
    //         get(){
    //             this.color_index = this.$store.getters.getProdColFormGetters[0].name
    //             return this.$store.getters.getProdColFormGetters
    //         },
    //         set(newValue){
    //             return newValue
    //         }
    //     },
    //     Price:{
    //         get(){
    //             this.price = this.$store.getters.getPriceFromGetters
    //             return this.$store.getters.getPriceFromGetters
    //         },
    //         set(newValue){
    //             return newValue
    //         }
    //     },
    //     Stock:{
    //         get(){
    //           this.stock = this.$store.getters.getStockFromGetters
    //             return this.$store.getters.getStockFromGetters
    //         },
    //         set(newValue){
    //             return newValue
    //         }
    //     }

    // },

    methods:{
        getProductDetail:function(context){
            var app = this
            var url = window.location.href.split('/');
            var main_url = url[3].split('.');
            var param =  main_url[0].split('_');
            var id = param[1];
            // console.log("here")
           axios.get('/api/get_product/'+id)
                .then(function(response){
                  app.Product = response.data.Product
                  app.Product_variants = response.data.Product_Variants
                  app.Product_color = response.data.Product_Color

                  app.Size = app.Product_variants[0].values[0]
                  app.Fabric = app.Product_variants[1].values[0]
                  app.color_index = app.Product_color[0].name
                  app.NoImg = parseInt(app.Product.num_of_imgs)

                  app.getProductByVariations()

                })
                .catch(function(error){
                    console.log(error);
                });

        },
        getProductByVariations:function(){
                //console.log(this.Size)
                var app = this
                app.variation = app.color_index.toLowerCase() + '-' + app.Size.toLowerCase() + '-' + app.Fabric.toLowerCase()
                // console.log(app.variation)
            if(this.Product.is_static == 1){
                axios.get('/api/get_product_variation/'+app.variation+'_'+this.Product.id)
                    .then(function(response){
                        //console.log(response)
                        app.price = response.data.ProductSpecs.price
                        app.stock = response.data.ProductSpecs.stock
                        console.log(app.price)

                    })
                    .catch(function(error){
                        console.log(error)
                    })
            }else{
                app.price = this.Product.sale_price
                app.stock = this.Product.current_stock
            }

          },
  }
}
</script>
