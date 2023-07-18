<template>
  <div class="outside-padding">
    <div class="uk-grid-match" uk-grid>
      <div class="uk-width-auto uk-padding">
        <div class="uk-inline profilepicdiv">
          <img
            v-if="profileimg"
            v-bind:src="url+'/storage/'+profileimg"
            class="profilephoto"
            alt="Profile Photo"
          />

          <img
            v-if="!profileimg"
            v-bind:src="url+'/assets/png/frontend/profile-user.png'"
            class="profilephoto dummyimage"
            alt="Profile Photo"
          />

          <div
            class="uk-overlay uk-overlay-primary uk-position-bottom overlaystuff hidden uk-text-center"
          >
            <div class="upload-btn-wrapper">
              <input id="filename" type="file" name="filename" @change="onFileChange" required />
              <button class="custom-button">Upload Photo</button>
            </div>
          </div>
        </div>
      </div>
      <div class="uk-width-expand uk-padding">
        <div>
          <h2 class="roboto-slab-regular txt-blue" v-if="name">{{ name }}</h2>
          <h4 class="roboto-700 txt-blue">Pump Information</h4>
          <span>Seriennummer der Pumpe</span>
          <br />
          <input class="roboto-500 txt-blue inputstyle" value="8fs88gf8d8" readonly />
          <br />
          <br />
          <br />
          <span>Dexcom CGM</span>
          <br />
          <input class="roboto-500 txt-blue inputstyle" value="FAD58465486" />
          <br />
          <br />
          <br />
        </div>
      </div>
      <div class="uk-width-auto uk-padding">
        <div class="uk-text-center">
          <a class="txt-blue roboto-slab-regular atag" v-bind:href="url+'/orders'">
            Order
            History
          </a>
          <br />
          <hr class="darkhr" />
          <a class="txt-blue roboto-slab-regular atag" v-bind:href="url+'/header/Logout'">Logout</a>
        </div>
      </div>
    </div>
    <div>
      <ul uk-tab>
        <li>
          <a href="#" class="txt-blue">Address</a>
        </li>
        <li>
          <a href="#" class="txt-blue">Payment</a>
        </li>
      </ul>
      <ul class="uk-switcher uk-margin">
        <li>
          <div class="uk-grid-match" uk-grid>
            <div class="uk-width-auto@m">
              <ul
                class="uk-tab-left"
                uk-tab="connect: #component-tab-left; animation: uk-animation-fade"
              >
                <li>
                  <a href="#" class="txt-blue">Delivery</a>
                </li>
                <li>
                  <a href="#" class="txt-blue">Billing</a>
                </li>
              </ul>
            </div>
            <div class="uk-width-expand@m no-padding">
              <ul id="component-tab-left" class="uk-switcher">
                <li>
                  <div v-show="!addaddress">
                    <a
                      style="float: right; padding-left: 10px"
                      class="txts-blue"
                      uk-icon="icon: plus-circle"
                      @click="showAddAddress()"
                    ></a>
                    <div>
                      <div
                        class="uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-match"
                        uk-grid
                      >
                        <div v-for="dadd in deliveryaddress" :key="dadd">
                          <div class="uk-card uk-card-default uk-card-hover">
                            <div class="uk-card-header">
                              <div class="uk-grid-match" uk-grid>
                                <h3
                                  class="uk-card-title uk-margin-remove-bottom txt-blue roboto-slab-regular uk-width-expand"
                                >{{dadd.title}} {{dadd.firstname}} {{dadd.lastname}}</h3>
                                <a
                                  class="txts-blue"
                                  style="float: right; padding-left: 10px"
                                  uk-icon="icon: minus-circle"
                                  @click="deleteAddress(dadd.id, 'delivery')"
                                ></a>
                              </div>
                            </div>
                            <div class="uk-card-body txt-blue">
                              <p class="no-margin">{{dadd.contact}}</p>
                              <p class="no-margin">{{dadd.company_name}}</p>
                              <p class="no-margin">{{dadd.street}}</p>
                              <p class="no-margin">{{dadd.house_number}}</p>
                              <p class="no-margin">{{dadd.postcode}}</p>
                              <p class="no-margin">{{dadd.place}}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div v-show="addaddress">
                    <a
                      style="float: right; padding-left: 10px"
                      class="txts-blue"
                      uk-icon="icon: check"
                      @click="showAddAddress()"
                    ></a>
                    <div>
                      <form id="deliveryform" @submit="submitDelivery" action>
                        <div class="uk-child-width-1-3@m uk-child-width-1-2@s" uk-grid>
                          <div>
                            <label>Title*</label>
                            <br />
                            <select
                              name="title"
                              id="title"
                              class="uk-select selectstyle"
                              v-model="title"
                              required
                            >
                              <option value="Mr">MR</option>
                              <option value="Mrs">MRS</option>
                              <option value="Divorce">DIVR</option>
                            </select>
                            <br />
                            <br />
                            <label for="dname">First Name</label>
                            <br />
                            <input
                              class="inputform"
                              type="text"
                              id="dname"
                              required
                              v-model="dfirstname"
                            />
                            <br />
                            <br />
                            <label for="dcontact">Last Name</label>
                            <br />
                            <input
                              class="inputform"
                              type="text"
                              id="dlastname"
                              required
                              v-model="dlastname"
                            />
                          </div>
                          <div>
                            <label for="dcompany">Company</label>
                            <br />
                            <input
                              class="inputform"
                              type="text"
                              id="dcompany"
                              required
                              v-model="dcompany"
                            />
                            <br />
                            <br />
                            <label for="dstreet">Street</label>
                            <br />
                            <input
                              class="inputform"
                              type="text"
                              id="dstreet"
                              required
                              v-model="dstreet"
                            />
                            <br />
                            <br />
                            <label for="dhousenumber">House Number</label>
                            <br />
                            <input
                              class="inputform"
                              type="text"
                              id="dhousenumber"
                              required
                              v-model="dhousenumber"
                            />
                          </div>
                          <div>
                            <label for="dpostcode">Postcode</label>
                            <br />
                            <input
                              class="inputform"
                              type="text"
                              id="dpostcode"
                              required
                              v-model="dpostcode"
                            />
                            <br />
                            <br />
                            <label for="dplace">Place</label>
                            <br />
                            <input
                              class="inputform"
                              type="text"
                              id="dplace"
                              required
                              v-model="dplace"
                            />
                            <br />
                            <br />
                            <button class="custom-button">Submit</button>
                            <br />
                            <span id="successMessage" style="color:green;">{{successStatus}}</span>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </li>
                <li>
                  <div v-show="!addaddress">
                    <a
                      style="float: right; padding-left: 10px"
                      class="txts-blue"
                      uk-icon="icon: plus-circle"
                      @click="showAddAddress()"
                    ></a>
                    <div>
                      <div
                        class="uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-match"
                        uk-grid
                      >
                        <div v-for="badd in billingaddress" :key="badd">
                          <div class="uk-card uk-card-default uk-card-hover">
                            <!-- <div class="uk-card-header">
                      <div uk-grid>
                        <h3
                          class="uk-card-title uk-margin-remove-bottom txt-blue roboto-slab-regular uk-width-expand"
                        ></h3>
                        <a
                          class="txts-blue"
                          style="float: right; padding-left: 10px"
                          uk-icon="icon: minus-circle"
                          @click="deleteAddress()"
                        ></a>
                      </div>
                            </div>-->
                            <div class="uk-card-body txt-blue">
                              <a
                                class="txts-blue"
                                style="float: right; padding-left: 10px"
                                uk-icon="icon: minus-circle"
                                @click="deleteAddress(badd.id, 'billing')"
                              ></a>
                              <p class="no-margin">{{badd.company_name}}</p>
                              <p class="no-margin">{{badd.street}}</p>
                              <p class="no-margin">{{badd.house_number}}</p>
                              <p class="no-margin">{{badd.postcode}}</p>
                              <p class="no-margin">{{badd.place}}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div v-show="addaddress">
                    <a
                      style="float: right; padding-left: 10px"
                      class="txts-blue"
                      uk-icon="icon: check"
                      @click="showAddAddress()"
                    ></a>
                    <div>
                      <form id="billingform" @submit="submitBilling" action>
                        <div class="uk-child-width-1-3@m uk-child-width-1-2@s" uk-grid>
                          <div>
                            <!-- <label for="dcompany">Company</label>
                    <br />
                    <input class="inputform" type="text" id="bcompany" required v-model="bcompany" />
                            <br />-->
                            <label for="bstreet">Street</label>
                            <br />
                            <input
                              class="inputform"
                              type="text"
                              id="bstreet"
                              required
                              v-model="bstreet"
                            />
                            <br />
                            <br />
                            <label for="bhousenumber">House Number</label>
                            <br />
                            <input
                              class="inputform"
                              type="text"
                              id="bhousenumber"
                              required
                              v-model="bhousenumber"
                            />
                          </div>
                          <div>
                            <label for="bpostcode">Postcode</label>
                            <br />
                            <input
                              class="inputform"
                              type="text"
                              id="bpostcode"
                              required
                              v-model="bpostcode"
                            />
                            <br />
                            <br />
                            <label for="bplace">Place</label>
                            <br />
                            <input
                              class="inputform"
                              type="text"
                              id="bplace"
                              required
                              v-model="bplace"
                            />
                          </div>
                          <div>
                            <button class="custom-button">Submit</button>
                            <br />
                            <span id="successMessage" style="color:green;">{{successStatus}}</span>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li>
          <div class="uk-child-width-1-3@l uk-child-width-1-2@m uk-grid-match" uk-grid>
            <div>
              <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                <div class="uk-card-header">
                  <h6
                    class="uk-card-title uk-margin-remove-bottom txt-blue roboto-slab-regular"
                  >Cash register Prescription</h6>
                </div>
                <div class="uk-card-body txt-blue">
                  <div class="upload-btn-wrapper">
                    <input id="filename" type="file" name="filename" required />
                    <a class="custom-button">REZEPT HOCHLADEN</a>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                <div class="uk-card-header">
                  <h6
                    class="uk-card-title uk-margin-remove-bottom txt-blue roboto-slab-regular"
                  >Private Prescription</h6>
                </div>
                <div class="uk-card-body txt-blue">
                  <div class="upload-btn-wrapper">
                    <input id="filename" type="file" name="filename" required />
                    <a class="custom-button">REZEPT HOCHLADEN</a>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                <div class="uk-card-header">
                  <h6
                    class="uk-card-title uk-margin-remove-bottom txt-blue roboto-slab-regular"
                  >Private Bill</h6>
                </div>
                <div class="uk-card-body txt-blue">
                  <div class="upload-btn-wrapper">
                    <input id="filename" type="file" name="filename" required />
                    <a class="custom-button">REZEPT HOCHLADEN</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>


<script lang="ts">
import Vue from "vue";
import { Component, Prop } from "vue-property-decorator";
import axios from "axios";
import { baseurl } from "./main";

@Component
export default class Profile extends Vue {
  url = baseurl;
  name: string;
  billingaddress: any = [];
  deliveryaddress: any = [];
  addaddress: boolean = false;
  dfirstname: any;
  dlastname: any;
  dcompany: any;
  dstreet: any;
  dhousenumber: any;
  dpostcode: any;
  dplace: any;
  bstreet: any;
  bhousenumber: any;
  bpostcode: any;
  bplace: any;
  bcompany: any;
  successStatus: any;
  title: any;
  userdetails: any = [];
  profileimg: any = [];
  file: any;

  @Prop({ required: true }) readonly profiledetails: string;
  @Prop({ required: true }) readonly profileurl: string;
  @Prop({ required: true }) readonly storedeliveryurl: string;
  @Prop({ required: true }) readonly storebillingurl: string;
  @Prop({ required: true }) readonly deleteurl: string;
  @Prop({ required: true }) readonly storeprofileimgurl: string;

  created() {
    this.loadUserDetails();
    this.loadAddressDetails();
  }

  loadUserDetails() {
    axios.get(this.profiledetails).then(response => {
      this.userdetails = response.data.profile;
      this.name = this.userdetails.firstname + " " + this.userdetails.surname;
      this.profileimg = this.userdetails.profile_img;
    });
  }

  loadAddressDetails() {
    axios
      .get(this.profileurl)
      .then(response => {
        this.deliveryaddress = response.data.delivery_address;
        this.billingaddress = response.data.billing_address;
      })
      .catch(function(error) {});
  }

  showAddAddress() {
    this.addaddress = !this.addaddress;
    // console.log(this.addaddress);
  }

  submitDelivery(e) {
    // console.log(e);
    axios
      .post(this.storedeliveryurl, {
        title: this.title,
        lastname: this.dlastname,
        company: this.dcompany,
        street: this.dstreet,
        house_number: this.dhousenumber,
        postcode: this.dpostcode,
        place: this.dplace,
        firstname: this.dfirstname
      })
      .then(response => {
        console.log(response);
        if (response.data == "success") {
          this.successStatus = "Adresse erfolgreich hinzugefügt.";
          this.loadAddressDetails();
          e.target.reset();
        }
      })
      .catch(function(error) {});
    // e.preventDefault();
  }

  submitBilling(e) {
    // console.log(e);
    axios
      .post(this.storebillingurl, {
        // company: this.bcompany,
        street: this.bstreet,
        house_number: this.bhousenumber,
        postcode: this.bpostcode,
        place: this.bplace
      })
      .then(response => {
        if (response.data == "success") {
          this.successStatus = "Adresse erfolgreich hinzugefügt.";
          this.loadAddressDetails();
          e.target.reset();
        }
      })
      .catch(function(error) {});
    // e.preventDefault();
  }

  onFileChange(e) {
    this.file = e.target.files[0];

    let formData = new FormData();
    formData.append("file", this.file);

    const config = {
      headers: {
        "content-type": "multipart/form-data"
      }
    };

    axios
      .post(this.storeprofileimgurl, formData, config)
      .then(response => {
        this.loadUserDetails();
        e.target.reset();
      })
      .catch(function(error) {});
  }

  deleteAddress(addressid, type) {
    // console.log("Delete address clicked");
    axios
      .post(this.deleteurl, { id: addressid, type: type })
      .then(response => {
        // console.log(response);
      })
      .catch(function(error) {
        console.log(error);
      });
    this.loadAddressDetails();
  }
}
</script>



<style lang="css">
</style>