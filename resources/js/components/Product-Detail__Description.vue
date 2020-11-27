<template>
   <div role="tabpanel" class="tab-pane fade show active" id="tab3-1">
            <div class="row align-items-center">
                
                <div class="col-md-12">
                  {{Product.description}} 
                </div>
            </div>
     </div>
</template>

<script>
export default {
    name:'productdetaildescription',
    props:['Product'],

    created(){
      console.log(this.Product)
    }
}
</script>