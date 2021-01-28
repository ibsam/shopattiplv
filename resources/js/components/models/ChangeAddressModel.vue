// <template>
//     <div>
//         <div :style="'display:' + displayChooseAddress">
//             <div class="container">
//                 <div class="row bg-light-1 pt-2 pb-2 mb-5">
//                     <div class="col-2">Full name</div>
//                     <div class="col-6">Address</div>
//                     <div class="col-2">Phone number</div>
//                 </div>
//                 <div
//                     class="row mb-5"
//                     v-for="Customer in CustomerDetail"
//                     :key="Customer.id"
//                 >
//                     <div class="col-2 border-right">
//                         {{ Customer.first_name + " " + Customer.last_name }}
//                     </div>
//                     <div class="col-6 border-right">
//                         {{ Customer.address1 }}
//                     </div>
//                     <div class="col-2 border-right">{{ Customer.phone }}</div>
//                     <div
//                         class="col-2 d-flex justify-content-start align-items-center"
//                     >
//                         <input
//                             type="radio"
//                             class="selectAddress"
//                             v-model="isbiling"
//                             :value="Customer.id"
//                             name="billing-address"
//                         />
//                         <!-- <input type="radio" class="selectAddress" v-model="isbiling" :value="Customer.id"  name="billing-address" v-else /> -->
//                     </div>
//                 </div>
//                 <div class="d-flex justify-content-end">
//                     <button
//                         type="botton"
//                         class="btn bg-pink-btn ml-1"
//                         @click="displayOnAddNewAddressModal"
//                     >
//                         Add New Address
//                     </button>
//                     <button
//                         type="botton"
//                         class="btn bg-pink-btn ml-1"
//                         @click="updateBillingAddress()"
//                     >
//                         Save
//                     </button>
//                 </div>
//             </div>
//         </div>

//         <div :style="'display:' + displayAddNewAddress">
//             <form @submit.prevent="false">
//                 <div class="container-fluid">
//                     <div class="row">
//                         <div class="col-6">
//                             <div class="mb-3">
//                                 <label for="name" class="form-label"
//                                     >First Name</label
//                                 >
//                                 <input
//                                     type="text"
//                                     class="form-control"
//                                     id="name"
//                                     placeholder="Enter Your first name"
//                                     v-model="first_name"
//                                 />
//                             </div>

//                             <div class="mb-3">
//                                 <label for="name" class="form-label"
//                                     >Last Name</label
//                                 >
//                                 <input
//                                     type="text"
//                                     class="form-control"
//                                     id="name"
//                                     placeholder="Enter Your last name"
//                                     v-model="last_name"
//                                 />
//                             </div>

//                             <div class="mb-3">
//                                 <label for="phone" class="form-label"
//                                     >Phone No</label
//                                 >
//                                 <input
//                                     type="text"
//                                     class="form-control"
//                                     id="phone"
//                                     placeholder="Enter Your phone no"
//                                     v-model="phone_no"
//                                 />
//                             </div>

//                             <div class="mb-3">
//                                 <label for="phone" class="form-label"
//                                     >Email</label
//                                 >
//                                 <input
//                                     type="email"
//                                     class="form-control"
//                                     id="phone"
//                                     placeholder="Enter Your Email"
//                                     v-model="email"
//                                 />
//                             </div>
//                         </div>

//                         <div class="col-6">
//                             <label for="province">State</label>
//                             <select
//                                 class="form-control mb-3 "
//                                 id="province"
//                                 aria-label="Default select example"
//                                 v-model="state"
//                             >
//                                 <option value="1">Azad Kashmir</option>
//                                 <option value="2">Balochistan</option>
//                                 <option
//                                     value="Federaly Adminstrated Tribal Areas"
//                                     >Federaly Adminstrated Tribal Areas</option
//                                 >
//                                 <option value="Gilgil Baltistan"
//                                     >Gilgil Baltistan</option
//                                 >
//                                 <option value="Islamabad">Islamabad</option>
//                                 <option value="khyber Pakhtunkhwa"
//                                     >khyber Pakhtunkhwa</option
//                                 >
//                                 <option value="Punjab">Punjab</option>
//                                 <option value="Sindh">Sindh</option>
//                             </select>

//                             <div class="mb-3 mt-3">
//                                 <label for="city" class="form-label"
//                                     >Country</label
//                                 >
//                                 <input
//                                     type="text"
//                                     class="form-control"
//                                     id="city"
//                                     placeholder="Enter Your City"
//                                     v-model="country"
//                                 />
//                             </div>
//                             <div class="mb-3 mt-3">
//                                 <label for="city" class="form-label"
//                                     >City</label
//                                 >
//                                 <input
//                                     type="text"
//                                     class="form-control"
//                                     id="city"
//                                     placeholder="Enter Your City"
//                                     v-model="city"
//                                 />
//                             </div>

//                             <div class="mb-3 mt-3">
//                                 <label for="address" class="form-label"
//                                     >Address</label
//                                 >
//                                 <input
//                                     type="text"
//                                     class="form-control"
//                                     id="address"
//                                     placeholder="Enter Your Address"
//                                     v-model="address"
//                                 />
//                             </div>
//                             <div class="mb-3 mt-3">
//                                 <label for="zipcode" class="form-label"
//                                     >Zip Code</label
//                                 >
//                                 <input
//                                     type="text"
//                                     class="form-control"
//                                     id="zipcode"
//                                     placeholder="Enter Your zip code"
//                                     v-model="zip_code"
//                                 />
//                             </div>
//                             <div class="mb-3 mt-3">
//                                 <label for="companyname" class="form-label"
//                                     >Company Name</label
//                                 >
//                                 <input
//                                     type="text"
//                                     class="form-control"
//                                     id="companyname"
//                                     placeholder="Enter Your company name"
//                                     v-model="company_name"
//                                 />
//                             </div>
//                             <div class="d-flex justify-content-end">
//                                 <button
//                                     type="button"
//                                     class="btn bg-light-1 mr-1"
//                                     @click="backToChangeAddressPage"
//                                 >
//                                     Back
//                                 </button>
//                                 <button
//                                     type="button"
//                                     class="btn bg-pink-btn"
//                                     @click="addNewAddressDetail()"
//                                 >
//                                     Save changes
//                                 </button>
//                             </div>
//                         </div>
//                     </div>
//                 </div>
//             </form>
//         </div>
//     </div>
// </template>
// <script>
// export default {
//     props: ["id"],
//     data() {
//         return {
//             displayChooseAddress: "block",
//             displayAddNewAddress: "none",
//             CustomerDetail: [],
//             isbiling: 0,
//             registerForm: new FormData(),
//             address: "",
//             city: "",
//             country: "",
//             state: "",
//             phone_no: "",
//             last_name: "",
//             first_name: "",
//             email: "",
//             zip_code: "",
//             company_name: ""
//         };
//     },
//     mounted() {
//         this.getCustomerDetail();
//         //this.updateBillingAddress()
//     },
//     methods: {
//         displayOnAddNewAddressModal() {
//             this.displayChooseAddress = "none";
//             this.displayAddNewAddress = "block";
//         },
//         backToChangeAddressPage() {
//             this.displayChooseAddress = "block";
//             this.displayAddNewAddress = "none";
//         },
//         getCustomerDetail() {
//             var app = this;
//             axios
//                 .get("/api/get-customer-detail/" + app.id)
//                 .then(function(response) {
//                     app.CustomerDetail = response.data.CustomerDetail;
//                     //console.log(app.CustomerDetail)
//                     app.CustomerDetail.forEach(function(value) {
//                         if (value.is_billing == 1) {
//                             app.isbiling = value.id;
//                         }
//                     });
//                 })
//                 .catch(function() {
//                     console.log(error);
//                 });
//         },
//         updateBillingAddress() {
//             var app = this;
//             axios
//                 .post(
//                     "/api/update-Billing-Address/" + app.isbiling + "_" + app.id
//                 )
//                 .then(function(response) {
//                     if (response.data.status) {
//                         location.reload();
//                     }
//                 })
//                 .catch(function(error) {
//                     console.log(error);
//                 });
//         },
//         addNewAddressDetail() {
//             var app = this;
//             console.log(app.state);
//             app.registerForm.append("first_name", app.first_name);
//             app.registerForm.append("last_name", app.last_name);
//             app.registerForm.append("phone_no", app.phone_no);
//             app.registerForm.append("email", app.email);
//             app.registerForm.append("state", app.state);
//             app.registerForm.append("country", app.country);
//             app.registerForm.append("city", app.city);
//             app.registerForm.append("address", app.address);
//             app.registerForm.append("zip_code", app.zip_code);
//             app.registerForm.append("customer_id", app.id);
//             app.registerForm.append("company_name", app.company_name);

//             axios
//                 .post("/api/add-new-billing-address", app.registerForm)
//                 .then(function(response) {
//                     location.reload();
//                 })
//                 .catch(function(error) {
//                     console.log(error);
//                 });
//         }
//     }
// };
// </script>
