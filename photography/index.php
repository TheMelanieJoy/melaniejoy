<!DOCTYPE html>
<html lang=en>
<head>
    <title>Photography - TheMelanieJoy</title>
    <?php include('../resources/links.php') ?>
</head>
<body>
    <?php include('../resources/header.php') ?>
    <div class="body-wrapper">
        <div class="photography-banner"></div>
        <div class="container">
            <div class="title-wrapper">
                <h3>Photography</h3>
            </div>
            <div class="portfolio">
                <!--<div class="portfolio-layout">
                    <?php /*$dirname = "../resources/images/photography/";
                        $images = glob($dirname."*.{jpg,JPG,png}", GLOB_BRACE);
                        $index = 0;
                        foreach($images as $image) {
                            echo '<div class="thumbnail">
                                <a data-toggle="modal" data-target="#'.$index.'">
                                    <img class="lazyload" src="../resources/images/handtinywhite.gif" data-src="'.$image.'">
                                </a>
                            </div>

                            <div class="modal fade" id="'.$index.'" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <img class="modal-image" style="width:100%" src="'.$image.'">
                                        </div>
                                    </div>
                                </div>
                            </div>';
                            $index = $index + 1;
                        }*/
                    ?>-->
                <div class="col-left"></div>
                <div class="col-right"></div>
            </div>
        </div>
    </div>
    
    <?php include('../resources/footer.php') ?>
    <script>
        lazyload_images("../resources/images/photography/");
        
        $(function () {
            $("img.lazyload").lazyload();
        });
    </script>
</body>
</html>