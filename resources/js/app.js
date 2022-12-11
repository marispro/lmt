import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import { createApp } from 'vue/dist/vue.esm-bundler'
// Import our custom CSS
import '../sass/app.scss'

// countdown
const countDownDate = new Date("Dec 29, 2022 00:00:00").getTime();

// helper for date/time leading zeros
const zeroPad = (num, places) => String(num).padStart(places, '0');

// update the count down every 1 second
let x = setInterval(function() {

    // Get today's date and time
    let now = new Date().getTime();

    // find the diff between now and the count down date
    let diff = countDownDate - now;

    // time calculations for days, hours, minutes and seconds
    let days = Math.floor(diff / (1000 * 60 * 60 * 24));
    let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((diff % (1000 * 60)) / 1000);

    // display the result in the element
    document.querySelector('#countdown .days .count').innerHTML = zeroPad(days, 2);
    document.querySelector('#countdown .hours .count').innerHTML = zeroPad(hours, 2);
    document.querySelector('#countdown .minutes .count').innerHTML = zeroPad(minutes, 2);
    document.querySelector('#countdown .seconds .count').innerHTML = zeroPad(seconds, 2);

    // If the count down is finished, write some text
    if (diff < 0) {
        clearInterval(x);
        document.querySelector('#countdown .time').style.display = 'none';
        document.querySelector('#countdown .expired').style.display = 'block';
    }
}, 1000);

// contest form
createApp({
    data() {
        return {
            successMessage: '',

            name: '',
            email: '',
            errors: {
                name: false,
                email: false,

                nameMessage: '',
                emailMessage: ''
            }
        }
    },

    methods: {
        submit() {
            this.errors.name = !this.name.length;
            this.errors.email = !this.name.length;

            if(this.name && this.email) {
                let currentObj = this;

                axios
                    .post('/contest', {
                        name: this.name,
                        email: this.email
                    })
                    .then(function (response) {
                        currentObj.successMessage = response.data[0];

                    })
                    .catch(function (err) {
                        if(err.response.data.errors.name){
                            currentObj.errors.name = true;
                            currentObj.errors.nameMessage = err.response.data.errors.name[0];
                        }

                        if(err.response.data.errors.email){
                            currentObj.errors.email = true;
                            currentObj.errors.emailMessage = err.response.data.errors.email[0];
                        }
                    });
            }
        }
    }
}).mount('#contest');
