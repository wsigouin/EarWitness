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
    <script src= "js/jquery-3.1.1.min.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">


    <script src= "js/bootstrap.min.js"></script>

</head>

<body>
<div class = "navbar">
    <p> Earwitness Survey </p>
</div>
<div class = "mainindex">
    <div class= "middle">
        <p>Welcome to our study.</p>
        <p>You will be listening to an audiotape of variable length.</p>
        <p>Please listen carefully to the tape and prepare to answer some questions about it later. If you wish, you may take notes on the paper provided.</p>
        <p>By participating in this study, you agree to the terms outlined in <b><a href ="https://drive.google.com/open?id=0B4bH05OG9jgDbzdpZTBjU1Fzd1k">**THIS DOCUMENT**</a> </b>. Please read it carefully before you proceed. </p>
        <p><b>DO NOT USE THE BACK OR REFRESH BUTTONS DURING THIS TEST!</b></p>
        <p>You may give your name in order to receive acknowledgment of your participation, <b> your name is not stored alongside your answers, it is purely for participation. </b></p>
        <p>You may make notes if you wish.</p>

        <p>Enter the code given to you and press <i>Start Survey</i> when you are ready to listen to the audiotape.</p>
        <br>
        <form name ="subForm" class="form-horizontal" action = "php/audioOne.php" method = "POST">
            <fieldset>
                <div class="form-group" id ="indexForm">
                    <label for="codeInput">Code</label><br>
                    <input type="text" name="codeInput" id="codeInput"/>
                </div>
                <div class="form-group" id ="indexForm">
                    <label for="codeInput">Full Name: </label><br>
                    <input type="text" name="nameInput" id="nameInput"/>
                </div>
                <div class="form-group" id ="indexForm">
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Start Survey</button>
                </div>
            </fieldset>
        </form>
        <?php
        if($_SESSION["invalid"]){
            echo "<p> The code you previously entered is invalid </p>";
        }
        ?>

    </div>
</div>


<script src="js/scripts.js"></script>
</body>
</html>
