<div class="content">
    <div class="container">
        <div class="border">
            
            <div class="isi">
                <?php foreach ($contents as $content): ?>
                    <h3><?php echo $content->title ?> <span class="dot">.</span> </h3>
                    <p><?php echo $content->description_1 ?></p>
                    <p><?php echo $content->description_2 ?></p>
                <?php endforeach; ?>
                    
                <br></br>
                
                <?php foreach ($part_events as $part_event): ?>

                    <h5><?php echo $part_event->part ?></h5>
                    <?php foreach ($events as $event): ?>
                        <?php if ($event->part == $part_event->part) : ?>                           
                            <p class="event-date"><?php echo $event->date ?></p>
                            <p class="event-section"><?php echo $event->section ?></p>
                        <?php endif; ?>                           
                    <?php endforeach; ?> 
                    <br>
                <?php endforeach; ?> 
            </div>
        </div>
    </div>
</div>

