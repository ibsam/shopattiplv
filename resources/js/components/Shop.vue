
<template>
<div>
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-5" v-for="item in list" :key="item.id">
            <div class="card product-card card--default rounded-0">
                <div class="sale-label">-15%</div>
                <a class="card-img-hover d-block" href="product-single.php"> 
                    <img class="card-img-back" :src="'/uploads/product_image/product_'+item.id+'_1.jpg'" alt="..." height="200" width="500"> 
                    <img class="card-img-front" :src="'/uploads/product_image/product_'+item.id+'_1.jpg'" alt="..." height="200" width="500"> 
                </a>
                <div class="card-icons">
                    <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                    <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                    <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                </div>
                <div class="card-info">
                    <div class="card-body">
                    <div class="product-title font-w-5">
                    <a v-bind:href="item.url_name+'_'+item.id+'.htm'" target="_blank"><p>{{item.name}}</p></a>

                        <!-- <a class="link-title" href="product-single.php">Unpaired Running Shoes</a>  -->
                        </div>
                    <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted"> <p>{{list.sale_price}}</p> </del> <p>{{list.sale_price}}</p></span>
                        <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                    </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                    <div class="product-link d-flex align-items-center justify-content-center">
                        <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
    </div>
        <infinite-loading @distance="1" @infinite="infiniteHandler"></infinite-loading>
</div> 
</template>

<script>
 export default {
    mounted() {
       // this.infiniteHandler()
        console.log('Component mounted.')
    },
    data() {
        return {
            list: [],
            page: 1,
        };
        },
        methods: {
        infiniteHandler($state) {
            let vm = this;

            this.$http.get('/shop-products?page='+this.page)
                .then(response => {
                    return response.json();
                    console.log(response);
                }).then(data => {
                     console.log(data.data);
                        if(data.data.length != 0){
                            $.each(data.data, function(key, value) {
                                vm.list.push(value);
                            // console.log(vm.list);
                        });
                        $state.loaded();
                     }
                     else{
                           $state.complete();
                     }
                   
                });

            this.page = this.page + 1;
        },
        },
    }
</script>



