@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('quickadmin/css/style.css') }}" >

@section('content')

<a href="sandhanganlevel2">Kembali</a>

<div id="container">
    <div id="start">Mulai Kuis!</div>
    <div id="quiz" style="display: none">
        <div id="question"></div>
        <div id="qImg"></div>
        <div id="choices">
            <div class="choice" id="A" onclick="checkAnswer('A')"></div>
            <div class="choice" id="B" onclick="checkAnswer('B')"></div>
            <div class="choice" id="C" onclick="checkAnswer('C')"></div>
        </div>
        {{-- <div id="timer">
            <div id="counter"></div>
            <div id="btimeGauge"></div>
            <div id="timeGauge"></div>
        </div> --}}
        <div id="progress"></div>
    </div>
    <div id="scoreContainer" style="display: none"></div>
</div>
<script>
    // select all elements
const start = document.getElementById("start");
const quiz = document.getElementById("quiz");
const question = document.getElementById("question");
const qImg = document.getElementById("qImg");
const choiceA = document.getElementById("A");
const choiceB = document.getElementById("B");
const choiceC = document.getElementById("C");
const counter = document.getElementById("counter");
const timeGauge = document.getElementById("timeGauge");
const progress = document.getElementById("progress");
const scoreDiv = document.getElementById("scoreContainer");

// create our questions
let questions = [
    {
        question : "Sandhangan berikut mengganti huruf vokal menjadi?",
        imgSrc : "img/cakrawa.png",
        choiceA : "ya",
        choiceB : "wa",
        choiceC : "la",
        correct : "B"
    },{
        question : "Huruf aksara jawa berikut digunakan sebagai tanda?",
        imgSrc : "img/padalungsi.png",
        choiceA : "Tanya (?)",
        choiceB : "Koma (,)",
        choiceC : "Titik (.)",
        correct : "C"
    },{
        question : "Sandhangan berikut mengganti huruf vokal menjadi?",
        imgSrc : "img/pengkal.png",
        choiceA : "ra",
        choiceB : "la",
        choiceC : "ya",
        correct : "C"
    }
];

// create some variables

const lastQuestion = questions.length - 1;
let runningQuestion = 0;
let count = 0;
const questionTime = 999; // 10s
const gaugeWidth = 150; // 150px
const gaugeUnit = gaugeWidth / questionTime;
let TIMER;
let score = 0;

// render a question
function renderQuestion(){
    let q = questions[runningQuestion];
    
    question.innerHTML = "<p>"+ q.question +"</p>";
    qImg.innerHTML = "<img src="+ q.imgSrc +">";
    choiceA.innerHTML = q.choiceA;
    choiceB.innerHTML = q.choiceB;
    choiceC.innerHTML = q.choiceC;
}

start.addEventListener("click",startQuiz);

// start quiz
function startQuiz(){
    start.style.display = "none";
    renderQuestion();
    quiz.style.display = "block";
    renderProgress();
    renderCounter();
    TIMER = setInterval(renderCounter,1000); // 1000ms = 1s
}

// render progress
function renderProgress(){
    for(let qIndex = 0; qIndex <= lastQuestion; qIndex++){
        progress.innerHTML += "<div class='prog' id="+ qIndex +"></div>";
    }
}

// counter render

function renderCounter(){
    if(count <= questionTime){
        counter.innerHTML = count;
        timeGauge.style.width = count * gaugeUnit + "px";
        count++
    }else{
        count = 0;
        // change progress color to red
        answerIsWrong();
        if(runningQuestion < lastQuestion){
            runningQuestion++;
            renderQuestion();
        }else{
            // end the quiz and show the score
            clearInterval(TIMER);
            scoreRender();
        }
    }
}

// checkAnwer

function checkAnswer(answer){
    if( answer == questions[runningQuestion].correct){
        // answer is correct
        score++;
        // change progress color to green
        answerIsCorrect();
    }else{
        // answer is wrong
        // change progress color to red
        answerIsWrong();
    }
    count = 0;
    if(runningQuestion < lastQuestion){
        runningQuestion++;
        renderQuestion();
    }else{
        // end the quiz and show the score
        clearInterval(TIMER);
        scoreRender();
    }
}

// answer is correct
function answerIsCorrect(){
    document.getElementById(runningQuestion).style.backgroundColor = "#0f0";
}

// answer is Wrong
function answerIsWrong(){
    document.getElementById(runningQuestion).style.backgroundColor = "#f00";
}

// score render
function scoreRender(){
    scoreDiv.style.display = "block";
    
    // calculate the amount of question percent answered by the user
    const scorePerCent = Math.round(100 * score/questions.length);
    
    // choose the image based on the scorePerCent
    let img = (scorePerCent >= 80) ? "img/diatas80.png" :
              (scorePerCent >= 60) ? "img/diatas60.png" :
              (scorePerCent >= 40) ? "img/diatas40.png" :
              (scorePerCent >= 20) ? "img/diatas20.png" :
              "img/dibawah20.png";
    
    scoreDiv.innerHTML = "<img src="+ img +">";
    scoreDiv.innerHTML += "<p> Nilai kamu : "+ scorePerCent +"%</p>";
}
</script>
@endsection
