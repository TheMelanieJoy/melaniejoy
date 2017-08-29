<!DOCTYPE html>
<html>
<head>
    <?php include('../resources/links.php') ?>
</head>
<body>
    <?php include('../resources/header.php') ?>
    
    <div class="subbackground">
        <img class="d-block ml-auto mr-auto" src="../resources/images/DSC_0526_1.jpg" alt="Photography">
    </div>
    <div class="bodycontainer">
        <div class="pageheader">
            <h1 class="h1">Photography</h1>
        </div>
        <div class="portfolio">
            <?php $dirname = "../resources/images/photography/";
                $images = glob($dirname."*.jpg");
                $index = 0;
                foreach($images as $image) {
                    echo '<div class="thumbnail">
                    <a data-toggle="modal" data-target="#'.$index.'"><img src="'.$image.'" alt="Sample image"></a>
                    </div>

                    <div class="modal fade" id="'.$index.'" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img class="modal-image" style="width:100%" src="'.$image.'" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>';
                    $index = $index + 1;
                }
            ?>
        </div>
    </div>
    </div>

     <?php include('../resources/footer.php') ?>
</body>