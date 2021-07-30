<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $ProjTitle ?> | Portfolio</title>
    <?php include 'requirements.php'; ?>
</head>

<style>
html {
    scroll-behavior: smooth;
    font-family: Montserrat, Arial, sans-serif;

}

section>h3 {
    font-family: 'Open Sans', sans-serif;
}
</style>

<body class="bg-light">
    <!-- Start your project here-->
    <div class="container-fluid">
        <?php include 'navbar.php' ?>
        <?php include 'home.php' ?>
    </div>

    <div class="container">
        <?php include 'projects.php' ?>
        <?php include 'skills.php' ?>
        <?php include 'about.php' ?>
        <?php include 'contact.php' ?>
    </div>

    <div class="container-fluid">
        <?php include 'footer.php' ?>
    </div>

    <!-- <div>
        <img src="img/banner.jpg" class="img-fluid" alt="...">
        <canvas class="background"></canvas>
        <?php include 'animated-bg.php' ?>
    </div> -->
    <!-- End your project here-->
    <?php include 'requirements2.php'; ?>
</body>

</html>