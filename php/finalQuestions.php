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
    <p> EarWitness Survey </p>
</div>
<div class = "main">
    <div class= "middle">
        <form action="final.php" method="POST">
            <div class="form-group" id="div_q1">
                <label class="control-label requiredField" for="q1y">
                    1. When listening to the audiotape, did you attempt to remember the voice?
                    <span class="asteriskField">
           *
          </span>
                </label>
                <div class="">
                    <label class="radio-inline">
                        <input name="q1" id="q1y" type="radio" value="Yes"/>
                        Yes
                    </label>
                    <label class="radio-inline">
                        <input name="q1" id="q1n" type="radio" value="No"/>
                        No
                    </label>
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label ">
                    2. If you did attempt to remember the voice, what technique(s) did you use? CHECK ALL THAT APPLY.
                </label>
                <div class=" ">
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q2" id="q2a" type="checkbox" value="a"/>
                            a. I tried to notice the emotional tone of the voice
                        </label>

                    </div>
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q2" id="q2b" type="checkbox" value="b"/>
                            b. I tried to notice the tone (frequency) of the voice
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q2" id="q2c" type="checkbox" value="c"/>
                            c. I tried to notice other characteristics of the voice (e.g. pace, accent, etc.)
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q2" id="q2d" type="checkbox" value="d"/>
                            d. I tried to associate the voice with someone I know
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q2" id="q2e" type="checkbox" value="e"/>
                            e. I tried to describe the voice in words to myself
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q2" id="q2f"  type="checkbox" value="f"/>
                            f. Other (explain or describe)
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label " for="q3">
                    If you checked c or f in the previous question, please provide an explanation below:
                </label>
                <textarea class="form-control" cols="40" id="q3" name="q3" rows="10"></textarea>
            </div>
            <div class="form-group" id="div_radio2">
                <label class="control-label " for="q3y">
                    3. When listening to the audiotape, did you attempt to remember the content
                    of the audiotape?
                </label>
                <div class="">
                    <label class="radio-inline">
                        <input name="q3" id="q3y" type="radio" value="Yes"/>
                        Yes
                    </label>
                    <label class="radio-inline">
                        <input name="q3" id="q3n" type="radio" value="No"/>
                        No
                    </label>
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label ">
                    4. If you did attempt to remember the content, what technique(s) did you use?
                    CHECK ALL THAT APPLY.
                </label>
                <div class=" ">
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q4" id="q4a" type="checkbox" value="a"/>
                            a. I tried to notice the emotional tone of the voice
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q4" id="q4b" type="checkbox" value="b"/>
                            b. I tried to notice what was being said and remember it verbatim
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q4" id="q4c" type="checkbox" value="c"/>
                            c. I tried to notice what was being said and remember the ideas
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q4" id="q4d" type="checkbox" value="d"/>
                            d. I tried to notice what was being said and remember only the key facts
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q4" id="q4e" type="checkbox" value="e"/>
                            e. I tried to picture in my mind what was being described
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q4" id="q4f" type="checkbox" value="f"/>
                            f. Other (explain or describe)
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label " for="q4explain">
                    If you chose e or f for the previous question, please provide an explanation below:
                </label>
                <textarea class="form-control" cols="40" id="q4explain" name="q4explain" rows="10"></textarea>
            </div>
            <div class="form-group ">
                <label class="control-label ">
                    5. What information or technique(s) did you use during the identification test to help you identify the target voice?
                </label>
                <div class=" ">
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q5" id="q5a" type="checkbox" value="a"/>
                            a. I used the frequency of the voice
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q5" id="q5b" type="checkbox" value="b"/>
                            b. I used the emotional tone of the voice
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox">
                            <input name="q5" id="q5c" type="checkbox" value="c"/>
                            c. I used other characteristics of the voice
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label " for="textarea2">
                    If you chose c in the previous question, please provide an explanation below:
                </label>
                <textarea class="form-control" cols="40" id="textarea2" name="textarea2" rows="10"></textarea>
            </div>
            <div class="form-group ">
                <label class="control-label ">
                    6. Did you find the target voice to be?  (choose one)
                </label>
                <div class="">
                    <div class="radio">
                        <label class="radio">
                            <input name="q6" id="q6a" type="radio" value="a"/>
                            a. very typical of voices in this region
                        </label>
                    </div>
                    <div class="radio">
                        <label class="radio">
                            <input name="q6" id="q6b" type="radio" value="b"/>
                            b. somewhat typical of voices in this region
                        </label>
                    </div>
                    <div class="radio">
                        <label class="radio">
                            <input name="q6" id="q6c" type="radio" value="c"/>
                            c. somewhat less typical of voices in this region
                        </label>
                    </div>
                    <div class="radio">
                        <label class="radio">
                            <input name="q6" id="q6d" type="radio" value="d"/>
                            d. very less typical of voices in this region
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label ">
                    7. Would you describe the target voice as being the same accent as yours?
                </label>
                <div class="form-group">
                    <div class="radio-inline">
                        <label class="radio">
                            <input name = "q7" id="q7y" type="radio" value="Yes"/>
                            Yes
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label class="radio">
                            <input name = "q7" id="q7n" type="radio" value="No"/>
                            No
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <label class="control-label " for="q8i">
                    8. Please mention three things you remember hearing in the audiotape
                </label>
                <input class="form-control" id="q8i" name="q8i" type="text"/>
            </div>
            <div class="form-group ">
                <input class="form-control" id="q8ii" name="q8ii" type="text"/>
            </div>
            <div class="form-group ">
                <input class="form-control" id="q8iii" name="q8iii" type="text"/>
            </div>
            <div class="form-group">
                <div>
                </div>
            </div>

            <div class="form-group" id="div_radio2">
                <label class="control-label " for="q9y">
                    9. Did you make notes to help you remember?
                </label>
                <div class="">
                    <label class="radio-inline">
                        <input name="q9" id="q9y" type="radio" value="Yes"/>
                        Yes
                    </label>
                    <label class="radio-inline">
                        <input name="q9" id="q9n" type="radio" value="No"/>
                        No
                    </label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" id="submit" name="submit" class="btn btn-primary">Continue</button>
            </div>

        </form>

    </div>
</div>



<script src="../js/scripts.js"></script>
</body>
</html>
