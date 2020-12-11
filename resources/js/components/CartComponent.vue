<template>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="table-responsive">
            <table class="cart-table table">
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(Cart,index) in CartDetail" :key="index">
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
                  <td> <span class="product-price text-muted">Rs.{{ Cart.price.toFixed(2) }}</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <button class="btn-product btn-product-up" v-on:click="qtyDec(index)"><i class="las la-minus"></i>
                      </button>
                      <!-- <span>{{ qty[index] }}</span> -->
                      <input class="form-product" type="number" name="form-product" :value="qty[index]" >
                      <button class="btn-product btn-product-down" v-on:click="qtyInc(index)"> <i class="las la-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td> <span class="product-price text-dark font-w-6">Rs.{{ price[index].toFixed(2) }}</span>
                    <a class="close-link" style="cursor:pointer;" v-on:click="deletCart(Cart.id)"><i class="las la-times"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          
        </div>
        <div class="col-lg-4 pl-lg-5 mt-8 mt-lg-0">
          <div class="border rounded p-5 bg-light-4">
            <h4 class="text-black text-left mb-2 font-w-6">Cart Totals</h4>
            <div class="d-flex justify-content-between align-items-center border-bottom py-3"> <span class="text-muted">Subtotal</span>  <span class="text-dark">Rs.{{ TotPrice.toFixed(2) }}</span> 
            </div>
            <div class="d-flex justify-content-between align-items-center border-bottom py-3"> <span class="text-muted">Tax</span>  <span class="text-dark">Rs.{{ Tax.toFixed(2) }}</span> 
            </div>
            <div class="d-flex justify-content-between align-items-center pt-3 mb-5"> <span class="text-dark h5">Total</span>  <span class="text-dark font-w-6 h5">Rs.{{ Total.toFixed(2) }}</span> 
            </div> <a class="btn btn-primary btn-animated btn-block" href="/">Proceed To Checkout</a>
            <a class="btn btn-dark btn-animated mt-3 btn-block" href="#">Continue Shopping</a>
          </div>
        </div>
      </div>
      <div class="d-md-flex align-items-end justify-content-between py-5 px-5 mt-5 bg-light-4">
            <div>
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
            <p class="text-success font-weight-bold">{{ response }}</p>
            <button class="btn btn-primary btn-animated mt-3 mt-md-0" @click="updateCart()">Update Cart</button>
     </div>
    </div>
</template>

<script>
// Vue.config.devtools = false;
// Vue.config.productionTip = false;
//let Cartid = '';
export default {
    // name: 'test'
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
            response:''

        }
    },
    beforeMount(){ 
        //var app = this      
        this.getCart()
        //console.log(app.CartId)
        ///app.getCart()
    },
    methods:{
        getCart:function(){
            var app = this
            //let id = 'xxx'
            axios.get('/api/getCookie')
            .then(function(response){
                //app.CartId = response.data.Cookie
                //console.log(app.CartId)
                //console.log(response)
                app.CartId = response.data.Cookie 
                axios.get('/api/getcart/'+app.CartId)
                .then(function(response){
                    app.CartDetail = response.data.CartDetail
                    app.CartDetail.forEach(function(value,index){
                        app.qty.push(value.qty)
                        app.stock.push(value.stock)
                        //console.log(value.price*value.qty)
                        var price = value.price * value.qty
                        app.price.push(price) 

                        app.TotPrice += app.price[index]
                    })
                    app.Total = app.TotPrice + app.Tax
                    //console.log(response)
                })
                .catch(function(error){
                    console.log(error)
                })
                //console.log(id)             
            })
            .catch(function(error){
                console.log(error)
            })
            
            //return id
        },
        qtyInc:function(index){
          var app = this
         //console.log(app.stock[index])
         //app.Tax += 1
          if(app.stock[index] > app.qty[index]){
             //console.log(app.qty[index])
              app.qty.splice(index, 1, app.qty[index]+1)
              app.price.splice(index, 1, app.CartDetail[index].price*app.qty[index])
             //app.qty[index] =  app.qty[index]+1
             //vm.$forceUpdate();
             app.TotPrice = 0
            app.price.forEach(function(value){
              app.TotPrice += value
            })
            app.Total = app.TotPrice +app.Tax
          }
          
         
        },
        qtyDec:function(index){
          var app = this
          //console.log(app.qty[index])
          if(app.qty[index] > 0){
              app.qty.splice(index, 1, app.qty[index]-1)
              app.price.splice(index, 1, app.CartDetail[index].price*app.qty[index])
              app.TotPrice = 0
            app.price.forEach(function(value){
              app.TotPrice += value
            })
            app.Total = app.TotPrice +app.Tax
          }

             //console.log(app.qty[index])

        },
        updateCart:function(){
          var app = this
          app.CartDetail.forEach(function(value,index){

            var formData = new FormData()
            formData.append('id',value.id)
            formData.append('qty',app.qty[index])

            axios.post('/api/update_cart',formData)
            .then(function(response){
              //console.log(response)
              if(response.status = 200){
                app.response = 'UPDATED SUCCESSFULLY'
              }
            })
            .catch(function(error){
              console.log(error)
            })
            app.response = 'CART UPDATED SUCCESSFULLY'
          })
        },
        deletCart:function(){
          axios.get()
        }

    }
}
</script>