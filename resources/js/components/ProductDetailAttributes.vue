<template>
       <div class="col-lg-6 col-12 mt-5 mt-lg-0">
        <div class="product-details">
          <h1 class="h4 mb-0 font-w-6">{{ Product.name }}</h1>
          <div class="star-rating mb-4"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
          </div> <span class="product-price h5 text-pink">${{ price.toFixed(2) }}<!--<del class="text-muted h6">$35.00</del>--></span>
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
              <button class="btn-product btn-product-up"> <i class="las la-minus"></i>
              </button>
              <input class="form-product" type="number" name="form-product" value="1">
              <button class="btn-product btn-product-down"> <i class="las la-plus"></i>
              </button>
            </div>
            <select class="custom-select mt-3 mt-sm-0" id="inputGroupSelect02" v-for="(variant,parent_index) in Product_variant" :key="parent_index"  v-model="variaton[parent_index]">
              <option v-for="(value,index) in variant.values" :value="value" :key="index" >{{ value }}</option>
            </select>
            <div class="d-flex text-center ml-sm-4 mt-3 mt-sm-0">
              <div class="form-check pl-0 mr-2" v-for="(color, index) in Product_color" :key="index">
                <input type="radio" class="form-check-input" id="color-filter1" name="Radios" v-model="color_index" :value="index">
                <label class="form-check-label" for="color-filter1" :data-bg-color="'#'+color.color_code" :style="'background-color:'+color.color_code+';'"></label>
              </div>
            </div>
          </div>
          <div class="d-sm-flex align-items-center mt-5">
            <button class="btn btn-primary btn-animated mr-sm-3 mb-3 mb-sm-0"><i class="las la-shopping-cart mr-2"></i>Add To Cart</button>
            <a class="btn btn-animated btn-dark" href="#"> <i class="lar la-heart mr-2 ic-1-2x"></i>Add To Wishlist</a>
          </div>
          
        </div>
      </div>
</template>

<script>
    export default {
      name: 'productdetailattribute',

      props:['Product','Product_variant','Product_color'],

        

      //},
      data(){
        return{
              color_index:0,
              variant_index:0,
              variant_value_index:0,
              variaton:{0:'S',1:'Cotton'},
              price: 0,
              stock:10
            //product:props:['Product']
        }
      },
      mounted(){
          //app.variation = app.variants
        //console.log(app.variation)
         // this.getColors()

      },

      beforeUpdate(){
        //console.log(this.Product_color)
       //this.color_index = 0
        //this.variation

        this.getProductByVariations()

      },
      methods:{

          getVariations:function(parent_index,index){
              
              //console.log(id)
            var app = this 
            var variation = ''
            var variant = ''
            // app.variant_index = parent_index;
            // app.Product_variant.forEach(element => {
            //     if(parent_index == variant_index) {
            //       //console.log(element.values)   
            //       variant += '-' + element.values[parent_index].toLowerCase()
            //     }
            //     else
            //       variant += '-' + element.values[0].toLowerCase()
                   
            // });
            // variation = app.Product_color[app.color_index].name.toLowerCase() + '-' + variant
            // console.log(variation)
            // axios.get('/api/get_product_variation/'+variation+'_'+this.Product.id)
            //   .then(function(response){
            //       //console.log(response)
            //       app.price = response.data.price
            //       app.stock = response.data.stock
                

            // })
            // .catch(function(error){
            //     console.log(error)
            // })

          },

          getColor:function(index){
              var app = this 
              app.colors = index

                          
              // var variation = ''
              // var variant = ''
              // app.Product_variant.forEach((element,index) => {
              //     // if(parent_index == variant_index)    
              //       variant += '-' + element.values[variant_index].toLowerCase()
              //     // else
              //       // variant += '-' + element.values[0].toLowerCase()
                    
              // });
              // variation = app.Product_color[app.color_index].name.toLowerCase() + '-' + variant
              
              // axios.get('/api/get_product_variation/'+variation+'_'+this.Product.id)
              //   .then(function(response){
              //       console.log(response)
              //       app.price = response.data.ProductSpecs.price
              //       app.stock = response.ProductSpecs.data.stock
              //       console.log(app.price)

              // })
              // .catch(function(error){
              //     console.log(error)
              // })
          },
          getProductByVariations:function(){

                var app = this 
                var variantion = '';
                // var variant = ''
                 variantion = app.Product_color[this.color_index].name.toLowerCase() + '-' + app.variaton[0].toLowerCase() + '-' + app.variaton[1].toLowerCase()
            //   console.log(app.variaton)
            //     app.variaton.forEach(element => {
                    
            //         variant += '-' + element.values[app.variant_index].toLowerCase()
                   
            //     });
                //variantion = color + variant
              
            axios.get('/api/get_product_variation/'+variantion+'_'+this.Product.id)
            .then(function(response){
                    //console.log(response)
                    app.price = response.data.ProductSpecs.price
                    app.stock = response.data.ProductSpecs.stock
                  console.log(app.price)

            })
            .catch(function(error){
                console.log(error)
            })
          }
      }
      
    }
</script>