<?php echo form_open_multipart($post_url); ?>
<ul id="form_list"> 
    <li>
        <label for="title">Title:</label>
        <input type="text" value="<?php echo (isset($data['title'])) ? $data['title'] : ''; ?>" name="title" id="title" class="txtbox" >
        <?php echo (isset($errors['title'])) ? generate_error_message($errors['title']) : ''; ?>
    </li>
    <li>
        <label for="description">Description:</label>
        <?php
            $val = (isset($data['description'])) ? $data['description'] : '';
            load_editor('description', htmlspecialchars_decode($val));
        ?> 
        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>
    <?php if (!isset($errors['image']) && isset($data)) { ?>
        <li style="margin-left: 154px;">
            <input type="hidden" name="image" value="<?php echo $data['image']; ?>" >
            <img style="width: 100px;" src="<?php echo static_url() . 'files/services/' . $data['image']; ?>" />
        </li>
    <?php } ?>
    <li>
        <label for="image">Image:</label>
        <input type="file" name="userfile" id="image" />
        <?php echo (isset($errors['image'])) ? generate_error_message(strip_tags($errors['image'])) : ''; ?>
   </li>    
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn; ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>admin/service">Cancel</a>
    </li>
</ul>
<?php echo form_close(); ?>
