<template>
     <div > 
                <h5 class="mt-3 mb-3">Shipping & Billing</h5>
                <div class=" py-1">
                
                     <i class="fas fa-map-marker-alt text-pink"></i> 
                        <span class="text-dark" id="billing_name">{{first_name}}  <span id="billing_last">{{last_name}} </span></span>
                          <div class="row d-flex justify-content-between align-items-center">
                            
                          <div class="ml-5" id="billing_address">{{address1}}</div>
                            <a type="button" class="text-pink" data-toggle="modal" data-target="#parentModal">
                              Edit
                            </a>


                            </div>
                          
                        
                        
                </div>
                <div class=" py-3">
               <i class="fas fa-envelope text-pink"></i><span class="ml-1" id="billing_email">{{email}}</span>  
                </div>
                 <div class=" py-2">
                  <i class="fas fa-mobile-alt text-pink"></i><span class="ml-1" id="billing_phone">{{phone_no}}</span> 
                    </div>
            </div>
</template>
<script>
// Vue.component('editaddressonorder ', EditAddress);

import editaddressonorder from './models/EditAddress'
import test from './models/test'
export default {
  props:['first_name','last_name','address1','phone_no','email'],
  components:{
    editaddressonorder,
    test
  },

  mounted(){
    //console.log(this.first_name)
  }
}
</script>