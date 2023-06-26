import './bootstrap';
import '../css/app.css';

import { Carousel, initTE } from "tw-elements";
initTE({ Carousel }, true ); // set second parameter to true if you want to use a debugger

// Initialization for ES Users
import {
    Ripple,
    Input,
    initTE,
  } from "tw-elements";
  
  initTE({ Ripple, Input });

// import DataTable from 'datatables.net-dt';
// import 'datatables.net-responsive-dt';



import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
