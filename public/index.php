<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
          
          html {
  scroll-behavior: smooth;
}
.of {
    object-fit: cover;
    z-index: -1;
    /*
    object-fit: scale-down;
    object-fit: contain;
    object-fit: fit;
    */
}
.titulo_principa{

}
          .container {
            position: relative;
            text-align: center;
            color: white;
          } 
          .cajita{
            padding-left:5.7vw;; 
            display:flex ;
            text-align: center;
            text-align: justify;
            text-justify: inter-word;
          }
          .height-full {
           height: 100vh;
           }

          .bottom-left {
            position: absolute;
            bottom: 8px;
            left: 16px;
          }
          
          .top-left {
            position: absolute;
            top: 9%;
            left: 5%;
            color: white;
          }
          
          .top-right {
            position: absolute;
            top: 10%;
            right: 5%;
            color: white;
          }
          
          .bottom-right {
            position: absolute;
            bottom: 8px;
            right: 16px;
          }
          .contenedor_botones { 
            display: flex; 
            justify-content: space-between; 
        } 
          .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: rgb(255, 255, 255);
            font-weight: bolder;
            font-size: 1.9vw;
          }
          .oro{
            background-color: #f9b70f9d;
            color:rgba(255, 255, 255, 0.937);
            font-size: 1.9vw;
          }
          .carousel-indicators button.thumbnail {
            width: 10%;
          }
          .carousel-indicators button.thumbnail:not(.active) {
            opacity: 0.7;
          }
          .carousel-indicators {
            position: static;
          }
          @media screen and (min-width: 992px) {
            .carousel {
              max-width: 100%;
              margin: 0 auto;
            }
}

    .badge-secondary{
      color:white;
      background-color: #F9B70F !important;
    }
    
.dataTables_filter {
  position: relative;
  background: transparent;
  color: white;
}

.dataTables_filter input {
  width: 10.9vw;
  height: 2.9vw;
  /* background: var(--primary); */
  border: 1px solid rgba(255, 255, 255, 0.937);
  border-radius: 5px;
  box-shadow: 0 0 3px #ccc, 0 10px 15px #ebebeb inset;
  text-indent: 10px;
  font-color: white;
  font-size: 1.3vw;
}
 
.dataTables_filter {
  aling: center;
  size: 40px;
   color: white;

}
.dataTables_wrapper .dataTables_paginate .paginate_button {
  background:  #f9b70f9d!important;
  color: white!important;
  border-radius: 4px;
  border: 1px solid #ffffff;
  font-size: 1.3vw;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
  background:  white!important;
  color: #9e7205!important;
  weight: bolder;
  border-radius: 4px;
  border: 1px solid #ffffff;
}
 
.dataTables_wrapper .dataTables_paginate .paginate_button:active {
  background: #f9b70f9d!important;
  color: white!important;
}
.animation {
    opacity: 0;
    transform: translateX(-300px);
    transition: all 0.7s ease-out;
    transition-delay: 0.4s;
}

.scroll-animation {
    opacity: 1;
    transform: translateX(0);
}
          </style>
<title>Seguimiento a Egresados UNAM</title>
<link rel="icon" type="image/x-icon" href="img/logoPVE.png">
    </head>
<body style="background-color: #050A30;">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="background-color: #181d47; ">
        <a class="navbar-brand" href="#central">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#carouselExampleIndicators">Resultados <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#bottom">Creditos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Seguimiento</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

        
        <div class="container-fluid height-full " >
          <img src="img/central.jpg" alt="Biblioteca Central" id="central"class="img-fluid" style=" z-index: -1;">
          <a href="https://www.unam.mx/"><img src="img/unam.png" alt="logo unam"  id="logo unaml" class="top-left " style="width:10%" ></a>
          
          <a href="https://www.pveu.unam.mx/"><img src="img/logoPVE.png" alt="logo PVE" id="logo pve" class="top-right " style="width:10%" ></a>

          <div class="centered" id="c">
                   <h1 style="font-size: 2.9vw;"> ¿Quienes somos?</h1>
                   <p > El Seguimiento de Egresados de la UNAM es un sistema que permite evaluar en forma continua los resultados de la formación profesional de los egresados.</p>
                   
                   <br><br><br><br>
                   <div class="contenedor_botones"> 
                  <a href="#carouselExampleIndicators">  <button class="btn oro">Estadisticas</button> </a>
                  <a href="#resultados"><button class="btn oro">Resultados</button> </a>
                  <a href="#creditos"><button class="btn oro">Creditos</button> </a>
                  <a href="https://www.pveu.unam.mx/seguimiento.php#llena-la-encuesta"><button class="btn oro">Llena la encuesta</button></a> 
                </div> 
          </div>
        </div>
        
      </div>
<br><br><br>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/gsituacion.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/gcontratacion.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/satisfaccion.png" class="d-block w-100" alt="...">
          </div>
        </div>

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active thumbnail" aria-current="true" aria-label="Slide 1">
            <img src="img/2.png" class="d-block w-100" alt="...">
          </button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="thumbnail" aria-label="Slide 2">
            <img src="img/gsituacion.png" class="d-block w-100" alt="...">
          </button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="thumbnail" aria-label="Slide 3">
            <img src="img/gcontratacion.png" class="d-block w-100" alt="...">
          </button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="thumbnail" aria-label="Slide 4">
            <img src="img/satisfaccion.png" class="d-block w-100" alt="...">
          </button>
        </div>
      </div>
      
      <br>
     <br>
      <section id="resultados" class="row no-gutters align-items-center" style="background-image: url('img/tabla-resultados.jpg');background-size:cover;background-repeat: no-repeat;">
       
      <!-- <img src="img/resultados.jpg" alt="MUAC" id="resultados"class="img-fluid of" style=" z-index: -1;"> -->
      <center style="padding:4.1vw">
      <h1 style="font-size: 4.2vw; color: white;
            font-weight: bolder;"> RESULTADOS</h1></center>

  <div style="padding: 4vw"  class="col-sm-12 table-responsive "> 

  <table id="example" class="table table-striped text-xs" style="width:90%; color: white" >
    <thead>
        <tr>
            <th>PLANTEL</th>
            <th>CARRERA</th>
            <th>DESCARGABLE</th>
            
        </tr>
    </thead>
    <tbody>
      <?php
include 'carreras.php';
for ($row = 0; $row < count($carreras); $row++){
$filename='reports/Reporte-'.$carreras[$row][0].$carreras[$row][1].'.pdf';
if (file_exists($filename)){
  echo " <tr>
  <td> <span class='badge oro'>".$carreras[$row][1]."</span></td>
  <td> <span class='badge oro'>".$carreras[$row][0]."</span></td>
  <td> <a href='".$filename."'><span class='badge oro'><i class='fa fa-file-pdf' aria-hidden='true'></i> PDF</span></a></td>
</tr>";
}
  
} 
?>

    </tbody>
    </table>
    </div>
     </section>
     <section>
      <br> <br> <br> <br>
      <div class='row'>
           <div class='col'>

           <center style="padding:4.1vw">
      <h1 style="font-size: 3.1vw; color: white;
            font-weight: bolder;"> RESULTADOS</h1></center>
            <br><br>
                <div class="animation" style="padding-left:3.7vw;padding-top:1.8vw; display:flex">
               <img src="img/gorrito.png" id="gorro" style="width:15%" >
               <a href="reports/Reporte-UNAM GLOBAL  2018.pdf">
               <p style="font-size: 2.5vw; color: white;
            font-weight: bolder;"> Gen 2018</p> </a>
                </div>

                <div class="animation" style="padding-left:3.7vw;padding-top:1.8vw; display:flex">
                <img src="img/gorrito.png" id="gorro" style="width:15%" >
                <a href="reports/Reporte-UNAM GLOBAL  2016.pdf">
               <p style="font-size: 2.5vw; color: white;
            font-weight: bolder;"> Gen 2016</p> </a>
                </div>
                <div  class="animation" style="padding-left:3.7vw;padding-top:1.8vw; display:flex ">
                <img src="img/gorrito.png" id="gorro" style="width:15%" >
                <a href="https://www.pveu.unam.mx/encuesta/01/estadisticas-seguimiento-a-egresados.html">
                <p style="font-size: 2.5vw; color: white;
            font-weight: bolder;"> Años anteriores</p></a>
                </div>
                <center style="padding:4.1vw">
     <a href="https://www.pveu.unam.mx/seguimiento.php#llena-la-encuesta">
                <button class="btn oro animation"> <h1> REALIZA TU ENCUESTA</h1> </button> </a></center>
           </div>
           <img class="animation" src="img/rectoria_rounded.png" id="recotira" style="width:50%; height:50%" >          
      </div>
     </section>
<br> <br> <br>
     <section>
      <br> <br> <br> <br>
      <center style="padding:4.1vw">
      <h1 style="font-size: 3.1vw; color: white;
            font-weight: bolder;"> ENCUESTA DE SEGUIMIENTO A EGRESADOS</h1></center>
      <div class='row'>
           <div class='col animation' style=>
            <br><br>
                <div  style="padding-left:3.7vw;padding-top:1.8vw; display:flex ;text-align: center;">
                <h1 style="font-size: 2.5vw; color: white; font-weight: bolder;"> EGRESADO, EGRESADA, QUEREMOS SABER DE TI!</h1>
                </div>

                <div  style="padding-left:15.7vw;padding-top:1.8vw; display:flex">
                <a href="https://www.pveu.unam.mx/seguimiento.php#llena-la-encuesta">
              <button class="btn oro"> <h1> REALIZA TU <br> ENCUESTA</h1> </button> </a>
                </div>
                <br>
                <div  style="padding-left:15.7vw;padding-top:1.8vw; display:flex">
               
                <img src="img/checked.png"  style="width:10.5vw" >
               </div> 
           </div>
           <img class="animation" src="img/diagonales.png" id="egresados de la comunidad" style="width:50.1vw; height:40.1vw" >
     
     </div>
     </section>
<br><br>

<section>
    <div class='row'>
      <div class=" col cajita animation">

      <img  src="img/ccu.jpg" id="CCU" style="width:20.1vw; height:auto" >
      </div>
     
           <div class='col ' style="width:20%">
            
                <div  style="padding-left:3.7vw;padding-top:1.8vw; display:flex ;text-align: center;">
                <h1 style="font-size: 3.3vw; color: white; font-weight: bolder;">OBJETIVO</h1>
                </div><br>
                <div  class="cajita">
               <p style="font-size: 1.0vw; color: white; font-weight: bold;">El propósito del Sistema para el Seguimiento de Egresados de la UNAM, es contar con un banco de información actualizado en forma continua sobre los resultados de la formación profesional de los egresados de la institución, con la finalidad de contribuir a apoyar la planeación institucional, a la escuelas y facultades en la revisión curricular y a los estudiantes en sus decisiones vocacionales y profesionales.</p>
               <br>
               
                </div>
                <button class="btn oro"> ESTADISTICAS </button> 
           </div>
          
     </div>
     <img  src="img/About_2.png" >
     <img  src="img/About_3.png"  >

    </section>

    <section id='creditos'>      
     <img  src="img/creditos.png"  style="width:100%">
    </section>
    
    <script>
        function bajar(id){
         const element =  document.querySelector('#'+id);
         element.classList.add('animated', 'fadeInDown');
         setTimeout(function() {
           element.classList.remove('fadeInDown'); 
           },
                   30000); }
        function izquierdazo(id){
         const element =  document.querySelector('#'+id);
         element.classList.add('animated', 'fadeLeftDown');
         setTimeout(function() {
           element.classList.remove('fadeLeftDown'); 
            }, 
                   100); }
 
     bajar('central');
      </script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script>
  const the_animation = document.querySelectorAll('.animation')

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('scroll-animation')
        }
            else {
                entry.target.classList.remove('scroll-animation')
            }
    })
},
   { threshold: 0.5
   });
//
  for (let i = 0; i < the_animation.length; i++) {
   const elements = the_animation[i];
    observer.observe(elements);
  } 
</script>
<script>
  new DataTable('#example');
</script>
</body>
</html>