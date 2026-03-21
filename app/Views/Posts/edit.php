<?php echo $this->extend("layouts/base"); ?>


<?php echo $this->section("title"); ?>
    <?php echo $title; ?>
<?php $this->endSection(); ?>

<?php echo $this->section("content"); ?>
    <h1><?php echo $title; ?></h1>
    <?php if(session()->has("errors")): ?>
        <ul>
            <?php foreach(session("errors") as $error): ?>
                <li>
                    <?php echo $error; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php echo form_open(url_to("PostsController::update", $post->id)); ?>
        <?php echo $this->include("Posts/form"); ?>
    </form>
    <hr>
    <p>
        <a href="<?php echo previous_url(); ?>">Back</a>
        <a href="<?php echo url_to("PostsController::index"); ?>">Posts</a></a>
    </p>

<?php echo $this->endSection(); ?>