<?php echo $this->extend("layouts/base"); ?>


<?php echo $this->section("title"); ?>
    New post
<?php $this->endSection(); ?>

<?php echo $this->section("content"); ?>
    <h1>New post</h1>
    <?php if(session()->has("errors")): ?>
        <ul>
            <?php foreach(session("errors") as $error): ?>
                <li>
                    <?php echo $error; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php echo form_open(url_to("TestController::create")); ?>
        <?php echo $this->include("Test/form"); ?>
    <?php echo form_close(); ?>
    <hr>
    <p>
        <a href="<?php echo previous_url(); ?>">Back</a>
        <a href="<?php echo url_to("TestController::index"); ?>">Posts</a></a>
    </p>

<?php echo $this->endSection(); ?>