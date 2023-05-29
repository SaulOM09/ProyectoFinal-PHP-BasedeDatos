
 
 <style type="text/css">
body {
  background-image: url("http://localhost/Registratech/images/loginbg.jpg");
  background-size:100% 100%;
}
</style>

 <body class="">
<center>
   <div class="container">
     <div id="wrapper">
       <div id="login" class="animate form">
           <form  name="frm_login" id="frm_login" method="post" action="validar.php"><br>
            <div class="col-sm-4" style="float: left;">
             <h1 style="color: blue; font-family: monospace;">Control de Acceso</h1>
               <input type="text" class="form-Control input-sm" name="usuario" id="usuario" placeholder="username" required="" />
               <br>
               <input type="password" class="form-control input-sm" name="passwd" id="passwd" placeholder="password" required="" />
               <br>
               <button type="submit" class="btn btn-primary" onclick="acceso();">Entrar</button>
             </div><br>
             <div class="col-sm-4">
            <?php
             if (isset($_SESSION['mvc_conectado']) && $_SESSION ['mvc_conectado']==2) {
               include_once 'php/validar.php';
               $_SESSION['mvc_conectado']=0;
             }
              ?>
          </div>
          </div><br>
          <div style="float: right;">
            <img src="images/logotec.png" height="210" width="270">
          </div>
          </form>

       </div>
     </div>
   </div>
   <br>

   <footer>
     <div class="clearfix"></div><br>
             <div id="resultado"></div><br>
             <div class="separator"><br>
               <div class="clearfix"></div>
               <br>
               <div><br>
                 <h1><img src="images/registra.svg" height="150" width="150"></img>  </h1>
                 <p style="color: white;">@Tecnologico Cd. Valles S.L.P</p>
               </div>
   </footer>
             
</center>
 </body>