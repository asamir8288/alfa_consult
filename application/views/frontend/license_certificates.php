<div class="about-us-left">
    <div class="title" style="margin-bottom: 15px;">LICENCES & CERTIFICATES </div>
    <?php echo $page['description']; ?>
</div>
<div class="right">
    <div class="item-title-bar">
        <span>Our Services</span>
    </div>
    <div class="section-box">
        <img src="<?php echo base_url(); ?>files/services/<?php echo $service['s_image']?>" width="215" height="161" />
        <div class="title"><?php echo $service['s_title']?></div>
        <div class="desc">
            <?php echo substr(strip_tags($service['s_description']), 0, 300) . '... <a class="read-more" href="'. site_url('service/details/'. $service['s_id']) . '">Read More</a>'?>
        </div>
    </div>
    <div class="item-title-bar">
        <span>Our Projects</span>
    </div>
    <div class="section-box">
        <img src="<?php echo base_url(); ?>files/projects/<?php echo $project['p_image'];?>" width="215" height="161" />
        <div class="title"><?php echo $project['p_title']?></div>
        <div class="desc">
            <?php echo substr(strip_tags($project['p_description']), 0, 300) . '... <a class="read-more" href="'. site_url('project/details/'. $project['p_id']) . '">Read More</a>'?>
        </div>
    </div>
</div>