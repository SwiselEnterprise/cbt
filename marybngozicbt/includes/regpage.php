        <section id="regpage" class="row">

            <div id="regLeftSection" class="col-sm-7" >
            <div class="col-sm-8" id="landLeftSection"> 
              <h1 class="header"> Welcome  </h1> 
              <h1 class="header"> THE CBT MAIDEN PROJECT </h1>
              <h3 class="header"> A NIFFTY WAY TO TAKE EXAMS </h3>

              <p id="landingP">
                The CBT MAIDEN PROJECT is optimzed to  increase the efficency 
                of examination result computing. 
              </p>
            </div>
            </div> <!-- regLeftSection ends her -->

            <div id="regRightSection" class="col-sm-5">
                <div id="formDiv" >

                    <p id="formtext-a">Sign up</p>

                    <p id="formtext-b">We will need...</p>
                    
                    <form role="form" action="process/reg.php" method="post">
                    
                        <div class="form-group form-inline">
                            <label class="glyphicon glyphicon-tags icon"></label>
                            <input class="form-control input input col-10" type="text" name="sname" id="" placeholder="your surname">
                        </div>

                        <div class="form-group form-inline">
                            <label class="glyphicon glyphicon-tag icon"></label>
                            <input class="form-control input input col-10" type="text" name="name" id="" placeholder="your firstname">
                        </div>

                        <div class="form-group form-inline">
                            <label class="glyphicon glyphicon-envelope icon"></label>
                            <input class="form-control input input col-10" type="text" name="email" id="" placeholder="your mail address">
                        </div>

                        <div class="form-group form-inline">
                            <label class="glyphicon glyphicon-earphone icon"></label>
                            <input class="form-control input col-10" type="text" name="phone" id="" placeholder="your phone number">
                        </div>

                        <div class="form-group form-inline">
                                                    <!-- php for captcha -->
                        <?php 
                        $_SESSION['captext'] = str_shuffle(substr(rand(1000, 9999). 
                        str_shuffle('QWERTYGSMNXZPYFH'), rand(0,5), 6)); 
                        ?>
                            <img  src="includes/captcha.php" alt="captcha"/> <p id="validate"><?php echo $_SESSION['captext'];?></p>

                        </div>    
                        
                        <div class="form-group form-inline">
                            <label class="glyphicon glyphicon-pencil icon"></label>
                            <input class="form-control input input col-10" type="text" name="captcha" id="userInput" placeholder="type what you see">
                            <label id="validError"><span style="color:maroon; font-size:18px" class="glyphicon glyphicon-remove-sign"></span></label><label id="validOk"><span style="color:green; font-size:18px" class="glyphicon glyphicon-ok-sign"></span></label>
                            <label id="validBtn" style="background:#0f222f;
                                       font-family:Trebuchet MS;
                                       font-size:10px;
                                       color:white;
                                       padding:5px 5px;
                                       border-radius:2px;
                                       cursor:pointer;
                            ">validate &nbsp;<span class="glyphicon glyphicon-ok-circle"></span></label>
                        </div>

                        <div class="form-group">
                            <input id="sub" class="btn btn-default" name="submit" type="submit" value="Register">
                        </div>

                    </form> <!-- form ends her -->

                </div> <!-- formDiv ends her -->
                
            </div> <!-- regRightSection ends her -->
            
        </section>