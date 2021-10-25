<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>E-Commerce|Ammad</title>
</head>
<body>
    <header>
        <div class="navigation">
            <div class="logo">
                <h1>AMMAD</h1>
                <span class="search_bar">
                    <input type="text" placeholder="search">
                        <a href="#">
                            <li class="fas fa-search"></li>
                        </a>
                        <h4>
                        <?php 
                            session_start();
                            if($_SESSION['user'] == null){
                                header('location:login.php');
                            }
                            else{
                                echo "".$_SESSION['user'];
                                ?>
                                    <a style="margin-left: 5px;" href="index.php?logout">Logout</a>
                                <?php

                                    if(isset($_GET['logout'])){
                                        header('location:login.php');
                                        session_destroy();
                                    }
                            }
                        ?>
                        </h4>
                </span>                   
            </div>
        <div class="nav-bar">
            <nav>
                <!-- <span class="space"><a href="categories.html">ALL CATEGORIES</a></span> -->
                <div class="dropdown">
                <button class="dropbtn">ALL CATEGORIES</button>
                  <div class="dropdown-content">
                      <a href="items.html"> Vahicles </a>
                      <!-- <ul>
                          <li><a href="#">Cars</a></li>
                          <li><a href="#">Cars on Installment</a></li>
                          <li><a href="#">Car Accessories</a></li>
                          <li><a href="#">Spare Part</a></li>
                          <li><a href="#">Buses, Vans & Truck</a></li>
                          <li><a href="#">Rickshow and Chingchi</a></li>
                          <li><a href="#">Other Vehicles</a></li>
                          <li><a href="#">Boats</a></li>
                          <li><a href="#">Tractors & Trailers</a></li>
                      </ul> -->
                    <a href="items.html">Fashion & Beauty</a>
                    <a href="items.html">Mobiles</a>
                    <a href="items.html">Services</a>
                    <a href="items.html">Company</a>
                    <a href="items.html">Mobiles</a>
                  </div>
                </div>
                <a href="items.html">Mobile Phone</a>
                <a href="items.html">Cars</a>
                <a href="items.html">Motorcycles</a>
                <a href="items.html">Houses</a>
                <a href="items.html">TV-Video-Audio</a>
                <a href="items.html">Tablets</a>
                <a href="items.html">Land & Plots</a>
            </nav>
        </div>

                <!--Free shipping End-->

        <div class="main-card">
            <div class="card1">
              <div>
                <img class="space" src="picture/free-shipping.svg" height="55px" width="55px" alt="">
              </div>
              <div>
              <h3 class="color">Free Shipping</h3>
              </div>
            </div>
            <div class="card2">
              <div>
                <img class="space" src="picture/12.svg" height="50px" width="50px" alt="">
              </div>
              <div>
                <h3 class="color">24/7 Support</h3>
              </div>
            </div>
            <div class="card3">
              <div>
                <img class="space" src="picture/thumb1.png" width="40px" alt="">
              </div>
              <div>
                <h3 class="color">Best Quality</h3>
              </div>
            </div>
          </div>

        <!--Free shipping End-->

        <!-- Content is started -->
        <div class="services">
            <div class="one">
               <a href=""><img src="picture/21.jpg"></a>
                <br/>
                <H3>Item 1 </H3> 
                <p class="price">Rs 500</p> 
                <a href="#" class="btn btn-primary">Add to Card</a>
              </div>
            <div class="two">
               <a href=""><img src="picture/22.jpg"></a>
                <br/>
              <h3>Item 2</h3>
              <p class="price">Rs 2500</p> 
              <a href="#" class="btn btn-primary">Add to Card</a>
            </div>
            <div class="three"> 
               <a href=""><img src="picture/23.jpg"></a>
                <br/>
               <h3>Item 3</h3>
               <p class="price">Rs 750</p> 
               <a href="#" class="btn btn-primary">Add to Card</a>
              </div>
            <div class="four">
               <a href=""><img src="picture/24.jpg"></a>
                <br/>
               <h3>Item 4</h3>
               <p class="price">Rs 3250</p> 
               <a href="#" class="btn btn-primary">Add to Card</a>
              </div>
            <div class="five">
              <a href=""><img src="picture/25.jpg"></a>
               <br/>
              <h3>Item 5</h3>
              <p class="price">Rs 950</p> 
              <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
           <div class="six">
            <a href=""><img src="picture/26.jpg"></a>
             <br/>
            <h3>Items 6</h3>
            <p class="price">Rs 1999</p> 
            <a href="#" class="btn btn-primary">Add to Card</a>
          </div>
         <div class="seven">
           <a href=""><img src="picture/27.jpg"></a>
            <br/>
           <h3>Item 7</h3>
           <p class="price">Rs 1699</p>
           <a href="#" class="btn btn-primary">Add to Card</a> 
          </div>
        <div class="eight">
           <a href=""><img src="picture/28.jpg"></a>
            <br/>
           <h3>Items 8</h3>
           <p class="price">Rs 1499</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
        <div class="nine">
           <a href=""><img src="picture/29.jpg"></a>
            <br/>
           <h3>Item 9</h3>
           <p class="price">Rs 2799</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
        <div class="ten">
           <a href=""><img src="picture/30.jpg"></a>
            <br/>
           <h3>Items 10</h3>
           <p class="price">Rs 2450</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
          </div>
        <div class="onee">
           <a href=""><img src="picture/31.jpg"></a>
            <br/>
           <h3>Items 11</h3>
           <p class="price">Rs 7000</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
        <div class="twoo">
           <a href=""><img src="picture/32.jpg"></a>
            <br/>
           <h3>Items 12</h3>
           <p class="price">Rs 890</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
        </div>
        <!-- Content is ended -->
        <!-- Heading -->

        <div class="heading">
            <h2>New Arrivals</h2>
          </div>

          <!-- Heading Ended  -->

          <!-- Heading Content is started  -->
          <div class="services">
            <div class="one">
               <a href=""><img src="picture/21.jpg"></a>
                <br/>
                <H3>Item 1 </H3> 
                <p class="price">Rs 500</p> 
                <a href="#" class="btn btn-primary">Add to Card</a>
              </div>
            <div class="two">
               <a href=""><img src="picture/22.jpg"></a>
                <br/>
              <h3>Item 2</h3>
              <p class="price">Rs 2500</p> 
              <a href="#" class="btn btn-primary">Add to Card</a>
            </div>
            <div class="three"> 
               <a href=""><img src="picture/23.jpg"></a>
                <br/>
               <h3>Item 3</h3>
               <p class="price">Rs 750</p> 
               <a href="#" class="btn btn-primary">Add to Card</a>
              </div>
            <div class="four">
               <a href=""><img src="picture/24.jpg"></a>
                <br/>
               <h3>Item 4</h3>
               <p class="price">Rs 3250</p> 
               <a href="#" class="btn btn-primary">Add to Card</a>
              </div>
            <div class="five">
              <a href=""><img src="picture/25.jpg"></a>
               <br/>
              <h3>Item 5</h3>
              <p class="price">Rs 950</p> 
              <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
           <div class="six">
            <a href=""><img src="picture/26.jpg"></a>
             <br/>
            <h3>Items 6</h3>
            <p class="price">Rs 1999</p> 
            <a href="#" class="btn btn-primary">Add to Card</a>
          </div>
         <div class="seven">
           <a href=""><img src="picture/27.jpg"></a>
            <br/>
           <h3>Item 7</h3>
           <p class="price">Rs 1699</p>
           <a href="#" class="btn btn-primary">Add to Card</a> 
          </div>
        <div class="eight">
           <a href=""><img src="picture/28.jpg"></a>
            <br/>
           <h3>Items 8</h3>
           <p class="price">Rs 1499</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
        <div class="nine">
           <a href=""><img src="picture/29.jpg"></a>
            <br/>
           <h3>Item 9</h3>
           <p class="price">Rs 2799</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
        <div class="ten">
           <a href=""><img src="picture/30.jpg"></a>
            <br/>
           <h3>Items 10</h3>
           <p class="price">Rs 2450</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
          </div>
        <div class="onee">
           <a href=""><img src="picture/31.jpg"></a>
            <br/>
           <h3>Items 11</h3>
           <p class="price">Rs 7000</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
        <div class="twoo">
           <a href=""><img src="picture/32.jpg"></a>
            <br/>
           <h3>Items 12</h3>
           <p class="price">Rs 890</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
        </div>
        <div class="services">
            <div class="one">
               <a href=""><img src="picture/21.jpg"></a>
                <br/>
                <H3>Item 1 </H3> 
                <p class="price">Rs 500</p> 
                <a href="#" class="btn btn-primary">Add to Card</a>
              </div>
            <div class="two">
               <a href=""><img src="picture/22.jpg"></a>
                <br/>
              <h3>Item 2</h3>
              <p class="price">Rs 2500</p> 
              <a href="#" class="btn btn-primary">Add to Card</a>
            </div>
            <div class="three"> 
               <a href=""><img src="picture/23.jpg"></a>
                <br/>
               <h3>Item 3</h3>
               <p class="price">Rs 750</p> 
               <a href="#" class="btn btn-primary">Add to Card</a>
              </div>
            <div class="four">
               <a href=""><img src="picture/24.jpg"></a>
                <br/>
               <h3>Item 4</h3>
               <p class="price">Rs 3250</p> 
               <a href="#" class="btn btn-primary">Add to Card</a>
              </div>
            <div class="five">
              <a href=""><img src="picture/25.jpg"></a>
               <br/>
              <h3>Item 5</h3>
              <p class="price">Rs 950</p> 
              <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
           <div class="six">
            <a href=""><img src="picture/26.jpg"></a>
             <br/>
            <h3>Items 6</h3>
            <p class="price">Rs 1999</p> 
            <a href="#" class="btn btn-primary">Add to Card</a>
          </div>
         <div class="seven">
           <a href=""><img src="picture/27.jpg"></a>
            <br/>
           <h3>Item 7</h3>
           <p class="price">Rs 1699</p>
           <a href="#" class="btn btn-primary">Add to Card</a> 
          </div>
        <div class="eight">
           <a href=""><img src="picture/28.jpg"></a>
            <br/>
           <h3>Items 8</h3>
           <p class="price">Rs 1499</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
        <div class="nine">
           <a href=""><img src="picture/29.jpg"></a>
            <br/>
           <h3>Item 9</h3>
           <p class="price">Rs 2799</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
        <div class="ten">
           <a href=""><img src="picture/30.jpg"></a>
            <br/>
           <h3>Items 10</h3>
           <p class="price">Rs 2450</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
          </div>
        <div class="onee">
           <a href=""><img src="picture/31.jpg"></a>
            <br/>
           <h3>Items 11</h3>
           <p class="price">Rs 7000</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
        <div class="twoo">
           <a href=""><img src="picture/32.jpg"></a>
            <br/>
           <h3>Items 12</h3>
           <p class="price">Rs 890</p> 
           <a href="#" class="btn btn-primary">Add to Card</a>
        </div>
        </div>

        <!-- Heading Content is end  -->










        <footer>
            <div class="footer">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <hr color="red" class="hori-line">
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">our services</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">affilated program</a></li>

                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>get help</h4>
                        <hr color="red" class="hori-line">

                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">shipping</a></li>
                            <li><a href="#">returns</a></li>
                            <li><a href="#">order status</a></li>
                            <li><a href="#">payment option</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>online shop</h4>
                        <hr color="red" class="hori-line1">

                        <ul>
                            <li><a href="#">watch</a></li>
                            <li><a href="#">bag</a></li>
                            <li><a href="#">shoes</a></li>
                            <li><a href="#">dress</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <hr color="red" class="hori-line">

                        <div class="social-link">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-snapchat"></i></a>


                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </header>   
</body>
</html>