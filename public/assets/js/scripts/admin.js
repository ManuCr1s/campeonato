import route from './route.js';
import {playerTeams} from './functions.js';
$(document).ready(function(){
    playerTeams(route.playerTeams,$('#tablePlayerTeam'));
});