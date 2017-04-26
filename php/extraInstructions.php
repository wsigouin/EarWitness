<?php
session_start();
$code = $_POST["codeInput"];
$_SESSION["code"] = $code;
$_SESSION["invalid"] = false;
$_SESSION["name"] = $_POST["nameInput"];

if($code[0] == "V"){
    $_SESSION["instructions"] = "attend to the following voice.";
}
else if($code[0] == "C"){
    $_SESSION["instructions"] = "listen to the following audiotape.";
}
else{
    $_SESSION["invalid"] = true;
    header("Location: ../index.php");
}

$_SESSION["length"] = $code[1];

if(!($_SESSION["length"] == "3" || $_SESSION["length"] == "4")){
    $_SESSION["invalid"] = true;
    header("Location: ../index.php");
}

$_SESSION["target"] = $code[2];

if(!($_SESSION["target"] == "A" || $_SESSION["target"] == "B")){
    $_SESSION["invalid"] = true;
    header("Location: ../index.php");
}

$_SESSION["position"] = $code[3];

if(!($_SESSION["position"] == "2" || $_SESSION["position"] == "3" || $_SESSION["position"] == "1" || $_SESSION["position"] == "4")){
    $_SESSION["invalid"] = true;
    header("Location: ../index.php");
}

$_SESSION["gender"] = $code[4];

if(!($_SESSION["gender"] == "M" || $_SESSION["gender"] == "F")){
    $_SESSION["invalid"] = true;
    header("Location: ../index.php");
}

$_SESSION["number"] = substr($code,5, (strlen($code)- 6));
$_SESSION["attempts"] = 0;

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
        <p>By participating in this study, you agree to the terms outlined in this <b><a href ="downloadConsentPDF.php">**CONSENT FORM**</a> </b>. Please read it carefully before you proceed. </p>
        <p><b>DO NOT USE THE BACK OR REFRESH BUTTONS DURING THIS TEST!</b></p>
        <a href="audioOne.php"><button type="button" class="btn btn-success" >Continue</button></a>

    </div>


    <script src="../js/scripts.js"></script>
</body>
</html>
