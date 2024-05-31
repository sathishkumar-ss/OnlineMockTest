<!DOCTYPE html>
<html>
<head>
	<title>railways</title>
	<meta name="viewport" content="width=device-width,initial scale=1">
	<link rel="stylesheet" type="text/css" href="css/style3.css">
	
</head>
<body>
	<div class="home-box custom-box">
			<h1>Instruction</h1><br>
			<p>Total number of questions:<span class="total-question">  </span></p>
			<button type="button" class="btn" onclick="startQuiz()">start quiz</button>
	</div>

<div class="quiz-box custom-box hide">
	<div class="question-number">
	</div>
	<div class="question-text">
	</div>
	<div class="option-container ">
	</div>
	<div class="next-question-btn">
	<button type="button" class="btn" onclick="next()">next</button>
	</div>
	<div class="answer-container">
	</div>
</div>


<div class="result-box custom-box hide">
	<h1>Quiz Result</h1>
	<table>
		<tr>
			<td>Total question</td>
			<td><span class="total-question"></span></td>
		</tr>
		<tr>
			<td>Attempt</td>
			<td><span class="total-attempt"></span></td>
		</tr>
		<tr>
			<td>Correct</td>
			<td><span class="total-correct"></span></td>
		</tr>
		<tr>
			<td>Wrong</td>
			<td><span class="total-wrong"></span></td>
		</tr>
		<tr>
			<td>Percetage</td>
			<td><span class="percentage"></span></td>
		</tr>
		<tr>
			<td>Total Score</td>
			<td><span class="total-score"></span></td>
		</tr>
	</table>
	<button  type="button" class="btn" onclick="tryAgainQuiz()">Try again</button>
	<button  type="button" class="btn" onclick="goToHome()">Go To Home </button>
</div>
</body>
</html>

<script src="js/mathsaddquestion.js"></script>
<script src="js/app.js"></script>



