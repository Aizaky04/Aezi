//codewithcurious.com

// Define an array of quiz questions
// Mendefinisikan array yang berisi pertanyaan kuis
// Define an array of quiz questions
const quizQuestions = [
    {
      question: "Apa ide pokok dari paragraf ini? 'Bermain sepak bola dapat membantu tubuh tetap sehat dan bugar. Selain itu, olahraga ini juga melatih kerja sama tim dan meningkatkan keterampilan sosial.'",
      options: ["Menjaga kesehatan tubuh", "Olahraga sepak bola", "Meningkatkan keterampilan sosial", "Bermain bersama teman"],
      correctAnswer: "Bermain sepak bola",
      image: "https://upload.wikimedia.org/wikipedia/commons/e/e5/Soccer_player.jpg" // Image related to football
    },
    {
      question: "Apa kesimpulan dari paragraf ini? 'Membaca buku setiap hari dapat meningkatkan pengetahuan dan memperluas wawasan. Dengan membaca, kita bisa belajar banyak hal baru dan menarik.'",
      options: ["Membaca adalah aktivitas yang menyenangkan", "Membaca memperluas wawasan", "Buku adalah sumber ilmu", "Membaca mempercepat belajar"],
      correctAnswer: "Membaca memperluas wawasan",
      image: "https://upload.wikimedia.org/wikipedia/commons/4/4e/Bookshelf.jpg" // Image related to reading
    },
    {
      question: "Apa ide pokok dari paragraf ini? 'Ikan adalah salah satu sumber protein yang sangat baik untuk kesehatan tubuh. Ikan mengandung banyak vitamin dan mineral yang diperlukan tubuh.'",
      options: ["Kesehatan tubuh", "Manfaat ikan", "Ikan sebagai sumber protein", "Ikan untuk anak-anak"],
      correctAnswer: "Ikan sebagai sumber protein",
      image: "https://upload.wikimedia.org/wikipedia/commons/1/1c/Fish_dishes.jpg" // Image related to fish
    },
    {
      question: "Apa kesimpulan dari paragraf ini? 'Berkebun di rumah sangat bermanfaat. Selain mendapatkan hasil yang segar, berkebun juga bisa mengurangi stres dan memberikan kepuasan tersendiri.'",
      options: ["Berkebun bisa mengurangi stres", "Berkebun memberikan hasil segar", "Berkebun bisa membuat orang senang", "Berkebun menguntungkan"],
      correctAnswer: "Berkebun bisa mengurangi stres",
      image: "https://upload.wikimedia.org/wikipedia/commons/c/c3/Garden_in_the_spring.jpg" // Image related to gardening
    }
];
// Variables to track quiz state
// Variabel untuk melacak status kuis
let currentQuestionIndex = 0; // Indeks pertanyaan saat ini
let score = 0; // Skor pemain
let timeLeft = 30; // Waktu yang tersisa dalam detik
let timerInterval; // Variabel untuk menyimpan interval timer

// Function to start the quiz
// Fungsi untuk memulai kuis
function startQuiz() {
  // Hide the start button and display the first question
  // Sembunyikan tombol mulai dan tampilkan pertanyaan pertama
  document.getElementById("start-button").style.display = "none";
  displayQuestion(); // Tampilkan pertanyaan
  startTimer(); // Mulai timer
}

// Function to display a question and its options
// Fungsi untuk menampilkan pertanyaan dan opsi jawabannya
function displayQuestion() {
  const currentQuestion = quizQuestions[currentQuestionIndex]; // Ambil pertanyaan saat ini
  const questionText = document.getElementById("question-text"); // Elemen untuk menampilkan teks pertanyaan
  const answerButtons = document.getElementById("answer-buttons"); // Elemen untuk menampilkan tombol jawaban
  const questionImage = document.getElementById("question-image"); // Elemen untuk menampilkan gambar

  // Clear previous question and answer options
  // Hapus pertanyaan dan opsi jawaban sebelumnya
  questionText.innerHTML = "";
  answerButtons.innerHTML = "";
  questionImage.src = ""; // Hapus gambar sebelumnya

  // Display the current question
  // Tampilkan pertanyaan saat ini
  questionText.innerHTML = currentQuestion.question;

  // Set the image source
  // Setel sumber gambar
  questionImage.src = currentQuestion.image;

  // Create answer buttons for each option
  // Buat tombol jawaban untuk setiap opsi
  currentQuestion.options.forEach(option => {
    const button = document.createElement("button"); // Buat elemen tombol
    button.innerText = option; // Set teks tombol
    button.classList.add("answer-button"); // Tambahkan kelas CSS
    answerButtons.appendChild(button); // Tambahkan tombol ke elemen jawaban

    // Add click event listener to check the answer
    // Tambahkan pendengar acara klik untuk memeriksa jawaban
    button.addEventListener("click", function() {
      checkAnswer(option); // Panggil fungsi untuk memeriksa jawaban
    });
  });
}

// Function to check the selected answer
// Fungsi untuk memeriksa jawaban yang dipilih
function checkAnswer(selectedOption) {
  const currentQuestion = quizQuestions[currentQuestionIndex]; // Ambil pertanyaan saat ini

  // Check if the selected answer is correct
  // Periksa apakah jawaban yang dipilih benar
  if (selectedOption === currentQuestion.correctAnswer) {
    score++; // Tambah skor jika jawaban benar
  }

  // Move to the next question or end the quiz if all questions are answered
  // Pindah ke pertanyaan berikutnya atau akhiri kuis jika semua pertanyaan telah dijawab
  currentQuestionIndex++;

  if (currentQuestionIndex < quizQuestions.length) {
    displayQuestion(); // Tampilkan pertanyaan berikutnya
  } else {
    endQuiz(); // Akhiri kuis jika tidak ada pertanyaan tersisa
  }
}

// Function to start the timer
// Fungsi untuk memulai timer
function startTimer() {
  timerInterval = setInterval(function() {
    timeLeft--; // Kurangi waktu yang tersisa

    // Update the timer text
    // Perbarui teks timer
    document.getElementById("timer").textContent = timeLeft;

    // End the quiz if time runs out
    // Akhiri kuis jika waktu habis
    if (timeLeft <= 0) {
      endQuiz(); // Panggil fungsi untuk mengakhiri kuis
    }
  }, 1000); // Setiap 1000 ms (1 detik)
}

// Function to end the quiz
// Fungsi untuk mengakhiri kuis
// Fungsi untuk mengakhiri kuis
function endQuiz() {
  // Stop the timer
  // Hentikan timer
  clearInterval(timerInterval);

  // Calculate the score percentage
  // Hitung persentase skor
  const scorePercentage = (score / quizQuestions.length) * 100;

  // Display the final score
  // Tampilkan skor akhir
  const questionContainer = document.getElementById("question-container");
  questionContainer.innerHTML = `
    <h2>Quiz Completed!</h2>
    <p>Your Score: ${score} out of ${quizQuestions.length}</p>
    <p>Score Percentage: ${scorePercentage}%</p>
  `;
}

// Add event listener to start the quiz when the start button is clicked
// Tambahkan pendengar acara untuk memulai kuis saat tombol mulai diklik
document.getElementById("start-button").addEventListener("click", startQuiz);