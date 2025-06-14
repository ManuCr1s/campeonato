import route from './route.js';
import {dniSearch,showTeam,sendDataPlayer,player, deletePlayer,deletePlayerTeam,officesName,photoPlayer,updatePhotoPlayer} from './functions.js';
$(document).ready(function(){
    $("#preloader").hide(); 
    dniSearch($('#dniPLayer'),$('#btnDni'),route.dniPlayer,$('#firtsname'),$('#lastname'));
    showTeam(route.teamName,$('#app'),$('#idTeamName'),$('#idTeam'),$('#idUser'));
    sendDataPlayer(route.sendPlayer);
    player(route.showPlayer,$('#app'),$('#tablePlayer'))
    deletePlayer();
    deletePlayerTeam(route.deletePlayer);
    officesName($('#offices'),route.offices);
    photoPlayer();
    updatePhotoPlayer(route.photo);
});