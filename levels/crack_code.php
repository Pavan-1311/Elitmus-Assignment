<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,
		initial-scale=1, shrink-to-fit=no">

	<title>Crack-The-Code Game</title>

	<!-- Bootstrap CDN starts-->
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		crossorigin="anonymous">
	</script>

	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		crossorigin="anonymous">
	</script>
	
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		crossorigin="anonymous">
	</script>
	<!-- Bootstrap CDN ends -->

	<!-- Font Awesome kit --- for icons -->
	<script src="https://kit.fontawesome.com/788fc8cac3.js"
		crossorigin="anonymous">
	</script>

	<!-- Google font CDN for Yeon Sung font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href=
"https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap"
		rel="stylesheet">
	<!-- Google font CDN ends -->

	<!-- Internal CSS -->
	<style>
		* {
			font-family: 'Yeon Sung', cursive;
		}

		input {
			width: 60px;
			height: 40px;
			border-radius: 5px;
			text-align: center;
		}
	</style>
</head>

<body>

	<!--Popup Modal -->
	<div class="modal fade" id="popup" tabindex="-1"
		role="dialog" aria-labelledby="popupLabel"
		aria-hidden="true">
		
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-danger
						font-weight-bold" id="popupLabel">
						Pop Up
					</h5>
					
					<button type="button" class="close"
						data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<h3 id="result" class="text-center"></h3>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn
						btn-secondary" data-dismiss="modal">
						Close
					</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Popup Modal -->

	<div class="container my-4">
		<h1 class="text-center my-4"><i class="fas
				fa-unlock-alt"></i> Crack The Code</h1>

		<!-- 3 input fields -->
		<div class="text-center">
			<input type="text" id="b1">
			<input type="text" id="b2">
			<input type="text" id="b3">
			<br />
			<!-- Button to check result -->
			<button class="btn btn-secondary mt-4"
				onclick="myfunc();">
				<i class="fas fa-key"></i> Check
			</button>
			<form id="myForm" method="POST">
  <!-- form fields here -->
  <input type="submit" value="Submit">
</form>
<div id="timer"></div>
		</div>
		<hr>

		<!-- Hints starts -->
		<div id="hints" class="row m-auto">
			<div id="hintOne">
				<div class="card m-4" style="width: 18rem;">
					<div class="card-header card-title">
						<h5 class="card-title text-center">
							<i class="far fa-lightbulb"></i>
							Hint #1
						</h5>
					</div>
					<div class="card-body">
						<p id="h1" class="text-center"></p>

						<h5 class="text-center">
							One Number is correct and
							well placed
						</h5>
					</div>
				</div>

			</div>
			<div id="hintTwo">
				<div class="card m-4" style="width: 18rem;">
					<div class="card-header card-title">
						<h5 class="card-title text-center">
							<i class="far fa-lightbulb"></i>
							Hint #2
						</h5>
					</div>
					<div class="card-body">
						<p id="h2" class="text-center"></p>

						<h5 class="text-center">
							One Number is correct but wrong placed
						</h5>
					</div>
				</div>
			</div>
			<div id="hintThree">
				<div class="card m-4" style="width: 18rem;">
					<div class="card-header card-title">
						<h5 class="card-title text-center">
							<i class="far fa-lightbulb"></i>
							Hint #3
						</h5>
					</div>
					<div class="card-body">
						<p id="h3" class="text-center"></p>

						<h5 class="text-center">
							Two numbers are correct but
							wrong placed
						</h5>
					</div>
				</div>
			</div>
			<div id="hintFour">
				<div class="card m-4" style="width: 18rem;">
					<div class="card-header card-title">
						<h5 class="card-title text-center">
							<i class="far fa-lightbulb"></i>
							Hint #4
						</h5>
					</div>
					<div class="card-body">
						<p id="h4" class="text-center"></p>

						<h5 class="text-center">
							Nothing is Correct
						</h5>
					</div>
				</div>
			</div>
			<div id="hintFive">
				<div class="card m-4" style="width: 18rem;">
					<div class="card-header card-title">
						<h5 class="card-title text-center">
							<i class="far fa-lightbulb"></i>
							Hint #5
						</h5>
					</div>
					<div class="card-body">
						<p id="h5" class="text-center"></p>

						<h5 class="text-center">
							One Number is correct but
							wrong placed
						</h5>
					</div>
				</div>
			</div>
		</div>
		<!-- Hints ends -->

	</div>
</body>
<!-- JavaScript file included -->
<script src="../js/crack_code.js"></script>

<script>
    // Set the countdown time to 3 minutes (in seconds)
var countDownTime = 300;

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
  xhttp.open("POST", "crack_code_time.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("remaining_time=" + remainingTime);

  // Allow the form to submit normally
  return true;
});



</script>

</html>
