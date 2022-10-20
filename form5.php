<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RDBMS PROJECT</title>
    <link rel="stylesheet" href="./css/master.css">
   </head>
    <div style="background: #4CAF50 ;position:absolute; width:100vw; padding: 20px 0;z-index:80; "><img style="position: relative; left: 50%; transform: translateX(-50%);" class="header" align="middle" src="em.png" width="100" height="100" ></div>
  <body>
    <div class="back-div"></div>
    <div id="fullpage">
     	<div class="section" id="main">
        <div class="mainInfo mainT center-style" data-tilt>
          <div class="titlebox" >
            <center><h1 class="title"><span style="color:#626567">
              SERVICE PROVIDER </span></h1>
              <h1 class="title"><span style="color:#626567">
                 REGISTRATION FORM</span></h1>
            </center>
            </div>
            <span class="subTitle"></span>

          </div>
        </div>
      </div>
</div></body>
          <div>
                <div >
                <?php
                    $id = $_GET['id'];
                  ?>
                <div class="form-wrapper">
                    <h1 class="subtitle" style:"color:#626567">Register  <span class="subtitle" style="color:#4CAF50">Now</span></h1>
                  <form action="<?php echo 'process5.php?id='.$id; ?>" class="ask-form" method="post">


                    <div >
                      <input type="text" name="fullname" class="form-inp" placeholder="Name" >
                    </div><br>
  
                    <div >
                        <input type="text" name="lqual" class="form-inp" placeholder="Last Qualification" >
                      </div><br>
                  
                    <div >
                      <input type="text" name="tp" class="form-inp" placeholder="Type" >
                     
                    </div><br>

                    <div >
                        <input type="text" name="ss" class="form-inp" placeholder="Secretary" >
                       
                      </div><br>
  
  
                        <!-- <div>
                          <select class="form-inp" type="text" name="sp" class="dropdown-content"  >
                            <option value="" disabled selected>Service Provider Type</option>
  
                            <option value="Corporate">Corporate</option>
                              <option value="Partnership">Partnership</option>
                              <option value="Proprietorship">Proprietorship</option>
                              <option value="Society">Society</option>
                              <option value="Trust">Trust</option>
                              
                            </select>
                            </div><br> -->
  
                    <input type="submit" name="submit" class="button button2" value="Submit">
                  </form>
                </div>
              </div>
            </div>
          </div>

</html>
