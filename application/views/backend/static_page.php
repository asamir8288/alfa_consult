<?php echo form_open($post_url); ?>
<ul id="form_list"> 
    <li>
        <label for="description">Description:</label>
        <?php
            $val = (isset($data['description'])) ? $data['description'] : '';
            load_editor('description', htmlspecialchars_decode($val));
        ?> 
        <?php echo (isset($errors['description'])) ? generate_error_message($errors['description']) : ''; ?>
    </li>
    <li>
        <input type="submit" name="submit" value="<?php echo $submit_btn; ?>" class="form-submit-btn" />  
        <a href="<?php echo base_url(); ?>admin/dashboard">Cancel</a>
    </li>
</ul>
<?php echo form_close(); ?>