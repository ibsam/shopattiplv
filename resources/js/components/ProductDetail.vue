<template>
    
   <div class="row">
        <productdetailimage></productdetailimage>
        <productdetailattribute></productdetailattribute>
    </div>
 
</template>

<script>
import productdetailimage from './ProductDetailImage'
import productdetailattribute from './ProductDetailAttributes'
export default {
  name: 'productdetail',
  components: {
      productdetailimage,
      productdetailattribute
  }
}

</script>