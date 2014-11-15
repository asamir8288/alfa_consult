<div class="list-projects">
<?php

$i = 1;
foreach ($allProjects as $project) {
    $style = '';
    if ($i % 4 == 0) {
        $style = "margin-right: 0px;";
    }
    ?>
    <div class="project-item" style="<?php echo $style;?>">
    <img src="<?php echo base_url() . 'files/projects/'. $project['image'];?>" />
    <div class="title"><?php echo $project['title'];?></div>
    <div>
                <?php
                if (strlen($project['description']) > 200) {
                    echo substr(strip_tags($project['description']), 0, 200) . '... <a class="read-more" href="'. site_url('project/details/'. $project['id']) . '">Read More</a>';
                } else {
                    echo $project['description'];
                }
                ?>
            </div>
</div>
    <?php $i++;
}
?>

</div>
