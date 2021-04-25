console.clear();

var app = new Vue({
    el: '.wrapper',
    data: {
        value: 5000
    },
    computed: {
        total: function () {
            return this.value * 10
        }
    }
});
