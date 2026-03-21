<?php echo $this->extend("layouts/base"); ?>

<?php echo $this->section("title"); ?>
    <?php echo $object->title; ?>
<?php $this->endSection(); ?>

<?php echo $this->section("content"); ?>
    <h1><?php echo $object->title; ?></h1>
    <p><?php echo $object->content; ?></p>
    <hr>
    <p>
        <a href="<?php echo previous_url(); ?>">Back</a>
        <a href="<?php echo url_to("TestController::index") ?>">Posts</a>
        <a href="<?php echo url_to("TestController::edit", $object->id); ?>">Edit</a>
        <a href="<?php echo url_to("TestController::deleteConfirm", $object->id); ?>">Delete</a>
    </p>
<?php echo $this->endSection(); ?>


