<div class="list-items">
    <?php foreach ($allServices as $service) { ?>
        <img src="<?php echo base_url() . 'files/services/' . $service['image']; ?>" />
        <div class="item-details">
            <div class="title"><?php echo $service['title']; ?></div>
            <div>
                <?php
                if (strlen($service['description']) > 480) {
                    echo nl2br(substr(strip_tags($service['description']), 0, 480)) . '... <a class="read-more" href="'. site_url('service/details/'. $service['id']) . '">Read More</a>';
                } else {
                    echo $service['description'];
                }
                ?>
            </div>
        </div>
        <div class="clear"></div>
    <?php } ?>
</div>