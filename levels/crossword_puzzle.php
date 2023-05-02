<!DOCTYPE html>
<html>
<head>
<title>Crossword Puzzle</title>
<link rel="stylesheet" type="text/css" href="../css/crossword_puzzle.css" />
</head>
<body>
	<h2 align="center" class="cwp_h2_main">Level 3 </h2>
	<form id="myForm" >
  <!-- form fields here -->
  <input  align="right" type="submit" value="Submit">
</form>
<div id="timer"></div>
	<div id="myPuzzle"></div>
	<script type="text/javascript" src="../js/crossword_puzzle.js" defer></script>
	<script type="text/javascript" src="../js/activate_puzzle.js" defer></script>
</body>
<script>
    // Set the countdown time to 3 minutes (in seconds)
var countDownTime = 600;

// Update the countdown every 1 second
var x = setInterval(function() {

  // Reduce the countdown time by 1 second
  countDownTime -= 1;

  // Calculate minutes and seconds remaining
  var minutes = Math.floor(countDownTime / 60);
  var seconds = countDownTime % 60;

  // Add leading zeros if necessary
  minutes = minutes < 10 ? "0" + minutes : minutes;
  seconds = seconds < 10 ? "0" + seconds : seconds;

  // Output the result in an element with id="timer"
  document.getElementById("timer").innerHTML = minutes + ":" + seconds;

  // If the countdown is over, submit the form
  if (countDownTime < 1) {
    clearInterval(x);
    document.getElementById("myForm").submit();
  }
}, 1000);

// Submit the form when the user clicks the submit button
document.getElementById("myForm").addEventListener("submit", function(event) {
  // Get the remaining countdown time
  var remainingTime = countDownTime;

  // Create a new AJAX request
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
    }
  };

  // Send the remaining countdown time to the PHP script
  xhttp.open("POST", "crossword_time.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("remaining_time=" + remainingTime);

  // Allow the form to submit normally
  return true;
});



</script>
</html>