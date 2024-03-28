/*// Get top players and recent scores data from PHP script using AJAX
$(document).ready(function() {
    $.ajax({
      url: 'leaderboards_data.php',
      type: 'post',
      dataType: 'json',
      success: function(data) {
        // Add top players to leaderboard table
        var topPlayers = '';
        for (var i = 0; i < data.top_players.length; i++) {
          topPlayers += '<tr><td>' + (i+1) + '</td><td>' + data.top_players[i].name + '</td><td>' + data.top_players[i].score + '</td></tr>';
        }
        $('#top-players').html(topPlayers);
  
        // Add recent scores to leaderboard table
        var recentScores = '';
        for (var i = 0; i < data.recent_scores.length; i++) {
          recentScores += '<tr><td>' + data.recent_scores[i].name + '</td><td>' + data.recent_scores[i].score + '</td><td>' + data.recent_scores[i].date + '</td></tr>';
        }
        $('#recent-scores').html(recentScores);
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
});
*/

const wrapper =document.querySelector('.wrapper');
const loginLink =document.querySelector('.login-link');
const registerLink =document.querySelector('.register-link');
const btnPopup =document.querySelector('.btnLogin');
const iconClose =document.querySelector('.icon-close');
registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});
loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});
btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});
iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});
