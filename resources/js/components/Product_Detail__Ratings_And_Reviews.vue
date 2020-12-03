<template>
    <div role="tabpanel" class="tab-pane fade" id="tab3-3">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="bg-light-4 text-center p-5">
                    <h4>Based on 3 Reviews</h4>
                    <h5>Average</h5>
                    <h4>4.0</h4>
                    <h6>(03 Reviews)</h6>
                  </div>
                </div>
                <div class="col-md-6 mt-3 mt-lg-0">
                  <div class="rating-list">
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap mr-3">5 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ml-3">90%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap mr-3">4 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ml-3">60%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap mr-3">3 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ml-3">40%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap mr-3">2 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ml-3">20%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap mr-3">1 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ml-3">10%</span>
                    </div>
                  </div>
                </div>
              </div>
              
              
              <div class="comment-area mt-5">
                    <div class="content_title">
                        <h4>Comments</h4>
                    </div>
                    <ul class="list_none comment_list">
                        <li class="comment_info" v-for="Review in Reviews" :key="Review.id">
                            <div class="d-flex">
                                <div class="comment_user">
                                    <img src="  images/user.png  " alt="user2">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex">
                                        <div class="meta_data">
                                            <h6><a href="#">{{ Review.name }}</a></h6>
                                            <div class="comment-time">{{ Review.month }} {{ Review.day }}, {{ Review.year }}</div>
                                        </div>
                                        <!-- <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="las la-arrow-left"></i> Reply</a>
                                        </div> -->
                                    </div>
                                    <p>{{ Review.comments }}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
          <div class="mt-8 bg-light-4 rounded p-5">
                <div class="section-title mb-3">
                  <h4>Add a review</h4>
                </div>
                <form id="review-form" class="row" v-on:submit.prevent="insertReviews()">
                  <div class="messages"></div>
                  <div class="form-group col-sm-6">
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Your Name" required="" data-error="Name is required." v-model="name">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group col-sm-6">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Your Email Address" required="" data-error="Valid email is required." v-model="email">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group clearfix col-12">
                    <select class="custom-select form-control" v-model="rating">
                      <option value="">Rating -- Select</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                  <!-- <input type="hidden" :value="ProductDetail.id" v-model="pid"/> -->
                  <div class="form-group col-12">
                    <textarea id="form_message" name="message" class="form-control" placeholder="Write Your Review" rows="4" required="" data-error="Please,leave us a review." v-model="comment"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary btn-animated mt-1">Post Review</button>
                  </div>
                </form>
              </div>
          <div></div>
        </div>
              
              
              
            </div>
</template>


<script>
export default {
    name:'Product_Detail__Ratings_And_Reviews',
    props:['ProductDetail','ProductVariant','ProductColor'],

    data(){
     // var app = this
      return{
        Reviews:[],
        ReviewForm: new FormData(),
        email:'',
        name:'',
        rating:'',
        comment:'',
        //pid: Vue.util.extend({}, this.ProductDetail.id)
      }
    },
    computed:{

    },
   created(){
     var url = window.location.href.split('/');
     var main_url = url[3].split('.');
     var param =  main_url[0].split('_');
     var id = param[1];
     //alert(this.pid)
     //console.log(this.pid)
     this.getReviews(id)
    },
    methods:{
        insertReviews:function(){
          var app = this
         // e.preventDefault()
         app.pid = app.ProductDetail.id
         var today = new Date();
          app.ReviewForm.append('name',app.name)
          app.ReviewForm.append('email',app.email)
          app.ReviewForm.append('stars',app.rating)
          app.ReviewForm.append('comments',app.comment)
          app.ReviewForm.append('product_id',app.ProductDetail.id)
          app.ReviewForm.append('product_id',app.ProductDetail.id)
          app.ReviewForm.append('day',today.getDate())
          app.ReviewForm.append('month',today.toLocaleString("default", {month: "long"}))
          app.ReviewForm.append('year',today.getFullYear())
          app.ReviewForm.append('status',1)
          axios.post('/api/add_review',app.ReviewForm)
          .then(function(response){
              app.Reviews = response.data.ProductReviews
          }).
          catch(function(error){
            console.log(error)
          }) 
          //console.log(data)
        },
        getReviews:function(id){
          var app = this
            axios.get('/api/get_reviews/'+id)
            .then(function(response){
                app.Reviews = response.data.ProductReviews
            })
            .catch(function(error){
              console.log(error);
            })
           // return app.Reviews
        }

        

    }
}
</script>