<div class="card">
                    <div class="imageframe">
                        <div class="ribbon"> <span><?php echo 'for '.$annonce['ListingType']; ?></span>
                        <img class="bighouse" src="./assets/IMG/maison.jpg" alt="a house"></div>
                        <div class="smallhousecontainer"><img class="smallhouse test" src="./assets/IMG/maison.jpg" alt="">
                            <img class="smallhouse" src="./assets/IMG/maison.jpg" alt=""></div>
                    </div>
                    <div class="houseinfo">
                        <div class=>
                        <div><p class="house"><?php echo $annonce['title'];?></p></div>
                      
                        <div><p class="localization"><?php echo $annonce['Location'];?></p></div>
                    </div>  <button class="seemore" onclick="window.location.href='annonce.html';">
                        MORE
                      </button>
                        <div class="pricevalue"><p><?php echo $annonce['price'].' €' ;?></p></div>
                    </div>
                    <div class="cardfooter">
                        <button onclick="window.location.href='contact_client.html'" class="contact">CONTACT</button>
                        <button onclick="window.location.href='add_favorite.html'"  class="addfavorite">FAVORITE</button>
                    </div>
                </div>