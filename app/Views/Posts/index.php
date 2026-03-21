<?php echo $this->extend("layouts/base"); ?>

<?php echo $this->section("title"); ?>
    <?php echo $title; ?>
<?php $this->endSection(); ?>

<?php echo $this->section("content"); ?>
    <h1><?php echo $title; ?></h1>
    <section>
        <a href="<?php echo url_to("PostsController::new"); ?>">New post</a>
    </section>
    <?php if($posts): ?>
        <ul>
            <?php foreach($posts as $post): ?>
                <li>
                    <a href="<?php echo url_to("PostsController::show", $post->id); ?>"><?php echo $post->title; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
<?php echo $this->endSection(); ?>