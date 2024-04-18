<nav class="navbar"><div class="logobutton"><button class="sell">Sell/Rent your property</button>
            <img class="logo" src="/assets/IMG/Immo.webp" alt=""> </div>
            <form class="search" action=""><input class="location" placeholder="LOCATION"><input class="price"
                    placeholder="PRICE" type="number" min="100"><input class="surface" type="number"
                    placeholder="SURFACE" min="0"></form>
            <p class="who">Created in 1778, Immo is the leader of the real estate C2C market wether in sale or rent</p>
            <div class="access">
            <?php if (!isset($_SESSION['user'])): ?>
            <a href="/_login.php">LOGIN</a>
            <?php endif; ?>
            <?php if(isset($_SESSION['user'])): ?>
            <a href="/partials/_logout.php">LOGOUT</a>
            <a href="/Listings/new.php">CREATE AD</a>
            <?php endif;?>
                <a href="contacts.html">CONTACTS</a> <a href="myfavorites.html"> MY FAVORITES</a> </div>
        </nav>