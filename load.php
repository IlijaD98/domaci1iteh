<?php 
include 'kon1.php';

        $playerNewCount=$_POST['playerNewCount'];

                $sql="select * from igraci  join tim t on klub=timID limit $playerNewCount";
                $resultt= mysqli_query($conn,$sql);
                if(mysqli_num_rows($resultt)>0){
                  while($row=mysqli_fetch_assoc($resultt)){
                    echo "<p>";
                    echo "IME: ";
                    echo $row['ime'];
                    echo "<br>";
                    echo "PREZIME: ";
                    echo $row['prezime'];
                    echo "<br>";
                    echo "KLUB: ";
                    echo $row['klub'];
                    echo "<br>";
                    echo "BROJ GOLOVA: ";
                    echo $row['golovi'];

                    echo "</p>";


                  }


                }else{
                  echo "Nema igraca za prikaz";

                }
                ?>