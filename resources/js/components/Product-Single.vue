<template>
<!--product details start-->
<div>
<section>
  <div class="container">

    <productdetail :Product="Product"/>
  
  </div>
</section>

<!--product details end-->


<!--tab start-->

<section class="pt-0 pb-8"> 
<div class="container">
  <productdetailtabs :Product="Product"/>
  
  </div>
</section>
</div>

<!--tab end-->
    
</template>



<script>
import productdetail from './ProductDetail';
import productdetailtabs from './Product-Detail__Tabs'
export default {
    name:'productsingle',
    components: {
                   productdetail,
                   productdetailtabs
                },

    beforeMount(){
                   this.getProductDetail()
                },

    data(){
                return{
                   Product:{},
                  
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
                              console.log(app.Product)
                             //console.log(response.data)
             })
                .catch(function(error){
                    console.log(error);
             });

    }
  }
}
</script>