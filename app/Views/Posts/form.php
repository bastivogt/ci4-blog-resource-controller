<div>
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="<?php echo old("title", esc($post->title)); ?>">
</div>
<div>
    <label for="content">Content</label>
    <textarea name="content" id="content"><?php echo old("content", esc($post->content)); ?></textarea>
</div>
<div>
    <button>Save</button>
</div>