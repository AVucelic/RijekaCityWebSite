<!-- Included appropriate php file-->
<?php
   $name = 'History';
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
            <h1 class="cen">History of Rijeka</h1>
            <div class="wrapper">
                <div class="box au">
                    <a href="./AUhistoy.php" >Rijeka in Austria-Hugary
                    <img src="./assets/images/AU.jpg" class="pic" alt="au"></a>
                </div>
                <div class="box italy">
                    <a href="./ItalyHistory.php">Rijeka in Italy
                    <img src="./assets/images/italy.jpg" class="pic" alt="italy"></a>
                </div>
                <div class="box cro">
                    <a href="./CroatiaHistory.php">Rijeka in Croatia
                    <img src="./assets/images/cro.jpg" class="pic" alt="cro"></a>
                </div>
            </div>
        </section>
    </main><!-- Included appropriate php file-->

    <?php 
include "./assets/inc/footer.php"
?>