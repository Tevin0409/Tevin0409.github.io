<link rel="stylesheet" href="css/style.css">
<script src="js/slide.js"></script>
<script src="js/bootstrap.min.js"></script>
<header class="v-header container">
    <div id="head">
        <div class="header-container">
            <div class="nav-left" id="menu-bar">
                <div id="menu" onclick= "openSlideMenu()">
                    <div id="bar1" class="bar"></div>
                    <div id="bar2" class="bar"></div>
                    <div id="bar3" class="bar"></div>
                </div>
                <ul class="nav-menu" id="nav">
                    <li><a href="index1.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="menu-bg" id="bg-menu"></div>
            <a href="" class="brand"><img src="img/logo-houzez-white@2x-4-150x41.png" alt=""></a>
            <button class="book-now">Book Now</button>
        </div>
    </div>
</header>
<script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
</script>