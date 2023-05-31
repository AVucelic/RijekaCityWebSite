<!-- Included appropriate php file-->

<?php
   $name = 'Comments';
   include 'assets/inc/top_nav.php';

?>
<!-- Included appropriate php file-->

<div id="nav-mobile">
    <?php include 'assets/inc/mobile_nav.php'; ?>
</div>
<!-- Included appropriate php file-->

<div id="nav-desktop">
   <?php include 'assets/inc/nav2.php'; ?>
</div>
<?php

include 'assets/inc/dbConn.php';

$sql = "SELECT * FROM comments";
$res = mysqli_query($mysqli, $sql);

if (
    $_SERVER['REQUEST_METHOD'] === 'POST'
    && !empty($_POST['name'])
    && !empty($_POST['comment'])
) {
    $sql = "INSERT INTO comments (name, comment) VALUES (?, ?)";
    $stmt = $mysqli->prepare($sql);

    $stmt->bind_param("ss", $_POST['name'], $_POST['comment']);
    $stmt->execute();

    $sql = "SELECT * from comments";
    $res = mysqli_query($mysqli, $sql);
}

?>
<body>

    <form method="POST" name="form" action="<?php echo $_SERVER['PHP_SELF']; ?> " class="comment-form">
        <h3 class="comment-form__title">What do you think? Leave a comment!</h3>
        <div id="list" class="comment-list">

            <?php
            if (mysqli_num_rows($res) > 0) {
                $tableRows = "";
                while ($row = mysqli_fetch_assoc($res)) {

                    $tableRows .= "<tr><td class='comment-list__name'>" . $row['name'] . "</td><td>" .
                        $row['comment'] . "</td><td>" . $row['date'] . "</td></tr>";

                }
                echo "<table><thead><tr><th>Name</th><th>Comment</th><th>Date</th></tr></thead><tbody>" .
                    $tableRows . "</tbody></table>";
            }

            ?>

        </div>
        <hr class="comment-form__hr" />
        <h3 class="comment-form__title">What do you have to say?</h3>

        <label for="name" class="comment-form__label">First name:</label>
        <br>
        <input type="text" name="name" class="comment-form__input" placeholder="Arian" />
        </br>
        <label for="comment" class="comment-form__label">Comment:</label>
        <br>
        <textarea name="comment" rows="4" cols="30" placeholder="What is your opinion on this website?"
            class="comment-form__textarea"></textarea>
        <br>
        <input type="submit" value="Submit your comment!" onclick="validation();" class="comment-form__submit" />
    </form>
<!-- Included appropriate php file-->

    <?php 
include "./assets/inc/footer.php"
?>