<?php include 'config.php';
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM projects WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $title = $row['title'];
        $subtitle = $row['subtitle'];
        $description = $row['description'];
        $role = $row['role'];
        $technologies = $row['technologies'];
        $preview = $row['preview'];
        $screenshots = $row['screenshots'];
        $github = $row['github'];
        $url = $row['url'];
    }
}
if (!isset($_GET['id']) or mysqli_num_rows($result) == null) {
    header('Location: index.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $ProjTitle . ' | ' . $title ?></title>
    <?php include 'requirements.php'; ?>
</head>

<style>
body {
    font-family: Montserrat, Arial, sans-serif;
    line-height: 1.8;
}

h4 {
    letter-spacing: 2px;
}

h3 {
    font-family: 'Open Sans', sans-serif;
}

.gradient-custom {
    /* fallback for old browsers */
    background: #a18cd1;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(45deg,
            rgba(29, 236, 197, 0.1),
            rgba(91, 14, 214, 0.1) 100%);

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+  200,255,250 */
    background: linear-gradient(45deg,
            rgba(255, 255, 255, 1),
            rgba(91, 14, 214, 0.2) 100%);
}

.my_preview {
    -ms-transform: perspective(1500px) rotateY(-45deg) rotateX(3deg);
    /* IE 9 */
    transform: perspective(1500px) rotateY(-40deg) rotateX(3deg);

}

.carousel-indicators [data-mdb-target] {
    background-color: teal;
    padding: 1.3px;
}

.carousel-indicators {
    bottom: -60px;
}

.carousel-control-next {
    right: -90px;
}

.carousel-control-prev {
    left: -90px;
}
</style>


<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light gradient-custom fixed-top" style="background-color: #e3f2fd;">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand px-4 mt-2 mt-lg-0" href="./">
                    <img src="img/logo/logo.png" height="25" alt="" loading="lazy" /> Aissa Gue
                </a>
                <!-- Left links -->

                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#language">Arabic</a>
                    </li> -->
                </ul>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div class="bg-image" style="
      background-image: url('img/banner1.jpg');
      height: 100vh;
    ">
        <div class="mask gradient-custom p-5">
            <div class="row align-items-center h-100 pt-3">
                <div class="col-md-6">
                    <h1 class="text-danger text-capitalize"><?php echo $title ?></h1>
                    <p class="fw-bold">
                        <?php echo $subtitle ?>
                    </p>
                    <a class="btn btn-danger btn-lg" href="#details">Learn More</a>
                    <a class="btn btn-dark mb-1" href="<?php echo $url ?>" target="_blank">Live Preview</a>
                </div>


                <div class="col-md-6 my_preview mt-3">
                    <img src="<?php echo $preview ?>" class="img-fluid" alt="" loading="lazy" />
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->

    <!-- Start Details -->
    <section class="container" id="details">

        <div class="row my-5">
            <div class="col-md-5 my-2">
                <h4 class="fw-bold">Description</h4>
            </div>
            <div class="col-md-7 my-2">
                <p><?php echo $description ?></p>
            </div>

            <div class="col-md-5 my-2">
                <h4 class="fw-bold">Role</h4>
            </div>
            <div class="col-md-7 my-2">
                <p><?php echo $role ?></p>
            </div>

            <div class="col-md-5 my-3">
                <h4 class="fw-bold">Technologies</h4>
            </div>
            <div class="col-md-7 my-3">
                <?php
                $array = explode(',', $technologies);
                foreach ($array as $values) {
                ?>
                <span class="badge rounded-pill bg-dark"><?php echo $values ?></span>
                <?php
                }
                ?>
            </div>

            <div class="col-md-5 my-3">
                <h4 class="fw-bold">Screenshots</h4>
            </div>
            <div class="col-md-7 my-3">
                <!-- START Carousel -->
                <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">
                    <div class="carousel-indicators">
                        <?php
                        $array = explode(',', $screenshots);
                        $slide = 0;
                        foreach ($array as $values) { ?>
                        <button type="button" data-mdb-target="#carouselExampleIndicators"
                            data-mdb-slide-to="<?php echo $slide ?>" class="<?php if ($slide == 0) echo 'active ' ?>"
                            aria-current="true" aria-label="Slide <?php echo $slide + 1 ?>"></button>
                        <?php
                            $slide++;
                        }
                        ?>
                    </div>

                    <div class="carousel-inner">
                        <?php
                        $slide = 0;
                        foreach ($array as $values) {
                        ?>
                        <div class="carousel-item <?php if ($slide == 0) echo 'active ' ?>">
                            <img src="<?php echo $values ?>" class="d-block w-100" style="height: 370px;" alt="..." />
                        </div>
                        <?php
                            $slide++;
                        }
                        ?>
                    </div>

                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators"
                        data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" style="color: teal;"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators"
                        data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" style="color: teal;"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- END Carousel -->
            </div>
        </div>
    </section>
    <!-- End Details -->

    <?php include 'contact.php' ?>
    <?php include 'footer.php' ?>
    <?php include 'requirements2.php'; ?>
</body>

</html>