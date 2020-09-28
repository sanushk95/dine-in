window._ = require('lodash');
window.Popper = require('popper.js').default;

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch(e) {}


window.axios = require('axios');


/*if(token) {
    window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
} else {
    console.log("CSRF token not found.");
}
*/

