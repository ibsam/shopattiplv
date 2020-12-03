<template>
    <div role="tabpanel" class="tab-pane fade" id="tab3-2">
              <table class="table table-bordered mb-0">
                <tbody>
                  <tr v-for="Specs in ProductSpec" :key="Specs.id">
                    <td>{{ Specs.meta_key }}</td>
                    <td>{{ Specs.meta_value }}</td>
                  </tr>
                  <!-- <tr>
                    <td>Waist</td>
                    <td>20 cm</td>
                  </tr>
                  <tr>
                    <td>Length</td>
                    <td>35 cm</td>
                  </tr>
                  <tr>
                    <td>Fabric</td>
                    <td>Cotton, Silk &amp; Synthetic</td>
                  </tr>
                  <tr>
                    <td>Warranty</td>
                    <td>6 Months</td>
                  </tr> -->
                </tbody>
              </table>
            </div>
</template>


<script>
export default {
    name:'productdetailspecification',
    props:['ProductDetail','ProductVariant','ProductColor'],

    data(){
      
      return{
        ProductSpec:[]
      }
    },
    created(){
      this.getSpecifications()
    },
    methods:{
      getSpecifications:function(){
          var app = this
          var url = window.location.href.split('/');
          var main_url = url[3].split('.');
          var param =  main_url[0].split('_');
          var id = param[1];
          axios.get('/api/get_product_specification/'+id)
          .then(function(response){
              app.ProductSpec = response.data.ProuductSpec
              //console.log(app.ProductSpec)
          })
          .catch(function(error){
            console.log(error)
          })
      }
    }
}
</script>