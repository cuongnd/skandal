<?php
// No direct access
defined('_JEXEC') or die; ?>


<?php
// CUSTOM CSS
$document = JFactory::getDocument();
$document->addStyleSheet('templates/t3_bs3_blank/css/domtab.css');
$document->addStyleSheet('templates/t3_bs3_blank/css/slidephotos.css');
$document->addStyleSheet('components/com_tour/views/tourdetails/tmpl/style.css');
$document->addStyleSheet('templates/t3_bs3_blank/css/freelancer.css');
?>
<script src="templates/t3_bs3_blank/js/domtab.js"></script>

<!--begin cho slide photo-->
<script src="templates/t3_bs3_blank/js/res/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="templates/t3_bs3_blank/js/jquery.exposure1.js?v=1.0.2" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
        var gallery = $('#images');
        gallery.exposure({controlsTarget : '#controls',
            controls : { prevNext : true, pageNumbers : true, firstLast : false },
            visiblePages : 2,
            maxWidth: 600,
            maxHeight:380,
            slideshowControlsTarget : '#slideshow',
            onThumb : function(thumb) {
                var li = thumb.parents('li');
                var fadeTo = li.hasClass($.exposure.activeThumbClass) ? 1 : 0.3;

                thumb.css({display : 'none', opacity : fadeTo}).stop().fadeIn(200);

                thumb.hover(function() {
                    thumb.fadeTo('fast',1);
                }, function() {
                    li.not('.' + $.exposure.activeThumbClass).children('img').fadeTo('fast', 0.3);
                });
            },
            onImage : function(image, imageData, thumb) {
                // Fade out the previous image.
                image.siblings('.' + $.exposure.lastImageClass).stop().fadeOut(500, function() {
                    $(this).remove();
                });

                // Fade in the current image.
                image.hide().stop().fadeIn(1000);

                // Fade in selected thumbnail (and fade out others).
                if (gallery.showThumbs && thumb && thumb.length) {
                    thumb.parents('li').siblings().children('img.' + $.exposure.selectedImageClass).stop().fadeTo(200, 0.3, function() { $(this).removeClass($.exposure.selectedImageClass); });
                    thumb.fadeTo('fast', 1).addClass($.exposure.selectedImageClass);
                }
            },
            onPageChanged : function() {
                // Fade in thumbnails on current page.
                gallery.find('li.' + $.exposure.currentThumbClass).hide().stop().fadeIn('fast');
            }
        });
    });
</script>
<!--end cho slide photo-->



<!--<div class="col-md-8">-->
    <div class="domtab">
        <ul class="domtabs">
            <li><a href="#t1"><i class="fa fa-camera-retro"></i> PHOTOS</a></li>
            <li><a href="#t2"><i class="fa fa-map-marker"></i> MAP</a></li>
        </ul>
        <div>
            <h6><a name="t1" id="t1"></a></h6>
            <div id="main1">
                <div class="panel1">
                    <ul id="images">
                        <?php foreach($data as $item): ?>
                            <li><a href="<?php echo $item->path; ?>"><img src="<?php echo $item->path; ?>" title="<?php echo $item->title ?>" /></a></li>
                        <?php endforeach; ?>
<!--                        <li><a href="img/slides/hanoiopera_700x370.jpg"><img src="img/thumbs/hanoiopera_150x79.jpg" title="Hanoi Opera" /></a></li>-->
<!--                        <li><a href="img/slides/sapa_700x370.jpg"><img src="img/thumbs/sapa_150x79.jpg" title="Sapa Hillstation"/></a></li>-->
<!--                        <li><a href="img/slides/halong_700x370.jpg"><img src="img/thumbs/halong_150x79.jpg" title="Ha Long Islands"/></a></li>-->
                    </ul>
                    <div id="controls"></div>

                </div>
                <div id="exposure"></div>
            </div>
        </div>
        <div style="height:380px">
            <h6><a name="t2" id="t2"></a></h6>
            <img src="img/portfolio/hanoimap.jpg" style="margin:-5px -8px; padding:0 0 0 3px; height: 380px" width="795">
        </div>


    </div>
<!--</div>-->
