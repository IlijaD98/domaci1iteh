

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, iNazivanitial-scale=1">
    <title>Liga sampiona</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    

    <style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <?php include 'process.php';
   
     ?>
    

    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Timovi Lige sampiona</h2>       
           
            <!-- Pravim tabelu sa slikama timova -->
            <div class="slike-png" style="overflow-x:auto">
            
               <table class="logo">
                   <thead>
                       <tr>
                           <th> <a href="https://english.ajax.nl/" target="_blank"><img src="logo/ajax.png" alt="ajax" width="100" height="100"></a> </th>
                           <th>  <a href="https://www.fcbarcelona.com/en/" target="_blank"><img src="logo/barcelona.png" alt="barcelona" width="100" height="100"></a> </th>
                           <th>  <a href="https://fcbayern.com/en" target="_blank"><img src="logo/bayern.png" alt="bayern" width="100" height="100"></a> </th>
                           <th>  <a href="https://www.juventus.com/en/" target="_blank"><img src="logo/juventus.png" alt="juventus" width="100" height="100"></a> </th>
                           <th>  <a href="https://www.liverpoolfc.com/" target="_blank"><img src="logo/liverpool.png" alt="liverpool" width="100" height="100"> </a></th>
                           <th>  <a href="https://www.olympiacos.org/en/" target="_blank"><img src="logo/oly.png" alt="olympiacos" width="100" height="100"></a> </th>
                           <th>  <a href="https://www.fcporto.pt/en" target="_blank"><img src="logo/porto.png" alt="porto" width="100" height="100"></a> </th>
                           <th>  <a href="https://en.psg.fr/" target="_blank"><img src="logo/psg.png" alt="paris saint german" width="100" height="100"></a> </th>
                           <th>  <a href="https://www.realmadrid.com/en" target="_blank"><img src="logo/real.png" alt="real madrid" width="100" height="100"> </a></th>
                           <th>  <a href="http://www.crvenazvezdafk.com/en" target="_blank"><img src="logo/zvezda.png" alt="red star" width="100" height="100"> </a></th>
                           <th>  <a href="https://spartak.com/en/main/" target="_blank"><img src="logo/spartak.png" alt="spartak moscow" width="100" height="100"></a> </th>
                       </tr>
                   </thead>
               </table> 
            </div>
</br>
</br>
</br>
</br>
<p align="justify" style="color:black">Takmičenje počinje sa četiri kola kvalifikacija. Zavisno od koeficijenta lige iz koje dolaze i pozicije koju su ostvarili prethodne 
sezone klubovi se uključuju u Ligu šampiona u nekom od ova četiri kola kvalifikacija. Klubovi sa većim koeficijentima su nosioci i oni se 
ne mogu susresti međusobno u okviru jednog kola kvalifikacija.U svakom kolu igraju se po dve utakmice jedna kući i jedna u gostima.</p>
<p align="justify" style="color:black">Od sezone 2009/10. počevši od trećeg kola kvalifikacija klubovi su podeljeni na dva dela, jedan za nacionalne prvake 
i jedan za klubove koji su kvalifikacije obezbedili završivši u nacionalnom prvenstvu od 2-4. mesta, a to je urađeno da bi se nacionalnim 
prvacima olakšao put do takmičenja po grupama. Isti sistem za prvake i ostale klubove funkcioniše i u poslednjem kolu kvalifikacija, 
plej ofu, odakle se pobednici pridružuju klubovima koji su se kroz plasman u domaćoj ligi plasirali direktno u grupe Lige šampiona i 
prošlogodišnjem pobedniku. Klubovi koji su poraženi u trećem kolu kvalifikcija i plej ofu Lige šampiona svoje takmičenje nastavljaju u Ligi Evrope.</p>
<p align="justify" style="color:black">Nakon završenih kvalifikacija 32 kluba bivaju podeljena u osam grupa od po četiri ekipe. Igra se mini-liga u kojoj svaki
 klub sa svakim od tri protivnika igra kući i na strani.
 Na kraju dva prvoplasirana se plasiraju u osminu finala Lige šampiona, dok trećeplasirani nastavlja takmičenje u Ligi Evrope.</p>
 <p align="justify" style="color:black">Šesnaest klubova igra dalje u završnici, počevši od osmine finala, pobednici ulaze u četvrtfinale, 
 polufinale i na kraju se dva najbolja sreću u finalu.
Na sve utakmice koje klubovi igraju u kvalifikacijama i završnici, osim finala, odnosi se pravilo gola u gostima,
 a ako se na taj način ne može odrediti pobednik igraju se produžeci (dva po 15 minuta) te se na kraju izvode penali. 
 Finale se igra na predodređenom stadionu (ne nužno neutralnom) i igra se samo jedna utakmica.
</p>
<p align="justify" style="color:black">Izvlačenje parova i grupa je napravljeno tako da se klubovi iz iste zemlje ne mogu sresti pre četvrtfinala.
Sistem takmičenja koji se trenutno koristi je usvojen 2009. godine.
</p>
<section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Unesite novi klub</h2>
           
            <hr class="bottom-line">
            <form method="post" action="process.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="form-group">
                  <label for="drzava" class="cols-sm-2 control-label">Drzava</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                     <input type="text" class="form-control" name="drzava" id="drzava" value="<?php echo $drzava; ?>" placeholder="naziv drzave"/>  
                                     
                  
                    </div>
                  </div>
                </div>

               

                <div class="form-group">
                  <label for="naziv" class="cols-sm-2 control-label">Naziv tima</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-thumbs-up fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="naziv" id="naziv" value="<?php echo $naziv; ?>" placeholder="naziv tima"/>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="igraci" class="cols-sm-2 control-label">Broj igraca</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-thumbs-up fa" aria-hidden="true"></i></span>
                      <input type="number" class="form-control" name="igraci" id="igraci" value="<?php echo $igraci; ?>" placeholder="broj igraca"/>
                    </div>
                  </div>
                </div>



                <div class="form-group ">
                <?php
                if($update==true):

                ?>
                   <button type="submit" name="update" id="button" class="btn btn-info btn-lg btn-block login-button">Azuriraj klub</button>
                <?php else: ?>
                  <button type="submit" name="unesi" id="button" class="btn btn-primary btn-lg btn-block login-button">Unesi klub</button>
                <?php endif; ?>
                </div>

              </form>
              <?php  
        $mysqli=new mysqli('localhost','root','','liga') or die(mysqli_error($mysqli));
        $result=$mysqli->query("select * from tim") or die($mysqli->error);
       // pre_r($result);
        ?>


</br>

<?php 
      if(isset($_SESSION['message'])):

    ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
          echo $_SESSION['message'];
          unset($_SESSION['message']);


    ?>
   </div>
<?php endif ?>




<div id="tabela">
<table class="table table-stripped"  id="MyTable">
              <thead>
                <tr >
                  <th class="text-center" id="redni_br" data-order="desc">Redni broj</th>
                  <th class="text-center" id="naziv_tima" data-order="desc">Naziv tima</th>
                  <th class="text-center" id="broj_igraca" data-order="desc">Broj igraca</th>
                  <th class="text-center" id="drzava" data-order="desc"> Drzava</th>
                </tr>
              </thead>
              <?php

              while($row=$result->fetch_assoc()):

              ?>
              <tbody>
                
                    <tr>
                    <td><?php echo $row['timID']; ?></td>
                        <td><?php echo $row['nazivTima']; ?></td>
                        <td><?php echo $row['brojIgraca']; ?></td>
                        <td><?php echo $row['drzava']; ?></td>
                        <td>
                        <a href="index.php?edit=<?php echo $row['timID'];  ?>"
                        class="btn btn-info">Edit</a>
                        <a href="process.php?delete=<?php echo $row['timID'];  ?>"
                        class="btn btn-danger">Delete</a>
                        
                        
                        </td>
                    </tr>
                  <?php
                      endwhile;

                  ?>
              </tbody>
            </table>
            </div>



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
            
           


          </p>
            <hr class="bottom-line">
           
          </div>
        </div>
      </div>
    </section>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <?php include 'footer.php'; ?>

    <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>



    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
   <!-- <script src="contactform/contactform.js"></script> -->
  </body>
</html>