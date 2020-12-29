<template>
<!--product details start-->
<div>
  <section>
    <div class="container">
      <keep-alive>
        <product-detail ></product-detail>
      </keep-alive>
    </div>
  </section>

  <!--product details end-->


  <!--tab start-->

  <section class="pt-0 pb-8">
  <div class="container">
<!--    <product-detail-tabs :ProductDetail="Product" :ProductVariant="Product_variants" :ProductColor="Product_color"></product-detail-tabs>-->

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
        this.$store.dispatch("getProductDetail")
    },

    data(){
      //this.getProductDetail()
        return{
          // Product:{},
          // Product_variants:{},
          // Product_color:{},

        }

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

            // getProductDetail:function(){
            //                  var app = this
            //                  var url = window.location.href.split('/');
            //                  var main_url = url[3].split('.');
            //                  var param =  main_url[0].split('_');
            //                  var id = param[1];
            //                  //console.log(id)
            //                  axios.get('/api/get_product/'+id)
            //                  .then(function(response){
            //                     app.Product = response.data.Product;
            //                     app.Product_variants = response.data.Product_Variants;
            //                     app.Product_color = response.data.Product_Color;
            //                  // console.log(app.Product_variants[0])
            //                  //console.log(response.data)
            //  })
            //   .catch(function(error){
            //         console.log(error);
            //   });
            //
            // }
  }
}
</script>
