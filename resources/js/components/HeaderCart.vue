<template>

  <div>
       <div  class="dropdown cart_dropdown"> <a class="d-flex align-items-center cart-d" href="#"> <span class="px-2 py-1 rounded"      data-cart-items="2"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </span>
        <div class="ml-2 d-none d-md-block cart-details"> <span class="text-white"><span class="label">Cart -</span> {{TotalPrice}}</span> </div>
            </a>
            <div class="cart_box dropdown-menu dropdown-menu-right">
                <ul class="cart_list">
                    <li v-for="(Cart,index) in CartDetail" :key="Cart.id"> <a href="#" class="item_remove"><i class="ion-ios-close-empty"></i></a> <a href="#"><img src='images/product-thumb/p3.jpg' alt="cart_thumb1">{{Cart.name}}</a> <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>{{price[index]}}</span> </li>
                </ul>
            <div class="cart_footer">
                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span >{{TotalPrice}}</p>
                <p class="cart_buttons"><a href="shoping-cart.php" class="btn btn-secondary view-cart ml-2 mr-2">View Cart</a>
                <a href="checkout.php" class="btn btn-yellow-dark ml-2 mr-2 checkout">Checkout</a></p>
            </div>
        </div>
    </div>
  </div>
</template>
<script>
export default {
    name:'headercart',
    props: ['abc'],
     data(){
        return{
            CartDetail:[],
            CartId:'',
            qty:[],
            price:[],
            TotalPrice:0.0,
            Total:0.0,

        }
    },
    mounted(){
        //var app = this
        console.log(this.abc);
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
                if(app.CartId != null){
                    axios.get('/api/getcart/'+app.CartId)
                        .then(function(response){
                            app.CartDetail = response.data.CartDetail
                            app.CartDetail.forEach(function(value,index){
                                app.qty.push(value.qty)
                                var price  = value.price * value.qty
                                app.price.push(price)

                                app.TotalPrice += app.price[index]

                            })
                            //console.log(response)
                        })
                        .catch(function(error){
                            console.log(error)
                        })
                }

                //console.log(id)
            })
            .catch(function(error){
                console.log(error)
            })
            //return id
        },

    }

}
</script>
