import Vue from "vue";
import App from "./App.vue";
import Search from "./Search.vue";
// import Mobilemenu from "./Mobilemenu.vue";
// import Cart from "./Cart.vue";
// import Menus from "./Menus.vue";
// import Products from "./Products.vue";
// import Register from "./Register.vue";
// import Profile from "./Profile.vue";
// import Cartmobile from "./Cartmobile.vue";
// import Paymentform from "./Paymentform.vue";
// import Rating from "./Rating.vue";
// import Subscribe from "./Subscribe.vue";
// import Questionsearch from "./Questionsearch.vue";
// import Likedislike from "./Likedislike.vue";
// import Likedislikeblog from "./Likedislikeblog.vue";
// import Basalpercent from "./Basalpercent.vue";
// import Faq from "./Faq.vue";
import Footercomponent from "./Footercomponent.vue";
import Headercomponent from "./Headercomponent.vue";
// import Faqsubquestion from "./Faqsubquestion.vue";
// import Listingwebinar from "./Listingwebinar.vue";
// import Slideshowwebinar from "./Slideshowwebinar.vue";
// import Webinarwidget from "./Webinarwidget.vue";
// import Webinareventdate from "./Webinareventdate.vue";
// import Webinareventformdate from "./Webinareventformdate.vue";
// import Webinareventdatelist from "./Webinareventdatelist.vue";
// import Webinareventdatesvg from "./Webinareventdatesvg.vue";
// import VueAnimateNumber from "vue-animate-number";
// Vue.use(VueAnimateNumber);

export const cartBus = new Vue();
export const baseurl = '/vital-aire';

new Vue({
  el: "#vapp",
  components: {
    // VueAnimateNumber,
    // Slideshowwebinar,
    Faq,
    Faqsubquestion,
    App,
    Search,
    Cart,
    Menus,
    Products,
    Register,
    Profile,
    Cartmobile,
    Mobilemenu,
    Paymentform,
    Rating,
    Subscribe,
    Questionsearch,
    Likedislike,
    Likedislikeblog,
    Basalpercent,
    Footercomponent,
    Headercomponent,
    Listingwebinar
  },
});
