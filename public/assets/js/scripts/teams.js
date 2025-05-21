import route from './route.js';
import {team,registerTeam,changeNameTeam,sendChangeTeam} from './functions.js';
$(document).ready(function(){
    team(route.team,$('#app'),$('#register_team'),$('#registered_team'),$('#tableTeam'));
    registerTeam($('#registerTeams'),route.registerT,$('#tableTeam'));
    changeNameTeam();
    sendChangeTeam(route.updateT);
});