<?php include "conex/conn.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complejo LAMAR</title>

   <!-- Stilos generales  -->
    <link href="./css/estilos.css" rel="stylesheet">

      <!-- Bootstrap CSS -->
   <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

   <link rel="stylesheet" href="bootstrap/animate.css"> 

   <link href="bootstrap/animate.min.css" rel="stylesheet"> 




</head>
<body style="
  background-color: #dddddd;"
}>


<!-- Section menu -->
    <section class="container-fluid" id="inicio">
    <header id="header">
     <div class="container">
      <div id="logo" class="pull-left">
        <a href="#inicio"><img src="img/logo.png" alt="logo" title="logo"/></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#inicio">Inicio</a></li>
          <li><a href="#info">Informacion</a></li>
          <li><a href="#galeria">Cabañas</a></li>
          <li><a href="#contacto">Contacto</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  </section>

<!-- Section informacion -->
<h1 style="text-align: center; margin-top:20px;">Informacion</h1>
      <p style="text-align: center; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, obcaecati? <a href="#contacto">Contacto</a></p>
      <div class="line"></div>
    <section id="info">
      <div class="caja1">
        <div class="img">
          <img src="img/inf1.jpg" alt="cabañas" height="200" width="200" style="border-radius: 50%;">
        </div>
        <div class="text" style="margin: 55px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima ad, autem in quae 
                          blanditiis vero accusantium facere quis laudantium facilis itaque tempora
                          perferendis! Optio dignissimos aspernatur porro nesciunt quibusdam deleniti.</div>
      </div>
      </div>

      <div class="caja2">
        <div class="img">
          <img src="img/inf1.jpg" alt="cabañas" height="200" width="200" style="border-radius: 50%;">
        </div>
        <div class="text" style="margin: 55px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima ad, autem in quae 
                          blanditiis vero accusantium facere quis laudantium facilis itaque tempora
                          perferendis! Optio dignissimos aspernatur porro nesciunt quibusdam deleniti.</div>
      </div>
      </div>

      <div class="caja3">
        <div class="img">
          <img src="img/inf1.jpg" alt="cabañas" height="200" width="200" style="border-radius: 50%;">
        </div>
        <div class="text" style="margin: 55px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima ad, autem in quae 
                          blanditiis vero accusantium facere quis laudantium facilis itaque tempora
                          perferendis! Optio dignissimos aspernatur porro nesciunt quibusdam deleniti.</div>
      </div>
    </section>

<!-- Section galeria -->

<h1 style="text-align: center; margin:25px;">Nuestras Cabañas</h1>
<p style="text-align: center; margin:25px;"> Si pasa el mause por la imagen vera la informacion de cada una!</p>
<div class="line"></div>
  <section id="galeria">

  <div class="div-imagen">
  <div>
      <p style="text-align: center; margin-top:100px;letter-spacing:2px;color:#222831;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem omnis temporibus voluptatum nemo soluta vel
         libero illo praesentium minus repellendus, facilis,
         expedita reprehenderit dolor suscipit eum eveniet, accusamus voluptates veniam.</p>
  </div>
  <img class="desvanecer" src="img/cabaña1.jpg" height="500" width="500" style="margin-right: 25px;">
</div>
<div class="div-imagen">

  <div>
  <p style="text-align: center; margin-top:100px;letter-spacing:2px;color:#222831;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem omnis temporibus voluptatum nemo soluta vel
         libero illo praesentium minus repellendus, facilis,
         expedita reprehenderit dolor suscipit eum eveniet, accusamus voluptates veniam.</p>
  </div>
  <img class="desvanecer" src="img/cabaña2.jpg" height="500" width="500">
</div>

<div class="div-imagen">
  <div>
  <p style="text-align: center; margin-top:100px;letter-spacing:2px;color:#222831; margin-left:20px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem omnis temporibus voluptatum nemo soluta vel
         libero illo praesentium minus repellendus, facilis,
         expedita reprehenderit dolor suscipit eum eveniet, accusamus voluptates veniam.</p>
  </div>
  <img class="desvanecer" src="img/cabaña3.jpg" height="500" width="500" style="margin-left: 25px;">
</div>

  </section>

<!-- Section contacto -->
    <section id="contacto">
     <?php include "contact.php" ?>
    </section>
    

    <section id="footer">
      <div class="container-fluid" style="margin-top: 25px; background:orange; height:250px; width:100%;">
        <div class="links"></div>
        <div class="ubi"></div>
        <div class="redes"></div>
      </div>
    </section>

</body>
</html>