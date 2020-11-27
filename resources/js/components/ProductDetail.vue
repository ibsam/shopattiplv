<template>
    
   <div class="row">
        <productdetailimage :Product="Product" :Product_variant="Product_variants" :Product_color="Product_color"></productdetailimage>
        <productdetailattribute :Product="Product" :Product_color="Product_color" :Product_variant="Product_variants"></productdetailattribute>
    </div>
 
</template>

<script>
import productdetailimage from './ProductDetailImage'
import productdetailattribute from './ProductDetailAttributes'
import productdetailtabs  from './Product-Detail__Tabs'
export default {
  name: 'productdetail',
  components: {
      productdetailimage,
      productdetailattribute,
      productdetailtabs
  },

  created(){
    this.getProductDetail()
  },
  data(){
    return{
      Product:{},
      Product_variants:{},
      Product_color:{},
    }
  },
  methods:{

    getProductDetail:function(){
      var app = this
      var url = window.location.href.split('/');
      var main_url = url[3].split('.');
      var param =  main_url[0].split('_');
      var id = param[1];
      //console.log(id) 
      axios.get('/api/get_product/'+id)
      .then(function(response){
        app.Product = response.data.Product;
        app.Product_variants = response.data.Product_Variants;
        app.Product_color = response.data.Product_Color;

        //console.log(response.data)
        //console.log(response.data)
      })
      .catch(function(error){
          console.log(error);
      });

    }
  }
  
 // props:['Product'],
  
  
}

</script>