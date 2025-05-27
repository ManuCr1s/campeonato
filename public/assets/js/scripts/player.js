import route from './route.js';
import {dniSearch,showTeam,sendDataPlayer,player, deletePlayer,deletePlayerTeam,officesName} from './functions.js';
$(document).ready(function(){
    dniSearch($('#dniPLayer'),$('#btnDni'),route.dniPlayer,$('#firtsname'),$('#lastname'));
    showTeam(route.teamName,$('#app'),$('#idTeamName'),$('#idTeam'),$('#idUser'));
    sendDataPlayer(route.sendPlayer);
    player(route.showPlayer,$('#app'),$('#tablePlayer'))
    deletePlayer();
    deletePlayerTeam(route.deletePlayer);
    officesName($('#offices'),route.offices);
});