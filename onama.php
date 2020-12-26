

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
    <style>
#more {display: none;}
</style>
  </head>
  <body>
    <?php include 'navbar.php'; ?>


    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>O nama</h2>
            <div class="col-md-12 text-center">
              <img src="img/logo.jpg" class="img img-square">
            </div>
             
            <h2>Kratka istorija Lige Sampiona</h2>
            <audio controls>
  <source src="pesma/uefa.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
<p align="justify" style="color:black">UEFA Liga šampiona (engl. UEFA Champions League) je najjače i najprestižnije evropsko, klupsko fudbalsko takmičenje.
             Organizovano je od strane UEFE i u njemu učestvuju sve njene članice. Do sezone 1991/92. takmičenje se nazivalo Kup evropskih šampiona (engl. Cup of European Champions), 
             Evropski kup šampiona (engl. European Champions Cup; poznata još kao Kup šampiona (engl. Champions Cup)) ili Evropski kup (engl. European Cup), a od sezone 1992/93. 
             deo se igra u grupama i menja naziv u UEFA Liga šampiona.
</br>
            Trenutni šampion UEFA Lige šampiona je Bajern iz Minhena koji je u finalu 23.avgusta 2020. na stadionu Stadion svetlosti u Lisabonu 
            pobedio ekipu PSŽ i tako osvojio šestu titulu šampiona Evrope.<span id="dots">...</span><span id="more">Evropski kup šampiona (ili skraćeno Evropski kup) nastao je od ideje sportskog urednika francuskog L' Ekipa Gabrijela Anoa koji je predložio stvaranje takmičenja koje bi odlučilo koji je najbolji klub u Evropi. 
                    Ideja je nastala kao odgovor na tvrdnje nekih britanskih novinara da je Vulverhempton najbolji klub na svetu jer je pobedio Honved iz Mađarske rezultatom 3:2 na svom terenu 1954. godine.
</br>
"Biće bolje da sačekamo da Vulverhempton otputuje u Moskvu ili Budimpeštu da potvrde svoju nepobedivost, a ako su Englezi baš tako uvereni u kvalitet svog fudbala, onda je vreme za turnir", rekao je Ano.
</br>
Decembra 1954, Žak Rizvik, Anov kolega izložio je prvi plan projekta u kome je stajalo da će učestvovati 14-16 ekipa, da će se utakmice igrati sredinom nedelje u večernjim satima, što je bilo vrlo neuobičajno za to vreme, kako bi radnička klasa mogla da stigne da gleda utakmice, a da pravo prenosa imaju televizije koje prate klub iz svoje zemlje kao i najvažnije sportske novine.
</br>
Prva zvanična utakmica Kupa šampiona odigrana je 4. septembra 1955. godine, a sastali su se lisabonski Sporting i beogradski Partizan.
</br>
U prvoj sezoni takmičenja učestvovalo je 16 ekipa, što prvaka svojih zemalja, što klubova koji su bili u to vreme veoma poštovani od strane UEFE. Kasnije je broj učesnika bio ograničen samo na pobedničke klubove domaćih liga. Ovakav kvalifikacioni sistem bio je aktuelan sve do 1997. Od sezone 1997/98, pravila su promenjena kako bi turnir dobio veću napetost (i dodatni novac sponzora).
 Klubovi iz najjačih evropskih liga koji nisu bili prvaci države mogli su se kvalifikovati kao drugoplasirani, a kasnije i kao trećeplasirani i četvrtoplasirani u svojoj ligi</span></p>
<button onclick="myFunction1()" id="myBtn">Read more</button>
  
  
            <hr class="bottom-line">

          </div>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
function myFunction1() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    

  </body>
</html>
