<?php echo $this->extend("layouts/base"); ?>

<?php echo $this->section("title"); ?>
    Delete
<?php $this->endSection(); ?>

<?php echo $this->section("content"); ?>
    <h1>Delete</h1>
    <p>Are you sure you want to delete this object?</p>
    <p><strong><?php echo $object->title; ?></strong></p>
    <p><?php echo $object->content; ?></p>
    <?php echo form_open(url_to("TestController::delete", $object->id)); ?>
        <button type="submit">Delete</button>
    <?php echo form_close(); ?>
    <a href="<?php echo previous_url(); ?>">Back</a>
<?php echo $this->endSection(); ?>