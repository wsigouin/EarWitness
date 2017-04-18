<?php
    if($_SESSION["answer3"]){
        $_SESSION["answer4"] = $_POST["choiceRadio"];
    }
    else if($_SESSION["answer2"]){
        $_SESSION["answer3"] = $_POST["choiceRadio"];
    }
    else if($_SESSION["answer1"]){
        $_SESSION["answer2"] = $_POST["choiceRadio"];
    }
    else{
        $_SESSION["answer1"] = $_POST["choiceRadio"];
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
    <p>You may have another opportunity to identify the correct voice. If you wish, you will be allowed to listen to each of the voices one more time before you choose the voice you identify as the original voice you heard. Would you like to try again?</p>
    <br>
    <div>
      <a href="audioTwo.php"><button type="button" class="btn btn-success" >Yes</button></a>
      <a href="finalQuestions.php"><button type="button" class="btn btn-warning" >No</button></a>
    </div>

  </div>
</div>


<script src="../js/scripts.js"></script>
</body>
</html>
