<!-- Included appropriate php file-->
<?php
   $name = 'Tourism';
   include 'assets/inc/top_nav.php';

?><!-- Included appropriate php file-->

<div id="nav-mobile">
    <?php include 'assets/inc/mobile_nav.php'; ?>
</div><!-- Included appropriate php file-->

<div id="nav-desktop">
   <?php include 'assets/inc/nav2.php'; ?>
</div>
    <main>
        <section>
            <h1 class="cen">Tourism</h1>
            <div class="wrapper1">
                <div class="box au">
                    <a href="./FamousPeople.php" >Famous People from Rijeka
                    <img src="./assets/images/zajccc.jfif" class="pic" alt="zajc"></a>
                </div>
                <div class="box italy">
                    <a href="./FamousPlaces.php">Famous Places in Rijeka
                    <img src="./assets/images/Trsat_dron_178.jpg" class="pic" alt="trsat"></a>
                </div>
            </div>
        </section>
    </main><!-- Included appropriate php file-->

    <?php 
include "./assets/inc/footer.php"
?>