<template>

   <div class="row">

        <product-detail-image ></product-detail-image>

<!--        <product-attribute></product-attribute>-->

    </div>

</template>

<script>
import ProductDetailImage from './ProductDetailImage'
import ProductDetailAttributes from './ProductDetailAttributes'
Vue.component('product-detail-image', ProductDetailImage);
Vue.component('product-attribute', ProductDetailAttributes);
//import productdetailtabs  from './Product-Detail__Tabs'
export default {
  name: 'productdetail',
  components: {
      ProductDetailImage,
      ProductDetailAttributes
  },


  created(){
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

  data(){
    return{

    }
  },



}

</script>
