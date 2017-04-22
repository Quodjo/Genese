<?php 
require_once dirname(__FILE__).'/components/header.php';
?>
        <section class='fullpage doneCheck'>
           <?php 
require_once dirname(__FILE__).'/components/navigation.php';
?>
            <div class="checkContent">
                <div class="mainWrap center">
                    <div class="wrap">
                        <div class='checkImg'>
                            <p class=''><i class="fa fa-check-circle icon" aria-hidden="true"></i></p>
                        </div>
                        <h5>Username</h5>
                        <h4>Your order was successful.</h4>
                        <div class="row payBtns">
                            <div class="container  checkBtns">
                                <a href="mainPage.php" class="waves-effect waves-light backToShop btn"><i class="fa fa-money" aria-hidden="true"></i>  Place a new order</a>
                                <a href="#receipt" class="waves-effect waves-light checkOutBtn proceed btn"><i class="fa fa-ticket" aria-hidden="true"></i>  View Receipt</a>


                            </div>


                            <!-- Modal Structure -->
                            <div id="receipt" class="modal">
                                <div class="modal-content">
                                    <div class="row content">
                                        <div class="container">
                                            <!--Receipt-->
                                              <?php 
require_once dirname(__FILE__).'/components/receipt.php';
?>
                                           
                                            <!--end of recipt-->



                                        </div>

                                    </div>

                                </div>

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