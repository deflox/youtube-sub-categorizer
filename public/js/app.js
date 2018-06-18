let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

const baseUrl = 'http://ysc.test';

const app = new Vue({
    el: '#app',
    data: {
        categories: {
            1: 'Test1',
            2: 'Test2'
        },
        selectedCategory: {},
        videos: {}
    },
    created: function () {
        /*
        console.log("test");
        axios.get('/api/categories')
            .then(function (response) {
                this.categories = response.data;
            })
            .catch(function (error) {
                console.log(error);
            });
        console.log(this.categories);*/
    },
    methods: {

    }
});