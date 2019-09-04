<!-- Author: David Rankin -->
<!-- Course: CSIS2240-404 --> 
<!-- CE02: Random Events -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CE02 Random Elements</title>
  </head>
  <style>
    .score {
      text-align: center;
    }
    .player-lose {
      background-color: red;
    }
    .player-win {
      background-color: green;
    }
    .player-tie {
      background-color: yellow;
    }
    .final-score {
      text-align: center;
    }
  </style>
  <body>
    <?php
    
    // random numbers
      $score = 0; 
      print("<table><tr><th>Player</th><th>Computer</th></tr>\n");
      
      for($round = 1; $round <= 10; $round++) {
        $playerscore = rand(1,100);
        $compscore = rand(1,100);
        
        print("<tr><td class='score'>$playerscore</td><td class='score'>$compscore</td>");
        
        if($playerscore < $compscore) {
          print("<td class='player-lose'>Player lost round $round</td></tr>\n");
          $score--;
        } elseif($playerscore > $compscore) {
          print("<td class='player-win'>Player won round $round</td></tr>\n");
          $score++;
        } else {
          print("<td class='player-tie'>Player tied round $round</td></tr>\n");
        }
      }
      
      print("<tr><td colspan=2 class='final-score'>$score</td><td>Player Score</td></tr></table>\n");
      
    // year of the -- 
      $year = date("Y");
      
      print("<strong>This is the year of the</strong>: \t");
      
      switch($year % 12) {
        case 0:
          echo 'Monkey'; 
          break;
        case 1:
          echo 'Rooster';
          break;
        case 2:
          echo 'Dog';
          break;
        case 3:
          echo 'Bear';
          break;
        case 4:
          echo 'Rat';
          break;
        case 5:
          echo 'Ox';
          break;
        case 6:
          echo 'Tiger';
          break;
        case 7:
          echo 'Rabbit';
          break;
        case 8:
          echo 'Dragon';
          break;
        case 10:
          echo 'Horse';
          break;
        case 11:
          echo 'Lamb';
          break;
        default: 
          echo 'something broke';
      }
    ?>
  </body>
</html>



