<div class="card">
                    <div class="imageframe">
                        <div class="ribbon"> <span><?php if($annonce['type'] != null) {echo $annonce['type'];} else {echo 'rent';} ?></span>
                        <img class="bighouse" src="./assets/IMG/maison.jpg" alt="a house"></div>
                        <div class="smallhousecontainer"><img class="smallhouse test" src="./assets/IMG/maison.jpg" alt="">
                            <img class="smallhouse" src="./assets/IMG/maison.jpg" alt=""></div>
                    </div>
                    <div class="houseinfo">
                        <div class=>
                        <div><p class="house"><?php if($annonce['type'] != null) {echo $annonce['title'];} else {echo 'Maison';} ?></p></div>
                      
                        <div><p class="localization"><?php if($annonce['type'] != null) {echo $annonce['Location'];} else {echo 'Localisation';}?></p></div>
                    </div>  <button class="seemore" onclick="window.location.href='annonce.html';">
                        MORE
                      </button>
                        <div class="pricevalue"><p><?php if($annonce['type'] != null) {echo $annonce['price'].' €' ;} else {echo '500000 €';}?></p></div>
                    </div>
                    <div class="cardfooter">
                        <button onclick="window.location.href='contact_client.html'" class="contact">CONTACT</button>
                        <button onclick="window.location.href='add_favorite.html'"  class="addfavorite">FAVORITE</button>
                    </div>
                </div>