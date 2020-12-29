export default {

	state: {
        Product:{},
        Product_variants:{},
        Product_color:{},

	},

	getters: {

        getProdFormGetters(state){ //take parameter state

          return state.Product
        },
        getProdVarFormGetters(state){ //take parameter state

            return state.Product_variants
        },
        getProdColFormGetters(state){ //take parameter state

            return state.Product_color
        },


	},

	actions: {
        getProductDetail:function(context){
            var app = this
            var url = window.location.href.split('/');
            var main_url = url[3].split('.');
            var param =  main_url[0].split('_');
            var id = param[1];
            console.log("here")
            axios.get('/api/get_product/'+id)
                .then(function(response){
                    context.commit('prodDetail',response.data.Product,response.data.Product_Variants,response.data.Product_Color)

                })
                .catch(function(error){
                    console.log(error);
                });

        },

	},

	mutations: {
       prodDetail(state,Product,Product_variants,Product_color) {

            state.Product = Product
            state.Product_variants = Product_variants
            state.Product_color = Product_color

          return state.Product
       },


	}
}
