export default {

	state: {

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
        name:'ib',
        // product single component
        Product:{},
        Product_variants:{},
        Product_color:{},
       // price:0,
      //  stock:0,
        variation:'',
        Fabric:'',
        Size:'',
        color_index:'',

	},

	getters: {

       getCartFormGetters(state){ //take parameter state

          return state.CartDetail
       },
       getPriceFromGetters(state){

            return state.price
       },
       getQtyFromGetters(state){
           return state.qty
       },
       getTotPriceFromGetters(state){
           return state.TotPrice
       },
       getTotalFromGetters(state){
           return state.Total
       },
       getResponseFromGetters(state){
        return state.response
       },
        // product single component
        getProdFormGetters(state){ //take parameter state

            return state.Product
        },
        getProdVarFormGetters(state){ //take parameter state

            return state.Product_variants
        },
        getProdColFormGetters(state){ //take parameter state

            return state.Product_color
        },
        getPriceFromGetters(state){
            return state.price
        },
        getStockFromGetters(state){
            return state.stock
        },
        getProdVariationFromGetters(state){
            return state.variation
        },
        getSizeFromGetters(state){
            return state.Size
        },
        getFabriceFromGetters(state){
            return state.Fabric
        },
        getColorFromGetters(state){
            return state.color_index
        }

	},

	actions: {
        getCart(context){
            //var app = this
            //let id = 'xxx'

            axios.get('/api/getCookie')
            .then(function(response){
                //app.CartId =

                axios.get('/api/getcart/'+response.data.Cookie)
                .then(function(response){
                   // console.log(response)
                    context.commit("cartDetail",response.data.CartDetail)
                })
                .catch(function(error){
                    console.log(error)
                })
                // console.log(id)
            })
            .catch(function(error){
                console.log(error)
            })

            //return id
        },
        qtyInc(context,index){
            //console.log(context)
            context.commit('qtyIncreament',index)
        },
        qtyDec(context,index){
            context.commit('qtyDecreament',index)
        },
        updateCart(context){
            context.commit('updateCart')
        },
        deleteCart(context,id,index){
            context.commit('deleteCart',id,index)
        },
        // product single component
        getProductDetail:function(context){
           
            var url = window.location.href.split('/');
            var main_url = url[3].split('.');
            var param =  main_url[0].split('_');
            var id = param[1];
            // console.log("here")
            axios.get('/api/get_product/'+id)
                .then(function(response){
                    // console.log(response.data.Product_Variants)
                    var prodData =[response.data.Product,response.data.Product_Variants,response.data.Product_Color];
                    context.commit('prodDetail',prodData)

                })
                .catch(function(error){
                    console.log(error);
                });

        },
        getProductByVariations:function(context){

            
            var app = this
            context.commit('getVariation')
            // console.log(app.variation)
            if(this.Product.is_static == 1){
                axios.get('/api/get_product_variation/'+this.getters.getProdVariationFromGetters+'_'+this.getters.getProdFormGetters.id)
                    .then(function(response){
                        //console.log(response)
                        context.commit('prodPrice',response.data.ProductSpecs.price) 
                        context.commit('prodStock',response.data.ProductSpecs.stock)
                    // console.log(app.price)

                    })
                    .catch(function(error){
                        console.log(error)
                    })
            }else{

                context.commit('prodPrice',app.state.Product.sale_price) 
                context.commit('prodStock',app.state.Product.current_stock)
            }

        },
	},

	mutations: {
       cartDetail(state,data) {
           //console.log(state)
           //console.log(data)
           data.forEach(function(value,index){
            // console.log(this.name)

                state.qty.push(value.qty)
                state.stock.push(value.stock)
                // console.log(value.price*value.qty)
                var price = value.price * value.qty
                state.price.push(price)
                state.TotPrice += state.price[index]


            })
            //console.log(state.qty)
            state.Total = state.TotPrice + state.Tax

          return state.CartDetail = data
       },
       qtyIncreament(state,index){

        if(state.stock[index] > state.qty[index]){
            //console.log(state.qty[index])
            console.log(index)
             state.qty.splice(index, 1, state.qty[index]+1)
             state.price.splice(index, 1, state.CartDetail[index].price*state.qty[index])
            //state.qty[index] =  state.qty[index]+1
            //vm.$forceUpdate();
            state.TotPrice = 0
           state.price.forEach(function(value){
             state.TotPrice += value
           })
           state.Total = state.TotPrice +state.Tax
         }
       },
       qtyDecreament(state,index){
            if(state.qty[index] > 0){
                state.qty.splice(index, 1, state.qty[index]-1)
                state.price.splice(index, 1, state.CartDetail[index].price*state.qty[index])
                state.TotPrice = 0
            state.price.forEach(function(value){
                state.TotPrice += value
            })
            state.Total = state.TotPrice +state.Tax
            }
       },
       updateCart(state){
           console.log(state.CartDetail)

            state.CartDetail.forEach(function(value,index){
                // console.log(this.name)
                var formData = new FormData()
                formData.append('id',value.id)
                formData.append('qty',state.qty[index])

                axios.post('/api/update_cart',formData)
                .then(function(response){
                    console.log(response)
                })
                .catch(function(error){
                    console.log(error)
                })
                state.qty = []
                state.price = [] 
                state.TotPrice = 0
                state.qty.push(value.qty)
                state.stock.push(value.stock)
                    // console.log(value.price*value.qty)
                var price = value.price * value.qty
                state.price.push(price)
                state.TotPrice += state.price[index]


            })
                //console.log(state.qty)
            state.Total = state.TotPrice + state.Tax

            return state.response = 'UPDATE SUCCESSFULLY'
       },
       deleteCart(state,id,index){
            axios.get('/api/delete_cart/'+id)
            .then(function(response){
                //app.CartDetail = response.data.CartDetail
                console.log(app.CartDetail)
                if(response.status == 200){
                    state.CartDetail.splice(index,1)

                if(state.CartDetail.length > 0){
                    state.qty = []
                    state.price = []
                    state.TotPrice = 0.0
                    state.Total = 0.0
                    state.CartDetail.forEach(function(value,index){
                    state.qty.push(value.qty)
                    state.stock.push(value.stock)
                    //console.log(value.price*value.qty)
                    var price = value.price * value.qty
                    state.price.push(price)

                    state.TotPrice += state.price[index]
                    state.Total = state.TotPrice + state.Tax
                    })
                // console.log(state.$el)

                    //state.$forceUpdate
                }
                else{
                    document.location.href='/'
                    state.qty = []
                    state.price = []
                    state.TotPrice = 0.0 
                    state.Total = 0.0
                }
                }

            })
            .catch(function(error){
                console.log(error)
            })
       },
        // product single component
       prodDetail(state,prodData) {
  //console.log(prodData);
            state.Product = prodData[0]
            state.Product_variants = prodData[1]
            state.Product_color = prodData[2]

            return state.Product
       },
        prodPrice(state,price){
            return state.price =price
        },
        prodStock(state,stock){
            return state.stock = stock
        },
        getVariation(state){
            console.log(state.Product_variants)
            state.Fabric = state.Product_variants[1].values[0]
            state.Size = state.Product_variants[0].values[0]
            state.color_index = state.Product_Color[0].name
            state.variation = state.color_index.toLowerCase() + '-' + state.Size.toLowerCase() + '-' + state.Fabric.toLowerCase()

            return state.variation
        }
	}
}
