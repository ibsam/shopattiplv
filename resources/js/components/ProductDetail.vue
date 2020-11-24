<template>
    
   <div class="row">
        <productdetailimage :Product="Product"></productdetailimage>
        <productdetailattribute :Product="Product"></productdetailattribute>
    </div>
 
</template>

<script>
import productdetailimage from './ProductDetailImage'
import productdetailattribute from './ProductDetailAttributes'
export default {
  name: 'productdetail',
  components: {
      productdetailimage,
      productdetailattribute
  },

  created(){
    this.getProductDetail()
  },
  data(){
    return{
      Product:{}

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
        app.Product = response.data
<<<<<<< Updated upstream
        console.log(app.Product.options)
=======
        //console.log(response.data)
>>>>>>> Stashed changes
      })
      .catch(function(error){
          console.log(error);
      });

    }
  }
}

</script>