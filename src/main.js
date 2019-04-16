// import Vue from 'vue'
// import Components from './components'
// import './app.css'

// Vue.config.productionTip = false

// new Vue({
//   el: '#app',
//   delimiters: ['${', '}']
// })

import './app.css'
import openNav from './js/openNav.js'
import { tns } from "../node_modules/tiny-slider/src/tiny-slider"


var slider = tns({
    container: '#shop',
    controlsPosition: "bottom",
    nav: false,
    // autoHeight: true,
    items: 4,
    gutter: 10,
    speed: 500,
    slideBy: 1,
    // autoplay: true,
});

openNav();

export default slider