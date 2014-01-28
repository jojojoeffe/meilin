<div class="content">
    <div class="container">

        <div class="row">

            <div class="span12">
                <div class="border">
                    <div class="company-header">
                        <div class="row">

                            <div class="span2">
                                <?php foreach ($company_logos as $company_logo): ?>
                                    <img src='<?php echo $company_logo->image_url() ?>'>  
                                <?php endforeach; ?>
                            </div>
                            <div class="span9">
                                <div class="row">
                                    <div class="sosmed">
                                        <ul>
                                            <li><a href="#"><img src='<?php echo base_url('assets/img/') . '/ico-twitter.png' ?>'></a></li>
                                            <li><a href="#"><img src='<?php echo base_url('assets/img/') . '/ico-facebook.png' ?>'></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <?php foreach ($contents as $content): ?>
                                    <div class="row">
                                        <div class="company-page">
                                            <h4><?php echo $content->title ?><span class="dot">.</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p><?php echo $content->description_1 ?></p>
                        <br>
                        <p><?php echo $content->description_2 ?></p>
                        <br>
                        <p><span class="ready"><?php echo $content->description_3 ?></span></p>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>


    </div>
</div>