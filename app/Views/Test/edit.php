<?php echo $this->extend("layouts/base"); ?>


<?php echo $this->section("title"); ?>
    Edit <?php echo $object->title; ?>
<?php $this->endSection(); ?>

<?php echo $this->section("content"); ?>
    <h1>Edit <?php echo $object->title; ?></h1>
    <?php if(session()->has("errors")): ?>
        <ul>
            <?php foreach(session("errors") as $error): ?>
                <li>
                    <?php echo $error; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php echo form_open(url_to("TestController::update", $object->id)); ?>
        <?php echo $this->include("Test/form"); ?>
    </form>
    <hr>
    <p>
        <a href="<?php echo previous_url(); ?>">Back</a>
        <a href="<?php echo url_to("TestController::index"); ?>">Posts</a></a>
    </p>

<?php echo $this->endSection(); ?>