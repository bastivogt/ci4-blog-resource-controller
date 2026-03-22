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
    <input type="hidden" name="published" value="0">
    <?php echo form_checkbox([
        "name" => "published",
        "id" => "published",
        "value" => "1",
        "checked" => old("published", $object->published) === "1" ? true : false 
    ]); ?>
</div>
    
<div>
    <button>Save</button>
</div>


