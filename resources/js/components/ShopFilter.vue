
<template>
<div>
    <div class="row">
              <div class="row mb-4  w-100 ">
              <div class="col mw-100 mh-100 ">
                  <div class="card" >
                      <article class="filter-group">
                          <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside1" data-abc="true" aria-expanded="false" class="collapsed"> <i class="icon-control fa fa-chevron-down"></i>
                                  <h6 class="title text-nowrap">Categories </h6>
                              </a> </header>
                          <div class="filter-content collapse" id="collapse_aside1" style="">
                              <div class="card-body">
                                  <ul class="list-menu">
                                      <li><a href="#" data-abc="true">Electronics </a></li>
                                      <li><a href="#" data-abc="true">Watches </a></li>
                                      <li><a href="#" data-abc="true">Laptops </a></li>
                                      <li><a href="#" data-abc="true">Clothes </a></li>
                                      <li><a href="#" data-abc="true">Accessories </a></li>
                                  </ul>
                              </div>
                          </div>
                      </article>
                      <article class="filter-group">
                          <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside2" data-abc="true" aria-expanded="false" class="collapsed"> <i class="icon-control fa fa-chevron-down"></i>
                                  <h6 class="title">Price </h6>
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
                          <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside3" data-abc="true" aria-expanded="false" class="collapsed"> <i class="icon-control fa fa-chevron-down"></i>
                                  <h6 class="title">Size </h6>
                              </a> </header>
                          <div class="filter-content collapse" id="collapse_aside3" style="">
                              <div class="card-body"> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> XS </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> SM </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> LG </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> XXL </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> XXXL </span> </label> </div>
                          </div>
                      </article>
                      <article class="filter-group">
                          <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside4" data-abc="true" class="collapsed" aria-expanded="false"> <i class="icon-control fa fa-chevron-down"></i>
                                  <h6 class="title">Rating </h6>
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
</template>

<script>
    export default {

        data() {
            return {
              categories: {},
            }
        },
        methods: {
            getCategories(){
                axios.get('/get-category')
                     .then((response)=>{
                         console.log(response.data[0].child_category[0].child_category);
                       this.categories = response.data
                     })
            }
        },
        created() {
            this.getCategories()
        }
    }
</script>



