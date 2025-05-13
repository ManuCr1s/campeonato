import route from './route.js';
import {onlyNumbers,login} from './functions.js';
$(document).ready(function(){
      $('#user').on('keypress',onlyNumbers);
      login($('#login'),route.login);
});
