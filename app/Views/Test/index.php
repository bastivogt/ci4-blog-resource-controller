<?php echo $this->extend("layouts/base"); ?>

<?php echo $this->section("title"); ?>
    All Posts
<?php $this->endSection(); ?>



<?php echo $this->section("content"); ?>
    <h1>All Posts</h1>
    <p>
        <a href="<?php echo url_to("TestController::new"); ?>">New post</a>
    </p>
    <?php if($objects): ?>
        <ul>
            <?php foreach($objects as $post): ?>
                <li>
                    <a href="<?php echo url_to("TestController::show", $post->id); ?>"><?php echo $post->title; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

<?php echo $this->endSection(); ?>

