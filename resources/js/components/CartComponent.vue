<template>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="table-responsive">
           <!-- {{ getAllCartDetails.length }} -->
            <table class="cart-table table" v-if="getAllCartDetails.length > 0">
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(Cart,index) in getAllCartDetails" :key="index">
                      <td>
                    <div class="cart-thumb media align-items-center">
                      <a :href="'/'+Cart.url_name+'_'+Cart.pid">
                        <img class="img-fluid" :src="'/uploads/product_image/product_'+Cart.pid+'_1_thumb.jpg'" alt="">
                      </a>
                      <div class="media-body ml-3">
                        <div class="product-title mb-2"><a class="link-title" :href="'/'+Cart.url_name+'_'+Cart.pid">{{Cart.name}}</a>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td> <span class="product-price text-muted">Rs.{{ Cart.price }}</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <button class="btn-product btn-product-up" v-on:click="qtyDec(index)"><i class="las la-minus"></i>
                      </button>
                      <!-- <span>{{ qty[index] }}</span> -->
                      <input class="form-product" type="number" name="form-product"  :value="getQty[index]">
                      <button class="btn-product btn-product-down" v-on:click="qtyInc(index)"> <i class="las la-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td> <span class="product-price text-dark font-w-6">Rs.{{ getPrice[index] }}</span>
                    <a class="close-link" style="cursor:pointer;" v-on:click="deletCart(Cart.id,index)"><i class="las la-times"></i></a>
                  </td>
                </tr>
             
              </tbody>
            </table>
            <div class="text-center" v-else >
            <p class="text-danger font-weight-bold">OOPS! YOUR CART IS EMPTY</p>
            </div>
          </div>
          
        </div>
        <div class="col-lg-4 pl-lg-5 mt-8 mt-lg-0">
          <div class="border rounded p-5 bg-light-4">
            <h4 class="text-black text-left mb-2 font-w-6">Cart Totals</h4>
            <div class="d-flex justify-content-between align-items-center border-bottom py-3"> <span class="text-muted">Subtotal</span>  <span class="text-dark">Rs.{{ getTotPrice.toFixed(2) }}</span> 
            </div>
            <div class="d-flex justify-content-between align-items-center border-bottom py-3"> <span class="text-muted">Tax</span>  <span class="text-dark">Rs.{{ Tax.toFixed(2) }}</span> 
            </div>
            <div class="d-flex justify-content-between align-items-center pt-3 mb-5"> <span class="text-dark h5">Total</span>  <span class="text-dark font-w-6 h5">Rs.{{ getTotal.toFixed(2) }}</span> 
            </div> <a class="btn btn-primary btn-animated btn-block" href="/checkout.htm">Proceed To Checkout</a>
            <a class="btn btn-dark btn-animated mt-3 btn-block" href="/">Continue Shopping</a>
          </div>
        </div>
      </div>
      <div class="d-md-flex align-items-end justify-content-between py-5 px-5 mt-5 bg-light-4">
            <!-- <div>
              <label class="text-black h4" for="coupon">Coupon</label>
              <p>Enter your coupon code if you have one.</p>
              <div class="row form-row">
                <div class="col">
                  <input class="form-control" id="coupon" placeholder="Coupon Code" type="text">
                </div>
                <div class="col col-auto">
                  <button class="btn btn-dark btn-animated">Apply Coupon</button>
                </div>
              </div>
            </div>
            <p class="text-success font-weight-bold">{{ getResponse }}</p> -->
            <button class="btn btn-primary btn-animated mt-3 mt-md-0" @click="updateCart()">Update Cart</button>
     </div>
    </div>
</template>

<script>
// import func from '../../../vue-temp/vue-editor-bridge';
// Vue.config.devtools = false;
// Vue.config.productionTip = false;
//let Cartid = '';
//import HeaderCart from '../components/HeaderCart.vue';
export default {
    name: 'shopping-cart',
    data(){
        return{
            CartDetail:[],
            CartId:'',
            qty:[],
            price:[],
            stock:[],
            stock_backup:[],
            TotPrice:0.0,
            Total:0.0,
            Tax:6.00,
            disabled:true,
            response:'',
            xyz:[]

        }
    },
    mounted(){ 
        console.log('aaaaa')     
       //this.$store.dispatch("getCart")
    },
    computed:{
      getAllCartDetails:{
         get(){
            return this.$store.getters.getCartFormGetters
         },
         set(newValue){
           return newValue
         }
      },
      getQty:{
        //console.log(this.$store.getters.getQtyFromGetters)
        get(){
            return this.$store.getters.getQtyFromGetters
        },
        set(newValue){
          return newValue
        }
      },
      getPrice:{
        get(){
          return this.$store.getters.getPriceFromGetters
        },
        set(newValue){
          return newValue
        }       
      },
      getTotPrice:{
        get(){
          return this.$store.getters.getTotPriceFromGetters

        },
        set(newValue){
          return newValue
        }  
      },
      getTotal:{
        get(){
          return this.$store.getters.getTotalFromGetters
        },
        set(newValue){
          return newValue
        }  
        
      },
      getResponse:{
        get(){
          return this.$store.getters.getResponseFromGetters
        },
        set(newValue){
          return newValue
        }
      }
    },
    methods:{
        qtyInc:function(index){
          var app = this
          //console.log(index)
         //app.Tax += 1
            app.$store.dispatch("qtyInc",index)
            app.getQty = app.$store.getters.getQtyFromGetters  
        },
        qtyDec:function(index){
          var app = this
          app.$store.dispatch("qtyDec",index)
          app.getQty = app.$store.getters.getQtyFromGetters  
          //console.log(app.qty[index])
        },
        updateCart:function(){
          var app = this
          app.$store.dispatch("updateCart")
          app.getAllCartDetails = this.$store.getters.getCartFormGetters
          app.getQty = app.$store.getters.getQtyFromGetters
          app.getPrice = app.$store.getters.getPriceFromGetters
          app.TotPrice = app.$store.getters.getTotPriceFromGetters
          app.Total = app.$store.getters.getTotalFromGetters        
        },
        deletCart:function(id,index){
          var app = this
          console.log(id)
          app.$store.dispatch("deleteCart",id,index)
          app.getAllCartDetails = this.$store.getters.getCartFormGetters
          app.getQty = app.$store.getters.getQtyFromGetters
          app.getPrice = app.$store.getters.getPriceFromGetters
          app.TotPrice = app.$store.getters.getTotPriceFromGetters
          app.Total = app.$store.getters.getTotalFromGetters  
                      
        }

     }
}
</script>