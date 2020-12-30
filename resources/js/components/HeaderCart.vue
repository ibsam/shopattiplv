<template>

  <div>
       <div  class="dropdown cart_dropdown"> <a class="d-flex align-items-center cart-d" href="#"> <span class="px-2 py-1 rounded"      :data-cart-items="getQty.length"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </span>
        <div class="ml-2 d-none d-md-block cart-details"> <span class="text-white"><span class="label">Cart -</span> {{ getTotPrice }}</span> </div>
            </a>
            <div class="cart_box dropdown-menu dropdown-menu-right">
                <ul class="cart_list">
                    <li v-for="(Cart,index) in getAllCartDetails" :key="Cart.id">
                        <label style="cursor:pointer;font-size:20px" class="item_remove" @click="deleteCart(Cart.id,index)"><i class="ion-ios-close-empty"></i></label> <a :href="'/'+Cart.url_name+'_'+Cart.pid+'.htm'"><img :src="'/uploads/product_image/product_'+Cart.pid+'_1_thumb.jpg'" alt="cart_thumb1">{{Cart.name}}</a> <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">Rs</span></span>{{ getPrice[index] }}</span>
                    </li>
                </ul>
            <div class="cart_footer">
                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">Rs</span></span >{{getTotPrice}}</p>
                <p class="cart_buttons"><a href="/cart.htm" class="btn btn-secondary view-cart ml-2 mr-2">View Cart</a>
                <a href="/checkout" class="btn btn-yellow-dark ml-2 mr-2 checkout">Checkout</a></p>
            </div>
        </div>
    </div>
  </div>
</template>
<script>

export default {
    name:'headercart',
    props: ['data'],
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
        //console.log('aaa')
        this.$store.dispatch("getCart")
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
        deleteCart:function(id,index){
          var app = this
          console.log(id)
          app.$store.dispatch("deleteCart",id,index)
          app.getAllCartDetails = this.$store.getters.getCartFormGetters
          app.getQty = app.$store.getters.getQtyFromGetters
          app.getPrice = app.$store.getters.getPriceFromGetters
          app.TotPrice = app.$store.getters.getTotPriceFromGetters
          app.Total = app.$store.getters.getTotalFromGetters

        }


    },


}
</script>
