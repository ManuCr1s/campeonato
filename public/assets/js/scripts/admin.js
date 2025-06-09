import route from './route.js';
import {playerTeams,teamsRegister} from './functions.js';
$(document).ready(function(){
    playerTeams(route.playerTeams,$('#tablePlayerTeam'));
    teamsRegister(route.teamRegister,$('#tableTeamFinal'));
});