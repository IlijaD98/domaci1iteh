
<?php 
include 'konekcija.php'; 
?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        var playerCount=2;
         $("button").click(function(){
           playerCount=playerCount+2;
          $("#players").load("load.php",{
            playerNewCount: playerCount

          });
        });
      });

    </script>
    
  </head>
  <body>
    <?php include 'navbar.php'; ?>


    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row" >
          <div class="header-section text-center">
            <h2>Statistika igraca</h2>
            <div class="col-md-12 text-center" id="players">
                <?php 
                $sql="select * from igraci join tim t on klub=timID limit 2";
                $resultt= mysqli_query($conn,$sql);
                if(mysqli_num_rows($resultt)>0){
                  while($row=mysqli_fetch_assoc($resultt)){
                    echo "<p>";
                    echo "IME:";
                    echo  $row['ime'];
                    echo "<br>";
                    echo "PREZIME:";
                    echo $row['prezime'];
                    echo "<br>";
                    echo "KLUB:";
                    echo $row['nazivTima'];
                    echo "<br>";
                    echo "BROJ GOLOVA:";
                    echo $row['golovi'];
                    

                    echo "</p>";


                  }


                }else{
                  echo "Nema igraca za prikaz";

                }
                ?>

            
            </div>
            <button>Prikazi vise</button>
             
            
            <hr class="bottom-line">

          </div>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>

    

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    

  </body>
</html>
