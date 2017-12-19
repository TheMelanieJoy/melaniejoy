/*window.addEventListener("load", function(event) {
    lazyload();
});*/

function lazyload_images(dir) {
    var fileextension = ".jpg";
    var isEven = true;
    var index = 0;
    $.ajax({
        //This will retrieve the contents of the folder if the folder is configured as 'browsable'
        url: dir,
        success: function (data) {
            //List all .png file names in the page
            $(data).find("a:contains(" + fileextension + ")").each(function () {
                var filename = this.href.replace(window.location.host, "").replace("http://", "");
                if(isEven) {
                    $(".col-left").append('<div class="thumbnail">\
                                    <a data-toggle="modal" data-target="#' + index + '">\
                                        <img class="lazyload" src="../resources/images/loader.gif" data-src="' + dir + this.href.substr(this.href.lastIndexOf('/') + 1) + '">\
                                    </a>\
                                 </div>\
                                 <div class="modal fade" id="' + index + '" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">\
                                    <div class="modal-dialog modal-lg">\
                                        <div class="modal-content">\
                                            <div class="modal-body">\
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">\
                                                    <span aria-hidden="true">&times;</span>\
                                                </button>\
                                                <img class="modal-image" style="width:100%" src="' + dir + this.href.substr(this.href.lastIndexOf('/') + 1) + '">\
                                            </div>\
                                        </div>\
                                    </div>\
                                 </div>');
                    isEven = false;
                }
                else {
                    $(".col-right").append('<div class="thumbnail">\
                                    <a data-toggle="modal" data-target="#' + index + '">\
                                        <img class="lazyload" src="../resources/images/loader.gif" data-src="' + dir + this.href.substr(this.href.lastIndexOf('/') + 1) + '">\
                                    </a>\
                                 </div>\
                                 <div class="modal fade" id="' + index + '" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">\
                                    <div class="modal-dialog modal-lg">\
                                        <div class="modal-content">\
                                            <div class="modal-body">\
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">\
                                                    <span aria-hidden="true">&times;</span>\
                                                </button>\
                                                <img class="modal-image" style="width:100%" src="' + dir + this.href.substr(this.href.lastIndexOf('/') + 1) + '">\
                                            </div>\
                                        </div>\
                                    </div>\
                                 </div>');
                    isEven = true;
                }
                index++;    
            });
        }
    });
}