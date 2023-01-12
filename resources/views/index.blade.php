 <!DOCTYPE html>
 <html lang="es">

 <head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="Logo7" sizes="76x76" href="./assets/img/Logo7.png">
   <link rel="icon" type="image/png" href="./assets/img/Logo7.png">
   <title>
    Notaria 104
   </title>
   <!--     Fonts and icons     -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
   <!-- Nucleo Icons -->
   <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
   <!-- CSS Files -->
   <link href="./assets/css/blk-design-system-pro.css?v=1.0.0" rel="stylesheet" />
   <!-- CSS Just for demo purpose, don't include it in your project -->
   <link href="./assets/demo/demo.css" rel="stylesheet" />

   <link href="./assets/css/slick-theme.css" rel="stylesheet" />
   <link href="./assets/css/slick.css" rel="stylesheet" />
   <link href="./assets/css/styles.css" rel="stylesheet" />

   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

   <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
 </head>

 <style>
  body {
  margin: 0;
  font-family: "Poppins", sans-serif;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  color: #525f7f;
  text-align: left;
  background-color: #47484f;
}

.navbar.bg-primary {
  background-color: rgba(58, 58, 58, 0.8)!important;
}

.bg-info {
  background-color: #6d83ad !important;
}

.card {
  background: #1f2251;
  border: 0;
  position: relative;
  width: 100%;
  box-shadow: 0 1px 20px 0px rgba(0, 0, 0, 0.1);
  border-radius: 7px;
  margin-top: 30px;
}

.contactus-4 .map:after {
  content: "";
  position: absolute;
  height: 100%;
  width: 700%;
  background: rgba(34, 42, 66, 0);
  background-position: 23% 10%;
  left: 0;
  top: 0;
  text-align: center;
  align-items: center;

  
}

.contactus-4 .info .info .icon {
  color: #ffff;
}


.contactus-4 .info {
  height: 100%;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  padding: 15px;
}

.info {
  max-width: 100%;
  margin: 0 auto;
  padding: 70px 10px 30px;
  text-align: center;
  border-radius: 3px;
}

.contactus-4 .title {
  margin-top: 0px;
}

.contactus-4 .description {
  margin-bottom: 0px;
}

[class*="blogs-"] .title {
  margin-bottom: 7px;
}

.title {
  margin-top: 0px;
  margin-bottom: 0px;
  font-weight: 600;
  color: rgba(255, 255, 255, 0.8);
}

.navbar .navbar-brand {
  position: relative;
  padding-top: 0rem;
  padding-bottom: 0rem;
  color: #ffffff;
  text-transform: capitalize;
  font-size: 1rem;
}

.navbar-brand {
  display: inline-block;
  padding-top: 0rem;
  padding-bottom: 0.rem;
  margin-right: 0rem;
  font-size: 0.99925rem;
  line-height: inherit;
  white-space: nowrap;
}

.navbar .navbar-brand {
    margin-left: 0px;
    position: relative;
  }

  .burger-menu.menu-on-left .navbar-brand {
    float: right;
    margin-right: 0;
    margin-left: 0rem;
  }

  @media screen and (max-width: 991px) {
    .box {
  border-radius: 5px;
  font-family: sans-serif;
  text-align: center;
  font-size: 1rem;
  line-height: 1;
  -webkit-backdrop-filter: blur(5px);
  backdrop-filter: blur(5px);
  padding: 13px 1rem;
}

  .navbar .navbar-translate {
    width: 100%;
    position: relative;
    display: flex;
    justify-content: space-between !important;
  }
  .navbar-collapse {
    position: absolute;
    width: calc(100% - 1.4rem);
    height: auto !important;
    left: 0;
    top: 0;
    margin: 0.7rem;
    background: rgba(69, 69, 69, 0.96);
    border-radius: 0.2857rem;
    padding: 1.4rem;
  }
  .navbar.bg-white .navbar-nav .nav-item a.nav-link {
    color: #ffffff !important;
  }
}

  @media screen and (min-width: 992px) {
    .box {
  border-radius: 5px;
  font-family: sans-serif;
  text-align: center;
  font-size: 1rem;
  line-height: 1;
  -webkit-backdrop-filter: blur(5px);
  backdrop-filter: blur(5px);
  padding: 13px 5.4rem;
}

  .navbar .navbar-translate {
    width: 100%;
    position: relative;
    display: flex;
    justify-content: space-between !important;
  }
  .navbar-collapse {
    position: absolute;
    width: calc(100% - 1.4rem);
    height: auto !important;
    left: 0;
    top: 0;
    margin: 0.7rem;
    background: rgba(69, 69, 69, 0.96);
    border-radius: 0.2857rem;
    padding: 1.4rem;
  }
  .navbar.bg-white .navbar-nav .nav-item a.nav-link {
    color: #ffffff !important;
  }
}

.blogs-4 .card {
  margin-bottom: 0px;
  text-align: center;
}

.card .card-body .card-title {
  color: #ffffff;
  text-transform: inherit;
  font-weight: 300;
  margin-bottom: .75rem;
  margin-top: 15px;
  line-height: 1.25em;
}

.card-background.card-blog[data-animation="true"]:after,
.card-background.card-blog[data-animation="zooming"]:after {
  height: 100%;
  top: auto;
  border-radius: 0.4285rem;
  background: linear-gradient(to top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.65) 100%);
}

textarea.form-control {
  padding: -0.5rem 0.7rem;
  max-width: 100%;
  max-height: 100%;
  resize: none;
  border-radius: 0.4285rem;
  line-height: 2;
}

 </style>
 
 <body class="sections-page">
   <nav class="box navbar navbar-expand-lg  bg-primary fixed-top  nav-down">
     <!-- <div class="container"> -->
       <div class="navbar-translate">
         <a class="navbar-brand">
           <!-- <span>Notaria </span>#104 -->
                   <span><img src="assets/img/Logo5.png" alt="Bujo" width="90" height="54"></span>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-bar bar1"></span>
           <span class="navbar-toggler-bar bar2"></span>
           <span class="navbar-toggler-bar bar3"></span>
         </button>
       </div>
       <div class="collapse navbar-collapse" id="navigation">
         <div class="navbar-collapse-header">
           <div class="row">
           <div class="col-1 collapse-brand">
            <a></a>
             </div>
             <div class="col-5 collapse-brand">
               <a>
               <!-- <span><img src="assets/img/Logo5.png" alt="Bujo" width="80" height="50"></span> -->
               </a>
             </div> 
             <div class="col-6 collapse-close text-right">
               <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                 <i class="tim-icons icon-simple-remove"></i>
               </button>
             </div>
           </div>
         </div>
         <ul class="navbar-nav ml-auto">

<li class="nav-item">
        <a class="nav-link" href="./#headers">
        Portada
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./#features">
        Acerca De
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./#nosotros">
        Nosotros
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./#blogs-4">
        Servicios
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./#contactus">
        Contacto
        </a>
      </li>
        </ul>
       </div>
     </div>
   </nav>

   <div class="wrapper">
     <div class="section-space"></div>
     <div class="cd-section" id="headers">
       <div class="header header-1">
         <div class="page-header header-filter">
           <div class="page-header-image" style="background-image: url('assets/img/top-view-career-guidance-items-judges.jpg');"></div>
           <div class="container">
             <div class="row">
             <div class="col-lg-5 col-md-12 ml-auto mt-5">
                   <img src="assets/img/Sin título-2.png">
               </div>
               <div class="col-lg-7 col-md-7 mr-auto text-left mt-5">
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- ------------------------------- -->

<!-- ------------------------------- -->
<!-- <div class="cd-section" id="features">
       <div class="features-1">
         <div class="container">
           <div class="row">
             <div class="col-md-8 ml-auto mr-auto">
               <h1 class="title">Acerca De</h1>
             </div>
           </div>
           <div class="row">
             <div class="col-md-4">
               <div class="info info-hover">
                 <div class="icon icon-primary">
                   <img class="bg-blob" src="assets/img/feature-blob/primary.png">
                   <i class="tim-icons icon-user-run"></i>
                 </div>
                 <h4 class="info-title">Social Conversations</h4>
                 <p class="description">Gain access to the demographics, psychographics, and location of unique people.</p>
               </div>
             </div>
             <div class="col-md-4">
               <div class="info info-hover">
                 <div class="icon icon-success">
                   <img class="bg-blob" src="assets/img/feature-blob/success.png">
                   <i class="tim-icons icon-atom"></i>
                 </div>
                 <h4 class="info-title">Analyze Performance</h4>
                 <p class="description">Unify data from Facebook, Instagram, Twitter, LinkedIn, and Youtube to gain rich insights.</p>
               </div>
             </div>
             <div class="col-md-4">
               <div class="info info-hover">
                 <div class="icon icon-warning">
                   <img class="bg-blob" src="assets/img/feature-blob/warning.png">
                   <i class="tim-icons icon-gift-2"></i>
                 </div>
                 <h4 class="info-title">Measure Conversions</h4>
                 <p class="description">Track actions taken on your website, understand the impact on your bottom line.</p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div> -->

<!-- ------------------------------- -->
     <div class="features-3" id="nosotros">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 mr-auto ml-auto">
              <h1 class="title">Nosotros</h1>
              <h4 class="description">Trello’s boards, lists, and cards enable you to organize and prioritize your projects in a fun, flexible and rewarding way.</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 ml-auto">
              <div class="info info-horizontal">
                <div class="icon icon-success">
                  <img class="bg-blob" src="assets/img/feature-blob/success.png">
                  <i class="tim-icons icon-html5"></i>
                </div>
                <div class="description">
                  <h3 class="info-title">For Developers</h3>
                  <p>The moment you use Black Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                  <a class="btn btn-info btn-link" href="javascript:;">Explore now <i class="tim-icons icon-minimal-right"></i> </a>
                </div>
              </div>
            </div>
            <div class="col-md-5 mr-auto">
              <div class="info info-horizontal">
                <div class="icon icon-warning">
                  <img class="bg-blob" src="assets/img/feature-blob/warning.png">
                  <i class="tim-icons icon-heart-2"></i>
                </div>
                <div class="description">
                  <h3 class="info-title">For Designers</h3>
                  <p>The moment you use Black Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                  <a class="btn btn-info btn-link" href="javascript:;">Explore now <i class="tim-icons icon-minimal-right"></i> </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 ml-auto">
              <div class="info info-horizontal">
                <div class="icon icon-danger">
                  <img class="bg-blob" src="assets/img/feature-blob/danger.png">
                  <i class="tim-icons icon-chart-bar-32"></i>
                </div>
                <div class="description">
                  <h3 class="info-title">For Bootstrap Lovers</h3>
                  <p>The moment you use Black Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                  <a class="btn btn-info btn-link" href="javascript:;">Explore now <i class="tim-icons icon-minimal-right"></i> </a>
                </div>
              </div>
            </div>
            <div class="col-md-5 mr-auto">
              <div class="info info-horizontal">
                <div class="icon icon-info">
                  <img class="bg-blob" src="assets/img/feature-blob/info.png">
                  <i class="tim-icons icon-paper"></i>
                </div>
                <div class="description">
                  <h3 class="info-title">Documentation
                    <span class="badge badge-info badge-pill">v2.0</span>
                  </h3>
                  <p>The moment you use Black Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                  <a class="btn btn-info btn-link" href="javascript:;">Explore now <i class="tim-icons icon-minimal-right"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<!-- ------------------------------- -->
     <div class="cd-section" id="blogs">
       <div class="section blogs-4" id="blogs-4">
         <div class="container-fluid">
           <h2 class="title">Servicios</h2>
           <div class="row">
             <div class="col-lg-2">
               <div class="card card-blog card-background" data-animation="zooming">
                 <div class="full-background" style="background-image: url('assets/img/businessman-working-with-documentation-desk.jpg')"></div>
                 <div class="card-body">
                   <div class="content">
                     <a href="javascript:;">
                       <h2 class="card-title">Consultoría Legal en Materia Fiscal</h2>
                     </a>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-lg-2">
               <div class="card card-blog card-background" data-animation="zooming">
                 <div class="full-background" style="background-image: url('assets/img/business-man-financial-inspector-secretary-making-report-calculating-checking-balance-internal-revenue-service-inspector-checking-document-audit-concept.jpg')"></div>
                 <div class="card-body">
                   <div class="content">
                     <a href="javascript:;">
                       <h2 class="card-title">Consultoría Legal en Materia Administrativa</h2>
                     </a>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-lg-2">
               <div class="card card-blog card-background" data-animation="zooming">
                 <div class="full-background" style="background-image: url('assets/img/silhouette-family-walking-by-sunset-time.jpg')"></div>
                 <div class="card-body">
                   <div class="content">
                     <a href="javascript:;">
                       <h2 class="card-title">Consultoría Legal en Materia Familiar</h2>
                     </a>
                   </div>
                 </div>
               </div>
             </div>

             <div class="col-lg-2">
               <div class="card card-blog card-background" data-animation="zooming">
                 <div class="full-background" style="background-image: url('assets/img/image-engineering-objects-workplace-top-view-construction-concept-engineering-tools-vintage-tone-retro-filter-effect-soft-focus-selective-focus.jpg')"></div>
                 <div class="card-body">
                   <div class="content">
                     <a href="javascript:;">
                       <h2 class="card-title">Consultoría Legal en Materia Civil</h2>
                     </a>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-lg-2">
               <div class="card card-blog card-background" data-animation="zooming">
                 <div class="full-background" style="background-image: url('assets/img/businessman-consulting-legal-expert.jpg')"></div>
                 <div class="card-body">
                   <div class="content">
                     <a href="javascript:;">
                       <h2 class="card-title">Consultoría Legal en Materia de Amparo</h2>
                     </a>
                   </div>
                 </div>
               </div>
             </div>

             <div class="col-lg-2">
               <div class="card card-blog card-background" data-animation="zooming">
                 <div class="full-background" style="background-image: url('assets/img/young-man-working-warehouse-with-boxes.jpg')"></div>
                 <div class="card-body">
                   <div class="content">
                     <a href="javascript:;">
                       <h2 class="card-title">Consultoría Legal en Materia Mercantil</h3>
                     </a>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>

     </div>

     <!-- --------------------------------------- -->
     <div class="cd-section" id="features">
       <div class="features-1">
         <div class="container">
           <div class="row">
             <div class="col-md-8 ml-auto mr-auto">
               <h1 class="title">Acerca De</h1>
             </div>
           </div>
           <div class="row">
             <div class="col-md-4">
               <div class="info info-hover">
                 <div class="icon icon-primary">
                   <img class="bg-blob" src="assets/img/feature-blob/primary.png">
                   <i class="tim-icons icon-user-run"></i>
                 </div>
                 <h4 class="info-title">Social Conversations</h4>
                 <p class="description">Gain access to the demographics, psychographics, and location of unique people.</p>
               </div>
             </div>
             <div class="col-md-4">
               <div class="info info-hover">
                 <div class="icon icon-success">
                   <img class="bg-blob" src="assets/img/feature-blob/success.png">
                   <i class="tim-icons icon-atom"></i>
                 </div>
                 <h4 class="info-title">Analyze Performance</h4>
                 <p class="description">Unify data from Facebook, Instagram, Twitter, LinkedIn, and Youtube to gain rich insights.</p>
               </div>
             </div>
             <div class="col-md-4">
               <div class="info info-hover">
                 <div class="icon icon-warning">
                   <img class="bg-blob" src="assets/img/feature-blob/warning.png">
                   <i class="tim-icons icon-gift-2"></i>
                 </div>
                 <h4 class="info-title">Measure Conversions</h4>
                 <p class="description">Track actions taken on your website, understand the impact on your bottom line.</p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
       <!-- ------------------------------------- -->

<!-- <div class="wrapper"> -->
  <!-- <div class="section-space"></div> -->
    <!-- <div class="cd-section" id="headers"> -->
      <!-- <div class="header header-1"> -->
        <div class="page-header header-filter">
          <div class="page-header-image" style="background-image: url('assets/img/business-people-shaking-hands-together.jpg');"></div>
            <div class="contactus-4" id="contactus">

                <div class="row">
                <div class="col d-flex justify-content-center">

                  <div class="col-md-5">
                    <h1 class="title">Contacto</h1>
                  </div>
                  <div class="col-md-12 m-auto">
                    <div class="card card-contact card-raised">

                      <div class="row">
                        <div class="col-md-7">
                          <form class="p-3" action="{{route('comentatios_recibir')}}" method="POST">
                            @csrf

                            <div class="card-header">
                  <h4 class="card-title">Contactanos</h4>
                </div>
                              <div class="card-body">

                                  <div class="row">
                                    <div class="col-md-6">
                                      <label>Nombre</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="tim-icons icon-single-02"></i></span>
                                          </div>
                                            <input type="text" maxlength="100" class="form-control" id="Nombre" name="Nombre" value="{{old('Nombre')}}">
                                        </div>
                                    </div>

                                
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Telefono</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="tim-icons icon-caps-small"></i></span>
                                            </div>
                                          <input type="number" maxlength="100" class="form-control" id="telefono" aria-describedby="emailHelp" name="Telefono" value="{{old('Telefono')}}">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  @error('Nombre')
                                      <p style="color:red"><strong>*{{ $message }}</strong></p>
                                    @enderror
                                  @error('Telefono')
                                    <p style="color:red"><strong>*{{ $message }}</strong></p>
                                  @enderror

                                  <div class="form-group">
                                      <label>Correo electronico</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="tim-icons icon-email-85"></i></span>
                                      </div>
                                      <input  type="email" maxlength="100" class="form-control" id="email" aria-describedby="emailHelp" name="Email" value="{{old('Email')}}">
                                    </div>
                                  </div>
                                  @error('Email')
                                    <p style="color:red"><strong>*{{ $message }}</strong></p>
                                  @enderror

                                  <div class="form-group">
                                    <label>Mensaje</label>
                                    <textarea class="form-control textarea-limited" placeholder="Maximo 450 caracteres." rows="10" ,="" maxlength="450" name="Mensaje">{{ old('Mensaje') }}</textarea>
                                  </div>
                                  @error('Mensaje')
                                    <p style="color:red"><strong>*{{'El campo Comentario es requerido'}}</strong></p>
                                  @enderror

                                <div class="row">
                                  <div class="col-md-8">
                                    <input class="check-input" type="radio" name="Tipo_de_Informacion" id="Radiostipo1" value="Cita_para_Asesoría_Legal"> Cita para Asesoria Legal
                                    <input class="check-input" type="radio" name="Tipo_de_Informacion" id="Radiostipo2" value="Información_de_Servicios"> Informacion de Servicios
                                  </div>

                                  <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary btn-round pull-right" onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; this.form.reset()">Enviar Mensaje</button>
                                  </div>
                                </div>
                                @error('Tipo_de_Informacion')
                                    <p style="color:red"><strong>*{{'Marque una opcion'}}</strong></p>
                                  @enderror


                              </div>
                          </form>
                        </div>
                        
                        <div class="col-md-5">
                          <div class="info text-left bg-info">
                            <h4 class="card-title">Informacion de contacto</h4>

                              <div class="info info-horizontal">
                                <div class="icon">
                                  <i class="tim-icons icon-square-pin"></i>
                                </div>
                                  <div class="description">
                                    <h5 class="info-title">
                                      Dirección:
                                      <br>C. 18 # 330 x 17, Fraccionamiento Montebello, Mérida, Yucatán 
                                    </h5>
                                  </div>
                              </div>

                              <div class="info info-horizontal">
                                <div class="icon">
                                  <i class="tim-icons icon-mobile"></i>
                                </div>
                                <div class="description">
                                  <h5 class="info-title">
                                    Teléfono:
                                    <br>999X XX XX XX
                                  </h5>
                                </div>
                              </div>

                                <div class="info info-horizontal">
                                  <div class="icon">
                                    <i class="tim-icons icon-email-85"></i>
                                  </div>
                                  <div class="description">
                                    <h5 class="info-title">
                                      Correo electrónico:
                                      <br>pablocastro1827@gmail.com
                                    </h5>
                                  </div>
                                </div>

                              <div style="width: 100%"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=C.%2017%20331,%20Montebello,%2097113%20M%C3%A9rida,%20Yuc.&t=&z=17&ie=UTF8&iwloc=&output=embed"><a href="https://www.gps.ie/car-satnav-gps/">GPS car tracker</a></iframe></div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>
  </div>
</div>

<!-- </div> -->
<!-- ---------------------------------------------------------- -->
<!-- </div> -->
<!-- </div> -->
<!-- </div> -->




         <footer class="footer">
           <div class="container">
             <div class="row">
               <div class="col-md-3">
                 <!-- <h1 class="title">BLK•</h1> -->
               </div>
               <div class="col-md-3 col-6">
                 <ul class="nav">
                   <li class="nav-item">
                     <a href="./index.html" class="nav-link">
                       <!-- Home -->
                     </a>
                   </li>
                   <li class="nav-item">
                     <a href="./examples/landing-page.html" class="nav-link">
                       <!-- Landing -->
                     </a>
                   </li>
                   <li class="nav-item">
                     <a href="./examples/register-page.html" class="nav-link">
                       <!-- Register -->
                     </a>
                   </li>
                   <li class="nav-item">
                     <a href="./examples/profile-page.html" class="nav-link">
                       <!-- Profile -->
                     </a>
                   </li>
                 </ul>
               </div>
               <div class="col-md-3 col-6">
                 <ul class="nav">
                   <li class="nav-item">
                     <a href="https://creative-tim.com/contact-us?ref=blkdsp-footer" class="nav-link">
                       <!-- Contact Us -->
                     </a>
                   </li>
                   <li class="nav-item">
                     <a href="https://creative-tim.com/about-us?ref=blkdsp-footer" class="nav-link">
                       <!-- About Us -->
                     </a>
                   </li>
                   <li class="nav-item">
                     <a href="http://creative-tim.com/blog?ref=blkdsp-footer" class="nav-link">
                       <!-- Blog -->
                     </a>
                   </li>
                   <li class="nav-item">
                     <a href="https://opensource.org/licenses/MIT?ref=blkdsp-footer" class="nav-link">
                       <!-- License -->
                     </a>
                   </li>
                 </ul>
               </div>
               <div class="col-md-3">
                 <!-- <h3 class="title">Follow us:</h3> -->
                 <div class="btn-wrapper profile text-left">
                   <!-- <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us"> -->
                     <!-- <i class="fab fa-twitter"></i> -->
                   </a>
                   <!-- <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us"> -->
                     <!-- <i class="fab fa-facebook-square"></i> -->
                   </a>
                   <!-- <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us"> -->
                     <!-- <i class="fab fa-dribbble"></i> -->
                   </a>
                 </div>
               </div>
             </div>
           </div>
         </footer>
       </div>
       <!--   Core JS Files   -->
       <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
       <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
       <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
       <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
       <script src="./assets/css/slick.min.js"></script>
       <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
       <script src="./assets/js/plugins/bootstrap-switch.js"></script>
       <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
       <script src="./assets/js/plugins/slick.js" type="text/javascript"></script>
       <script src="./assets/js/plugins/anime.min.js" type="text/javascript"></script>
       <script src="./assets/js/plugins/chartjs.min.js"></script>
       <script src="./assets/js/plugins/moment.min.js"></script>
       <script src="./assets/js/plugins/bootstrap-tagsinput.js"></script>
       <script src="./assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
       <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
       <script src="./assets/js/plugins/jasny-bootstrap.min.js"></script>
       <script src="./assets/demo/demo.js"></script>
       <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
       <script src="./assets/js/blk-design-system-pro.min.js?v=1.0.0" type="text/javascript"></script>
       <script src="./assets/js/plugins/sweetalert2.all.min.js"></script>
       <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script> -->
       <script src="./assets/test.js"></script>
       <!-- <script src="./assets/css/app.js"></script> -->
       @include('success')
       <script>

function statusCheck() {
            };

         $(document).ready(function() {
    
                        $("#checkboxPolyline").change(function() {
                        if ($(this).is(':checked')) {

                          console.log("ON")

                        } else {
                          console.log("OFF")

                        }
                        });
                        $('#buttonStart #checkboxPolyline').attr('unchecked', 'checked').change();

           blackKit.initVideoBackground();
 
           if ($('.nav-down').length != 0) {
             blackKit.checkScrollForMovingNavbar();
           };
 
           $(".center").slick({
             dots: false,
             infinite: true,
             centerMode: true,
             slidesToShow: 4,
             slidesToScroll: 1,
             responsive: [{
                 breakpoint: 1024,
                 settings: {
                   slidesToShow: 3,
                   slidesToScroll: 1,
                   infinite: true,
                 }
               },
               {
                 breakpoint: 600,
                 settings: {
                   slidesToShow: 2,
                   slidesToScroll: 1
                 }
               },
               {
                 breakpoint: 480,
                 settings: {
                   slidesToShow: 1,
                   slidesToScroll: 1
                 }
               }
             ]
           });
 
           $('.customer-logos').slick({
             slidesToShow: 6,
             slidesToScroll: 1,
             autoplay: true,
             autoplaySpeed: 2500,
             arrows: false,
             dots: false,
             pauseOnHover: false,
             responsive: [{
                 breakpoint: 768,
                 settings: {
                   slidesToShow: 4
                 }
               },
               {
                 breakpoint: 520,
                 settings: {
                   slidesToShow: 3
                 }
               },
               {
                 breakpoint: 480,
                 settings: {
                   slidesToShow: 1,
                   slidesToScroll: 1
                 }
               }
             ]
           });

           {
             class ImgItem {
               constructor(el) {
                 this.DOM = {};
                 this.DOM.el = el;
                 this.DOM.svg = this.DOM.el.querySelector('.item__svg');
                 this.DOM.path = this.DOM.svg.querySelector('path');
                 this.paths = {};
                 this.paths.start = this.DOM.path.getAttribute('d');
                 this.paths.end = this.DOM.el.dataset.morphPath;
                 this.DOM.deco = this.DOM.svg.querySelector('.item__deco');
                 this.DOM.image = this.DOM.svg.querySelector('image');
                 this.DOM.title = this.DOM.el.querySelector('.item__meta > .item__title');
                 this.DOM.subtitle = this.DOM.el.querySelector('.item__meta > .item__subtitle');
                 this.CONFIG = {
                   animation: {
                     path: {
                       duration: this.DOM.el.dataset.animationPathDuration || 1500,
                       delay: this.DOM.el.dataset.animationPathDelay || 0,
                       easing: this.DOM.el.dataset.animationPathEasing || 'easeOutElastic',
                       elasticity: this.DOM.el.dataset.pathElasticity || 400,
                       scaleX: this.DOM.el.dataset.pathScalex || 1,
                       scaleY: this.DOM.el.dataset.pathScaley || 1,
                       translateX: this.DOM.el.dataset.pathTranslatex || 0,
                       translateY: this.DOM.el.dataset.pathTranslatey || 0,
                       rotate: this.DOM.el.dataset.pathRotate || 0
                     },
                     image: {
                       duration: this.DOM.el.dataset.animationImageDuration || 2000,
                       delay: this.DOM.el.dataset.animationImageDelay || 0,
                       easing: this.DOM.el.dataset.animationImageEasing || 'easeOutElastic',
                       elasticity: this.DOM.el.dataset.imageElasticity || 400,
                       scaleX: this.DOM.el.dataset.imageScalex || 1.1,
                       scaleY: this.DOM.el.dataset.imageScaley || 1.1,
                       translateX: this.DOM.el.dataset.imageTranslatex || 0,
                       translateY: this.DOM.el.dataset.imageTranslatey || 0,
                       rotate: this.DOM.el.dataset.imageRotate || 0
                     },
                     deco: {
                       duration: this.DOM.el.dataset.animationDecoDuration || 2500,
                       delay: this.DOM.el.dataset.animationDecoDelay || 0,
                       easing: this.DOM.el.dataset.animationDecoEasing || 'easeOutQuad',
                       elasticity: this.DOM.el.dataset.decoElasticity || 400,
                       scaleX: this.DOM.el.dataset.decoScalex || 0.9,
                       scaleY: this.DOM.el.dataset.decoScaley || 0.9,
                       translateX: this.DOM.el.dataset.decoTranslatex || 0,
                       translateY: this.DOM.el.dataset.decoTranslatey || 0,
                       rotate: this.DOM.el.dataset.decoRotate || 0
                     }
                   }
                 };
                 this.initEvents();
               }
               initEvents() {
                 this.mouseenterFn = () => {
                   this.mouseTimeout = setTimeout(() => {
                     this.isActive = true;
                     this.animate();
                   }, 75);
                 }
                 this.mouseleaveFn = () => {
                   clearTimeout(this.mouseTimeout);
                   if (this.isActive) {
                     this.isActive = false;
                     this.animate();
                   }
                 }
                 this.DOM.el.addEventListener('mouseenter', this.mouseenterFn);
                 this.DOM.el.addEventListener('mouseleave', this.mouseleaveFn);
                 this.DOM.el.addEventListener('touchstart', this.mouseenterFn);
                 this.DOM.el.addEventListener('touchend', this.mouseleaveFn);
               }
               getAnimeObj(targetStr) {
                 const target = this.DOM[targetStr];
                 let animeOpts = {
                   targets: target,
                   duration: this.CONFIG.animation[targetStr].duration,
                   delay: this.CONFIG.animation[targetStr].delay,
                   easing: this.CONFIG.animation[targetStr].easing,
                   elasticity: this.CONFIG.animation[targetStr].elasticity,
                   scaleX: this.isActive ? this.CONFIG.animation[targetStr].scaleX : 1,
                   scaleY: this.isActive ? this.CONFIG.animation[targetStr].scaleY : 1,
                   translateX: this.isActive ? this.CONFIG.animation[targetStr].translateX : 0,
                   translateY: this.isActive ? this.CONFIG.animation[targetStr].translateY : 0,
                   rotate: this.isActive ? this.CONFIG.animation[targetStr].rotate : 0
                 };
                 if (targetStr === 'path') {
                   animeOpts.d = this.isActive ? this.paths.end : this.paths.start;
                 }
                 anime.remove(target);
                 return animeOpts;
               }
               animate() {
                 anime(this.getAnimeObj('path'));
                 anime(this.getAnimeObj('image'));
                 anime(this.getAnimeObj('deco'));
                 anime.remove(this.DOM.title);
                 anime({
                   targets: this.DOM.title,
                   easing: 'easeOutQuad',
                   translateY: this.isActive ? [{
                       value: '-50%',
                       duration: 200
                     },
                     {
                       value: ['50%', '0%'],
                       duration: 200
                     }
                   ] : [{
                       value: '50%',
                       duration: 200
                     },
                     {
                       value: ['-50%', '0%'],
                       duration: 200
                     }
                   ],
                   opacity: [{
                       value: 0,
                       duration: 200
                     },
                     {
                       value: 1,
                       duration: 200
                     }
                   ]
                 });
                 anime.remove(this.DOM.subtitle);
                 anime({
                   targets: this.DOM.subtitle,
                   easing: 'easeOutQuad',
                   translateY: this.isActive ? {
                     value: ['50%', '0%'],
                     duration: 200,
                     delay: 250
                   } : {
                     value: '0%',
                     duration: 1
                   },
                   opacity: this.isActive ? {
                     value: [0, 1],
                     duration: 200,
                     delay: 250
                   } : {
                     value: 0,
                     duration: 1
                   }
                 });
               }
             }
 
             const items = Array.from(document.querySelectorAll('.item'));
             const init = (() => items.forEach(item => new ImgItem(item)))();
             setTimeout(() => document.body.classList.remove('loading'), 2000);
           };
 
         });
       </script>
       <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
       <script>
         window.TrackJS &&
           TrackJS.install({
             token: "ee6fab19c5a04ac1a32a645abde4613a",
             application: "black-dashboard-pro"
           });
       </script>
 </body>
 
 </html>
 