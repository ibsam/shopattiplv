<template>
    <!-- Modal content -->

    <div class=" modal w-100" id="myModal" :style="'display:' + display">
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
                        <form method="post" action="/api/customer-login">
                            <div class="messages"></div>
                            <div class="form-group">
                                <input
                                    id="form_name"
                                    type="text"
                                    name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="User name"
                                    value=""
                                    required=""
                                    data-error="Username is required."
                                />
                                <div class="help-block with-errors"></div>

                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                            <div class="form-group">
                                <input
                                    id="form_password"
                                    type="password"
                                    name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Password"
                                    required=""
                                    data-error="password is required."
                                />
                                <div class="help-block with-errors"></div>

                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
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
                                <input type="hidden" name="product_id" :value="id" />
                                <input type="hidden" name="variation" :value="variation" />
                                <input type="hidden" name="price" :value="price" />
                                <input type="hidden" name="stock" :value="stock" />
                                <input type="hidden" name="qty" :value="qty" />
                                 <input type="hidden" name="api_login" value="1" />
                            <button
                                type="submit"
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
                                <form action="/api/customer-register" method="post">
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
                                                            class="form-control"
                                                            placeholder="First name"
                                                            required
                                                            data-error="Firstname is required."
                                                        />
                                                        <div
                                                            class="help-block with-errors"
                                                        ></div>

                                                        <span
                                                            class="invalid-feedback"
                                                            role="alert"
                                                        >
                                                            <strong>{{
                                                                $message
                                                            }}</strong>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input
                                                            id="form_lastname"
                                                            type="text"
                                                            name="last_name"
                                                            class="form-control"
                                                            placeholder="Last name"
                                                            required
                                                            data-error="Lastname is required."
                                                        />
                                                        <div
                                                            class="help-block with-errors"
                                                        ></div>

                                                        <span
                                                            class="invalid-feedback"
                                                            role="alert"
                                                        >
                                                            <strong>{{
                                                                $message
                                                            }}</strong>
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
                                                            class="form-control"
                                                            placeholder="Email"
                                                            required
                                                            data-error="Valid email is required."
                                                        />
                                                        <div
                                                            class="help-block with-errors"
                                                        ></div>

                                                        <span
                                                            class="invalid-feedback"
                                                            role="alert"
                                                        >
                                                            <strong>{{
                                                                $message
                                                            }}</strong>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input
                                                            id="form_phone"
                                                            type="tel"
                                                            name="phone"
                                                            class="form-control"
                                                            placeholder="Phone"
                                                            required
                                                            data-error="Phone is required"
                                                        />
                                                        <div
                                                            class="help-block with-errors"
                                                        ></div>

                                                        <span
                                                            class="invalid-feedback"
                                                            role="alert"
                                                        >
                                                            <strong>{{
                                                                $message
                                                            }}</strong>
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
                                                            class="form-control "
                                                            name="password"
                                                            required
                                                            autocomplete="new-password"
                                                        />
                                                        <div
                                                            class="help-block with-errors"
                                                        ></div>

                                                        <span
                                                            class="invalid-feedback"
                                                            role="alert"
                                                        >
                                                            <strong>{{
                                                                $message
                                                            }}</strong>
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
                                                            required
                                                            autocomplete="new-password"
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
                                               <input type="hidden" name="_token"  :value="csrf"/>
                                                        <input type="hidden" name="product_id" :value="id" />
                                                        <input type="hidden" name="variation" :value="variation" />
                                                        <input type="hidden" name="price" :value="price" />
                                                        <input type="hidden" name="stock" :value="stock" />
                                                        <input type="hidden" name="qty" :value="qty" />
                                                        <input type="hidden" name="api_login" value="1" />
                                            <div class="row">
                                                <div class="col-md-12">
                                                        
                                                    <button
                                                        type="submit"
                                                        class="btn btn-primary"
                                                    >
                                                        Create Account
                                                    </button>
                                                    <span class="mt-4 d-block"
                                                        >Have An Account ?
                                                        <a
                                                            href="/customer_login"
                                                            >Sign In!</a
                                                        ></span
                                                    >
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
export default {
    props: ["display","Product","variation","price","qty","stock"],
    data() {
        return {
            signInDisplay: "block",
            signUpDisplay: "none",
            csrf:document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        };
    },
    computed:{
        // variation:function(){
        //     return this.Product.variation
        // },
        // price:function(){
        //     return this.Product.price
        // },
        // qty:function(){
        //     return this.Product.qty
        // },
        // stock:function(){
        //     return this.Product.stock
        // },
        id:function(){
            return this.Product.id
        }

    },

    methods: {
        openModel(id) {
            console.log(id);
            var app = this;
            if (id == "m2") {
                app.signInDisplay = "none";
                app.signUpDisplay = "block";
            } else {
                app.signInDisplay = "block";
                app.signUpDisplay = "none";
            }
        },
        close() {
            this.display = "none";
        }
    }
};
</script>
