<!--codewithcurious.com-->

<!DOCTYPE html>
<html>
<head>
  <title>Quiz App</title>
  <link rel="stylesheet" type="text/css" href="kuis.css">
</head>
<body>
  <div class="quiz-container">
    <h1>Quiz App</h1>
    <div id="question-container">
      <img id="question-image" src="" alt="Question Image" style="width: 100%; border-radius: 10px; margin-bottom: 20px;">
      <p id="question-text"></p>
      <div id="answer-buttons"></div>
    </div>
    <div id="controls-container">
      <button id="start-button">Start Quiz</button>
      <div id="timer-container">
        
        <span id="timer-text">Time Left: <span id="timer">0</span></span>
      </div>
    </div>
  </div>
  <script src="kuis.js"></script>
</body>
</html>