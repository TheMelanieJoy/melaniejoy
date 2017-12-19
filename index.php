<!--
    TODO
    Loading placeholders in portfolio
    Fix footer in home page
    About me
    Redesign header
    Logo?
-->

<!DOCTYPE html>
<html lang=en>
<head>
    <title>TheMelanieJoy</title>
    <?php include('resources/links.php') ?>
</head>
<body>
    <?php include('resources/header.php') ?>
    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
               <div class="carousel-caption">
                   <h3>Welcome</h3>
                   <p>I am Melanie Joy.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <a class="btn btn-outline-primary btn-outline-white btn-lg" href="/photography/">View Photography</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <a class="btn btn-outline-primary btn-outline-white btn-lg" href="/digital/">View Digital Art</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>    
    <?php include('resources/footer.php') ?>
</body>
</html>