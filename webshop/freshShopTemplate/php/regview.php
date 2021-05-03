    <div class="register-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <h2>REGISTER</h2>
                    <p>Lorem ipsum dolor sit amet, conshectetur adipiscing elit. Asus mauris.</p>
                    <form id="registerForm" method="post" action="index.php">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter a 8 characters password" required data-error="Please enter your Password">
                                    <div class="help-block with-errors"></div>
                                </div>                           
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password-repeat" name="passwordrepeat" placeholder="Re-enter your password" required data-error="Please re-enter your Password">
                                    <div class="help-block with-errors"></div>
                                </div>                           
                            
                                <div class="submit-button text-center">
                                    <button class="btn bg-secondary hvr-hover" id="submit" type="submit" name="regsubmit">Send Registration</button>
                                    <div id="regsubmit" class="h3 text-center hidden" ></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
              
               