<div class="left">
    <div class="item-title-bar">
        <span>Our Projects</span>
    </div>
    <?php foreach($projects as $project) {?>
    <div class="section-box">
        <img src="<?php echo base_url() . 'files/projects/' . $project['image']; ?>" width="215" height="161" />
        <div class="title" style="margin-bottom: 5px;"><?php echo $project['title'];?></div>
        <div class="desc">
            <?php
                if (strlen($project['description']) > 210) {
                    echo substr(strip_tags($project['description']), 0, 210) . '... <a class="read-more" href="'. site_url('project/details/'. $project['id']) . '">Read More</a>';
                } else {
                    echo $project['description'];
                }
                ?>
        </div>
    </div>
    <?php } ?>    

</div>
<div class="middle">
    <div class="banner"><img src="<?php echo base_url(); ?>layout/images/banner.png" width="528" height="396" /></div>
    <div class="about-us">
        <img src="<?php echo base_url(); ?>layout/images/about-us.png" width="87" height="76" align="left" />
        <?php echo (substr(strip_tags($aboutUs['description']), 0, 1200));?>
    </div>        	
</div>
<div class="right">
    <div class="item-title-bar">
        <span>Our Services</span>
    </div>
    <?php foreach($services as $service) {?>
    <div class="section-box">
        <img src="<?php echo base_url() . 'files/services/' . $service['image']; ?>" width="215" height="161" />
        <div class="title" style="margin-bottom: 5px;"><?php echo $service['title'];?></div>
        <div class="desc">
            <?php
                if (strlen($service['description']) > 210) {
                    echo substr(strip_tags($service['description']), 0, 210) . '... <a class="read-more" href="'. site_url('service/details/'. $service['id']) . '">Read More</a>';
                } else {
                    echo $service['description'];
                }
                ?>
        </div>
    </div>
    <?php } ?>

    <div class="item-title-bar">
        <span>Gallery</span>
    </div>
    <div class="section-box">
        <img src="<?php echo base_url(); ?>layout/images/gallery-main.png" width="215" height="161" />
        <div class="gallery-related">
            <img src="<?php echo base_url(); ?>layout/images/gallery-s-1.png" width="105" height="79" />
            <img src="<?php echo base_url(); ?>layout/images/gallery-s-2.png" width="105" height="79" />
        </div>
    </div>


</div>