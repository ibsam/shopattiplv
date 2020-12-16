<template>
    <div class="row mx-lg-n5 displayCol ">
        <div class="a col-md-5 col-lg-3 mr-0 ml-0">
            <div>
                <div class="row ">
                    <div class="row mb-4  w-100 ">
                        <div class="col mw-100 mh-100 ">
                            <div class="card  w-100"  >

                                <article v-for="(category,index) in categories" :key="index" class="filter-group">
                                    <header class="card-header">
                                        <a href="#" data-toggle="collapse" :data-target="'#collapse_aside'+index"
                                           data-abc="true" aria-expanded="false" class="collapsed text-custom-blue">
                                            <i class="icon-control fa fa-chevron-down"></i>
                                            <h6 class="title small text-wrap text-custom-blue font-weight-bold">
                                                {{category.name}}
                                            </h6>
                                        </a> </header>
                                    <div class="filter-content collapse" :id="'collapse_aside'+index" style="">
                                        <div class="card-body">

                                            <ul  class="list-menu">
                                                <li class="d-flex mt-3  border border-top-0
                                            border-left-0 border-right-0
                                            small  "
                                                    v-for="(child_items,index) in category.child_category"
                                                    :key="index">

                                                    <input  class="mt-1 " :value="child_items.id" id="child_items.id" type="checkbox" v-model="catId" @change="changeType">
                                                    <span class="ml-2 mb-1">{{child_items.name}}</span>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </article>


                                <article class="filter-group">
                                    <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside2" data-abc="true" aria-expanded="false" class="collapsed text-custom-blue small  font-weight-bold"> <i class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="title text-custom-blue small  font-weight-bold">Price </h6>
                                    </a> </header>
                                    <div class="filter-content collapse" id="collapse_aside2" style="">
                                        <div class="card-body"> <input type="range" class="custom-range" min="0" max="100" name="">
                                            <div class="form-row">
                                                <div class="form-group col-md-6"> <label>Min</label> <input class="form-control" placeholder="$0" type="number"> </div>
                                                <div class="form-group text-right col-md-6"> <label>Max</label> <input class="form-control" placeholder="$1,0000" type="number"> </div>
                                            </div> <a href="#" class="highlight-button btn btn-medium button xs-margin-bottom-five" data-abc="true">Apply Now</a>
                                        </div>
                                    </div>
                                </article>
                                <article class="filter-group">
                                    <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside3" data-abc="true" aria-expanded="false" class="collapsed text-custom-blue small  font-weight-bold"> <i class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="title text-custom-blue small  font-weight-bold">Size </h6>
                                    </a> </header>
                                    <div class="filter-content collapse" id="collapse_aside3" style="">
                                        <div class="card-body"> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> XS </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> SM </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> LG </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> XXL </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> XXXL </span> </label> </div>
                                    </div>
                                </article>
                                <article class="filter-group">
                                    <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside4" data-abc="true" class="collapsed text-custom-blue " aria-expanded="false"> <i class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="title text-custom-blue small  font-weight-bold">Rating </h6>
                                    </a> </header>
                                    <div class="filter-content collapse" id="collapse_aside4" style="">
                                        <div class="card-body"> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                            <div class="custom-control-label">Better </div>
                                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                            <div class="custom-control-label">Best </div>
                                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                            <div class="custom-control-label">Good</div>
                                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                            <div class="custom-control-label">Not good</div>
                                        </label> </div>
                                    </div>
                                </article>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" col-md-7 col-lg-9 pl-0 ml-0">

            <div>
                <div class="row">
                    <div class="b col-lg-3 col-md-6 col-lg-2 mb-5" v-for="item in list" :key="item.id">
                        <div class="card product-card card--default rounded-0">
                            <div class="sale-label">-15%</div>
                            <a class="card-img-hover d-block" v-bind:href="'/'+item.url_name+'_'+item.id+'.htm'">
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
                                        <a v-bind:href="'/'+item.url_name+'_'+item.id+'.htm'" target="_blank"><p>{{item.name}}</p></a>

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
                <infinite-loading
                    :identifier="infiniteId"
                    spinner="waveDots"
                    @infinite="infiniteHandler"
                    force-use-infinite-wrapper=".el-table__body-wrapper">
                    <div slot="spinner"><img src="http://127.0.0.1:8000/images/logo3.png"></div>

                    <div slot="no-more"><h2>For More Categories Check Out From Categories</h2></div>
                </infinite-loading>
            </div>
        </div>
    </div>


</template>

<script>
import axios from 'axios';
export default {

    data() {
        return {
            page: 1,
            list: [],
            catId: [],
            // para: [],
            infiniteId: +new Date(),
            categories: {},
            search :'',
            category :'',
            api : '/shop-products',
        };
    },
    methods: {
        infiniteHandler($state) {
            //get category from url
            var url = window.location.href.split('/');
            var main_url = url[3].split('.');
            var url_par =  main_url[0].split('_');
            if(url_par == "category"){
                var check_url = url[4].split('.');
                this.category =  check_url[0].split('_');
            }
            console.log(this.category);

            // get url query string
            const urlParams = new URLSearchParams(window.location.search);
            this.search = urlParams.get('search');
            //search api
            if(this.search != null && this.catId.length ==0 ){
                this.api = '/search-shop-products';
            }
            //filter api
            else if(this.catId.length !=0){
                this.api = '/filter-shop-products';
            }
            //url category api
            else if(this.category != ""  && this.catId.length ==0 ){
                this.api = '/category-shop-products';
            }
            //initial api
            else{
                this.api = '/shop-products';
            }
            // console.log(this.catId);
            // api call
            axios.get(this.api, {
                params: {
                    page: this.page,
                    Id: this.catId,
                    search :this.search,
                    category :this.category,
                },
            }).then(({ data }) => {
                // console.log(data);
                if (data.data.length) {
                    this.page += 1;
                    this.list.push(...data.data);
                    $state.loaded();
                } else {
                    $state.complete();
                }
            });
            // api call end
        },
        changeType() {
            this.page = 1;
            this.list = [];
            // this.$refs.infiniteLoading.$emit('$InfiniteLoading:reset');
            this.infiniteId += 1;
            // reload if query string is not null
            const urlParams = new URLSearchParams(window.location.search);
            this.search = urlParams.get('search');
            // console.log(this.category)
            if(this.search != null && this.catId.length ==0  || this.category != "" && this.catId.length ==0){
                document.location.href = "/shop";
            }
            // reload if query string is not null end
        },
        getCategories(){
            axios.get('/get-all-category')
                .then((response)=>{
                    //  console.log(response.data[0].child_category[0].child_category);
                    this.categories = response.data
                })
        },
    },
    created() {
        this.getCategories()
    }
};
</script>
