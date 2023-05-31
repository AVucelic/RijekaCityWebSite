   <!-- footer for php file-->
     
    </main>
        <footer> Copyright &copy; 2023. Arian Vucelic. Town of Rijeka. All Rights Reserved.</footer>
        <script>
            function updateContent() {
                if (window.innerWidth <= 850) {
                    document.getElementById('nav-desktop').style.display = 'none';
                    document.getElementById('nav-mobile').style.display = 'block';
                } else {
                    document.getElementById('nav-desktop').style.display = 'block';
                    document.getElementById('nav-mobile').style.display = 'none';
                }
            }
            window.onload = updateContent;
            window.onresize = updateContent;
        </script>
        <script src="assets/js/prism.js"></script>
        <script src="assets/js/code.js"></script>
    </body>
</html>