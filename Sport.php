<!-- Included appropriate php file-->
<?php
   $name = 'Sport in Rijeka';
   include 'assets/inc/top_nav.php';

?><!-- Included appropriate php file-->

<div id="nav-mobile">
    <?php include 'assets/inc/mobile_nav.php'; ?>
</div><!-- Included appropriate php file-->

<div id="nav-desktop">
   <?php include 'assets/inc/nav2.php'; ?>
</div>
    <main>
        <h1 class="cen">Famous sports in Rijeka</h1>
            <div class="wrapper">
                <div class="box au">
                    <a href="./Volley.php" >Volleyball
                    <img src="./assets/images/mokri.webp" class="pic" alt="mokri djecaci"></a>
                </div>
                <div class="box italy">
                    <a href="./football.php">Football
                    <img src="./assets/images/HNKRijeka-.png" class="pic" alt="football"></a>
                </div>
                <div class="box cro">
                    <a href="./Basketball.php">Basketball
                    <img src="./assets/images/fsv-removebg-preview.png" class="pic" alt="basket"></a>
                </div>
            </div>
    </main><!-- Included appropriate php file-->

    <?php 
include "./assets/inc/footer.php"
?>