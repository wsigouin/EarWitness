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
  <div class = "mainindex">
    <div class= "middle">
      <p>Please interact with the audio element below and <b><?php echo $_SESSION["instructions"]; ?></b></p>
      <p>Once you are complete, hit Continue to continue the study.</p>

      <audio controls>
        <source src="<?php
        if($_SESSION["target"] == "A"){
            if($_SESSION["length"] == "3"){
                echo "../audio/voice1.mp3";
            }
            else{
                echo "../audio/voice1_30Seconds.mp3";
            }
        }
        else{
            if($_SESSION["length"] == "3"){
                echo "../audio/voice2.mp3";
            }
            else{
                echo "../audio/voice2_30Seconds.mp3";
            }
        }

        ?>" type="audio/mp3">
        Your browser does not support the audio element.
      </audio>
      <br>
      <a href="QSetA.php"><button type="button" class="btn btn-success" >Continue</button></a>

  </div>


  <script src="../js/scripts.js"></script>
</body>
</html>
