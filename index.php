    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/mobile.css">
    </head>

    <body>
        <?php include './partials/_header.php' ?>
        <div class="advertgrid">
        <?php
        for($i = 0; $i < 9; $i++) {
            include './partials/_card.php';
        }

        ?>
        </div>
        
            <?php 
            include './partials/_footer.php'
            ?>
    </body>

    </html>