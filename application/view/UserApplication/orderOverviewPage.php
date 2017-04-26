<?php 
require_once dirname(__FILE__).'/components/header.php';
?>
<section class='fullpage' id='orderDetailsOverview'>
    <!--Navigation-->
    <?php 
        require_once dirname(__FILE__).'/components/navigation.php';
?>
    <!--end of navigation-->
    <div class='rightFunctionSect'>
        <div class="function">
            <!--Order details section-->
            <section class="orderDetails">
                <div class="row">
                    <div class="container">
                        <nav class="checkNav">
                            <div class="row navTitle">
                                <div class="container col s12">
                                    <div class="col s5">
                                        <p>Item Name</p>
                                    </div>
                                    <div class="col s2">
                                        <p>Price</p>
                                    </div>
                                    <div class="col s2">
                                        <p>Quantity</p>
                                    </div>
                                    <div class="col s2">
                                        <p>Total</p>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!--Food overview sect-->
                 <?php 
        require_once dirname(__FILE__).'/components/overviewSection.php';
?>
               
                <!--end of food overview sect-->
            </section>
            <!--End of order details section-->
        </div>
    </div>
    <div class='leftInfoSect center'>
        <div class="progressBar vcenter">
            <div class="nav-wrapper">
                <div class="col s12 ">
                    <a href="#!" class="breadcrumb">Order Details </a><i class="fa fa-check-circle-o incomplete" aria-hidden="true"></i>
                    <a href="#!" class="breadcrumb">Payment </a>
                    <a href="#!" class="breadcrumb">Checkout </a>
                </div>
            </div>
        </div>
        <div class="info">
            <div class="text center">
                <div class="textHold">
                    <h1><i class="fa fa-shopping-basket" aria-hidden="true"></i></h1>
                    <p>Total Cost</p>
                    <h1>GHC450</h1>
                    <p>charges included</p>
                </div>
            </div>
            <div class="buttons">
                <div class="row">
                    <div class="container  checkBtns">
                        <a class="waves-effect waves-light checkOutBtn proceed btn" href = 'paymentPage.php'><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>  Next</a>
                        <p>or</p>
                        <a href="application.html" class="waves-effect waves-light backToShop btn"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>  Back to Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
require_once dirname(__FILE__).'/components/footer.php';
?>
</body>

</html>