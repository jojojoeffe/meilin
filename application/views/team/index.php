<div class="content">
    <div class="container">
        <div class="border">
            <div class="isi">
                 <?php foreach ($contents as $content): ?>
                <h3><?php echo $content->title ?> <span class="dot">.</span> </h3>
               <?php echo $content->description ?>
<?php endforeach; ?>
                <?php foreach ($teams as $team): ?>

                    <?php if ($team->id % 2 != 0) : ?>
                        <div class="row-fluid">
                            <div class="team-desc">
                                <div class="span8">
                                    <div class="profile-team">
                                        <div class="span2">
                                            <div class="foto-team">
                                                <img src='<?php echo $team->image_url() ?>'>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <p><?php echo $team->name ?>
                                                <br> <span><?php echo $team->division ?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="contact-team">
                                        <p><?php echo $team->email ?>
                                            <br> f: <a href=""><?php echo $team->facebook ?></a> | <a href="">t: <?php echo $team->twitter ?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php else : ?>
                        <div class="row-fluid">
                            <div class="team-desc">
                                <div class="span4">
                                    <div class="contact-team">
                                        <p><?php echo $team->email ?>
                                            <br> f: <a href=""><?php echo $team->facebook ?></a> | <a href="">t: <?php echo $team->twitter ?></a>
                                        </p>
                                    </div>
                                </div>

                                <div class="span8">
                                    <div class="profile-team">
                                        <div class="span10">
                                            <p class="pull-right"><?php echo $team->name ?>
                                                <br> <span class="pull-right"><?php echo $team->division ?></span>
                                            </p>
                                        </div>
                                        <div class="span2">
                                            <div class="foto-team">
                                                <img src='<?php echo $team->image_url() ?>'>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    <?php endif; ?>

                <?php endforeach; ?> 



            </div>
        </div>
    </div>
</div>
