var vm = new Vue({
    el: '#app',
    data: {
        product: '',
        subproduct: '',
        carts: '',
        subproductdetails: '',
        subpr_id: '',
        product_id: '',
        product_price: '',
        subprname: '',
        subprprice: '',
        s_id: '',
        p_id: '',
        p_price: '',
        addaddress: false,
        cat_menus: '',
        prod_menus: '',
        id: '',
    },

    created: function () {
        this.loadDetails();
        this.loadData();
        this.loadDataBase();
    },

    mounted: function () {
        // this.subproductdetail(this.$refs.subproductids.value);
    },

    methods: {
        loadDetails: function () {
            this.cat_menus = "Loading";

            axios.get("{{url('/produkt/details/'.$product->id)}}")
                .then(response => {
                    this.product = response.data.product;
                })
                .catch(function (error) {
                    // vm.carts = 'An error occured ' + error;
                    console.log(error);
                })
        },

        subproductdetail(subproduct_id) {
            console.log(subproduct_id)

            axios.get("{{url('/produkt/subproduct/')}}" + subproduct_id)
                .then(response => {

                    this.subpr_id = response.data.id;
                    this.product_id = response.data.product_id;
                    this.product_price = response.data.price;
                    this.subprname = response.data.article_name;
                    this.subprprice = response.data.price;
                })
                .catch(function (error) {

                })
        },

        addCart() {
            alert("hi")
            var s_id = $("#subproduct_id").val();
            var p_id = $("#product_id").val();
            var p_price = $("#product_price").val();
            axios.post("{{url('/produkt/Addcart')}}", {
                    sub_id: s_id,
                    pro_id: p_id,
                    pro_price: p_price
                })
                .then(response => {
                    console.log(response.data)


                })
                .catch(function (error) {

                })
        },

        Showaddaddress() {
            this.addaddress = 'true';
            console.log(this.addaddress)
        },

        loadData: function () {
            this.cat_menus = "Loading";
            var vm = this;
            axios.get("{{url('/header/common')}}")
                .then(response => {
                    vm.cat_menus = response.data.cat_menus;
                    vm.prod_menus = response.data.prod_menus;
                    vm.carts = response.data.carts;

                })
                .catch(function (error) {
                    vm.cat_menus = 'An error occured ' + error;
                    vm.prod_menus = 'An error occured ' + error;
                    vm.carts = 'An error occured ' + error;

                })
        },

        deleteCartItem(cart_id) {
            axios.get("{{url('/header/deletecart/')}}" + cart_id)
                .then(response => {
                    this.carts = response.data;
                    console.log(response.data)
                    // this.loadData();
                })
                .catch(function (error) {
                    vm.cat_menus = 'An error occured ' + error;
                })
        },

        loadDataBase: function () {
            this.carts = "Loading";
            var vm = this;
            axios.get("{{url('/header/common')}}")
                .then(response => {
                    vm.carts = response.data;
                })
                .catch(function (error) {
                    vm.carts = 'An error occured ' + error;
                })
        },
    }
});