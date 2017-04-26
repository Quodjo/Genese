<?php 
require_once dirname(__FILE__).'/components/header.php';
?>
<section class="gJumbotron">
    <section class="gWrapper" id="mainPage">
        <!--Navigation-->
        <?php 
        require_once dirname(__FILE__).'/components/navigation.php';
?>
            <!--end of navigation-->
        <div class="section">
            <!--Home section-->
            <section id="homeSearch">
                <div class="row headerPage">
                    <!--BAckground slideshow-->
                    <div class="slideShowBack">
                        <ul class="rslides">
                            <li><img src="http://cdn.wallpapersafari.com/43/41/yJ07XB.jpg" alt=""></li>
                            <li><img src="http://cdn.wallpapersafari.com/39/49/szDoBT.jpg" alt=""></li>
                            <li><img src="http://cdn.wallpapersafari.com/65/25/IsRzh2.jpg" alt=""></li>
                        </ul>
                    </div>
                    <!--end of background slideshow-->
                    <!--Home header content-->
                    <div class="valign-wrapper mContent">
                        <div class="container">
                            <div>
                                <!--Logo container-->
                                <div class="card-header" id="menLog">
                                    <img class="responsive-img" src="http://www.yourlogoresources.com/wp-content/uploads/2012/03/Food_Network_logo.png">
                                </div>
                                <!--end of logo container-->
                                <!--Welcome Message-->
                                <h1 id="introText">Great Meals</h1>
                                <!--end of welcome message-->
                                <!--Search bar-->
                                <div id="searchDiv">
                                    <form id="search" method="POST" action="">
                                        <div class="input-field col s12">
                                            <input id="idSearch" type="text" class="validate" placeholder="Search Menu" autofocus>
                                        </div>
                                    </form>
                                </div>
                                <!--end of search bar-->
                                <!--Scroll down icon-->
                                <div class="row  scrollAnim">
                                    <div class="row">
                                        <div class="animated jello infinite container">
                                            <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="row">
                                    </div>
                                </div>
                                <!--end of scroll down icon-->
                            </div>
                        </div>
                    </div>
                    <!--end of home header content-->
                </div>
            </section>
            <!--end of home section-->
        </div>
        <!--Fixed button on the page that acts as the cart button-->
        <?php 
require_once dirname(__FILE__).'/components/cartIcon.php';
?>
        <!--End of checkout button-->
        <div class="section">
            <section id="foodFeature" class="mealAd">
                <!--Meal ad section-->
                <?php 
require_once dirname(__FILE__).'/components/featuredFood.php';
?>
                <!--End of meal ad section-->
            </section>
        </div>
        <div class="section">
            <!--Food menu-->
            <section id="mealMenu">
                <div class="row menuCaption">
                    <h1>Menu</h1>
                </div>
                <div class="row menuWrap">
                    <!--Categories of items will be placed here if any-->
                    <?php 
require_once dirname(__FILE__).'/components/categories.php';
?>
                    <!--end of categories-->
                    <!--Menu content-->
                    <div class="menuGrid">
                        <div class="valign-wrapper">
                            <div class="container">
                                <!--Food row-->
                                <div class="row foodRow" id = "foodBoard">
                                    <!--Meal card-->
                                    <?php 
require_once dirname(__FILE__).'/components/mealCard.php';
?>
 
                                    <!--End of meal card-->
                                   
                                </div>
                                <!--end of food row-->
                            </div>
                        </div>
                    </div>
                    <!--end of menu content-->
                    <!--Check out side-->
                    <?php 
require_once dirname(__FILE__).'/components/cart.php';
?>
                    <!--end of checkout side-->
                </div>
            </section>
            <!--end of food menu-->
        </div>
        <!--Search modal-->
        <!-- Modal Trigger -->
        <!-- <a class="waves-effect waves-light btn" href="#extrasModal">Modal</a>-->
        <!-- Modal Structure -->
        <?php 
require_once dirname(__FILE__).'/components/mealExtras.php';
?>
        <!--end of modal-->
    </section>
</section>
<?php 
require_once dirname(__FILE__).'/components/footer.php';
?>
</body>
</html>