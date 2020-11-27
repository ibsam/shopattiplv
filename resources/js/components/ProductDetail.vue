<template>
    
   <div class="row">
        <product-detail-image :Product="ProductDetail" :Product_variant="ProductVariant" :Product_color="ProductColor"></product-detail-image>
        <product-attribute :Product="ProductDetail" :Product_color="ProductColor" :Product_variant="ProductVariant"></product-attribute>
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
  // components: {
  //     productdetailimage,
  //     productdetailattribute,
  //     //productdetailtabs
  // },
  props:['ProductDetail','ProductVariant','ProductColor'],
  created(){
   // this.getProductDetail()
  },
  data(){
    return{
    //   Product:{},
    //   Product_variants:{},
    //   Product_color:{},
    }
  },
  // methods:{

  //   getProductDetail:function(){
  //     var app = this
  //     var url = window.location.href.split('/');
  //     var main_url = url[3].split('.');
  //     var param =  main_url[0].split('_');
  //     var id = param[1];
    
  //     axios.get('/api/get_product/'+id)
  //     .then(function(response){
  //       app.Product = response.data.Product;
  //       app.Product_variants = response.data.Product_Variants;
  //       app.Product_color = response.data.Product_Color;
  //     })
  //     .catch(function(error){
  //         console.log(error);
  //     });

  //   }
  // }
  
 // props:['Product'],
  
  
}

</script>