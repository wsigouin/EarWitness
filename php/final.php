<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "**";
    $dbname = "earwitness";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "FAILED TO CONNECT!!";
    }

    //info
    $code = $_SESSION["code"];
    $id = $_SESSION["number"];
    $ins = $_SESSION["instructions"];
    $len = $_SESSION["length"];
    $tar = $_SESSION["target"];
    $pos = $_SESSION["position"];
    $gen = $_SESSION["gender"];
    $attempts = $_SESSION["attempts"];

    //confidence questions
    $minConf = $_SESSION["confidence"][0];
    $minConfPercent = $_SESSION["confidence"][1];
    $weekConf = $_SESSION["confidence"][2];
    $weekConfPercent = $_SESSION["confidence"][3];
    $twoConf = $_SESSION["confidence"][4];
    $twoConfPercent = $_SESSION["confidence"][5];

    //guess as to right answer
    $ans1 = $_SESSION["answer1"];
    $conf1 = $_SESSION["confidence1"];

    if($attempts >= 2){
        $ans2 = $_SESSION["answer2"];
        $conf2 = $_SESSION["confidence2"];
    }
    else{
        $ans2 = "N";
        $conf2 = "N";
    }

    if($attempts >= 3){
        $ans3 = $_SESSION["answer3"];
        $conf3 = $_SESSION["confidence3"];
    }
    else{
        $ans3 = "N";
        $conf3 = "N";
    }

    if($attempts >= 4){
        $ans4 = $_SESSION["answer4"];
        $conf4 = $_SESSION["confidence4"];
    }
    else{
        $ans4 = "N";
        $conf4 = "N";
    }

    //final questions
    $q1 = $_POST["q1"];
    $q2 = "";
    if(isset($_POST['q2a'])){
        $q2 = $q2 . $_POST['q2a'];
    }
    if(isset($_POST['q2b'])){
        $q2 = $q2 . $_POST['q2b'];
    }
    if(isset($_POST['q2c'])){
        $q2 = $q2 . $_POST['q2c'];
    }
    if(isset($_POST['q2d'])){
        $q2 = $q2 . $_POST['q2d'];
    }
    if(isset($_POST['q2e'])){
        $q2 = $q2 . $_POST['q2e'];
    }
    if(isset($_POST['q2f'])){
        $q2 = $q2 . $_POST['q2f'];
    }

    $q2ex = $_POST["q2ex"];
    $q3 = $_POST["q3"];

    $q4 = "";
    if(isset($_POST['q4a'])){
        $q4 = $q4 . $_POST['q4a'];
    }
    if(isset($_POST['q4b'])){
        $q4 = $q4 . $_POST['q4b'];
    }
    if(isset($_POST['q4c'])){
        $q4 = $q4 . $_POST['q4c'];
    }
    if(isset($_POST['q4d'])){
        $q4 = $q4 . $_POST['q4d'];
    }
    if(isset($_POST['q4e'])){
        $q4 = $q4 . $_POST['q4e'];
    }
    if(isset($_POST['q4f'])){
        $q4 = $q4 . $_POST['q4f'];
    }

    $q4ex = $_POST["q4ex"];

    $q5 = "";
    if(isset($_POST['q5a'])){
        $q5 = $q5 . $_POST['q5a'];
    }
    if(isset($_POST['q5b'])){
        $q5 = $q5 . $_POST['q5b'];
    }
    if(isset($_POST['q5c'])){
        $q5 = $q5 . $_POST['q5c'];
    }

    $q5ex = $_POST["q5ex"];
    $q6 = $_POST["q6"];
    $q7 = $_POST["q7"];
    $q8i = $_POST["q8i"];
    $q8ii = $_POST["q8ii"];
    $q8iii = $_POST["q8iii"];
    $q9 = $_POST["q9"];

    $consent = "No";
    if($_SESSION["downloadedConsent"]){
        $consent = "Yes";
    }

$query = "INSERT INTO survey_information VALUES (
          '$id','$gen','$code','$ins','$len',
          '$tar','$pos','$minConf','$minConfPercent','$weekConf',
          '$weekConfPercent','$twoConf','$twoConfPercent','$attempts','$ans1',
          '$conf1','$ans2','$conf2','$ans3','$conf3',
          '$ans4', '$conf4','$q1','$q2','$q2ex',
          '$q3','$q4','$q4ex','$q5','$q5ex',
          '$q6','$q7','$q8i','$q8ii','$q8iii',
          '$q9', $consent)";

    $result = $conn->query($query);

    $conn->close();
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
        <p>Thank you <?php echo $_SESSION["name"]; ?> for your participation in this study of Ear-Witness Identification. Please do not discuss the nature of the study with others until it is completed. A post-study information sheet will be posted following data collection and analysis. This will describe the variables and results. The information sheet will be posted outside the offices of the investigators and can be made available through email, upon request. The date when results are expected to be available is August 1, 2017 or earlier.</p>
           <p> <br>Web address: reedelder@algomau.ca or dupuis@algomau.ca</p>
        <br>
        <a href="credit.php" type="button" class="btn btn-success" >Continue</a>

    </div>
</div>


<script src="../js/scripts.js"></script>
</body>
</html>
