import './bootstrap';

import {createApp} from 'vue'; //imoprt this form vue 
//imoprt this form component folder with path
import Footercomponent from './component/Footercomponent.vue';  //imoprt this form component folder with path
import Headercomponent from './component/Headercomponent.vue';
import Homecomponent from './component/Homecomponent.vue';
import Aboutcomponent from './component/Aboutcomponent.vue';
//imoprt this form component folder with path

createApp(Footercomponent).mount('#footer') // call which file use s main file 
createApp(Headercomponent).mount('#header') // call which file use s main file 
createApp(Homecomponent).mount('#home') // call which file use s main file 
createApp(Aboutcomponent).mount('#about') // call which file use s main file 

