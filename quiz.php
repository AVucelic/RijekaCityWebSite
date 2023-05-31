<!-- Included appropriate php file-->
<?php
    $name = 'Quiz';
    include 'assets/inc/top_nav.php';

    
?><!-- Included appropriate php file-->

<div id="nav-mobile">
    <?php include 'assets/inc/mobile_nav.php'; ?>
</div>
<!-- Included appropriate php file-->

<div id="nav-desktop">
    <?php include 'assets/inc/nav2.php'; ?>
</div>
    <main class="main1">
        <div>
            <h1 class="qs">Quiz</h1>
        </div>
        <div>
            <form method="post" action="submit" onsubmit="return validateForm();" id="quiz-form">
                <div>
                    <p>1. Rijeka was under Italian influence?</p>
                    
                    <p><input type="radio" name="q1" value="a" id="q1True"><label for="q1True">True</label></p>
                    <p><input type="radio" name="q1" value="b" id="q1False"><label for="q1False">False</label></p>
</div>


                <div>
                    <p>2. Which of these is not event in Rijeka?</p>
                    <p><input type="radio" name="q2" value="a" id="q2a"><label for="q2a">a. Summer Night Festival</label></p>
                    <p><input type="radio" name="q2" value="b" id="q2b"><label for="q2b">b. Carnival</label></p>
                    <p><input type="radio" name="q2" value="c" id="q2c"><label for="q2c">c. Film Festival</label></p>
                    <p><input type="radio" name="q2" value="d" id="q2d"><label for="q2d">d. Rijeka Burger Days</label></p>
</div>

                <div>
                    <p>3. There is a National Theater call after which famous composer?</p>
                    
                    <p><input type="radio" name="q3" value="a" id="q3a"><label for="q3a">a. Ivan Zajc</label></p>
                    <p><input type="radio" name="q3" value="b" id="q3b"><label for="q3b">b. Ivan Matetic Ronjgov</label></p>
                    <p><input type="radio" name="q3" value="c" id="q3c"><label for="q3c">c. Eugen Kumicic</label></p>

                </div>

                <div>
                    <p>4. Is Rijeka located in Croatia?</p>
                    
                    <p><input type="radio" name="q4" value="a" id="q4True"><label for="q4True">True</label></p>
                    <p><input type="radio" name="q4" value="b" id="q4False"><label for="q4False">False</label></p>

                </div>

                <div>
                    <p>5. Trsat castle is not a castle?</p>
                    
                    <p><input type="radio" name="q5" value="a" id="q5True"><label for="q5True">True</label></p>
                    <p><input type="radio" name="q5" value="b" id="q5False"><label for="q5False">False</label></p>

                </div>

                <div>
                    <p>6. MOK Rijeka plays volleyball in Dvorana Mladosti?</p>
                    
                    <p><input type="radio" name="q6" value="a" id="q6True"><label for="q6True">True</label></p>
                    <p><input type="radio" name="q6" value="b" id="q6False"><label for="q6False">False</label></p>

                </div>

                <div>
                    <p>7. When was HNK Rijeka established?</p>
                     
                    <p><input type="radio" name="q7" value="a" id="q7a"><label for="q7a">a. 1991.</label></p>
                    <p><input type="radio" name="q7" value="b" id="q7b"><label for="q7b">b. 2001.</label></p>
                    <p><input type="radio" name="q7" value="c" id="q7c"><label for="q7c">c. 1946.</label></p>
                    <p><input type="radio" name="q7" value="d" id="q7d"><label for="q7d">d. 1932.</label></p>
                </div>

                <div>
                    <p>8. Zvončari are the highlight of Carnival?</p>
                    <p><input type="radio" name="q8" value="a" id="q8True"><label for="q8True">True</label></p>
                    <p><input type="radio" name="q8" value="b" id="q8False"><label for="q8False">False</label></p>

                </div>

                <div>
                    <p>9. There are no films at Film Festival?</p>
                    <p><input type="radio" name="q9" value="a" id="q9True"><label for="q9True">True</label></p>
                    <p><input type="radio" name="q9" value="b" id="q9False"><label for="q9False">False</label></p>

                </div>

                <div>
                    <p>10. Rijeka was under which contry?</p>
                    
                    <p><input type="radio" name="q10" value="a" id="q10a"><label for="q10a">a. Serbia</label></p>
                    <p><input type="radio" name="q10" value="b" id="q10b"><label for="q10b">b. Vietnam</label></p>
                    <p><input type="radio" name="q10" value="c" id="q10c"><label for="q10c">c. Croatia</label></p>
                    <p><input type="radio" name="q10" value="d" id="q10d"><label for="q10d">d. Vetican</label></p>

                </div>
                
                
                
                

                

                <input type="submit" name="submit" value="Submit" class="submit">
            </form>

            <?php
                if(isset($_POST['submit'])){
                    
                    include 'assets/inc/dbConn.php';


                    //why is form going through and not being stopped by javascript form 
                    $answers = array(
                        isset($_POST['q1']) ? $_POST['q1'] : 'default_value',
                        isset($_POST['q2']) ? $_POST['q2'] : 'default_value',
                        isset($_POST['q3']) ? $_POST['q3'] : 'default_value',
                        isset($_POST['q4']) ? $_POST['q4'] : 'default_value',
                        isset($_POST['q5']) ? $_POST['q5'] : 'default_value',
                        isset($_POST['q6']) ? $_POST['q6'] : 'default_value',
                        isset($_POST['q7']) ? $_POST['q7'] : 'default_value',
                        isset($_POST['q8']) ? $_POST['q8'] : 'default_value',
                        isset($_POST['q9']) ? $_POST['q9'] : 'default_value',
                        isset($_POST['q10']) ? $_POST['q10'] : 'default_value'
                    );
                    //$answers = array($_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'], $_POST['q5'], $_POST['q6'], $_POST['q7'], $_POST['q8'], $_POST['q9'], $_POST['q10']);
                    $score = 0;

                    for ($i = 0; $i < count($answers); $i++) {
                        $sql = "SELECT answer FROM quiz WHERE question_number = " . ($i + 1); // Add 1 to the question number to match the database
                        $result = mysqli_query($mysqli, $sql);
                        $row = mysqli_fetch_assoc($result); // Fetch the answer from the result object
                        $correct_answer = $row['answer'];
                        if(isset($answers[$i])){
                            if ($answers[$i] == $correct_answer) {
                                $score++;
                            }
                        }
                        
                    }
                    echo "<p class='score'>$score / 10</p>";
                    mysqli_close($mysqli);



                }


            ?>
        </div><!-- Included appropriate php file-->

<?php
    include "assets/inc/footer.php";
?>