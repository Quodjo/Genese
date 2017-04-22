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
                                <div class="row foodRow">
                                    <!--Meal card-->
                                    <?php 
require_once dirname(__FILE__).'/components/mealCard.php';
?>
                                    <!--End of meal card-->
                                    <!--Meal card-->
                                    <div class="card mealCard medium col m3 s12">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="http://www.pngall.com/wp-content/uploads/2016/04/Water-Bottle-Transparent.png">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Item Title<i class="material-icons right">more_vert</i></span>
                                            <p>GHC20</p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">ItemTitle<i class="material-icons right">close</i></span>
                                            <p>A short description of the food item.</p>
                                            <form action="#">
                                                <p>
                                                    <input name="group2" type="radio" id="tes2" />
                                                    <label for="tes2">Big Bottle</label>
                                                </p>
                                                <p>
                                                    <input name="group2" type="radio" id="tes4" />
                                                    <label for="tes4">Small Bottle</label>
                                                </p>
                                            </form>
                                            <h3>GHC20</h3>
                                            <a class="waves-effect waves-light btn addCartBtn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                <span> Add to Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--End of meal card-->
                                    <!--Meal card-->
                                    <div class="card mealCard medium col m3 s12">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="http://res.cloudinary.com/xybimages/image/upload/c_fit,h_200,w_200/v1491215832/Genese/Food/cocacola_PNG23.png">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Item Title<i class="material-icons right">more_vert</i></span>
                                            <p>GHC20</p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">ItemTitle<i class="material-icons right">close</i></span>
                                            <p>A short description of the food item.</p>
                                            <form action="#">
                                                <p>
                                                    <input name="group1" type="radio" id="test1" />
                                                    <label for="test1">Big Bottle</label>
                                                </p>
                                                <p>
                                                    <input name="group1" type="radio" id="test2" />
                                                    <label for="test2">Small Bottle</label>
                                                </p>
                                            </form>
                                            <h3>GHC20</h3>
                                            <a class="waves-effect waves-light btn addCartBtn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                <span> Add to Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--End of meal card-->
                                    <!--Meal card-->
                                    <div class="card  mealCard medium col m3 s12">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="http://res.cloudinary.com/xybimages/image/upload/c_fit,w_200/v1491215669/Genese/Food/Pink_frosted_sprinkled_donut.png">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Item Title<i class="material-icons right">more_vert</i></span>
                                            <p>GHC20</p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">ItemTitle<i class="material-icons right">close</i></span>
                                            <p>A short description of the food item.</p>
                                            <form action="#">
                                                <p>
                                                    <input name="group1" type="radio" id="test1" />
                                                    <label for="test1">Full portion</label>
                                                </p>
                                                <p>
                                                    <input name="group1" type="radio" id="test2" />
                                                    <label for="test2">Half Portion</label>
                                                </p>
                                            </form>
                                            <h3>GHC20</h3>
                                            <a class="waves-effect waves-light btn addCartBtn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                <span> Add to Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--End of meal card-->
                                    <!--Meal card-->
                                    <div class="card  medium col m3 s12 mealCard">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="http://res.cloudinary.com/xybimages/image/upload/c_fit,h_200,w_200/v1491214779/Genese/Food/Cupcake.png">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Item Title<i class="material-icons right">more_vert</i></span>
                                            <p>GHC20</p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">ItemTitle<i class="material-icons right">close</i></span>
                                            <p>A short description of the food item.</p>
                                            <form action="#">
                                                <p>
                                                    <input name="group1" type="radio" id="test1" />
                                                    <label for="test1">Big Bottle</label>
                                                </p>
                                                <p>
                                                    <input name="group1" type="radio" id="test2" />
                                                    <label for="test2">Small Bottle</label>
                                                </p>
                                            </form>
                                            <h3>GHC20</h3>
                                            <a class="waves-effect waves-light btn addCartBtn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                <span> Add to Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--End of meal card-->
                                    <!--Meal card-->
                                    <div class="card mealCard medium col m3 s12">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="http://res.cloudinary.com/xybimages/image/upload/c_fit,h_200,w_200/v1491215832/Genese/Food/cocacola_PNG23.png">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Item Title<i class="material-icons right">more_vert</i></span>
                                            <p>GHC20</p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">ItemTitle<i class="material-icons right">close</i></span>
                                            <p>A short description of the food item.</p>
                                            <form action="#">
                                                <p>
                                                    <input name="group1" type="radio" id="test1" />
                                                    <label for="test1">Big Bottle</label>
                                                </p>
                                                <p>
                                                    <input name="group1" type="radio" id="test2" />
                                                    <label for="test2">Small Bottle</label>
                                                </p>
                                            </form>
                                            <h3>GHC20</h3>
                                            <a class="waves-effect waves-light btn addCartBtn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                <span> Add to Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--End of meal card-->
                                    <!--Meal card-->
                                    <div class="card mealCard medium col m3 s12">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="http://www.pngall.com/wp-content/uploads/2016/04/Water-Bottle-Transparent.png">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Item Title<i class="material-icons right">more_vert</i></span>
                                            <p>GHC20</p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">ItemTitle<i class="material-icons right">close</i></span>
                                            <p>A short description of the food item.</p>
                                            <form action="#">
                                                <p>
                                                    <input name="group2" type="radio" id="tes2" />
                                                    <label for="tes2">Big Bottle</label>
                                                </p>
                                                <p>
                                                    <input name="group2" type="radio" id="tes4" />
                                                    <label for="tes4">Small Bottle</label>
                                                </p>
                                            </form>
                                            <h3>GHC20</h3>
                                            <a class="waves-effect waves-light btn addCartBtn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                <span> Add to Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--End of meal card-->
                                    <!--Meal card-->
                                    <div class="card mealCard medium col m3 s12">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="http://res.cloudinary.com/xybimages/image/upload/c_fit,h_200,w_200/v1491215832/Genese/Food/cocacola_PNG23.png">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Item Title<i class="material-icons right">more_vert</i></span>
                                            <p>GHC20</p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">ItemTitle<i class="material-icons right">close</i></span>
                                            <p>A short description of the food item.</p>
                                            <form action="#">
                                                <p>
                                                    <input name="group1" type="radio" id="test1" />
                                                    <label for="test1">Big Bottle</label>
                                                </p>
                                                <p>
                                                    <input name="group1" type="radio" id="test2" />
                                                    <label for="test2">Small Bottle</label>
                                                </p>
                                            </form>
                                            <h3>GHC20</h3>
                                            <a class="waves-effect waves-light btn addCartBtn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                <span> Add to Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--End of meal card-->
                                    <!--Meal card-->
                                    <div class="card  mealCard medium col m3 s12">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="http://res.cloudinary.com/xybimages/image/upload/c_fit,w_200/v1491215669/Genese/Food/Pink_frosted_sprinkled_donut.png">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Item Title<i class="material-icons right">more_vert</i></span>
                                            <p>GHC20</p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">ItemTitle<i class="material-icons right">close</i></span>
                                            <p>A short description of the food item.</p>
                                            <form action="#">
                                                <p>
                                                    <input name="group1" type="radio" id="test1" />
                                                    <label for="test1">Full portion</label>
                                                </p>
                                                <p>
                                                    <input name="group1" type="radio" id="test2" />
                                                    <label for="test2">Half Portion</label>
                                                </p>
                                            </form>
                                            <h3>GHC20</h3>
                                            <a class="waves-effect waves-light btn addCartBtn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                <span> Add to Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--End of meal card-->
                                    <!--Meal card-->
                                    <div class="card  medium col m3 s12 mealCard">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="http://res.cloudinary.com/xybimages/image/upload/c_fit,h_200,w_200/v1491214779/Genese/Food/Cupcake.png">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Item Title<i class="material-icons right">more_vert</i></span>
                                            <p>GHC20</p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">ItemTitle<i class="material-icons right">close</i></span>
                                            <p>A short description of the food item.</p>
                                            <form action="#">
                                                <p>
                                                    <input name="group1" type="radio" id="test1" />
                                                    <label for="test1">Big Bottle</label>
                                                </p>
                                                <p>
                                                    <input name="group1" type="radio" id="test2" />
                                                    <label for="test2">Small Bottle</label>
                                                </p>
                                            </form>
                                            <h3>GHC20</h3>
                                            <a class="waves-effect waves-light btn addCartBtn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                <span> Add to Cart</span>
                                            </a>
                                        </div>
                                    </div>
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