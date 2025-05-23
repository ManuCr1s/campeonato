import route from './route.js';
import {dniSearch,showTeam} from './functions.js';
$(document).ready(function(){
    dniSearch($('#dniPLayer'),$('#btnDni'),route.dniPlayer,$('#firtsname'),$('#lastname'));
    showTeam(route.teamName,$('#app'),$('#idTeamName'));
});