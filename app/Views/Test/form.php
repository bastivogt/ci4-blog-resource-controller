<div>
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="<?php echo old("title", esc($object->title)); ?>">
</div>
<div>
    <label for="content">Content</label>
    <textarea name="content" id="content"><?php echo old("content", esc($object->content)); ?></textarea>
</div>
<div>
    <label for="published">Published</label>
    <input type="checkbox" name="published" id="published" value="1" <?php echo old("published", old("published", $object->published)) ? "checked" : ""; ?>>
</div>
<div>
    <button>Save</button>
</div>