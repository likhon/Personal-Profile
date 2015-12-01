<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('projects/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="description">Text</label>
    <textarea name="description"></textarea><br />

    <input type="submit" name="submit" value="Create Project" />

</form>