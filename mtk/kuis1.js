// Define an array of quiz questions
const quizQuestions = [
  {
    question: "Berapa hasil dari 12 x 5?",
    options: ["50", "60", "70", "80"],
    correctAnswer: "60",
    image: "https://upload.wikimedia.org/wikipedia/commons/3/3c/Multiplication_sign.svg" // Gambar simbol perkalian
  },
  {
    question: "Jika panjang persegi adalah 4 cm, berapa luasnya?",
    options: ["12 cm²", "16 cm²", "20 cm²", "24 cm²"],
    correctAnswer: "16 cm²",
    image: "https://upload.wikimedia.org/wikipedia/commons/d/d1/Square_shape.svg" // Gambar persegi
  },
  {
    question: "Sebuah kotak berisi 30 permen. Jika dimakan 12, berapa permen yang tersisa?",
    options: ["18", "20", "22", "24"],
    correctAnswer: "18",
    image: "https://upload.wikimedia.org/wikipedia/commons/6/66/Candy_icon.svg" // Gambar permen
  },
  {
    question: "Ani memiliki 5 uang kertas Rp2.000 dan 3 uang koin Rp500. Berapa total uang Ani?",
    options: ["Rp10.500", "Rp11.000", "Rp12.000", "Rp13.000"],
    correctAnswer: "Rp11.500",
    image: "https://upload.wikimedia.org/wikipedia/commons/f/f5/Money.svg" // Gambar uang
  },
  {
    question: "Sebuah lingkaran memiliki diameter 14 cm. Berapa panjang jari-jarinya?",
    options: ["5 cm", "6 cm", "7 cm", "8 cm"],
    correctAnswer: "7 cm",
    image: "https://upload.wikimedia.org/wikipedia/commons/e/e0/Circle_-_black_simple.svg" // Gambar lingkaran
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
    <h2>Kuis Selesai!</h2>
    <p>Skor Anda: ${score} dari ${quizQuestions.length}</p>
    <p>Persentase Skor: ${scorePercentage}%</p>
    <a class="nav-link" href="index1.php" style="float: right;">Back</a>
  `;
}

// Add event listener to start the quiz
document.getElementById("start-button").addEventListener("click", startQuiz);
