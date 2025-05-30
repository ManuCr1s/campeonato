import route from './route.js';
import {onlyNumbers,login} from './functions.js';
import LOGIN from './functions.js';
$(document).ready(function(){
      LOGIN.checkFullPageBackgroundImage();
      setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
      }, 700)
      $('#user').on('keypress',onlyNumbers);
      login($('#login'),route.login);
});
