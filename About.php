<!-- Included appropriate php file-->
<?php
   $name = 'About Rijeka';
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
    <main>
        <section class="abt">
            <h2>About Rijeka</h2>
            <p class="left">Rijeka is a historic port city located in western Croatia, at the northernmost point of the Adriatic Sea.
                Its history dates back to the Roman Empire, when the city was known as Tarsatica and served as an
                important trading center. Over the centuries, Rijeka has been ruled by various powers, including the
                Byzantine Empire, the Kingdom of Croatia, the Habsburg Monarchy, and the Republic of Venice. In the 19th
                century, Rijeka played a significant role in the struggle for Croatian independence, as it was a major
                center for the movement known as the Croatian National Revival. During World War II, the city was
                occupied by Italian and German forces, and suffered heavy damage during the fighting. Today, Rijeka is a
                thriving cultural and economic center, known for its historic architecture, museums, and festivals.</p>
        </section>
        <section>
            <div class="ifra">
            <h3>Location</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44864.95720735318!2d14.391794740782325!3d45.34760459943872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4764a12517aabe2d%3A0x373c6f383dcbb670!2sRijeka!5e0!3m2!1shr!2shr!4v1678747167253!5m2!1shr!2shr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
    <!-- Included appropriate php file-->

<?php 
include "./assets/inc/footer.php"
?>
