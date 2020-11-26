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
            <productdetaildescription :Product="Product"/>
            <productdetailspecification :Product="Product"/>
            <productdetailratingsandreviews :Product="Product"/>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import productdetaildescription from './Product-Detail__Description';
import productdetailspecification from './Product-Detail__Spesification';
import productdetailratingsandreviews from './Product-Detail__Ratings-And-Reviews';
export default {
    name:'productdetailtabs',
    components: {
        productdetaildescription,
        productdetailspecification,
        productdetailratingsandreviews,
    },
    props:['Product'],
}
</script>