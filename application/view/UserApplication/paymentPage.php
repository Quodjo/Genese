<?php 
require_once dirname(__FILE__).'/components/header.php';
?>
<section class='fullpage' id='paymentPage'>
    <?php 
require_once dirname(__FILE__).'/components/navigation.php';
?>
    <div class='rightFunctionSect'>
        <div class="function">
            <!--Payment details section-->
            <section class="orderDetails">
                <div class="row">
                    <div class="container">
                        <nav class="checkNav">
                            <div class="col s12">
                                <a href="#!" class="breadcrumb">Overview </a><i class="fa fa-check-circle-o complete" aria-hidden="true"></i>
                                <a href="#!" class="breadcrumb">Order Details </a><i class="fa fa-check-circle-o complete" aria-hidden="true"></i>
                                <a href="#!" class="breadcrumb">Payment </a><i class="fa fa-check-circle-o incomplete" aria-hidden="true"></i>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="container itemBarHold">
                        <div class="billingText center">
                        </div>
                        <div class="billingDeets">
                            <div class="row deetsExpand">
                                <div class="container card-panel " style="width : 100%; ">
                                    <div class="row ">
                                        <div class="container ">
                                            <div class="row">
                                                <div class="col s6 ">
                                                    <p>Order charge (15%): </p>
                                                </div>
                                                <div class="col s6 ">
                                                    <p> Ghc1.5</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s6 ">
                                                    <p>Bowl charge: </p>
                                                </div>
                                                <div class="col s6 ">
                                                    <p> Ghc2.50</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s6 ">
                                                    <p>Delivery Charge: </p>
                                                </div>
                                                <div class="col s6 ">
                                                    <p> NA</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s6 ">
                                                    <p>Subtotal : </p>
                                                </div>
                                                <div class="col s6 ">
                                                    <p> Ghc9</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s6 ">
                                                    <p>Total : </p>
                                                </div>
                                                <div class="col s6 ">
                                                    <h4>GHC450</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p>Hide Details</p>
                                            </div>
                                            <div class="row">
                                                <!-- Modal Structure for payment process-->
                                                <?php 
require_once dirname(__FILE__).'/components/paymentProcess.php';
?>
                                                <!--end of modal structure-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!--End of payment details section-->
            </div>
        </div>
        <div class='leftInfoSect center'>
            <div class="progressBar vcenter">
                <div class="nav-wrapper">
                    <!--  <div class="col s12">
                            <a href="#!" class="breadcrumb">Overview </a><i class="fa fa-check-circle-o" aria-hidden="true"></i>
                            <a href="#!" class="breadcrumb">Order Details </a><i class="fa fa-check-circle-o" aria-hidden="true"></i>
                            <a href="#!" class="breadcrumb">Payment </a><i class="fa fa-check-circle-o" aria-hidden="true"></i>
                        </div>-->
                </div>
            </div>
            <div class="info">
                <div class="text center">
                    <div class="textHold">
                        <h1><i class="fa fa-credit-card-alt" aria-hidden="true"></i></h1>
                        <p>Total Cost</p>
                        <h1>GHC450</h1>
                        <div class="row paymentMethod ">
                            <div class="row ">
                                <h6>Select Payment Method</h6>
                            </div>
                            <!--Payment method options-->
                            <?php 
require_once dirname(__FILE__).'/components/paymentMethodOptions.php';
?>
                            <!--end of payment method options-->
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <div class="row">
                        <div class="container  checkBtns">
                            <a href="orderOverviewPage.php" class="waves-effect waves-light backToShop btn"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>  Back</a>
                            <a class="waves-effect waves-light checkOutBtn proceed btn" href="#paymentModal"><i class="fa fa-credit-card" aria-hidden="true"></i>  Pay</a>
                            <!--<p>or</p>-->
                        </div>
                    </div>
                </div>
                <!--Payment modal-->
      <?php 
require_once dirname(__FILE__).'/components/paymentProcess.php';
?>
    
                <!--end of payment modal-->
            </div>
        </div>
</section>
<!--Footer-->
<?php 
require_once dirname(__FILE__).'/components/footer.php';
?>
<!--end of footer-->
</body>
</html>