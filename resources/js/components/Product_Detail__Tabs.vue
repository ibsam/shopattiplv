<template>
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tab product-tab">
          <!-- Nav tabs -->
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist"> <a class="nav-item nav-link active ml-0" id="nav-tab1" data-toggle="tab" href="#tab3-1" role="tab" aria-selected="true">Description</a>
              <a class="nav-item nav-link" id="nav-tab2" data-toggle="tab" href="#tab3-2" role="tab" aria-selected="false">Specification</a>
              <a class="nav-item nav-link" id="nav-tab3" data-toggle="tab" href="#tab3-3" role="tab" aria-selected="false">Ratings and Reviews</a>
            </div>
          </nav>
          <!-- Tab panes -->
          <div class="tab-content pt-5 p-0">
              
            <product-detail-description :ProductDetail="ProductDetail" :ProductVariant="ProductVariant" :ProductColor="ProductColor"></product-detail-description>
            <product-detail-specification :ProductDetail="ProductDetail" :ProductVariant="ProductVariant" :ProductColor="ProductColor"></product-detail-specification>
            <product-detail-rating-review :ProductDetail="ProductDetail" :ProductVariant="ProductVariant" :ProductColor="ProductColor"></product-detail-rating-review>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import Product_Detail__Description from './Product_Detail__Description';
import Product_Detail__Spesification from './Product_Detail__Spesification';
import Product_Detail__Ratings_And_Reviews from './Product_Detail__Ratings_And_Reviews';
Vue.component('product-detail-description', Product_Detail__Description);
Vue.component('product-detail-specification', Product_Detail__Spesification);
Vue.component('product-detail-rating-review', Product_Detail__Ratings_And_Reviews);
export default {
    name:'productdetailtabs',
    // components: {
    //     //productdetaildescription,
    //     productdetailspecification,
    //     productdetailratingsandreviews,
    // },
    props:['ProductDetail','ProductVariant','ProductColor'],

    beforeMount(){
      //console.log(this.ProductDetail)
    }
}
</script>