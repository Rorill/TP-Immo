    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="mobile.css">
    </head>

    <body>
        <nav class="navbar"><div class="logobutton"><button class="sell">Sell/Rent your property</button>
            <img class="logo" src="./assets/IMG/Immo.webp" alt=""> </div>
            <form class="search" action=""><input class="location" placeholder="LOCATION"><input class="price"
                    placeholder="PRICE" type="number" min="100"><input class="surface" type="number"
                    placeholder="SURFACE" min="0"></form>
            <p class="who">Created in 1778, Immo is the leader of the real estate C2C market wether in sale or rent</p>
            <div class="access"><a href="contacts.html">CONTACTS</a> <a href="myfavorites.html"> MY FAVORITES</a> </div>
        </nav>
        <div class="advertgrid">
        <?php
        for($i = 0; $i < 9; $i++) {
            include 'card.php';
        }

        ?>
        </div>
        <footer>
            <div><a href="contacts.html">CONTACTS</a></div>
            <div><a href="FAQ.html">F.A.Q</a></div>
            <div class="socials">
                <a href="https://www.instagram.com/rorill69005/" target="_blank">Instagram</a>
                <a href="https://twitter.com/home" target="_blank">Twitter</a>
                <a href="https://www.facebook.com/?ref=logo" target="_blank">Facebook</a>
            </div>
        </footer>
    </body>

    </html>