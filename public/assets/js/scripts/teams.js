import route from './route.js';
import {team} from './functions.js';
$(document).ready(function(){
    team(route.team,$('#app'),$('#register_team'),$('#registered_team'));
    registerTeam($('#teams'),route.registerT);
});