<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pixelset UI</title>
        <?php require __DIR__ . '/../common/head.php'; ?>
    </head>
    <body>
    <?php require __DIR__ . '/../common/nav.php'; ?>
    <?php $Page='Headings'; require __DIR__ . '/../common/header.php'; ?>

        <main class="px-8 py-6">
            <h1 class="h1">
                H1
            </h1>

            <h2 class="h2">
                H2
            </h2>

            <h3 class="h3">
                H3
            </h3>

            <h1 class="h1 h1-p">
                H1 (With padding)
            </h1>

            <h2 class="h2 h2-p">
                H2 (With padding)
            </h2>

            <h3 class="h3 h3-p">
                H3 (With padding)
            </h3>
        </main>

        <?php require __DIR__ . '/../common/footer.php'; ?>
    </body>
</html>