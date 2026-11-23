<!doctype html>
<html lang="en">

<!-- Head Start -->
<?php include('visitor/partials/head.php') ?>
<!-- Head End -->


<body class="index-page">
    <!-- Header Start -->
    <?php include('visitor/components/header.php') ?>
    <!-- Header End -->

    <main class="main">
        <!-- Hero Section -->
        <?php include('visitor/pages/hero.php') ?>
        <!-- /Hero Section -->

        <!-- About Section -->
        <?php include('visitor/pages/about.php') ?>
        <!-- /About Section -->


        <!-- Portfolio Section -->
        <?php include('visitor/pages/portfolio.php') ?>
        <!-- /Portfolio Section -->



        <!-- Contact Section -->
        <?php include('visitor/pages/contact.php') ?>
        <!-- /Contact Section -->
    </main>

    <!-- Footer Start -->
    <?php include('visitor/components/footer.php') ?>
    <!-- Fotter End -->

    <!-- Scroll Top -->
    <a
        href="#"
        id="scroll-top"
        class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Script Start -->
    <?php include('visitor/partials/script.php') ?>
    <!-- Script End -->
</body>

</html>