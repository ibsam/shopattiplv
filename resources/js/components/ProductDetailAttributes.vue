<template>
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
                <input class="form-product" type="number" name="form-product" v-model="qty" :disabled="disabled">
              <!-- </form> -->
              <button class="btn-product btn-product-down" v-on:click="qtyInc()"> <i class="las la-plus"></i>
              </button>
            </div>
            <div v-if="Product.is_static == 0" class="row w-100">
              <div class="col-md-4">
                <select class="custom-select mt-3 mt-sm-0" id="inputGroupSelect02" v-model="Size" @change="getProductByVariations()">
                  <option v-for="(value,index) in Product_variant[0].values" :value="value" :key="index" >{{ value }}</option>
                </select>
              </div>
              <div v-if="Product_variant.length > 1" class="col-md-4">  
                <select class="custom-select mt-3 mt-sm-0" id="inputGroupSelect02"  v-model="Fabric" @change="getProductByVariations()">
                  <option v-for="(value,index) in Product_variant[1].values" :value="value" :key="index" >{{ value }}</option>
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
</template>

<script>
    export default {
      name: 'productdetailattribute',

      props:['Product','Product_variant','Product_color'],


        

      //},
      data(){
        return{
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
        }
      },
      watch:{
        Product:function(){
            this.Pid = this.Product.id
            this.color_index = this.Product_color[0].name
            this.Size = this.Product_variant[0].values[0] 
            this.Fabric = this.Product_variant[1].values[0] 
           this.getProductByVariations()
        },

      },
      // mounted(){
      //     //app.variation = app.variants
      //    console.log(this.$el)
      //     //this.getColors()
      //   this.getProductByVariations()

      // },
      methods:{
          
          getProductByVariations:function(){
                //console.log(this.Size)
                var app = this 
                app.variation = app.color_index.toLowerCase() + '-' + app.Size.toLowerCase() + '-' + app.Fabric.toLowerCase()
                // console.log(app.variation)
              
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
          },
          qtyInc:function(){
            var app = this 
            app.qty +=1
            var temp = 0
            if(app.stock > app.stock_backup){
              if(app.qty > app.stock){
                temp = app.stock
                app.stock = app.stock_backup
                app.stock_backup = temp 
                app.disabled = true
              }
            }
          },
          qtyDec:function(){
            var app = this
            app.qty-=1
            var temp = 0
            if(app.stock < app.stock_backup){
              //temp = app.stock
                temp = app.stock
                app.stock = app.stock_backup
                app.stock_backup = temp 
                app.disabled = true
              //app.stock_backup = temp 
            }
          }
      }
      
    }
</script>