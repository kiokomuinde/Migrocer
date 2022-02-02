<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/JPEG" href="images/mig1.png">
        <title>MI Grocer | Store</title>
        <meta name="descriotion" content="This is the description">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <Script src="store.js" async></Script>

    </head>

    <body>
       
<header class="main-header">
    <hr>
        <h1 class="band-name band-name-large"><img class="migrocer" 
        src="images/mig1.png">MI Grocer`</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="landing.php">MI Grocer`</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#cereals">Cereals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#vegetables">Vegetables</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#fruits">Fruits</a>
          </li>
        </ul>
        <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
      
                   
        <button type="button" class="trigger" data-toggle="modal"
        data-target="#exampleModalScrollable"><img class="carti" 
        src="images/cart.png">
        <span class="cart-total-price">0</span>
        </button>
        </div>
    </nav>
</header>  

        <section class="container content-section" id = "cereals">
            <h2 class="section-header">Cereals</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Green maize</span>
                    <img src="images/greenmaize.jpeg" alt="" class="shop-item-image">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$2.00</span><span>/kg</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

                <div class="shop-item">
                    <span class="shop-item-title">Dry maize</span>
                    <img src="images/drymaize.jpeg" alt="" class="shop-item-image">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$1.23</span><span>/kg</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Wheat</span>
                    <img src="images/wheat.jpeg" alt="" class="shop-item-image">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$3.99</span><span>/kg</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

                <div class="shop-item">
                    <span class="shop-item-title">Beans</span>
                    <img src="images/beans.jpeg" alt="" class="shop-item-image">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$1.99</span><span>/kg</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

                <div class="shop-item">
                    <span class="shop-item-title">Dolichos</span>
                    <img src="images/dolichos.jpeg" alt="" class="shop-item-image">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$3.49</span><span>/kg</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

                <div class="shop-item">
                        <span class="shop-item-title">Green Lentils</span>
                        <img src="images/greenlents.jpeg" alt="" class="shop-item-image">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$3.29</span><span>/kg</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                 </div>

                 <div class="shop-item">
                        <span class="shop-item-title">Green Grams</span>
                        <img src="images/greengrams.jpeg" alt="" class="shop-item-image">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$2.49</span><span>/kg</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>

                    <div class="shop-item">
                            <span class="shop-item-title">Green Peas</span>
                            <img src="images/greenpeas.jpeg" alt="" class="shop-item-image">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$1.99</span><span>/kg</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>

                        <div class="shop-item">
                                <span class="shop-item-title">Pigeon Peas</span>
                                <img src="images/pigeonpeas.jpg" alt="" class="shop-item-image">
                                <div class="shop-item-details">
                                    <span class="shop-item-price">$5.99</span><span>/kg</span>
                                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                                </div>
                        </div>

                        <div class="shop-item">
                                <span class="shop-item-title">Yellow Beans</span>
                                <img src="images/yellowbeans.jpeg" alt="" class="shop-item-image">
                                <div class="shop-item-details">
                                    <span class="shop-item-price">$2.99</span><span>/kg</span>
                                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                                </div>
                        </div>

                        <div class="shop-item">
                                <span class="shop-item-title">Barley</span>
                                <img src="images/barley.jpg" alt="" class="shop-item-image">
                                <div class="shop-item-details">
                                    <span class="shop-item-price">$2.69</span><span>/kg</span>
                                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                                </div>
                        </div>

                        <div class="shop-item">
                                <span class="shop-item-title">Oats</span>
                                <img src="images/oats.jpg" alt="" class="shop-item-image">
                                <div class="shop-item-details">
                                    <span class="shop-item-price">$5.99</span><span>/kg</span>
                                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                                </div>
                        </div>




            </div>
        </section>

        <!-- -------------- Vegetables --------------------->

        <section class="container content-section" id = "vegetables">
                <h2 class="section-header">Vegetables</h2>
                <div class="shop-items">
                    <div class="shop-item">
                        <span class="shop-item-title">Cabbage</span>
                        <img src="images/cabbage.jpeg" alt="" class="shop-item-image">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$1.09</span><span>/kg</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
    
                    <div class="shop-item">
                        <span class="shop-item-title">Cucumber</span>
                        <img src="images/cucumber.jpeg" alt="" class="shop-item-image">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$2.49</span><span>/kg</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="shop-item">
                        <span class="shop-item-title">Pumpkins</span>
                        <img src="images/pumpkin.jpeg" alt="" class="shop-item-image">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$3.99</span><span>/kg</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
    
                    <div class="shop-item">
                        <span class="shop-item-title">Potatoes</span>
                        <img src="images/potatoes.jpeg" alt="" class="shop-item-image">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$4.99</span><span>/kg</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>

                    <div class="shop-item">
                        <span class="shop-item-title">Tomatoes</span>
                        <img src="images/tomatoes.jpeg" alt="" class="shop-item-image">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$2.99</span><span>/kg</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
    
                    <div class="shop-item">
                        <span class="shop-item-title">Carrots</span>
                        <img src="images/carrots.jpeg" alt="" class="shop-item-image">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$1.99</span><span>/kg</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>

                    <div class="shop-item">
                        <span class="shop-item-title">Garlic</span>
                        <img src="images/garlic.jpeg" alt="" class="shop-item-image">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$7.99</span><span>/kg</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>

                    <div class="shop-item">
                        <span class="shop-item-title">Onions</span>
                        <img src="images/onions.jpeg" alt="" class="shop-item-image">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$4.99</span><span>/kg</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>

                    <div class="shop-item">
                        <span class="shop-item-title">Capsicum</span>
                        <img src="images/capsicum.jpeg" alt="" class="shop-item-image">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$10.99</span><span>/kg</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>

                    <div class="shop-item">
                        <span class="shop-item-title">Coriander</span>
                        <img src="images/coriander.jpg" alt="" class="shop-item-image">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$3.99</span><span>/kg</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>

                    <div class="shop-item">
                        <span class="shop-item-title">Collard Greens</span>
                        <img src="images/collardgreens.jpg" alt="" class="shop-item-image">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$4.99</span><span>/kg</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>

                    <div class="shop-item">
                        <span class="shop-item-title">Swiss Chard</span>
                        <img src="images/swisschard.jpg" alt="" class="shop-item-image">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$6.99</span><span>/kg</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>


                </div>
            </section>



            <!-------------- Fruits ------------->

            <section class="container content-section" id = "fruits">
                    <h2 class="section-header">Fruits</h2>
                    <div class="shop-items">
                        <div class="shop-item">
                            <span class="shop-item-title">Pineapple</span>
                            <img src="images/pineapple.jpeg" alt="" class="shop-item-image">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$1.99</span><span>/kg</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
        
                        <div class="shop-item">
                            <span class="shop-item-title">Mangoes</span>
                            <img src="images/mango.jpeg" alt="" class="shop-item-image">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$2.49</span><span>/kg</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>

                        <div class="shop-item">
                            <span class="shop-item-title">Banana</span>
                            <img src="images/banana.jpeg" alt="" class="shop-item-image">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$5.99</span><span>/kg</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
        
                        <div class="shop-item">
                            <span class="shop-item-title">Passion Fruit</span>
                            <img src="images/passion.jpg" alt="" class="shop-item-image">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$6.99</span><span>/kg</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>

                        <div class="shop-item">
                            <span class="shop-item-title">Apple</span>
                            <img src="images/apple.jpeg" alt="" class="shop-item-image">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$7.49</span><span>/kg</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
        
                        <div class="shop-item">
                            <span class="shop-item-title">Lemon</span>
                            <img src="images/lemon.jpeg" alt="" class="shop-item-image">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$3.59</span><span>/kg</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>

                        <div class="shop-item">
                            <span class="shop-item-title">Oranges</span>
                            <img src="images/orange.jpeg" alt="" class="shop-item-image">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$8.99</span><span>/kg</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>

                        <div class="shop-item">
                            <span class="shop-item-title">Avocado</span>
                            <img src="images/avocado.jpg" alt="" class="shop-item-image">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$10.99</span><span>/kg</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>


                        <div class="shop-item">
                            <span class="shop-item-title">Ribena</span>
                            <img src="images/ribena.jpg" alt="" class="shop-item-image">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$6.99</span><span>/kg</span>
                                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </section>

                


                <!----------------- CART----------------------->
       


  
               
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <section class="container content-section"> 
                            <form  ENCTYPE="multipart/form-data" method = "post" action = "goods.php">
                            
                            
                                <h2 class="section-header">CART</h2>
                                <div class="cart-row">
                                    <span class="cart-item cart-header cart-column">
                                        ITEM</span>
                                    <span class="cart-title-price cart-header cart-column">
                                        PRICE</span>
                                    <span class="cart-quantity cart-header cart-column">
                                        QNTY (Kgs)</span>
                                </div>
                                
                                <div class="cart-items">
                                    
                                </div>
                                <div class="cart-total">
                                    <strong class="cart-total-title">TOTAL</strong>
                                    <span class="cart-total-prices totz">$0</span>
                                </div>
                                <!-- <a href=""> -->
                                <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault01">Phone number</label>
                                    <input type="text" name="phone" class="form-control" 
                                    id="validationDefault01" value="" placeholder="07112345678" required>
                                </div>

                                <div class="tricks">

                                </div>

        
                                <button class="btn btn-success btn-purchase" type="submit" 
                                name="submit">PURCHASE</button>
                                <button type="button" class="btn btn-secondary btn-purchase" 
                                data-dismiss="modal">Close</button>
                               
                            
                        </div>
                        </form>
                        </section>

                        <div class="modal-footer">
                    
                    
                        </div>
                    </div>
                    </div>
                </div>
</div>

       

        <footer class=" footer landingfoot p-4 footer-success">
            <div class="container">
      <div class="row">      
        <div class="col-6 col-sm-6 col-md-3">
                <h5 class="linkh">LET US HELP YOU</h5>
                <ul class="flinks">
                    <li><a href="#" class="">Help Center</a></li>
                    <li><a href="#" class="">Delivery</a></li>
                    <li><a href="#" class="">Return Policy</a></li>
                                       
                                        
                    </ul>

        </div>
        <div class="col-6 col-sm-6 col-md-3">
                <h5 class="linkh">ABOUT MI GROCER</h5>
                <ul class="flinks">
                    <li><a href="#" class="">About us</a></li>
                    <li><a href="#" class="">Terms & Conditions</a></li>
                    <li><a href="#" class="">Priacy policy</a></li>
        
                    
                </ul>

        </div>
      


        <div class="col-6 col-sm-6 col-md-3">
                <h5 class="linkh">MI Grocer UK</h5>
                <ul class="flinks">
                    <li><a href="#" class="">London</a></li>
                    <li><a href="#" class="">Bournemouth</a></li>
                    <li><a href="#" class="">Southampton</a></li>
                    <li><a href="#" class="">Portsmouth</a></li>
                    
                    
                </ul>

        </div>


        <div class="col-6 col-sm-6 col-md-3">
               
                <h5 class="linkh">PAYMENT METHODS</h5>
                <ul class="flinks">
                    <li><a href="https://www.paypal.com/home" class="">Paypal</a></li>
                    
                    
                </ul>

        </div>
      </div>
        
        <div class="row mt-2 bgf ">
                <div  class="col-md-12 text-center">
        <div class="copy">
        <p id="copyhenry" >Copyright &copy;<script type="document.write(newDate().
          getFullYear());"></script>

                                All Rights Reserved|!|</p>
                </div>

                </div>  
        </div>
        </div>
    </footer>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        


    </body>


</html>