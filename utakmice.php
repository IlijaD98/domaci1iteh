

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liga sampiona</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    

  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <?php include 'process.php'; ?>


    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Mecevi Lige sampiona</h2>
           
            <hr class="bottom-line">
            <form method="post" action="">
            <input type="hidden" name="id1" value="<?php echo $id; ?>">


                <div class="form-group">
                  <label for="domacin" class="cols-sm-2 control-label">Domacin</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                      
                      <?php  
                      $rez1=$mysqli->query("select nazivTima from tim");
                      ?>
                      <select id="domacin" class="form-control" name="domacin"  >
                      
                       <?php
                       while($rows=$rez1->fetch_assoc()){
                         $naziv=$rows['nazivTima'];
                      
                         echo "<option value='$naziv'>$naziv</option>";
                         
                       }

                       ?>
                               
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="gost" class="cols-sm-2 control-label">Gost</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                    
                      <?php  
                      $rez1=$mysqli->query("select nazivTima from tim");
                      ?>
                      <select id="gost" class="form-control" name="gost"  >
                      
                       <?php
                       while($rows=$rez1->fetch_assoc()){
                         $naziv=$rows['nazivTima'];
                         echo "<option value='$naziv'>$naziv</option>";
                       }

                       ?>
                                 
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="setDom" class="cols-sm-2 control-label">golovi domacin</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-thumbs-up fa" aria-hidden="true"></i></span>
                      <input type="number" class="form-control" name="golDom" id="golDom" value="<?php echo $golDom; ?>" placeholder="golova domacin"/>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="setGost" class="cols-sm-2 control-label">golovi gost</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-thumbs-up fa" aria-hidden="true"></i></span>
                      <input type="number" class="form-control" name="golGost" id="golGost" value="<?php echo $golGost; ?>" placeholder="golova gost"/>
                    </div>
                  </div>
                </div>



                <div class="form-group ">
                <?php
                if($update1==true):

                ?>
                   <button type="submit" name="update1" id="button" class="btn btn-info btn-lg btn-block login-button">Azuriraj mec</button>
                <?php else: ?>
                  <button type="submit" name="unesiMec" id="button" class="btn btn-primary btn-lg btn-block login-button">Unesi mec</button>
                <?php endif; ?>


               <!--   <button type="submit" name="unesiMec" id="button" class="btn btn-primary btn-lg btn-block login-button">Unesi mec</button> -->               </div>

              </form>

              <?php  
        $mysqli=new mysqli('localhost','root','','liga') or die(mysqli_error($mysqli));
        $result=$mysqli->query("select * from mec") or die($mysqli->error);
       // pre_r($result);
        ?>




<table class="table table-stripped" >
              <thead>
                <tr >
                  <th class="text-center">Redni broj</th>
                  <th class="text-center">Domacin</th>
                  <th class="text-center">Golova domacin</th>
                  <th class="text-center">Golova gost</th>

                  <th class="text-center">Gost</th>
                  
                </tr>
              </thead>
              <?php

              while($row=$result->fetch_assoc()):

              ?>
              <tbody>
                
                    <tr>
                    <td><?php echo $row['mecID']; ?></td>
                        <td><?php echo $row['domacin']; ?></td>
                        <td><?php echo $row['golDomacin']; ?></td>
                        <td><?php echo $row['golGost']; ?></td>
                        <td><?php echo $row['gost']; ?></td>
                        
                        <td>
                        <a href="utakmice.php?editt=<?php echo $row['mecID'];  ?>"
                        class="btn btn-info">Edit</a>
                        <a href="process.php?deletee=<?php echo $row['mecID'];  ?>"
                        class="btn btn-danger">Delete</a>
                        
                        
                        </td>
                    </tr>
                  <?php
                      endwhile;

                  ?>
              </tbody>
            </table>



<?php
        function pre_r($array){
          echo '<pre>';
          print_r($array);
          echo '</pre>';

        }

    ?>

          </div>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>



    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

  </body>
</html>
