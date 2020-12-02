<template>
    <div class="row mx-lg-n5 ">
            <div class="col-md-2 mr-0 ml-0">
             <shopfilter></shopfilter>
            </div>
      
            <div class="col-md-10 pl-0 ml-0">
      
                <shopproductshowcase></shopproductshowcase>
            </div>
    </div>

    
</template>

<script>
import shopfilter from './ShopFilter';
import shopproductshowcase from './ShopProductShowCase';

export default {
    
    components:{
        shopfilter,
        shopproductshowcase
    },
    
}
</script>