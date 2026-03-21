<?php echo $this->extend("layouts/base"); ?>

<?php echo $this->section("title"); ?>
    <?php echo $title; ?>
<?php $this->endSection(); ?>

<?php echo $this->section("content"); ?>
    <h1><?php echo $title; ?></h1>
    <p>Are you sure you want to delete this post?</p>
    <p><strong><?php echo $post->title; ?></strong></p>
    <p><?php echo $post->content; ?></p>
    <?php echo form_open(url_to("PostsController::delete", $post->id)); ?>
        <button type="submit">Delete</button>
    <?php echo form_close(); ?>
<?php echo $this->endSection(); ?>