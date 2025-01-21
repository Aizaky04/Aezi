const quizQuestions = [
  {
    question: "Choose the correct preposition: The cat is ___ the table.",
    options: ["under", "on", "in", "beside"],
    correctAnswer: "on",
    image: "https://upload.wikimedia.org/wikipedia/commons/5/57/Table_icon.svg"
  },
  {
    question: "Choose the correct preposition: The ball is ___ the box.",
    options: ["under", "inside", "on", "behind"],
    correctAnswer: "inside",
    image: "https://upload.wikimedia.org/wikipedia/commons/1/16/Box_icon.svg"
  },
  {
    question: "Choose the correct preposition: The dog is ___ the house.",
    options: ["inside", "on", "under", "beside"],
    correctAnswer: "inside",
    image: "https://upload.wikimedia.org/wikipedia/commons/8/8f/House_icon.svg"
  },
  {
    question: "Choose the correct preposition: The bird is ___ the tree.",
    options: ["on", "under", "in", "beside"],
    correctAnswer: "in",
    image: "https://upload.wikimedia.org/wikipedia/commons/a/a4/Tree_icon.svg"
  },
  {
    question: "Choose the correct preposition: The books are ___ the shelf.",
    options: ["on", "inside", "under", "beside"],
    correctAnswer: "on",
    image: "https://upload.wikimedia.org/wikipedia/commons/e/e1/Bookshelf_icon.svg"
  }
];

// Variabel dan fungsi lainnya tetap sama seperti pada skrip awal
let currentQuestionIndex = 0;
let score = 0;
let timeLeft = 60; // Timer 60 detik
let timerInterval;

// Function to start the quiz
function startQuiz() {
  document.getElementById("start-button").style.display = "none";
  displayQuestion();
  startTimer();
}

// Function to display a question and its options
function displayQuestion() {
  const currentQuestion = quizQuestions[currentQuestionIndex];
  const questionText = document.getElementById("question-text");
  const answerButtons = document.getElementById("answer-buttons");
  const questionImage = document.getElementById("question-image");

  questionText.innerHTML = "";
  answerButtons.innerHTML = "";
  questionImage.src = "";

  questionText.innerHTML = currentQuestion.question;
  questionImage.src = currentQuestion.image;

  currentQuestion.options.forEach(option => {
    const button = document.createElement("button");
    button.innerText = option;
    button.classList.add("answer-button");
    answerButtons.appendChild(button);

    button.addEventListener("click", function() {
      checkAnswer(option);
    });
  });
}

// Function to check the selected answer
function checkAnswer(selectedOption) {
  const currentQuestion = quizQuestions[currentQuestionIndex];

  if (selectedOption === currentQuestion.correctAnswer) {
    score++;
  }

  currentQuestionIndex++;

  if (currentQuestionIndex < quizQuestions.length) {
    displayQuestion();
  } else {
    endQuiz();
  }
}

// Function to start the timer
function startTimer() {
  timerInterval = setInterval(function() {
    timeLeft--;
    document.getElementById("timer").textContent = timeLeft;

    if (timeLeft <= 0) {
      endQuiz();
    }
  }, 1000);
}

// Function to end the quiz
function endQuiz() {
  clearInterval(timerInterval);
  const scorePercentage = (score / quizQuestions.length) * 100;
  const questionContainer = document.getElementById("question-container");
  questionContainer.innerHTML = `
    <h2>Quiz Finished!</h2>
    <p>Your score: ${score} out of ${quizQuestions.length}</p>
    <p>Score Percentage: ${scorePercentage}%</p>
    <a class="nav-link" href="index2.php" style="float: right;">Back</a>
  `;
}

// Add event listener to start the quiz
document.getElementById("start-button").addEventListener("click", startQuiz);
