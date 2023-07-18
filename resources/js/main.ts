import Vue from "vue";
import App from "./component/App.vue";
import Search from "./component/Search.vue";
import Mobilemenu from "./component/Mobilemenu.vue";
import Cart from "./component/Cart.vue";
import Menus from "./component/Menus.vue";
import Products from "./component/Products.vue";
import Register from "./component/Register.vue";
import Profile from "./component/Profile.vue";
import Cartmobile from "./component/Cartmobile.vue";
import Paymentform from "./component/Paymentform.vue";
import Rating from "./component/Rating.vue";
import Subscribe from "./component/Subscribe.vue";
import Questionsearch from "./component/Questionsearch.vue";
import Likedislike from "./component/Likedislike.vue";
import Likedislikeblog from "./component/Likedislikeblog.vue";
import Basalpercent from "./component/Basalpercent.vue";
import Faq from "./component/Faq.vue";
import Footercomponent from "./component/Footercomponent.vue";
import Headercomponent from "./component/Headercomponent.vue";
import Faqsubquestion from "./component/Faqsubquestion.vue";
import Listingwebinar from "./component/Listingwebinar.vue";
// import Slideshowwebinar from "./component/Slideshowwebinar.vue";
// import Webinarwidget from "./component/Webinarwidget.vue";
// import Webinareventdate from "./component/Webinareventdate.vue";
// import Webinareventformdate from "./component/Webinareventformdate.vue";
// import Webinareventdatelist from "./component/Webinareventdatelist.vue";
// import Webinareventdatesvg from "./component/Webinareventdatesvg.vue";
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
