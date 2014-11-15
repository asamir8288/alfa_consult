<div class="project-details">
    <div class="project-gallery">
        <img class="big-image" src="<?php echo base_url() . 'files/projects/' . $project['image']; ?>" /> 

        <?php
        if (count($project['ProjectImages'])) {
            $i = 1;
            foreach ($project['ProjectImages'] as $img) {
                $style = '';
                if($i % 3 == 0){
                    $style = 'margin-right: 0px;';
                }
                ?>
        <img style="<?php echo $style;?>" class="small-image" src="<?php echo base_url() . 'files/projects/' . $img['image']; ?>" /> 
                <?php
                $i++;
            }
        }
        ?>
    </div>
    <div class="title" style="margin-bottom: 15px;"><?php echo $project['title']; ?></div>

    <?php echo $project['description']; ?>
</div>

