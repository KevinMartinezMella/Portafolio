<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Manifest -->
    <link rel="manifest" href="/manifest.json">
    <!-- Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Css -->
     <link rel="stylesheet" href="css/terminal.css">
     <link rel="stylesheet" href="css/main.css">
     <!-- Favicon -->
     <link rel="icon" type="image/x-icon" href="img/km-logo.png">
    <title>Kevin Martínez - Desarrollador</title>
</head>
<body class="fondoAzulOscuro">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top fondoNegro justify-content-center text-light">
        <!-- <p class="text-light mb-0 fuenteGruesa">Kevin Martínez - Desarrollador</p> -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="logoPrincipal">
                    <img width="30" src="img/km-logo.png" alt="">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link active text-center puntero" onclick="scrollear('portada')">Kevin Martínez</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-center puntero" onclick="scrollear('experiencia')">Experiencia</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-center puntero" onclick="scrollear('proyectos')">Proyectos</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link active text-center puntero" onclick="scrollear('contacto')">Contacto</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link active text-center" href="https://www.github.com/kevinmartinezmella/" target="_blank"><span class="fa-brands fa-github text-light fuenteMedia"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-center" href="https://www.linkedin.com/in/kevin-andres-martinez/" target="_blank"><span class="fa-brands fa-linkedin text-light fuenteMedia"></span></a>
                </li>
              </ul>
            </div>
          </div>
    </nav>
    <div class="banner fondoAzulOscuro" id="portada">
        <div class="container">
            <div class="d-flex vh-100">
                <div class="d-flex align-items-center sinEspacio">
                    <div>
                        <p class="text-light mb-3 fuenteMedia fuenteMenosGruesa">Kevin Andrés Martínez</p>
                        <p class="mb-0 text-light fuenteGrande fuenteGruesa textoPrincipal">Desarrollador</p>
                        <p class="colorAzul fuenteGrande fuenteGruesa textoPrincipal">Full Stack</p>
                        <div class="redes">
                            <a href="https://www.github.com/kevinmartinezmella/" target="_blank"><span class="ms-3 fa-brands fa-github text-light fuenteMedia me-3"></span></a>
                            <a href="https://www.linkedin.com/in/kevin-andres-martinez/" target="_blank"><span class="fa-brands fa-linkedin text-light fuenteMedia"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contenido">
        <div class="container pt-5 mt-5 text-light">
            <div class="row mb-5 pb-5">
                <div class="col-lg-6 mb-4">
                    <h2 class="mb-4">Soy <span class="fuenteGruesa colorAzul">Kevin Martínez</span></h2>
                    <p class="fuenteMedia"><span class="fuenteGruesa colorAzul">Analista Programador</span> enfocado en el desarrollo Full Stack con experiencia en tecnologías <span class="fuenteGruesa colorAzul">web</span> y <span class="fuenteGruesa colorAzul">móviles</span>.</p>
                    <p class="fuenteMedia">Me especializo en crear aplicaciones dinámicas, optimizadas y fáciles de usar, combinando habilidades técnicas con un enfoque en el diseño intuitivo.</p>
                </div>
                <div class="col-lg-6">
                    <div class="container-terminal">
                        <div class="terminal_toolbar">
                            <div class="butt">
                                <button class="btn-terminal btn-color"></button>
                                <button class="btn-terminal"></button>
                                <button class="btn-terminal"></button>
                            </div>
                            <p class="user">kevin@admin: ~</p>
                            <div class="add_tab">
                                
                            </div>
                        </div>
                        <div class="terminal_body">
                            <div class="terminal_promt">
                                <span class="terminal_user">kevin@admin:</span>
                                <span class="terminal_location">~</span>
                                <span class="terminal_bling">$ echo "Gracias por ver mi portafolio. -Kevin."</span>
                                <span class="terminal_cursor"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-5 mt-5 mb-5 pb-5" id="experiencia">
                <h2 class="text-light text-center fuenteGruesa mb-5"><span class="colorAzul">Experiencia</span> Laboral</h2>
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div class="card mb-3 fondoInvisible">
                            <div class="row g-0">
                                <div class="col-md-4 mb-3 text-center">
                                  <img class="img-fluid imagenRedondaResp" src="img/logo_sycar.jpg" alt="Logo Grupo Sycar">
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body ps-3 pe-3 p-0">
                                    <h5 class="card-title fuenteGruesa">Grupo Sycar</h5>
                                    <p class="card-text">Cargo de <span class="fuenteGruesa colorAzul">Analista Desarrollador</span> donde desarrollo aplicaciones web, landing y mejora continua a sistemas. <small class="text-muted">2023 - Actualidad</small></p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="card mb-3 fondoInvisible">
                            <div class="row g-0">
                              <div class="col-md-4 text-center mb-3">
                                <img class="img-fluid imagenRedondaResp" src="img/logo_cumbre.jpg" alt="Logo Cumbre Dental">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body ps-3 pe-3 p-0">
                                  <h5 class="card-title fuenteGruesa">Clínica Cumbre Dental</h5>
                                  <p class="card-text">Cargo de <span class="fuenteGruesa colorAzul">Desarrollador Web</span> donde desarrollé aplicaciones web, landing y aplicaciones móviles. <small class="text-muted">2022 - 2023</small></p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="card mb-3 fondoInvisible">
                            <div class="row g-0">
                                <div class="col-md-4 text-center mb-3">
                                  <img class="img-fluid imagenRedondaResp" src="img/logo-freelance.jpg" alt="Logo Cumbre Dental">
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body ps-3 pe-3 p-0">
                                    <h5 class="card-title fuenteGruesa">Freelancer</h5>
                                    <p class="card-text"><span class="fuenteGruesa colorAzul">Desarrollador Independiente</span> donde desarrollé aplicaciones web y tomé requerimientos técnicos y funcionales. <small class="text-muted">2021 - 2022</small></p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="CV_Kevin_Martinez.pdf" download target="_blank" class="btn fondoAzulMasOscuro text-light fuenteGruesa"><i class="fas fa-download"></i> Descargar Curriculum Vitae</a>
                </div>
            </div>
            <div class="pt-5 mt-5">
                <h2 class="text-light text-center fuenteGruesa mb-3">Tecnologías</h2>
                <p class="fuenteGruesa text-light text-center mb-5">Esto representa las tecnologías de las cuales tengo mayor dominio.</p>
                <div class="d-flex justify-content-center">
                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="HTML">
                        <img class="anchoLogo me-1" src="img/tecnologia/html.webp" alt="Logo Html">
                    </div>
                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="CSS">
                        <img class="anchoLogo me-1" src="img/tecnologia/css.png" alt="Logo CSS">
                    </div>
                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="JavaScript">
                        <img class="anchoLogo me-1" src="img/tecnologia/js.png" alt="Logo JavaScript">
                    </div>
                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Python">
                        <img class="anchoLogo me-1" src="img/tecnologia/python.png" alt="Logo Python">
                    </div>
                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Django">
                        <img class="anchoLogo me-1" src="img/tecnologia/django.png" alt="Logo Django">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Ionic">
                        <img class="anchoLogo me-1" src="img/tecnologia/ionic.png" alt="Logo Ionic">
                    </div>
                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="React">
                        <img class="anchoLogo me-1" src="img/tecnologia/react.png" alt="Logo React">
                    </div>
                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="PHP">
                        <img class="anchoLogo me-1" src="img/tecnologia/php.png" alt="Logo PHP">
                    </div>
                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Laravel">
                        <img class="anchoLogo me-1" src="img/tecnologia/laravel.png" alt="Logo Laravel">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="SQLServer">
                        <img class="anchoLogo me-1" src="img/tecnologia/sqlserver.png" alt="Logo SQLServer">
                    </div>
                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="MySQL">
                        <img class="anchoLogo me-1" src="img/tecnologia/mysql.png" alt="Logo MySQL">
                    </div>
                </div>
            </div>
        </div>
        <div id="proyectos" class="pt-5 mt-5 mb-5 pb-5">
            <h2 class="text-light fuenteGruesa text-center">Algunos <span class="colorAzul">Proyectos</span></h2>
            <div class="container mt-5 pt-3" style="position: relative;">
                
                <!-- Proyectos Normal -->
                <div class="d-lg-block d-none">
                    <div class="row">
                        <div class="col-lg-6 mb-3" style="z-index: 9;">
                            <p class="colorAzul fuenteGruesa fuentePequena sinEspacio">Plataforma Web</p>
                            <h3 class="text-light fuenteGruesa fuenteSemiGrande sinEspacio">Firmante</h3>
                            <div class="text-white p-3 fondoTransparente bordeRedondo cardProyectos mt-5">
                                <p class="fuenteMedia">Sistema de Firma Electrónica Avanzada para distintos tipos de documentos, las firmas pueden ser pagadas a través de la integración con WebPay
                                    y puedes asignar multiples cantidades de firmantes para cada documento.
                                </p>
                                <div class="d-flex justify-content-center">
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Laravel">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/laravel.png" alt="Logo Laravel">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="PHP">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/php.png" alt="Logo PHP">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="HTML">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/html.webp" alt="Logo Html">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="CSS">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/css.png" alt="Logo CSS">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="JavaScript">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/js.png" alt="Logo JavaScript">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="MySQL">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/mysql.png" alt="Logo MySQL">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 divSombreado" style="z-index: 1;">
                            <a class="w-100" target="_blank" href="https://www.firmante.cl/">
                                <img class="w-100 imgSobreada" src="img/proyectos/firmante-zoom.png" style="width: 100% !important;" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row mt-5 pt-5">
                        <div class="col-lg-6 divSombreado" style="z-index: 1;">
                            <a target="_blank" href="https://apkcombo.app/es/direccion-cumbre/com.direccioncumbre/">
                                <img class="w-100 imgSobreada" src="img/proyectos/direccion.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6" style="z-index: 9; position: relative;">
                            <p class="colorAzul fuenteGruesa fuentePequena sinEspacio text-end">Aplicación Móvil</p>
                            <h3 class="text-light fuenteGruesa fuenteSemiGrande sinEspacio text-end">Dirección Cumbre</h3>
                            <div class="text-white p-3 fondoTransparente bordeRedondo cardProyectosDerecha mt-5">
                                <p class="fuenteMedia">
                                    Aplicación móvil con diferentes Indicadores como Eficiencia, Meta diaria, Cierre, etc.
                                    Es fin era la toma de decisiones estratégicas en base a los datos que se muestran en la app.
                                </p>
                                <div class="d-flex justify-content-center">
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="React Native">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/react.png" alt="Logo Html">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Laravel">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/laravel.png" alt="Logo Laravel">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="PHP">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/php.png" alt="Logo PHP">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="SQLServer">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/sqlserver.png" alt="Logo SQLServer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 pt-5">
                        <div class="col-lg-6" style="z-index: 9;">
                            <p class="colorAzul fuenteGruesa fuentePequena sinEspacio">Página Web</p>
                            <h3 class="text-light fuenteGruesa fuenteSemiGrande sinEspacio">Centro Odontológico Padre Mariano</h3>
                            <div class="text-white p-3 fondoTransparente bordeRedondo cardProyectos mt-5">
                                <p class="fuenteMedia">
                                    Página web completa de Centro Odontológico Padre Mariano, la cual cuenta con manejo de leads por parte de contact center, formularios, promociones, convenios, etc.
                                </p>
                                <div class="d-flex justify-content-center">
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="PHP">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/php.png" alt="Logo PHP">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="HTML">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/html.webp" alt="Logo Html">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="CSS">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/css.png" alt="Logo CSS">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="JavaScript">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/js.png" alt="Logo JavaScript">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="MySQL">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/mysql.png" alt="Logo MySQL">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 divSombreado" style="z-index: 1;">
                            <a target="_blank" href="https://www.padremariano.com/">
                                <img class="w-100 imgSobreada" src="img/proyectos/copm.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row mt-5 pt-5">
                        <div class="col-lg-6 divSombreado" style="z-index: 1;">
                            <a target="_blank" href="https://www.expresstaste.cl/">
                                <img class="w-100 imgSobreada" src="img/proyectos/expresstaste.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6" style="z-index: 9; position: relative;">
                            <p class="colorAzul fuenteGruesa fuentePequena sinEspacio text-end">Sistema Web & Aplicación Móvil</p>
                            <h3 class="text-light fuenteGruesa fuenteSemiGrande sinEspacio text-end">ExpressTaste</h3>
                            <div class="text-white p-3 fondoTransparente bordeRedondo cardProyectosDerecha mt-5">
                                <p class="fuenteMedia">
                                    SaaS que permite la creación de tu menú en linea, para que los clientes puedan pedir a través de la app, el pedidos pagados llegan directamente al visor de la cocina.
                                </p>
                                <div class="d-flex justify-content-center">
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Python">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/python.png" alt="Logo Python">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Django">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/django.png" alt="Logo Django">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Ionic">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/ionic.png" alt="Logo Ionic">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="HTML">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/html.webp" alt="Logo Html">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="CSS">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/css.png" alt="Logo CSS">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="JavaScript">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/js.png" alt="Logo JavaScript">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="MySQL">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/mysql.png" alt="Logo MySQL">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 pt-5">
                        <div class="col-lg-6" style="z-index: 9;">
                            <p class="colorAzul fuenteGruesa fuentePequena sinEspacio">Plataforma Web</p>
                            <h3 class="text-light fuenteGruesa fuenteSemiGrande sinEspacio">Agenda Portal Ortodoncia</h3>
                            <div class="text-white p-3 fondoTransparente bordeRedondo cardProyectos mt-5">
                                <p class="fuenteMedia">
                                    Agenda web para Portal de Ortodoncia de Chile, los pacientes pueden reservar con su especialista de preferencia o alguno disponible en el horario pretendido, además de poder confirmar y anular por medio de la plataforma.
                                </p>
                                <div class="d-flex justify-content-center">
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="PHP">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/php.png" alt="Logo PHP">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="HTML">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/html.webp" alt="Logo Html">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="CSS">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/css.png" alt="Logo CSS">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="JavaScript">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/js.png" alt="Logo JavaScript">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="SQLServer">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/sqlserver.png" alt="Logo SQLServer">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 divSombreado" style="z-index: 1;">
                            <a target="_blank" href="https://agenda.portalortodoncia.cl/">
                                <img class="w-100 imgSobreada" src="img/proyectos/portal.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Fin Proyectos Normal -->

                <!-- Proyectos Responsivo -->
                <div class="d-block d-lg-none">
                    <div class="row">
                        <div class="col-lg-6 mb-3" style="z-index: 9;">
                            <p class="colorAzul fuenteGruesa fuentePequena sinEspacio">Plataforma Web</p>
                            <h3 class="text-light fuenteGruesa fuenteSemiGrande sinEspacio">Firmante</h3>
                            <a class="w-100" target="_blank" href="https://www.firmante.cl/">
                                <img class="w-100 mt-4 imgSobreada" src="img/proyectos/firmante-zoom.png" style="width: 100% !important;" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 divSombreado" style="z-index: 1;">
                            <div class="text-white p-3 fondoTransparente bordeRedondo cardProyectos">
                                <p class="fuenteMedia">Sistema de Firma Electrónica Avanzada para distintos tipos de documentos, las firmas pueden ser pagadas a través de la integración con WebPay
                                    y puedes asignar multiples cantidades de firmantes para cada documento.
                                </p>
                                <div class="d-flex justify-content-center">
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Laravel">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/laravel.png" alt="Logo Laravel">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="PHP">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/php.png" alt="Logo PHP">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="HTML">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/html.webp" alt="Logo Html">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="CSS">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/css.png" alt="Logo CSS">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="JavaScript">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/js.png" alt="Logo JavaScript">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="MySQL">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/mysql.png" alt="Logo MySQL">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 pt-4">
                        <div class="col-lg-6 divSombreado mb-3" style="z-index: 1;">
                            <p class="colorAzul fuenteGruesa fuentePequena sinEspacio text-end">Aplicación Móvil</p>
                            <h3 class="text-light fuenteGruesa fuenteSemiGrande sinEspacio text-end">Dirección Cumbre</h3>
                            <a target="_blank" href="https://apkcombo.app/es/direccion-cumbre/com.direccioncumbre/">
                                <img class="w-100 imgSobreada mt-4" src="img/proyectos/direccion.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6" style="z-index: 9; position: relative;">
                            <div class="text-white p-3 fondoTransparente bordeRedondo cardProyectosDerecha">
                                <p class="fuenteMedia">
                                    Aplicación móvil con diferentes Indicadores como Eficiencia, Meta diaria, Cierre, etc.
                                    Su fin es la toma de decisiones estratégicas en base a los datos que se muestran en la app.
                                </p>
                                <div class="d-flex justify-content-center">
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="React Native">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/react.png" alt="Logo Html">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Laravel">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/laravel.png" alt="Logo Laravel">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="PHP">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/php.png" alt="Logo PHP">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="SQLServer">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/sqlserver.png" alt="Logo SQLServer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 pt-4">
                        <div class="col-lg-6 mb-3" style="z-index: 9;">
                            <p class="colorAzul fuenteGruesa fuentePequena sinEspacio">Página Web</p>
                            <h3 class="text-light fuenteGruesa fuenteSemiGrande sinEspacio">Centro Odontológico Padre Mariano</h3>
                            <a target="_blank" href="https://www.padremariano.com/">
                                <img class="w-100 imgSobreada mt-4" src="img/proyectos/copm.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 divSombreado" style="z-index: 1;">
                            <div class="text-white p-3 fondoTransparente bordeRedondo cardProyectos">
                                <p class="fuenteMedia">
                                    Página web completa de Centro Odontológico Padre Mariano, la cual cuenta con manejo de leads por parte de contact center, formularios, promociones, convenios, etc.
                                </p>
                                <div class="d-flex justify-content-center">
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="PHP">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/php.png" alt="Logo PHP">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="HTML">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/html.webp" alt="Logo Html">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="CSS">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/css.png" alt="Logo CSS">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="JavaScript">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/js.png" alt="Logo JavaScript">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="MySQL">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/mysql.png" alt="Logo MySQL">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 pt-4">
                        <div class="col-lg-6 divSombreado mb-3" style="z-index: 1;">
                            <p class="colorAzul fuenteGruesa fuentePequena sinEspacio text-end">Sistema Web & Aplicación Móvil</p>
                            <h3 class="text-light fuenteGruesa fuenteSemiGrande sinEspacio text-end">ExpressTaste</h3>
                            <a target="_blank" href="https://www.expresstaste.cl/">
                                <img class="w-100 imgSobreada mt-4" src="img/proyectos/expresstaste.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6" style="z-index: 9; position: relative;">
                            <div class="text-white p-3 fondoTransparente bordeRedondo cardProyectosDerecha">
                                <p class="fuenteMedia">
                                    SaaS que permite la creación de tu menú en linea, para que los clientes puedan pedir a través de la app, el pedidos pagados llegan directamente al visor de la cocina.
                                </p>
                                <div class="d-flex justify-content-center">
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Python">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/python.png" alt="Logo Python">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Django">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/django.png" alt="Logo Django">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Ionic">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/ionic.png" alt="Logo Ionic">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="HTML">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/html.webp" alt="Logo Html">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="CSS">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/css.png" alt="Logo CSS">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="JavaScript">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/js.png" alt="Logo JavaScript">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="MySQL">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/mysql.png" alt="Logo MySQL">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 pt-4">
                        <div class="col-lg-6 mb-3" style="z-index: 9;">
                            <p class="colorAzul fuenteGruesa fuentePequena sinEspacio">Plataforma Web</p>
                            <h3 class="text-light fuenteGruesa fuenteSemiGrande sinEspacio">Agenda Portal Ortodoncia</h3>
                            <a target="_blank" href="https://agenda.portalortodoncia.cl/">
                                <img class="w-100 imgSobreada mt-5" src="img/proyectos/portal.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 divSombreado" style="z-index: 1;">
                            <div class="text-white p-3 fondoTransparente bordeRedondo cardProyectos">
                                <p class="fuenteMedia">
                                    Agenda web para Portal de Ortodoncia de Chile, los pacientes pueden reservar con su especialista de preferencia o alguno disponible en el horario pretendido, además de poder confirmar y anular por medio de la plataforma.
                                </p>
                                <div class="d-flex justify-content-center">
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="PHP">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/php.png" alt="Logo PHP">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="HTML">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/html.webp" alt="Logo Html">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="CSS">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/css.png" alt="Logo CSS">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="JavaScript">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/js.png" alt="Logo JavaScript">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="SQLServer">
                                        <img class="anchoLogoProyecto me-1" src="img/tecnologia/sqlserver.png" alt="Logo SQLServer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Proyectos Responsivo -->
            </div>
        </div>
        <div class="pt-5 mt-5 pb-5 fondoTransparente" id="contacto">
            <!-- <h2 class="fuenteGruesa text-light text-center">Contacto</h2> -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="text-light fuenteGruesa mb-4">¿Tienes un proyecto en mente? <span class="colorAzul">¡Hablemos!</span></h3>
                        <p class="text-light fuenteGruesa">
                            Estoy aquí para ayudarte a convertir tus ideas en soluciones reales. Ya sea que necesites desarrollar un sitio web, una aplicación o implementar nuevas tecnologías, estaré encantado de escucharte.
                        </p>
                        <p class="text-light fuenteGruesa">
                            Déjame un mensaje y estaré en contacto contigo lo antes posible. <span class="colorAzul">¡Hagamos que tu proyecto cobre vida juntos!</span>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="text-white text-center fuenteGruesa">Medios de <span class="colorAzul">Contacto</span></h2>
                        <div class="d-flex fuenteGrande justify-content-center align-items-center">
                            <a target="_blank" class="colorAzul" href="https://www.linkedin.com/in/kevin-andres-martinez">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                            <a class="colorAzul ms-5" href="mailto:kevinandres.martinez.mella@gmail.com">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fondoAzulMasOscuro mt-5 pt-5 pb-5">
            <div class="d-flex justify-content-center ">
                <div class="logoPrincipal">
                    <img width="30" src="img/km-logo.png" alt="">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <span class="mt-2 colorAzulOscuro ms-2 text-white text-center">
                    Kevin Martínez · Desarrollador
                    <br>
                    <?php
                        echo date('Y');
                    ?>
                </span>
            </div>
        </div>
    </div>
</body>
</html>
<!-- Bootstrap5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Tooltip -->
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
<script src="js/main.js"></script>
<script>
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/service-worker.js')
      .then((registration) => {
        console.log('Service Worker registrado:', registration);
      })
      .catch((error) => {
        console.log('Error al registrar el Service Worker:', error);
      });
  }
</script>