


const questionNumber = document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");
const answersIndicatorContainer = document.querySelector(".answer-container")
const homeBox= document.querySelector(".home-box");
const quizBox= document.querySelector(".quiz-box");
const resultBox = document.querySelector(".result-box");



let questionCounter = 0;
let currentQuestion;
let availableQuestions = [];
let availableOptions  = [];
let correctAnswers = 0;
let attempt = 0;

//push the question into availableQuestions Array
function setAvailableQuestions(){

	const totalQuestion = quiz.length;
	for(let i=0;i<totalQuestion; i++){
		availableQuestions.push(quiz[i])
	}
	
}
//set question number and question and options
function getNewQuestion(){
	console.log(availableQuestions);
	//set question number
	questionNumber.innerHTML =  "Question   " + (questionCounter + 1) + " of " +quiz.length;

	//set question text
	//get random question
	const questionIndex = availableQuestions[Math.floor(Math.random() * availableQuestions.length)]
		currentQuestion = questionIndex;
		questionText.innerHTML =currentQuestion.q;
		//get the position of 'questionIndex' from the availableQusetion Array;
		const index1 = availableQuestions.indexOf(questionIndex);
		//remove the questionIndex from the availableQuestion Array,so that the question does not
		availableQuestions.splice(index1,1);
		
		//set options
		//get the length of options
		const optionLen = currentQuestion.options.length
		console.log(currentQuestion.options)
		

		//create options in html
		for (let i=0; i<optionLen; i++){
			availableOptions.push(i)
		}
		 optionContainer.innerHTML ='';
		 let animationDelay = 0.15;
			for (let i=0; i<optionLen; i++){
			//random option
			const optonIndex = availableOptions[Math.floor(Math.random() * availableOptions.length)];
            //get the position of optionIndex from the availableOptions
			const index2=availableOptions.indexOf(optonIndex);
			//remove the optionIndex from the availableOptions,so that the option does not repeat
			availableOptions.splice(index2,1);
			const option = document.createElement("div");
			option.innerHTML = currentQuestion.options[optonIndex];
			option.id=optonIndex;
			option.style.animationDelay = animationDelay +'s';
			animationDelay = animationDelay + 0.15;
		    option.className = "option"
			optionContainer.appendChild(option)
			option.setAttribute("onclick","getResult(this)");


		}
		
	questionCounter++	

}

//get the result of current attempt question
function getResult(element){
	
	const id= parseInt(element.id)
	//get the answer by comparing the id of clicked option
	if(id == currentQuestion.answer){
		//set the green color to the correct answer
		element.classList.add("correct");
		//add the indicator to correct mark
		updateAnswerIndicator("correct");
		correctAnswers++;
		console.log("correct:"+correctAnswers)
	}


	else{
		//set the red color to the wrong answer
		element.classList.add("wrong");
		//add the indicator to wrong mark
		updateAnswerIndicator("wrong");
		//if the answer the incorrect that show the correct option by adding green color the correct option
		const optionLen = optionContainer.children.length;
		for(let i=0;i<optionLen;i++){
			if(parseInt(optionContainer.children[i].id) === currentQuestion.answer){
					optionContainer.children[i].classList.add("correct")
			}
		}
	}
	attempt++;
	unclickableOptions();


}
//make all  the options unclickable once the user select a option..
function unclickableOptions(){
	

	const optionLen= optionContainer.children.length;
	for(let i=0;i<optionLen;i++){
		optionContainer.children[i].classList.add("already-answered");
	}


}
function updateAnswerIndicator(marktype){
	answersIndicatorContainer.children[questionCounter-1].classList.add(marktype)

}


function answersIndicator(){
	answersIndicatorContainer.innerHTML = '';
	const totalQuestion = quiz.length;
	for(let i=0;i<totalQuestion;i++){
		const indicator = document.createElement("div");
		answersIndicatorContainer.appendChild(indicator);

	}
}



function  next(){
	if(questionCounter == quiz.length){
		console.log("quiz over")
		quizOver();
	}
	else{
		getNewQuestion();
	}

}
function quizOver(){
	//hide quiz quizBox
	quizBox.classList.add("hide");
	//show result box
	resultBox.classList.remove("hide");
	quizResult();

}

//get the quiz result
function quizResult(){
	resultBox.querySelector(".total-question").innerHTML = quiz.length;
	resultBox.querySelector(".total-attempt").innerHTML = attempt;
	resultBox.querySelector(".total-correct").innerHTML = correctAnswers;
	resultBox.querySelector(".total-wrong").innerHTML = attempt-correctAnswers;
	const percentage = (correctAnswers/quiz.length)*100;
	resultBox.querySelector(".percentage").innerHTML = percentage.toFixed(2) + "%";
	resultBox.querySelector(".total-score").innerHTML = correctAnswers + "/" + quiz.length;
}

function resetQuiz(){
		questionCounter = 0;
	 	correctAnswers = 0;
	 	attempt = 0;
	 	

}

function tryAgainQuiz(){
	//hide result box
	resultBox.classList.add("hide")
	//show quiz box
	quizBox.classList.remove("hide")

	resetQuiz();
	startQuiz();
}


function goToHome(){
	//hide result box
	resultBox.classList.add("hide")
	//show home box
	homeBox.classList.remove("hide")

	resetQuiz();

	
}



//#### starting point #####

 function startQuiz(){

//hide home box
homeBox.classList.add("hide");
//show quiz box
quizBox.classList.remove("hide");


  //first we will set all question in availiableQuestions array 
  setAvailableQuestions();
  //second we will call getNewQuestion(); function
  getNewQuestion();
  //to create a indicator of answers
  answersIndicator();

}



window.onload = function (){
	homeBox.querySelector(".total-question").innerHTML = quiz.length;
}


