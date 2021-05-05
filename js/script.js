var app = new Vue({
    el: '#app',
    data: {
        albums: [],
    },
    mounted: function () {
        axios.get("http://localhost/BACK-END/PHP/php-ajax-dischi/api.php")
        .then((response) => {
            this.albums = response.data;
        });
    }
})