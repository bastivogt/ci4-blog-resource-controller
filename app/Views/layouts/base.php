<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">    
    <link rel="stylesheet" href="/css/style.css">
    <?php echo $this->renderSection("custom_css"); ?>

    <title>Blog - <?php echo $this->renderSection("title"); ?></title>
</head>
<body>
    <?php if(session()->has("message")): ?>
        <section>
            <p>
                <?php echo session("message"); ?>
            </p>
        </section>
    <?php endif; ?>
    <main>
        <?php echo $this->renderSection("content"); ?>
    </main>
    <script src="/js/app.js"></script>
    <?php echo $this->renderSection("custom_js"); ?>

</body>
</html>