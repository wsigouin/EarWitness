<?php
session_start();
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Earwitness Study</title>
  <meta name="description" content="">
  <meta name="author" content="William Sigouin">
  <script src= "../js/jquery-3.1.1.min.js"></script>

  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/styles.css" rel="stylesheet">


  <script src= "../js/bootstrap.min.js"></script>

</head>

<body>
  <div class = "navbar">
    <p> Earwitness Survey </p>
  </div>
  <div class = "main">
    <div class= "middle">
      <p> Do you think you could identify the voice you just heard (the target voice) if you heard it again:</p>

      <form action = "redoChoice.php" method = "POST">
        <div class="form-group">
        <label>Which voice do you believe matched the original voice you heard?</label>
          <div>
            <div class="radio">
              <label for="choiceRadio-0">
                <input type="radio" name="choiceRadio" id="choiceRadio-0" value="1" checked="checked">
                Audio Clip One
              </label>
            </div>
            <div class="radio">
              <label for="choiceRadio-1">
                <input type="radio" name="choiceRadio" id="choiceRadio-1" value="2">
                Audio Clip Two
              </label>
            </div>
            <div class="radio">
              <label for="choiceRadio-2">
                <input type="radio" name="choiceRadio" id="choiceRadio-2" value="3">
                Audio Clip Three
              </label>
            </div>
            <div class="radio">
              <label for="choiceRadio-3">
                <input type="radio" name="choiceRadio" id="choiceRadio-3" value="4">
                Audio Clip Four
              </label>
            </div>
          </div>
        </div>

          <div class="form-group">

            <label for="pointsChoice">How confident are you? (0-100%)</label>
            <input type="text" name="pointsChoice" id="pointsChoice"/>
          </div>
          <div class="form-group">
            <button type="submit" id="submit" name="submit" class="btn btn-primary">Continue</button>
          </div>
      </form>
    <br>
    </div>
  </div>


  <script src="../js/scripts.js"></script>
</body>
</html>
