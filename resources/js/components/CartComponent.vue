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
                      <button class="btn-product btn-product-up" @click="qtyDec(index)"> <i class="las la-minus"></i>
                      </button>
                      <input class="form-product" type="number" name="form-product" v-model="qty[index]">
                      <button class="btn-product btn-product-down" @click="qtyInc(index)"> <i class="las la-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td> <span class="product-price text-dark font-w-6">Rs.{{ price[index].toFixed(2) }}</span>
                    <a :href="'/'+Cart.url_name+'_'+Cart.pid" class="close-link"><i class="las la-times"></i></a>
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
            <button class="btn btn-primary btn-animated mt-3 mt-md-0">Update Cart</button>
     </div>
    </div>
</template>

<script>
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
            disabled:true

        }
    },
    mounted(){ 
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
            console.log(index)
            app.qty[index] +=1
            console.log(app.qty[index])
            app.price[index] * app.qty[index]
            var temp = 0
            if(app.stock[index] > app.stock_backup[index]){
              if(app.qty[index] > app.stock[index]){
                temp = app.stock[index]
                app.stock[index] = app.stock_backup[index]
                app.stock_backup[index] = temp 
                app.disabled = true
              }
            }
          },
          qtyDec:function(index){
            var app = this
            app.qty[index]-=1
             app.price[index] * app.qty[index]
            var temp = 0
            if(app.stock[index] < app.stock_backup[index]){
              //temp = app.stock
                temp = app.stock[index]
                app.stock[index] = app.stock_backup[index]
                app.stock_backup[index] = temp 
                app.disabled = true
              //app.stock_backup = temp 
            }
          }

    }
}
</script>