<!DOCTYPE html>
<html>
<head>
    <?php include('resources/links.php') ?>
</head>
<body>
    <?php include('resources/header.php') ?>

    <div id="backgroundimage" class="carousel slide bg-inverse" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#backgroundimage" data-slide-to="0" class="active"></li>
        <li data-target="#backgroundimage" data-slide-to="1"></li>
        <li data-target="#backgroundimage" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid ml-auto mr-auto" src="resources/images/DSC_0100_1.jpg" alt="First slide">
            <div class="carousel-caption">
                <h3>Welcome</h3>
                <p>I am Melanie Joy.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid ml-auto mr-auto" src="resources/images/DSC_0526_1.jpg" alt="Second slide">
            <div class="carousel-caption">
                <a class="btn btn-outline-primary btn-lg" href="photography.php">View Photography</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid ml-auto mr-auto" src="resources/images/genji_bg.jpg" alt="Third slide">
            <div class="carousel-caption">
                <a class="btn btn-outline-primary btn-lg" href="digitalart.php">View Digital Art</a>
            </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#backgroundimage" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#backgroundimage" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <?php include('resources/footer.php') ?>
</body>
</html>