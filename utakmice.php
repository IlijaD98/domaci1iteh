

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
   #form-messages{
     background-color:rgb(255,232,232);
     border:1px solid red;
     color:red;
     display:none;
     font-size:12px;
     font-weight:bold;
     margin-bottom:12px;
     padding:10px 25px;
     max-width:1250px;

   }
   </style>
    
  </head>
  <body>
   

    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row" >
          <div class="header-section text-center">
            <h2>Login forma</h2>
            <div class="col-md-12 text-center" id="players">
            </br>
            <ul id="form-messages">
              

            </ul>
            </br>
               
            <div class="form-group">
                  <label for="naziv" class="cols-sm-2 control-label">Korisnicko ime</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-thumbs-up fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control"  id="username"  />
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="igraci" class="cols-sm-2 control-label">Sifra</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-thumbs-up fa" aria-hidden="true"></i></span>
                      <input type="password" class="form-control"  id="password"  />
                    </div>
                  </div>
                </div>
               

                <button type="submit"  id="button" class="btn btn-primary btn-lg btn-block login-button">Prijavi se</button>
            
            </div>
            
            
            <hr class="bottom-line">

          </div>
        </div>
      </div>
    </section>

   <script>
   const form={
     username:document.getElementById('username'),
     password:document.getElementById('password'),
     submit:document.getElementById('button'),
     messages:document.getElementById('form-messages'),


   };
   form.submit.addEventListener('click',()=>{
     const request=new XMLHttpRequest();
     request.onload=()=>{
       let responseObject=null;

       try{
         responseObject=JSON.parse(request.responseText);
       }catch(e){
         console.error('Could not parse JSON');
       }
       if(responseObject){
         handleResponse(responseObject);
       }

     };
     const requestData=`username=${form.username.value}&password=${form.password.value}`;
     

     request.open('post','check-login.php');
     request.setRequestHeader('Content-type','application/x-www-form-urlencoded');
     request.send(requestData);

   });
   function handleResponse(responseObject){
     if(responseObject.ok){
       location.href='index.php';
     }else{
      while (form.messages.firstChild) {
                    form.messages.removeChild(form.messages.firstChild);
                }

                responseObject.messages.forEach((message) => {
                    const li = document.createElement('li');
                    li.textContent = message;
                    form.messages.appendChild(li);
                });

                form.messages.style.display = "block";
     }
   }


   </script>

    

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    

  </body>
</html>
