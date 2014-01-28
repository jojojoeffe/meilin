<div class="content">
    <div class="container">
        <div class="row">

            <?php foreach ($services as $service): ?>

                <div class='span4'>
                    <div class='border'>

                        <div class='category-title-container'>
                            <h5>
                                <?php echo $service->consulting_field ?>
                            </h5>
                        </div>

                        <div class='category'>
                            <img src="<?php echo $service->image_url() ?>"  alt="" >
                        </div>

                        <p>
                            <?php echo $service->description ?>
                        </p>

                        <?php echo "<br> </br>" ?>

                        <a href=' <?php echo site_url('/' . 'registrations') ?> ' type='button' class='btn btn-primary'>Register</a>

                    </div>

                </div>

            <?php endforeach; ?>    


        </div>
    </div>
</div>
