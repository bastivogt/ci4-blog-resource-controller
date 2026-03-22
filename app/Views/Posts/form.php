<div>
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="<?php echo old("title", esc($post->title)); ?>">
</div>
<div>
    <label for="content">Content</label>
    <textarea name="content" id="content"><?php echo old("content", esc($post->content)); ?></textarea>
</div>
<div>
    <label for="published">Published</label>
    <input type="hidden" name="published" value="0">
    <input type="checkbox" name="published" id="published" value="1" <?php echo old("published", $post->published) === "1" ? "checked" : ""; ?>>

</div>
<div>
    <button>Save</button>
</div>