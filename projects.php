<?php
$sql = "SELECT * FROM projects order by id DESC";
$result = mysqli_query($conn, $sql);
?>

<style>
.card .bg-image {
    border-radius: 5px;
}

.img-fluid {
    min-height: 100%;
}
</style>


<section id="projects" class="container">

    <h3 class="text-center py-4 border-bottom">Latest Projects</h3>

    <div class="py-3">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $title = $row['title'];
            $subtitle = $row['subtitle'];
            $technologies = $row['technologies'];
            $screenshots = $row['screenshots'];
            $screenshot = explode(',', $screenshots);
            $screenshot = $screenshot[0];
            $github = $row['github'];
            $url = $row['url'];
        ?>
        <!-- Start Project Card -->
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-lg-5 bg-image hover-zoom hover-overlay">
                    <img src="<?php echo $screenshot ?>" alt="..." class="img-fluid" />
                    <a href="#!">
                        <div class="mask"
                            style="background: linear-gradient(45deg,rgba(29, 236, 197, 0.5),rgba(91, 14, 214, 0.5) 100%);">

                            <div class="d-flex justify-content-center align-items-center h-100">
                                <a href="project_preview.php?id=<?php echo $id ?>" class="btn btn-success"><i
                                        class="fas fa-eye"></i>
                                    Preview</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-7">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize"><?php echo $title ?></h5>
                        <div class="my-3">
                            <?php
                                $array = explode(',', $technologies);
                                foreach ($array as $values) {
                                ?>
                            <span class="badge rounded-pill bg-dark"><?php echo $values ?></span>
                            <?php
                                }
                                ?>
                        </div>

                        <p class="card-text">
                            <?php echo $subtitle ?>
                        </p>

                        <div class="text-end">
                            <a href="project_preview.php?id=<?php echo $id ?>" class="btn btn-danger">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                            <a href="<?php echo $url ?>" class="btn btn-success" target="_blank">
                                <i class="fas fa-magic"></i> Live Preview
                            </a>
                            <a href="<?php echo $github ?>" class="btn btn-dark" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- END Project Card -->
        <?php } ?>
    </div>
</section>