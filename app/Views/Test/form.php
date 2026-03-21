<div>
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="<?php echo old("title", esc($object->title)); ?>">
</div>
<div>
    <label for="content">Content</label>
    <textarea name="content" id="content"><?php echo old("content", esc($object->content)); ?></textarea>
</div>
<div>
    <button>Save</button>
</div>