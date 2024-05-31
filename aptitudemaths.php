<!DOCTYPE html>
<html>
<head>
	<title>railways</title>
	<meta name="viewport" content="width=device-width,initial scale=1">
	<style type="text/css">
	@import url("https://fonts.googleapis.com/css2?family=Goudy+Bookletter+1911&display=swap" rel="stylesheet");


body{
	margin: 0;
	font-size: 16px;
	background-color: #009688;
    font-weight:bold;


}
*{
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	outline: none;
}

.custom-box{
	max-width: 700px;
	background-color: #ffffff;
	margin: 40px auto;
	padding: 30px;
	border-radius: 10px;
	animation:fadeInRight 1s ease;
}
@keyframes fadeInRight{
	0%{
		transform:translateX(40px);
		opacity: 0;
	}
	100%{
		transform: translateX(0px);
		opacity: 1;
	}
}
.custom-box::before,
.custom-box::after{
	content: '';
	clear:both;
	display:table;
}



.home-box{
	font-size: 18px;
	color:#000000;
	font-weight: 500;
	margin-bottom: 15px;
	line-height: 25px;
}
.custom-box.hide{
	display:none;
}
	

.home-box p{
	font-size: 22px;
	margin-bottom: 10px;
	color:#000000;
	line-height: 22px;
	font-weight: 400;

}
.home-box .btn{
	margin-top: 20px;
}
.btn{
	padding: 15px 45px;
	background-color: #009688;
	color:#ffffff;
	border:none;
	border-radius:5px;
	font-size: 16px;
	cursor: pointer;
	display: inline-block;
	
}
.quiz-box .question-number,
.quiz-box .question-text,
.quiz-box .option-container,
.quiz-box .answer-container,
.quiz-box .next-question-btn,{
	width:100%;
	float:left;

}
.quiz-box .question-number{

	font-size:20px;
	color:red;
	font-weight: bold;
	border-bottom:1px solid  grey;
	padding-bottom: 18px;
	line-height: 25px;

}
.quiz-box .question-text{
	font-size: 22px;
	color:#283798;
	line-height: 28px;
	font-weight: bold;
	padding:20px 0;
	margin:0;

}


.quiz-box .option-container .option{
	background-color: #cccccc;
	padding: 15px;
	font-size: 22px;
	line-height: 22px;
	color:#878990;
	border-radius: 8px;
	margin-bottom: 15px;
	font-weight: bold;
	cursor: pointer;
	text-transform: capitalize;
	opacity: 0;
	animation: fadeIn 0.3s ease forwards;
	position: relative;
	overflow: hidden;
}
@keyframes fadeIn{
	0%{
		opacity: 0;

	}
	100%{
		opacity: 1;
	}
}
.quiz-box .option-container .option.correct::before{
	content: '';
	position: absolute;
	left:0;
	top:0;
	height:100%;
	width:100%;
	background-color: green;

	z-index: -1;
	animation: slideInLeft .5s ease forwards
}
.quiz-box .option-container .option.already-answered{
	pointer-events: none;
}

@keyframes  slideInLeft{
	0%{
		transform:translateX(-100%);
	}
	100%{
		transform:translateX(0%);
	}
}
.quiz-box .option-container .option.correct{
	color:#ffffff;

}
.quiz-box .option-container .option.wrong::before{
	content: '';
	position: absolute;
	left:0;
	top:0;
	height:100%;
	width:100%;
	background-color: red;
	z-index: -1;
	animation: slideInLeft .5s ease forwards
}
.quiz-box .option-container .option.wrong{
	color:#ffffff;
}


.quiz-box .btn{
	margin: 15px 0;

}
.quiz-box .answer-container{
	border-top: 1px solid #cccccc;
}
.quiz-box .answer-container div{
	height:40px;
	width: 40px;
	display: inline-block;
	background-color: #cccccc;
	border-radius: 50%;
	margin-right: 8px;
	margin-top: 15px;
}
.quiz-box .answer-container div.correct{
	background-color: green;
	
	background-size: 50%;
	background-repeat: no-repeat;
	background-position: center;



}
.quiz-box .answer-container div.wrong{
	background-color: red;
	background-size: 50%;
	background-repeat: no-repeat;
	background-position: center;


}

.result-box{
	text-align: center;
}
.result-box h1{
	font-size:36px;
	line-height: 42px;
	color:#804038;
}
.result-box table{
	width:100%;
	border-collapse: collapse;
	margin:30px 0;
}
.result-box table td{
	border:1px solid #cccccc;
	padding: 8px 20px;
	font-weight: bold;
	color:#0151719;
	width:50%;
	text-align: left;
	font-size: 18px;
}
.result-box .btn{
	margin-right: 20px;
}

@media(max-width: 767px){
	.result-box .btn{
		margin-bottom:15px;
	}
	body{
		padding:15px;
	}
}





</style>
</head>
<body>
	<div class="home-box custom-box">
			<h1>Instruction</h1><br>
			<p>Total number of questions:<span class="total-question">   </span></p>
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
</body>
</html>

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

<script src="js/app.js"></script>
<script src="js/aptitudemaths.js"></script>

</body>
</html>