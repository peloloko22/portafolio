<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - iPortfolio Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="{{asset('assets/img/perfil1.jpeg')}}" alt="" class="img-content rounded-circle">
    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename">Martin Sanchez</h1>
    </a>

    <div class="social-links text-center">
      <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
        <li class="dropdown"><a href="#"><i class="bi bi-menu-button navicon"></i> <span>Dropdown</span> <i
              class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Dropdown 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                  class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/perfil4.jpeg" alt="" data-aos="fade-in" class="" style="object-fit: contain">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Martin Sanchez</h2>
        <p>yo Soy <span class="typed" data-typed-items="Full Stack Developer, Freelancer">Designer</span><span
            class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
            class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Acerca de mi</h2>
        <p>Soy desarrollador web apasionado por crear soluciones digitales modernas y funcionales. Trabajo con
          tecnologías como HTML, CSS, JavaScript, PHP y frameworks actuales para construir aplicaciones escalables y
          atractivas. Me interesa el diseño limpio, la optimización del rendimiento y la experiencia del usuario. A
          través de mis proyectos busco aprender, innovar y aportar valor. Estoy abierto a colaborar en desafíos que
          impulsen mi crecimiento profesional.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/perfil6.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Bases de Datos (MySQL) &amp; Web Developer.</h2>
            <p class="fst-italic py-3">
              Me encanta la tecnología y todo lo relacionado con el desarrollo web. Disfruto transformar ideas en
              proyectos útiles y atractivos, siempre buscando aprender algo nuevo en el camino. Soy curioso,
              perseverante y me gusta trabajar en equipo para crear experiencias digitales que realmente marquen la
              diferencia.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Cumpleaños:</strong> <span>27 Sep 1994</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Cel:</strong> <span>+543856887005</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Vivo en:</strong> <span>Argentina, Santiago del
                      Estero</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span>30</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Grado:</strong> <span>Junior</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>martindgic@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Disponible</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              Actualmente me encuentro en constante crecimiento, explorando nuevas plataformas y fortaleciendo mis
              habilidades en desarrollo web. Trabajo con Laravel para crear aplicaciones sólidas y escalables, mientras
              sigo aprendiendo y ampliando mis conocimientos en tecnologías que me permitan aportar soluciones
              innovadoras y de calidad.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Clientes Satisfechos</strong> <span>Sistemas Entregados</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Proyectos</strong> <span>Desarrollos personales</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Horas de Soporte</strong> <span>Disponible para soluciones y Trabajos las 24 hs</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Trabajos de Alta Complejidad</strong> <span>Sistemas Modernos y Automatizacion</span></p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Habilidades</h2>
        <p>"Cada línea de código que escribes es un paso más hacia tu maestría. Tus habilidades no son un destino, sino
          un viaje constante de aprendizaje."</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>JavaScript</span> <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>PHP Laravel</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Manejo IA</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>MySQL</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div><!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resumen</h2>
        <p>A lo largo de mi trayectoria he desarrollado una sólida base en tecnologías web como HTML, CSS, JavaScript y
          MySQL, complementadas con experiencia en PHP y Laravel para construir aplicaciones robustas. Además, integro
          herramientas de Inteligencia Artificial en mis proyectos, lo que me permite crear soluciones innovadoras y
          eficientes, siempre en constante evolución y aprendizaje..</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Resumen</h3>

            <div class="resume-item pb-0">
              <h4>Martin Sanchez</h4>
              <p><em>Desarrollador web apasionado y en crecimiento, con más de 2 años de experiencia creando y
                  optimizando aplicaciones web. Especializado en Laravel y SQL, enfocado en construir soluciones
                  escalables y eficientes desde el concepto hasta la entrega final. Siempre en aprendizaje constante
                  para ofrecer código limpio, mantenible y de alta calidad.</em></p>
              <ul>
                <li>📍 Santiago del Estero, Argentina</li>
                <li>📞 +54 3878 0875</li>
                <li>📧 martindgic@gmail.com</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Educación</h3>
            <div class="resume-item">
              <h4>Autodidacta &amp; Formación Continua</h4>
              <h5>2015 - Actualidad</h5>
              <p><em>Capacitaciones externas, cursos especializados y diplomatura en ciberseguridad</em></p>
              <p>Formación constante en desarrollo web, con foco en Laravel, SQL y nuevas tecnologías.
                Experiencia en el desarrollo de sistemas para entidades estatales, aplicando buenas prácticas
                y seguridad en cada proyecto.</p>
            </div><!-- Fin Resume Item -->

            <div class="resume-item">
              <h4>Formación y Especializaciones</h4>
              <h5>2024 - 2025</h5>
              <p><em>Diplomatura en Ciberseguridad, cursos avanzados y formación en buenas prácticas</em></p>
              <p>He completado una diplomatura en ciberseguridad (2025), donde aprendí sobre buenas prácticas, análisis
                de vulnerabilidades y testing de aplicaciones.
                Ese mismo año realicé un curso avanzado de Laravel, profundizando en el desarrollo de aplicaciones
                escalables, APIs y autenticación.
                En 2024, reforcé mis conocimientos en MySQL y JavaScript para la creación de proyectos dinámicos y
                optimizados, además de perfeccionar HTML semántico y accesible,
                asegurando estructuras limpias y un mejor rendimiento en cada proyecto.</p>
            </div><!-- Fin Resume Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Experiencia Profesional</h3>
            <div class="resume-item">
              <h4>Desarrollador Web Freelance</h4>
              <h5>2024 - 2025</h5>
              <p><em>Santiago del Estero, Argentina</em></p>
              <ul>
                <li>Desarrollo de un sistema de cobro, manejo y control de stock con login y gestión de roles para
                  negocios locales (2025).</li>
                <li>Implementación de sistemas con formularios de carga para entidades estatales (2024 y 2025),
                  asegurando organización y trazabilidad de datos.</li>
                <li>Creación de un sistema de atención, control de turnos y panel de gestión de clientes para una
                  veterinaria (2025).</li>
                <li>Diseño y desarrollo de una landing page para un gimnasio, optimizada para dispositivos móviles y
                  experiencia de usuario (2024).</li>
                <li>Colaboración en otros proyectos personalizados, priorizando código limpio, seguridad y
                  escalabilidad.</li>
              </ul>
            </div><!-- Fin Resume Item -->
          </div>

          <div class="resume-item">
            <h4>Desarrollador y Administrador de Bases de Datos</h4>
            <h5>2024 - 2025</h5>
            <p><em>Santiago del Estero, Argentina</em></p>
            <ul>
              <li>Gestión y desarrollo de bases de datos MySQL de grandes volúmenes de información, optimizando
                consultas y rendimiento.</li>
              <li>Implementación de relaciones entre tablas, triggers y restricciones para asegurar integridad y
                consistencia de los datos.</li>
              <li>Desarrollo constante de sistemas y proyectos web que requieren estructuras de datos complejas y
                eficientes.</li>
              <li>Análisis de limitaciones y optimización de bases de datos para soportar aplicaciones escalables y de
                alta concurrencia.</li>
              <li>Integración de bases de datos con aplicaciones Laravel y paneles de gestión, garantizando seguridad y
                mantenimiento continuo.</li>
            </ul>
          </div><!-- Fin Resume Item -->

        </div>

      </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portafolio</h2>
        <p>"Cada línea de código es un acto de creación, cada base de datos un universo ordenado, y cada proyecto un paso hacia la excelencia; el aprendizaje constante transforma el conocimiento en impacto."</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Landing Page</li>
            <li data-filter=".filter-product">Sistemas</li>

          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portafolio/veterinaria1.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Veterinaria</h4>
                  <p>seccion de inicio</p>
                  <a href="assets/img/portafolio/veterinaria1.png" title="App 1" data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portafolio/negocio1.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Sistema 1</h4>
                  <p>Seccion de Cobro</p>
                  <a href="assets/img/portafolio/negocio1.png" title="Product 1"
                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->





            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portafolio/veterinaria2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>veterinaria2</h4>
                  <p>seccion servicios</p>
                  <a href="assets/img/portafolio/veterinaria2.png" title="App 2" data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portafolio/negocio2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Negocio2</h4>
                  <p>Seccion de Control de Caja</p>
                  <a href="aassets/img/portafolio/negocio2.png" title="Product 2"
                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->





            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portafolio/veterinaria3.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>veterinaria3</h4>
                  <p>seccion Nosotros</p>
                  <a href="assets/img/portafolio/veterinaria3.png" title="App 3" data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portafolio/gimnasios1.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>gimnasio</h4>
                  <p>seccion inicio</p>
                  <a href="assets/img/portafolio/gimnasios1.png" title="App 4" data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portafolio/gimnasios2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>gimnasio2</h4>
                  <p>seccion Actividades</p>
                  <a href="assets/img/portafolio/gimnasios2.png" title="App 5" data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portafolio/negocio3.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Negocio 3</h4>
                  <p>Seccion balances</p>
                  <a href="assets/img/portafolio/negocio3.png" title="Product 3"
                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portafolio/negocio4.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Negocio 4</h4>
                  <p>Seccion control de stock</p>
                  <a href="assets/img/portafolio/negocio4.png" title="Product 4"
                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portafolio/negocio5.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Negocio 5</h4>
                  <p>Seccion control de proveedores</p>
                  <a href="assets/img/portafolio/negocio5.png" title="Product 5"
                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="{{route('portafolio')}}" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portafolio/negocio6.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Negocio 6</h4>
                  <p>Seccion control Gastos</p>
                  <a href="assets/img/portafolio/negocio6.png" title="Product 6"
                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->






          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Servicios</h2>
        <p>"Transformo ideas en soluciones digitales; cada servicio que ofrezco es un puente entre la necesidad del cliente y la eficiencia tecnológica, construyendo experiencias sólidas y escalables."</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Portafolios Personales</a></h4>
              <p class="description">Maquetado para Perfiles de profecionales de distintas areas, muestra lo que haces y tus servicios de una manera profecional y moderna, Abogados, Contadores, Gestoria.Etc.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Sistemas Crud Formularios</a></h4>
              <p class="description">Maneja tus Encuestas, sistemas de carga y gestion de datos, obten y almacena informacion de tu interes.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Sistema de estadisticas y balances</a></h4>
              <p class="description">Manten el control de tus negocios, y las estadisticas de tu empresa, que nada se te pase por alto, mira su estas creciendo o que debes mejorar</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Landing Page</a></h4>
              <p class="description">Muestra tu negocio, tu restaurant, tus servicios de manera elegante y moderna... no seas un negocio pequeño, crece de manera profecional</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Adaptacion de Ideas</a></h4>
              <p class="description">Tienes ideas en mente, para paginas, bases de datos o proyectos en programacion, no te quedes con las dudas, contactame y concretamos tu sueño</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Base de Datos</a></h4>
              <p class="description">actualizate, deja ese excel viejo que ya no se usa, se re rompe la computadora y pierdes tus datos, almacena y gestiona todo en bases de datos seguras y confiables.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

   
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contacto</h2>
        <p>Necesitas consultar por algun proyecto o pagina, quieres que trabajemos juntos?</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Direccion</h3>
                  <p>Santiago del Estero, Argentina</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Telefono</h3>
                  <p>+54 3856 887005</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>martindgic@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
              data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Tu Nombre</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Tu Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Asunto</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Mensaje</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Enviando</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Su mensaje fue enviado... Gracias!</div>

                  <button type="submit">Enviar Mensaje</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">PortafolioSanchez</strong> <span>All Rights Reserved</span>
        </p>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
          href="https://themewagon.com">ThemeWagon</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>