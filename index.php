    <?php session_start();?>
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
        
        $placeholder = [
            [
                'type' => 'rent',
                'title' => 'Maison',
                'mail' => 'example@xyz.com',
                'price' => '2500',
                'Location' => 'Lyon',
                'message' => 'Placeholder annonce'
            ],
            [
                'type' => 'sale',
                'title' => 'Charmant Studio',
                'mail' => 'example@xyz.com',
                'price' => '250 000',
                'Location' => 'Mulhouse',
                'message' => 'Placeholder annonce'
            ],
            [
                'type' => 'rent',
                'title' => 'Appartement',
                'mail' => 'example@xyz.com',
                'price' => '750',
                'Location' => 'Saint-Malo',
                'message' => 'Placeholder annonce'
            ],
            [
                'type' => 'rent',
                'title' => 'Maison',
                'mail' => 'example@xyz.com',
                'price' => '2000',
                'Location' => 'Marseille',
                'message' => 'Placeholder annonce'
            ],
            [
                'type' => 'sale',
                'title' => 'Studio',
                'mail' => 'example@xyz.com',
                'price' => '150 000',
                'Location' => 'Montluçon',
                'message' => 'Placeholder annonce'
            ],
            [
                'type' => 'rent',
                'title' => 'Maison',
                'mail' => 'example@xyz.com',
                'price' => '250 000',
                'Location' => 'Lyon',
                'message' => 'Placeholder annonce'
            ]
        ];

        foreach($placeholder as $annonce) {
            include './partials/_card.php';
        }
    
        if($_SESSION['isLoggedIn'] = true) {
            $listingTable = [];

            $i = count($_SESSION['annonces']);
            foreach($_SESSION['annonces'] as $annonce) {
                include './partials/_card.php';

            }
       

        }

        ?>
        </div>
        
            <?php 
            include './partials/_footer.php'
            ?>
    </body>

    </html>