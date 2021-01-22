<template>
    <!-- Modal content -->

    <div class="modal sighnInModel w-100" id="myModal" :style="'display:' + display">
        <div class="row justify-content-center ">
            <div class="col-12 col-lg-6 col-md-8 col-sm-11">
                <div class="shadow p-6 login bg-white ">
                    <div class="close" @click="close()">&times;</div>

                    <div class="row mt-5">
                        <div class="col-6">
                            <button
                                class="btn btn-blue btn-block"
                                type="button"
                                @click="openModel('m1')"
                            >
                                Sign In
                            </button>
                        </div>
                        <div class="col-6">
                            <button
                                class="btn btn-blue btn-block"
                                type="button"
                                @click="openModel('m2')"
                            >
                                Sign Up
                            </button>
                        </div>
                    </div>

                    <div
                        id="m1" 
                        class="modal-content"
                        :style="'display:' + signInDisplay"
                    > 
                        <div class="store-name">ShopAtTip</div>
                        <h4 class="text-left mb-3 font-w-5">
                            Customer Login
                        </h4>
                        <form method="post" action="/api/customer-login" v-on:submit.prevent="apiLogin()" id="loginForm">
                            <!-- <div class="alert alert-danger" v-if="errors">{{ errors }}</div> -->
                            <div class="form-group">
                                <input
                                    id="form_name"
                                    type="email"
                                    name="email"
                                    :class="'form-control '+ is_invalid "
                                    placeholder="User name"
                                    value=""
                                    required
                                    data-error="Username is required."
                                    v-model="login_email"
                                />
                                <strong v-if="errors" class="text-danger">{{errors}}</strong>
                                <!-- <div class="help-block with-errors"></div> -->
<!-- 
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{errors}}</strong>
                                </span> -->
                            </div>
                            <div class="form-group">
                                <input
                                    id="form_password"
                                    type="password"
                                    name="password"
                                    :class="'form-control '+ is_invalid "
                                    placeholder="Password"
                                    required
                                    data-error="Password is required."
                                    v-model="login_password"
                                />
                                <strong v-if="errors" class="text-danger">{{errors}}</strong>
                                <!-- <div class="help-block with-errors"></div> -->

                                <!-- <span class="alert alert-danger" role="alert">
                                    <strong>{{errors}}</strong>
                                </span> -->
                            </div>
                            <div class="form-group mt-4 mb-5">
                                <div
                                    class="remember-checkbox d-flex align-items-center justify-content-between"
                                >
                                    <div class="checkbox">
                                        <input
                                            type="checkbox"
                                            id="check2"
                                            name="check2"
                                        />
                                        <label for="check2">Remember me</label>
                                    </div>
                                    <a href="/customer/forget_password"
                                        >Forgot Password?</a
                                    >
                                    
                                </div>
                                
                            </div>
                            <input type="hidden" name="_token" :value="csrf"/>
                                <input type="hidden" name="product_id" :value="id"/>
                                <input type="hidden" name="variation" :value="variation" />
                                <input type="hidden" name="price" :value="price" />
                                <input type="hidden" name="stock" :value="stock" />
                                <input type="hidden" name="qty" :value="qty" />
                                <input type="hidden" name="api_login" value="1" />
                            <button
                                type="type"
                                class="btn btn-primary btn-block"
                            >
                                Login Now
                            </button>
                        </form>
                        <div class="another_login"><span> or</span></div>
                        <ul class="login-btn list_none text-center">
                            <!-- <li disabled="true"><a href="#" class="btn facebook-btn"><i class="ion-social-facebook"></i>Facebook</a></li> -->
                            <li>
                                <form method="post" action="/customer/google">
                                    
                                    <input type="hidden" name="_token" :value="csrf"/>
                                    <input type="hidden" name="product_id" :value="id" />
                                    <input type="hidden" name="variation" :value="variation" />
                                    <input type="hidden" name="price" :value="price" />
                                    <input type="hidden" name="stock" :value="stock" />
                                    <input type="hidden" name="qty" :value="qty" />
                                    <input type="hidden" name="api_login" value="1" />
                                    <button
                                    class="btn google-btn"
                                    ><i class="ion-social-googleplus"></i
                                    >Google</button>
                                </form>
  
                            </li>
                        </ul>
                        <div
                            class="d-flex align-items-center text-center justify-content-center mt-4"
                        >
                            <span class="text-muted mr-1"
                                >Don't have an account?</span
                            >
                            <a href="/customer_register">Sign Up</a>
                        </div>
                    </div>
                    <div
                        id="m2"
                        class="modal-content"
                        :style="'display:' + signUpDisplay"
                    >
                        <div class="store-name">ShopAtTip</div>
                        <div class="row justify-content-center text-center">
                            <div class=" p-6 bg-white">
                                <div class=" p-0">
                                    <div class="mb-6">
                                        <h2 class="font-w-6">
                                            Create New Customer Account
                                        </h2>
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. </p> -->
                                    </div>
                                </div>
                                <form action="/api/customer-register" method="post" v-on:submit.prevent="apiSignUp()">
                                    <div class=" ml-auto mr-auto p-0">
                                        <div class="register-form text-center">
                                            <!-- <form id="contact-form" method="post" action="http://themesground.com/flipmarto/demo/html/php/contact.php"> -->
                                            <div class="messages"></div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input
                                                            id="form_name"
                                                            type="text"
                                                            name="first_name"
                                                            :class="'form-control '+ is_invalid"
                                                            placeholder="First name"
                                                            required
                                                            data-error="Firstname is required."
                                                            v-model="first_name"
                                                            v-if="ValidationError.first_name"
                                                        />
                                                        <input
                                                            id="form_name"
                                                            type="text"
                                                            name="first_name"
                                                            :class="'form-control'"
                                                            placeholder="First name"
                                                            required
                                                            data-error="Firstname is required."
                                                            v-model="first_name"
                                                            v-else
                                                        />
                                                        <div
                                                            class="help-block with-errors"
                                                        ></div>

                                                        <span
                                                            class="text-danger"
                                                            role="alert" v-if="ValidationError.first_name"
                                                        >
                                                        {{ValidationError.first_name[0]}}
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input
                                                            id="form_lastname"
                                                            type="text"
                                                            name="last_name"
                                                            :class="'form-control '+ is_invalid"
                                                            placeholder="Last name"
                                                            required
                                                            data-error="Lastname is required."
                                                            v-model="last_name"
                                                            v-if="ValidationError.last_name"
                                                        />
                                                        <input
                                                            id="form_lastname"
                                                            type="text"
                                                            name="last_name"
                                                            class="form-control"
                                                            placeholder="Last name"
                                                            required
                                                            data-error="Lastname is required."
                                                            v-model="last_name"
                                                            v-else
                                                        />
                                                        <div
                                                            class="help-block with-errors"
                                                        ></div>

                                                        <span
                                                            class="text-danger"
                                                            role="alert" v-if="ValidationError.last_name"
                                                        >
                                                        {{ValidationError.last_name[0]}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input
                                                            id="form_email"
                                                            type="email"
                                                            name="email"
                                                            :class="'form-control '+ is_invalid"
                                                            placeholder="Email"
                                                            required
                                                            data-error="Valid email is required."
                                                            v-model="email"
                                                            v-if="ValidationError.email"
                                                        />
                                                        <input
                                                            id="form_email"
                                                            type="email"
                                                            name="email"
                                                            :class="'form-control'"
                                                            placeholder="Email"
                                                            required
                                                            data-error="Valid email is required."
                                                            v-model="email"
                                                            v-else
                                                        />
                                                        <div
                                                            class="help-block with-errors"
                                                        ></div>

                                                        <span
                                                            class="text-danger"
                                                            role="alert" v-if="ValidationError.email"
                                                        >
                                                        {{ValidationError.email[0]}}
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input
                                                            id="form_phone"
                                                            type="tel"
                                                            name="phone"
                                                            :class="'form-control '+ is_invalid"
                                                            placeholder="Phone"
                                                            required
                                                            data-error="Phone is required"
                                                            v-model="phone"
                                                            v-if="ValidationError.phone"
                                                        />
                                                        <input
                                                            id="form_phone"
                                                            type="tel"
                                                            name="phone"
                                                            :class="'form-control '"
                                                            placeholder="Phone"
                                                            required
                                                            data-error="Phone is required"
                                                            v-model="phone"
                                                            v-else
                                                        />
                                                        <div
                                                            class="help-block with-errors"
                                                        ></div>

                                                        <span
                                                            class="text-danger"
                                                            role="alert" v-if="ValidationError.phone"
                                                         >
                                                        {{ValidationError.phone[0]}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input
                                                            id="password"
                                                            type="password"
                                                            :class="'form-control '+is_invalid "
                                                            placeholder="Password"
                                                            name="password"
                                                            required
                                                            autocomplete="new-password"
                                                            v-model="password"
                                                            v-if="ValidationError.password"
                                                        />
                                                        <input
                                                            id="password"
                                                            type="password"
                                                            :class="'form-control '+is_invalid "
                                                            placeholder="Password"
                                                            name="password"
                                                            required
                                                            autocomplete="new-password"
                                                            v-model="password"
                                                            v-else
                                                        />
                                                        <div
                                                            class="help-block with-errors"
                                                        ></div>

                                                        <span
                                                            class="text-danger"
                                                            role="alert" v-if="ValidationError.password"
                                                        >
                                                          {{ValidationError.password[0]}}  
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input
                                                            id="password-confirm"
                                                            type="password"
                                                            class="form-control"
                                                            name="password_confirmation"
                                                            placeholder="Confirm Password"
                                                            required
                                                            autocomplete="new-password"
                                                            v-model="password_confirmation"
                                                        />
                                                        <div
                                                            class="help-block with-errors"
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-5">
                                                <div class="col-md-12">
                                                    <div
                                                        class="remember-checkbox clearfix mb-5"
                                                    >
                                                        <div
                                                            class="custom-control custom-checkbox"
                                                        >
                                                            <input
                                                                type="checkbox"
                                                                class="custom-control-input"
                                                                id="customCheck1"
                                                                required
                                                            />
                                                            <label
                                                                class="custom-control-label"
                                                                for="customCheck1"
                                                                >I agree to the
                                                                term of use and
                                                                privacy
                                                                policy</label
                                                            >
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <button type="button" class="btn btn-primary" @click="apiSignUp()">Create Account</button>
                                                </div>
                                            </div>
              
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Axios from 'axios';
export default {
    props: ["display","Product","variation","price","qty","stock"],
    data() {
        return {
            signInDisplay: "block",
            signUpDisplay: "none",
            csrf:document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            LoginForm: new FormData(document.forms[0]),
            RegisterForm: new FormData(),
            login_email:'',
            login_password:'',
            errors: '',
            is_invalid :'',
            email:'',
            password:'',
            first_name:'',
            last_name:'',
            phone:'',
            password_confirmation:'',
            ValidationError:{}

        };
    },
    computed:{

        id:function(){
            return this.Product.id
        },

         getModelDisplay:{
           get(){
               return this.$store.getters.getModelDisplayFromGetters
           },
           set(newValue){
             return newValue
           }
         }

    },

    methods: {
        openModel(id) {
            //console.log(id);
            var app = this;
            if (id == "m2") {
                app.signInDisplay = "none";
                app.signUpDisplay = "block";
                app.is_invalid = ''
            } else {
                app.signInDisplay = "block";
                app.signUpDisplay = "none";
                app.is_invalid = ''
            }
        },
        close() {

            this.$store.dispatch('closeModel');

            this.getModelDisplay = this.$store.getters.getModelDisplay;
        },
        apiLogin(){
            var app = this
            app.LoginForm.append('product_id',app.id)
            app.LoginForm.append('variation',app.variation)
            app.LoginForm.append('price',app.price)
            app.LoginForm.append('qty',app.qty)
            app.LoginForm.append('stock',app.stock)
            app.LoginForm.append('email',app.login_email)
            app.LoginForm.append('password',app.login_password)
       
            //console.log(app.LoginForm)
            axios.post('/api/customer-login',app.LoginForm)
            .then(function(response){
                if(!response.data.status){
                    app.errors = response.data.errors
                    app.is_invalid = 'is-invalid'
                }
                else{
                    window.location.href = '/checkout';
                }
            })
            .catch(function(error){
                console.log(error)
            })
            //axios.get()
        },
        apiSignUp(){
            var app = this
            app.RegisterForm.append('product_id',app.id)
            app.RegisterForm.append('variation',app.variation)
            app.RegisterForm.append('price',app.price)
            app.RegisterForm.append('qty',app.qty)
            app.RegisterForm.append('stock',app.stock)
            app.RegisterForm.append('email',app.email)
            app.RegisterForm.append('password',app.password)
            app.RegisterForm.append('first_name',app.first_name)
            app.RegisterForm.append('last_name',app.last_name)
            app.RegisterForm.append('phone',app.phone)
            app.RegisterForm.append('password_confirmation',app.password_confirmation)
            //console.log(app.LoginForm)
            axios.post('/api/customer-register',app.RegisterForm)
            .then(function(response){
                if(!response.data.status){
                    app.ValidationError = response.data.Validation
                    //console.log(app.ValidationError.email[0])
                    app.is_invalid = 'is-invalid'
                }
                else{
                    window.location.href = '/checkout';
                }
            })
            .catch(function(error){
                console.log(error)
            })
        }
    }
};
</script>
