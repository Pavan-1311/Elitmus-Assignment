<?php
// start the session
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Missing report</title>
    <link rel="stylesheet" type="text/css" href="../css/detailing.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body onload="startTimer()">	
    </div>
    <div class="container">
      <div class="header">
        <h1 align="center"> Missing Report </h1>
      </div>
      <div class="row">
        <div class="column">
          <div class="card2">
            <img src="../img/missingreport.jpg">
          </div>
        </div>
		  <div class="column">
			<div id="quiz">
			  <h1 id="quiz-name"></h1>
			  <button id="prev-question-button">Previous</button>
			  <button id="submit-button" onclick="submitTime()">Submit Answers</button>
			  <button id="next-question-button">Next Question</button>
			  <div id="quiz-results">
				<p id="quiz-results-score"></p>
			  </div>
			</div>
		</div>
		<div class="column">
          <div class="card1">
            <br>
            <br>
            <span id="timer" class="timer">00:00</span>
            <button id="restartBtn" onclick="restart()" class="restart">Restart</button>	
          </div>
        </div>
	  </div>
    </div>
    <script src="../js/detailing.js"></script>
    <script>
      var all_questions = [{
    question_string: "what are the major things needed in the missing report?",
    choices: {
        correct: "Name,Location",
        wrong: ["Studies", "Friends", "Hobbies"]
    }
}, {
    question_string: "What is the shirt color identified in the picture?",
    choices: {
        correct: "Orange",
        wrong: ["White", "Blue", "Green"]
    }
}, {
    question_string: "What color dress was he wearing when he missed?",
    choices: {
        correct: "White,Black",
        wrong: ["Blue,Blue", "Blue,Red", "White,Black"]
    }
}, {
    question_string: 'what date of birth was he born?',
    choices: {
        correct: "sep 6",
        wrong: ["sep 9", "jun 6", "sep 2"]
    }
}];
  
    </script>
    
  </body>
</html>