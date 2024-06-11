<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping site in India: Shop Online for Mobiles, Books, Watches, Shoes and More - Amazon.in</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io (3)/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io (3)/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io (3)/favicon-16x16.png">
<link rel="manifest" href="favicon_io (3)/site.webmanifest">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="nav-upper">
            <div class="nav-logo border">
                <a href="">
                    <img class="responsive-logo" src="images/amazon.com" alt="amazon.in" width="128px" height="50px">
                </a>
            </div>
            <div class="nav-address border">
                <p class="line-1">Deliver to mayank</p>
                <p class="line-2"><i class="fa-solid fa-location-dot"></i> Jaipur 302033</p>
            </div>
            <div class="nav-searchbar">
                <div class="nav-select">
                    <select  class="search-categories" id="">
                        <option value="">All categories</option>
                        <option value="">Alexa Skills</option>
                        <option value="">Amazon devices</option>
                        <option value="">Amazon Fashion</option>
                        <option value="">Amazon Pharmacy</option>
                        <option value="">App and games</option>
                        <option value="">Audible Audiobooks</option>
                        <option value="">Baby</option>
                        <option value="">Beauty</option>
                        <option value="">Books</option>
                        <option value="">Car & Motorbike</option>
                        <option value="">Clothing & Accessiories</option>
                        <option value="">Collectibles</option>
                        <option value="">Computers & Accessories</option>
                        <option value="">Electronics</option>
                        <option value="">Furniture</option>
                        <option value="">Gardening & outdoors</option>
                        <option value="">Gift cards </option>
                        <option value="">Grocery & Gourmet Foods</option>
                        <option value="">Health & Personal Care </option>
                        <option value="">Home & Kitchen</option>
                        <option value="">Industry & Scientific</option>
                        <option value="">Jewellery</option>
                        <option value="">Kindle Store</option>
                        <option value="">Luggage & Bags</option>
                        <option value="">Luxury Beauty</option>
                        <option value="">Movies & TV Shows</option>
                        <option value="">Music</option>
                        <option value="">Musical Instrumnets</option>
                        <option value="">Office Products</option>
                        <option value="">Pet Supplies</option>
                        <option value="">Prime Video</option>
                        <option value="">Shoes & Handbags</option>
                        <option value="">Software</option>
                        <option value="">Sports,Fitness & Outdoors</option>
                        <option value="">Subscribe & Save</option>
                        <option value="">Tools & Home Improvement</option>
                        <option value="">Toys & Games</option>
                        <option value="">Under ₹500</option>
                        <option value="">Video Games</option>
                        <option value="">Watches</option>
                    </select>
                </div>
                  <div class="nav-search">
                    <input type="text" placeholder="Search Amazon.in" class="nav-search">
                  </div>
                  <div class="search-icon"><i class="fa-solid fa-magnifying-glass"></i> 
                </div>
            </div>
            <div class="nav-language border">
                <select name="" id="">
                    <option value="">EN</option>
                    <option value="">US</option>
                </select>
            </div>
            <div class="box5 border">
                <p class="line1-1">Hello, <?php echo $_SESSION['username']; ?></p>
                <p class="line-2">Accounts & Lists</p>
            </div>
            <div class="box6 border">
                <p class="line1-1">Returns</p>
                <p class="line-2">& Orders</p>
            </div>
            <div class="nav-cart border">
                <i class="fa-solid fa-cart-shopping"></i>
                <p class="cart">Cart</p>
            </div>
            <?php if(!isset($_SESSION['id']) && !isset($_SESSION['username'])) { ?>
                    <div>
                        <a href="http://localhost:81/loginFormPhp/">Login</a>
                    </div>
                <?php } 
                else{ ?>
                     <div>
                     <a href="./loginFormPhp/logout.php">Logout</a>
                     </div>
                    <?php
                }
                ?>
        </div>

        <div class="navbar-lower">
            <div class="panel">
                <p><i class="fa-solid fa-bars"></i> All</p>
                <p>Amazon Pay</p>
                <p>Health,Household & Personal Care</p>
                <p>Customer Service</p>
                <p>Best Sellers</p>
                <p>Amazon miniTV</p>
                <p>Sell</p>
                <p class="panel-responsive">Gift Cards</p>
                <p class="panel-responsive">Buy Again</p>
                <p class="panel-responsive">Coupons</p>
                <p class="panel-responsive">Toys & Games</p>
                <p class="panel-responsive">Baby</p>
                <p class="panel-responsive">Sports, Fitness & Outdoors</p>
                <p class="panel-responsive">Subscribe & Save</p>
            </div>
        </div>
        </div>
    </header>

    <div class="hero-section">
        <img src="images/header/header image 2.jpg" alt="">
        <div class="boxes hero-1">
            <div class="box-1">
                <div class="hero1">
                <h2>Pick up where you let off</h2>
                <div class="inner-box-1-1">Stick</div>
                <div class="inner-box-1-2">Stick lite</div>
                <div class="inner-box-1-3">Stick r4k</div>
                <div class="inner-box-1-4">Stick 4k max</div>
            </div>
        </div>
            <div class="box-2">
                <div class="hero2">
                <h2>Keep shopping for</h2>
                <div class="inner-box-2-1">
                    Audio Headphones</div>
            </div>
            </div>
            <div class="box-3">
                <div class="hero3">
                    <h2>Electronics</h2>
                    <div class="inner-box-3-1">
                        <a href="">See more</a>
                    </div>
                </div>
            </div>
            <div class="box-4">Box4
                <div class="hero4"></div>
            </div>
        </div>

        <div class="boxes hero-2">
            <div class="box-1">
                <div class="hero3">
                <h2>Electronics</h2>
                <div class="inner-box-3-1">
                    <a href="">See more</a>
                </div>
            </div></div>
            <div class="box-2">
                <div class="hero3">
                    <h2>Electronics</h2>
                    <div class="inner-box-3-1">
                        <a href="">See more</a>
                    </div>
                </div>
            </div>
            <div class="box-3">
                <div class="hero3">
                    <h2>Electronics</h2>
                    <div class="inner-box-3-1">
                        <a href="">See more</a>
                    </div>
                </div>
            </div>
        </div>
          </div>

          <footer>
            <div class="back-to-top">
            <button onclick="scrollToTop()">Back to top</button>
            
            </div>
            <div class="footer">
               <div class="f-box-1">
                <p class="f-inner-box-1">Get to Know Us</p>
                <p>Careers</p>
                <p>Blog</p>
                <p>About Amazon</p>
                <p>Investor Relations</p>
                <p>Amazon Devices</p>
                <p>Amazon Science</p>
               </div> 
               <div class="f-box-2">
                <p class="f-inner-box-2">Make Money with Us</p>
                <p>Sell products on Amazon</p>
                <p>Sell on Amazon Business</p>
                <p>Sell apps on Amazon</p>
                <p>Become an Affiliate</p>
                <p>Advertise your products</p>
                <p>Self-Publish with Us</p>
                <p>Host an Amazon Hub</p>
                <a href="">›See More Make Money with Us</a>
               </div>
                <div class="f-box-3">
                    <p class="f-inner-box-3">Amazon Payment Products</p>
                    <p>Amazon Business Card</p>
                    <p>Shop with Points</p>
                    <p>Reload Your Balance</p>
                    <p>Amazon Currency Converter</p>
                </div>
                <div class="f-box-4">
                   <p class="f-inner-box-4">Let Us Help You</p>
                   <p>Amazon and COVID-19</p>
                   <p>Your Account</p>
                   <p>Your Orders</p>
                   <p>Shipping Rates & Policies</p>
                   <p>Returns & Replacements</p>
                   <p>Manage Your Content and Devices</p>
                   <p>Amazon Assistant</p>
                   <p>Help</p>
                </div>
                
        </div>
        <div class="copyright">
            <div class="copyright-line-1">
                <ul>
                    <li>Conditions of Use</li>
                    <li>Privacy Notice</li>
                    <li>Your Ads Privacy Choices</li>
                </ul>
            </div>
            <div class="copyright-line-2">
                <p>© 1996-2023, Amazon.com, Inc. or its affiliates</p>
            </div>
                
        </div>
          </footer>

          <script src="index.js"></script>
</body>
</html>

<?php
}
else{
    header("Location: http://localhost:81/loginFormPhp/");
    exit();
}

?>