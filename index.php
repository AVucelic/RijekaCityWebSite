<!-- Included appropriate php file-->
<?php
   $name = 'Welcome to Rijeka';
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
    <figure>   
    <img src="./assets/images/rijeka.jpg" alt="Picture of Rijeka">
        <figcaption class="quote">Volim grad koji tece</figcaption>
</figure>
        <section class="abt">
            <h1>Welcome to Rijeka</h1>
            <p>Rijeka is a coastal town in Croatia, located on the Kvarner Bay. It is the third-largest town in Croatia
                and the largest town in the Primorje-Gorski Kotar County. Rijeka is a significant seaport and an
                important cultural and educational center. Discover the beauty of our town and experience its unique culture and history</p>
            <a href="./History.php">Learn more</a>
        </section>
        <section class="abt">
            <h2>Tourism and Event</h2>
            <p>Rijeka has many attractions for tourists, including historic landmarks, beautiful beaches, and numerous
                festivals and events throughout the year. It is also known for its many cultural and entertainment events, such as the Rijeka Carnival, the Summer
                Nights festival, and the Rijeka International Film Festival.</p>
            <a href="./events.php">Explore more</a>
        </section>
    </main><!-- Included appropriate php file-->

    <?php 
include "./assets/inc/footer.php"
?>