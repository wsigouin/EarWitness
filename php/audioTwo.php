<?php
session_start();
if($_SESSION["attempts"] == 0) {
    $_SESSION["confidence"] = array($_POST["minutesRadio"], $_POST["confidenceMinRange"], $_POST["weekRadio"], $_POST["confidenceWeekRange"], $_POST["twoRadio"], $_POST["confidenceTwoRange"]);
}

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
  <div class = "mainindex">
    <div class= "middle">
      <p>Please interact with the audio elements below to listen to the voice clips.</p>
        <?php
        if($_SESSION["attempts"] == 0) {
           echo "<p> Once you have listened to them all, attempt to commit their order to memory, then proceed by pressing continue.</p >
        <p> Listen to each of the audiotapes <u>at least one time</u> before proceeding .</p>";
        }
        ?>

        <br>
      <label for="audio1">Audio Clip One </label>
      <audio controls name="audio1">
        <source src="../audio/voice3_30Seconds.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
      <br>

      <label for="audio2">Audio Clip Two </label>
      <audio controls name="audio2">
        <source src="<?php
        if($_SESSION["position"] == "1" || $_SESSION["position"] == "2" ){
            echo "../audio/voice1_30Seconds.mp3";
        }
        else{
            echo "../audio/voice2_30Seconds.mp3";
        }
        ?>" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
      <br>

      <label for="audio3">Audio Clip Three </label>
      <audio controls name="audio3">
        <source src="<?php
        if($_SESSION["position"] == "1" || $_SESSION["position"] == "2" ){
            echo "../audio/voice2_30Seconds.mp3";
        }
        else{
            echo "../audio/voice1_30Seconds.mp3";
        }
        ?>" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
      <br>


      <label for="audio4">Audio Clip Four </label>
      <audio controls name="audio4">
          <source src="../audio/voice4_30Seconds.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
      <br>
      <a href="QSetB.php"><button type="button" class="btn btn-success" >Continue</button></a>

    </div>
  </div>


  <script src="../js/scripts.js"></script>
</body>
</html>
