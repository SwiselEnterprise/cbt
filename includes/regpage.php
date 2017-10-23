        <section class="row">

            <div id="regLeftSection" class="col-sm-4" >
                
            </div> <!-- regLeftSection ends her -->

            <div id="regRightSection" class="col-sm-8">
                <div id="formDiv" class="col-sm-4">

                    <p>Sign up</p>

                    <p>We will need</p>
                    
                    <form role="form" action="" method="post">
                    
                        <div class="form-group">
                            <span class="glyphicon glyphicon-parents"></span><input class="form-control" type="text" name="" id="" placeholder="your surname">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" name="" id="" placeholder="your firstname">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" name="" id="" placeholder="your mail address">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" name="" id="" placeholder="your phone number">
                        </div>

                        <div class="form-group">
                                                    <!-- php for captcha -->
                        <?php 
                        $_SESSION['captext'] = str_shuffle(substr(rand(1000, 9999). 
                        str_shuffle('QWERTYGSMNXZPYFH'), rand(0,5), 6)); 
                        ?>
                            <img  src="/cbt/images/captcha.php" alt="captcha/"/>
                            <input class="form-control" type="text" name="captcha" id="" placeholder="type what you see here">

                        </div>

                        <div class="form-group"><input class="btn btn-primary disabled" type="submit" value="Register"></div>

                    </form> <!-- form ends her -->

                </div> <!-- formDiv ends her -->

                <div class="col-sm-4">
                    
                </div>
                
            </div> <!-- regRightSection ends her -->
            
        </section>