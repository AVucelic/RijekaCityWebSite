<!-- Included appropriate php file-->

<?php
   $name = 'Events in Rijeka';
   include 'assets/inc/top_nav.php';

?>
<!-- Included appropriate php file-->

<div id="nav-mobile">
    <?php include 'assets/inc/mobile_nav.php'; ?>
</div><!-- Included appropriate php file-->

<div id="nav-desktop">
   <?php include 'assets/inc/nav2.php'; ?>
</div>
    <main>
        <section>
            <h1 class="cen">Events in Rijeka</h1>
            <div class="wrapper">
                <div class="box au">
                    <a href="./Carnival.php" >Rijeka Carnival
                    <img src="./assets/images/rijecki-karneval-povorka.jpg" class="pic" alt="carnival"></a>
                </div>
                <div class="box italy">
                    <a href="./FilmFestival.php">Rijeka Film Festival
                    <img src="./assets/images/rff.png" class="pic" alt="film"></a>
                </div>
                <div class="box cro">
                    <a href="./SummerFestival.php">Rijeka Summer Nights
                    <img src="./assets/images/rijecke_ljetne_noci.jpg" class="pic" alt="summer"></a>
                </div>
            </div>
        </section>
    </main><!-- Included appropriate php file-->

    <?php 
include "./assets/inc/footer.php"
?>