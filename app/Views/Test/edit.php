<?php echo $this->extend("layouts/base"); ?>



<?php echo $this->section("title"); ?>
    Edit <?php echo $object->title; ?>
<?php echo $this->endSection(); ?>

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


    <?php echo $this->section("custom_js"); ?>
    <script>
        const cb = document.getElementById("published");
        cb.addEventListener("change", (e) => {
            if(e.target.getAttribute("checked") === "1") {
                //e.target.removeAttribute("checked");
                e.target.removeAttribute("checked");
            }else {
                e.target.setAttribute("checked", "");
            }
            console.log(e.target.value);

        });

        const form = document.querySelector("form");
        console.log("form");
        form.addEventListener("submit", (e) => {
            e.preventDefault();
            console.log("submit");
            console.log("cb value", cb.value)
            e.target.submit();
        });
    </script>
<?php echo $this->endSection(); ?>




