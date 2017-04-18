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
        <p>Thank you <?php echo $_SESSION["name"]; ?> for your participation in this study of Ear-Witness Identification. Please do not discuss the nature of the study with others until it is completed. A post-study information sheet will be posted following data collection and analysis. This will describe the variables and results. The information sheet will be posted outside the offices of the investigators and can be made available through email, upon request. The date when results are expected to be available is August 1, 2017 or earlier.
            <br>Web address: reedelder@algomau.ca or dupuis@algomau.ca</p>
        <p> Click <a href = "createPDF.php">here</a> to get a document acknowledging your participation. </p>
            <br><br>
            Hit Submit to finalize your results.
        </p>
        <br>
        <a><button href="../index.php" type="button" class="btn btn-success" >Submit</button></a>

    </div>
</div>


<script src="../js/scripts.js"></script>
</body>
</html>
