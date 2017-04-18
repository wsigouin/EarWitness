<?php
session_start();
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>EarWitness Study</title>
  <meta name="description" content="">
  <meta name="author" content="William Sigouin">
  <script src= "../js/jquery-3.1.1.min.js"></script>

  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/styles.css" rel="stylesheet">


  <script src= "../js/bootstrap.min.js"></script>

</head>

<body>
  <div class = "navbar">
    <p> EarWitness Survey </p>
  </div>
  <div class = "main">
    <div class= "middle">
      <p> Do you think you could identify the voice you just heard (the target voice) if you heard it again:</p>

      <form action = "audioTwo.php" method = "POST">
        <div class="form-group">
        <label for="minutesRadio">Within a few minutes?</label>
          <div>
            <div class="radio-inline">
              <label for="minutesRadio">
                <input type="radio" name="minutesRadio" id="minutesRadio" value="yes" checked="checked">
                Yes
              </label>
            </div>
            <div class="radio-inline">
              <label for="minutesRadio">
                <input type="radio" name="minutesRadio" id="minutesRadio" value="no">
                No
              </label>
            </div>
          </div>
        </div>

            <div class="form-group">
                <label for="confidenceMinRange">If yes, how confident are you? (0-100%)</label>
                <input type="text" name="confidenceMinRange" id="confidenceMinRange"/>
            </div>

        <div class="form-group">
        <label for="weekRadio">Within a week?</label>
          <div>
            <div class="radio-inline">
              <label for="weekRadio">
                <input type="radio" name="weekRadio" id="weekRadio" value="yes" checked="checked">
                Yes
              </label>
            </div>
            <div class="radio-inline">
              <label for="weekRadio">
                <input type="radio" name="weekRadio" id="weekRadio" value="no">
                No
              </label>
            </div>
          </div>
        </div>

            <div class="form-group">
                <label for="confidenceWeekRange">If yes, how confident are you? (0-100%)</label>
                <input type="text" name="confidenceWeekRange" id="confidenceWeekRange"/>
            </div>

        <div class="form-group">
        <label for="twoRadio">Within two weeks?</label>
          <div>
            <div class="radio-inline">
              <label for="twoRadio-0">
                <input type="radio" name="twoRadio" id="twoRadio" value="yes" checked="checked">
                Yes
              </label>
            </div>
            <div class="radio-inline">
              <label for="twoRadio-1">
                <input type="radio" name="twoRadio" id="twoRadio" value="no">
                No
              </label>
            </div>
          </div>
        </div>

            <div class="form-group">
                <label for="confidenceTwoRange">If yes, how confident are you? (0-100%)</label>
                <input type="text" name="confidenceTwoRange" id="confidenceTwoRange"/>
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
