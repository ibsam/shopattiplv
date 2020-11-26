<template>
       <div class="col-lg-6 col-12 mt-5 mt-lg-0">
        <div class="product-details">
          <h1 class="h4 mb-0 font-w-6">{{ Product.name }}</h1>
          <div class="star-rating mb-4"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
          </div> <span class="product-price h5 text-pink">${{ Product.sale_price.toFixed(2) }}<!--<del class="text-muted h6">$35.00</del>--></span>
          <ul class="list-unstyled my-3">
            <li>
              <small>Availibility: 
                <span class="text-green" v-if="Product.current_stock > 0"> In Stock</span> 
                <span class="text-danger" v-else> Out Of Stock</span>
              </small>
            </li>
            <li class="font-w-4"><small>Categories :<span class="text-muted">{{ Product.category.parent_category.parent_category.name }},{{ Product.category.parent_category.name }},{{ Product.name }} </span></small>
            </li>
          </ul>
          <p class="mb-4 desc">{{ Product.description }}</p>
          <div class="d-sm-flex align-items-center mb-5">
            <div class="d-flex align-items-center mr-sm-4">
              <button class="btn-product btn-product-up"> <i class="las la-minus"></i>
              </button>
              <input class="form-product" type="number" name="form-product" value="1">
              <button class="btn-product btn-product-down"> <i class="las la-plus"></i>
              </button>
            </div>
            <select class="custom-select mt-3 mt-sm-0" id="inputGroupSelect02">
              <option selected="">Size</option>
              <option value="1">XS</option>
              <option value="2">S</option>
              <option value="3">M</option>
              <option value="3">L</option>
              <option value="3">XL</option>
              <option value="3">XXL</option>
            </select>
            <div class="d-flex text-center ml-sm-4 mt-3 mt-sm-0">
              <!-- <div class="form-check pl-0 mr-2" v-for="color in Product.color" :key="color">
                <input type="radio" class="form-check-input" id="color-filter1" name="Radios">
                <label class="form-check-label" for="color-filter1" :data-bg-color="'#'+color" :style="'background-color:'+color+';'"></label>
              </div> -->
              <!-- <div class="form-check pl-0 mr-2">
                <input type="radio" class="form-check-input" id="color-filter2" name="Radios" checked="">
                <label class="form-check-label" for="color-filter2" data-bg-color="#6d5b97" style="background-color: rgb(109, 91, 151);"></label>
              </div> -->
              <!-- <div class="form-check pl-0 mr-2">
                <input type="radio" class="form-check-input" id="color-filter3" name="Radios">
                <label class="form-check-label" for="color-filter3" data-bg-color="#88b04b" style="background-color: rgb(136, 176, 75);"></label>
              </div> -->
              <!-- <div class="form-check pl-0">
                <input type="radio" class="form-check-input" id="color-filter4" name="Radios">
                <label class="form-check-label" for="color-filter4" data-bg-color="#23a5a8" style="background-color: rgb(35, 165, 168);"></label>
              </div> -->
            </div>
          </div>
          <div class="d-sm-flex align-items-center mt-5">
            <button class="btn btn-primary btn-animated mr-sm-3 mb-3 mb-sm-0"><i class="las la-shopping-cart mr-2"></i>Add To Cart</button>
            <a class="btn btn-animated btn-dark" href="#"> <i class="lar la-heart mr-2 ic-1-2x"></i>Add To Wishlist
            </a>
          </div>
          
        </div>
      </div>
</template>

<script>
    export default {
      name: 'productdetailattribute',

      props:['Product','Product_variant','Product_color'],
      //computed:{
      // var parsedObj = JSON.parse(JSON.stringify(this.Product))
       // console.log(parsedObj)
       //colors:function(){
         //console.log(JSON.parse(JSON.stringify(this.$props.Product)))
       //}
        

<<<<<<< Updated upstream
      //},
      created(){
        console.log(this.Product_variant)
      },
      data(){
        return{
            colors:[],
            //product:props:['Product']
        }
      },
=======
      mounted(){
>>>>>>> Stashed changes

      methods:{
         

        getColors:function(){
          var app = this
///console.log(JSON.parse(JSON.stringify(this.$props.Product)))

          console.log(app.product)
          
        },
        getOptions:function(){
          var app = this
        }
      }
      
    }
</script>