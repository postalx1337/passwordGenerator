var app = new Vue({
    el: '#app',
    data: {
        passwordLength: null,
        result: '',
    },
    methods:{
        getPassword(){
            axios
            .get('../passwordGenerator/api/getPassword.php?length='+this.passwordLength)
            .then(response => (this.result = response.data));
        },
    }
})