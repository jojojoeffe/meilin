
<div class="content">
    <div class="container">
        <div class="border">

            <div class="row">
                <div class="span12">

                    <div id="container">
                        <div id="banner-fade">

                            <!-- start Basic Jquery Slider -->
                            <ul class="bjqs">
                                <?php foreach ($slider_images as $slider_image): ?>
                                <li><img src="<?php echo $slider_image->image_url() ?>" title="<?php echo $slider_image->caption ?>"></li>
                                <?php endforeach; ?>
                            </ul>
                            <!-- end Basic jQuery Slider -->

                        </div>
                        <!-- End outer wrapper -->

                        <script class="secret-source">
                            jQuery(document).ready(function($) {

                                $('#banner-fade').bjqs({
                                    height      : 320,
                                    width       : 800,
                                    responsive  : true
                                });

                            });
                        </script>
                    </div>

                </div>
            </div>

            <div class="testimoni">
                <div class="row">   
                    <div class="span10">
                        <?php foreach ($contents as $content): ?>
                        <h4 class="index"> <?php echo $content->title ?></h4><hr>
                        <p>
                           <?php echo $content->description ?>
                        </p>
                         <?php endforeach; ?> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/libs/') . '/jquery.secret-source.min.js'; ?>"></script>
