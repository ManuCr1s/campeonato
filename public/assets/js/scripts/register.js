import route from './route.js';
import {dniSearch,onlyNumbers, register} from './functions.js';
$(document).ready(function(){
    dniSearch($('#valDni'),$('#btnDni'),route.dni,$('#firtsname'),$('#lastname'));
    $('#valDni').on('keypress',onlyNumbers);
    register($('#register'),route.send)
});