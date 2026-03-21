<?php echo $this->extend("layouts/base"); ?>

<?php echo $this->section("title"); ?>
    <?php echo $title; ?>
<?php $this->endSection(); ?>

<?php echo $this->section("content"); ?>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $post->content; ?></p>
    <hr>
    <p>
        <a href="<?php echo previous_url(); ?>">Back</a>
        <a href="<?php echo url_to("PostsController::index") ?>">Posts</a>
        <a href="<?php echo url_to("PostsController::edit", $post->id); ?>">Edit</a>
        <a href="<?php echo url_to("PostsController::deleteConfirm", $post->id); ?>">Delete</a>
    </p>
<?php echo $this->endSection(); ?>


