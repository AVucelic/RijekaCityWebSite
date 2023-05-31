<!-- Included appropriate php file-->

<?php 
   $name = 'Famous places';
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
            <h1 class="cen">Famous places to visit</h1>
            <div class="wrapper3">
                <div class="box aus">
                    <img src="./assets/images/Trsat_dron_178.jpg" class="zajc" alt="trsat">
                    <h3>Trsat Castle</h3>
                    <p class="text"> One of the most iconic sights in Rijeka is the Trsat Castle, a medieval fortress that sits atop
                        a hill
                        overlooking the city. Visitors can enjoy stunning views of the city and the sea from the
                        castle's
                        battlements, as well as explore its impressive architecture and history.</p>
                </div>
                <div class="box aus">
                    <img src="./assets/images/korzo.jpg" class="zajc" alt="korzo">
                    <h3>Korzo</h3>
                    <p class="text">Another popular destination is Korzo, the city's main pedestrian thoroughfare, which is lined
                        with shops,
                        cafes, and restaurants. This bustling street is a hub of activity, especially during the summer
                        months
                        when outdoor concerts and events are held here.</p>
                </div>
                <div class="box aus">
                    <img src="./assets/images/muzej.jpg" class="zajc" alt="muzej">
                    <h3>Museum of Modern and Contemporary Arts</h3>
                    <p class="text">For art lovers, the Museum of Modern and Contemporary Art offers a fascinating collection of
                        works by
                        Croatian and international artists</p>
                </div>

                <div class="box aus">
                    <img src="./assets/images/univerzalna_ri_nadbiskupija-novo.jpg" class="zajc" alt="nadbiskupy">
                    <h3>St. Vitus Cathedral</h3>
                    <p class="text">The city is also home to numerous churches and cathedrals, such as the 13th-century St. Vitus
                        Cathedral,
                        which features impressive Gothic architecture and beautiful stained glass windows.</p>
                </div>
            </div>
        </section>
    </main><!-- Included appropriate php file-->

    <?php 
include "./assets/inc/footer.php"
?>