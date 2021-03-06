<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php bloginfo("template_directory"); ?>/test_css.css" rel="stylesheet">
    <title>Тестовый шаблон</title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo("template_directory"); ?>/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo("template_directory"); ?>/test_media.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="container-weight">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="sr-only">Навигация</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-left" href="#">
                    <span class="name">Салон</span>
                        <br><span class="template">Шаблон</span>
                </a>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Проект</a></li>
                        <li><a href="#services">Услуги</a></li>
                        <li><a href="#">Цены</a></li>
                        <li><a href="#contacts">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div id="carousel" class="carousel slide">
        <div class="container-weight">
            <ol class="carousel-indicators">
                <li class="active" data-target="#carousel" data-slide-to="0"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php bloginfo("template_directory"); ?>/img/ios_jpg.jpg" alt="nothingnothing">
                    <div class="carousel-caption">
                        <h3>IOS devices</h3>
                        <p>Ремонт, ПО и многое другое в нашем сервис центре.</p>
                        <div class="button">
                            <button type="button" class="btn">Подробнее</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php bloginfo("template_directory"); ?>/img/android_jpeg.jpg" alt="nothingnothing">
                    <div class="carousel-caption">
                        <h3>Android</h3>
                        <p>Ремонт, ПО и многое другое в нашем сервис центре.</p>
                        <div class="button">
                            <button type="button" class="btn">Подробнее</button>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php bloginfo("template_directory"); ?>/img/windows_jpeg.jpg" alt="nothing">
                    <div class="carousel-caption">
                        <h3>Windows</h3>
                        <p>Ремонт, ПО и многое другое в нашем сервис центре.</p>
                        <div class="button">
                            <button type="button" class="btn">Подробнее</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="cotrl" class="control">
            <a href="#carousel" class="left carousel-control" data-slide="prev"></a>
            <a href="#carousel" class="right carousel-control" data-slide="prev"></a>
        </div>
    </div>




    <section id="service" class="s_service">
        <div class="container-fluid">
            <div class="container-weight">
                <div class="row" data-columns>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="s_descr">
                            <h2 class="ab" name="services">Наши услуги</h2>
                        </div>
                    </div>
                </div>
                <div class="section_content">
                    <div class="row" data-columns>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="ios services">
                                <span><svg
   
   xmlns="http://www.w3.org/2000/svg"
   
   id="svg2"
   version="1.1"
   inkscape:version="0.91 r13725"
   width="100"
   height="100"
   viewBox="0 0 93.75 93.75"
   sodipodi:docname="ios.svg">
  <metadata
     id="metadata8">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <defs
     id="defs6" />
  <sodipodi:namedview
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1"
     objecttolerance="10"
     gridtolerance="10"
     guidetolerance="10"
     inkscape:pageopacity="0"
     inkscape:pageshadow="2"
     inkscape:window-width="640"
     inkscape:window-height="480"
     id="namedview4"
     showgrid="false"
     inkscape:zoom="2.5173333"
     inkscape:cx="46.875"
     inkscape:cy="46.875"
     inkscape:window-x="248"
     inkscape:window-y="206"
     inkscape:window-maximized="0"
     inkscape:current-layer="svg2" />
  <path
     style="fill:#2a2a2a"
     d="M 37.195203,90.310311 C 29.044557,88.539716 22.466929,84.775613 15.761454,78.044671 5.7873593,68.032691 0.99893732,53.914724 3.1084003,40.738978 6.6654943,18.521307 25.054949,2.6694916 47.272245,2.6694916 c 17.35773,0 32.309968,9.3038494 39.880162,24.8149454 8.502704,17.42179 5.31118,36.7292 -8.369371,50.631229 -6.495992,6.601159 -14.679792,10.992929 -23.479845,12.600271 -7.000698,1.278686 -10.740122,1.194922 -18.107988,-0.405626 z M 62.694074,79.704069 C 73.675993,74.565009 80.746359,65.252206 83.015411,52.937618 86.601871,33.473201 73.454158,15.076522 53.094197,11.070944 38.575929,8.2146487 21.911269,16.606607 15.008243,30.250193 4.3973793,51.222196 15.88971,76.59889 38.596548,82.336505 c 6.61867,1.672421 17.419671,0.49251 24.097526,-2.632436 z M 35.929447,67.485221 C 34.612322,66.44917 32.11382,62.937885 30.37722,59.682367 27.75386,54.76448 27.21099,52.732463 27.167881,47.669491 27.104861,40.267716 29.244962,36.660899 35.495088,33.635265 l 4.147256,-2.007652 3.781887,1.929375 3.781887,1.929375 3.732177,-1.945319 c 3.539156,-1.844711 3.898621,-1.866335 6.950515,-0.418116 1.770087,0.83996 4.189507,2.560961 5.376488,3.824445 l 2.158148,2.297243 -2.5131,2.623112 c -3.496185,3.64923 -3.409027,7.895743 0.217082,10.576642 2.674442,1.9773 2.703894,2.09302 1.442566,5.668006 -1.732584,4.910665 -5.801524,10.084594 -8.454489,10.750446 -1.286721,0.322946 -3.331187,-0.145328 -5.038999,-1.154158 -2.518056,-1.487451 -3.250517,-1.544503 -5.917151,-0.460883 -5.272614,2.142591 -6.75928,2.180837 -9.229907,0.23744 z m 9.891244,-36.456355 c 1.232928,-5.071936 9.828144,-11.017299 9.148574,-6.328125 -0.481079,3.319538 -2.409332,6.22003 -5.039187,7.579982 -3.871185,2.001867 -4.829372,1.709972 -4.109387,-1.251857 z"
     id="path3338"
     inkscape:connector-curvature="0" />
</svg></span>
                                <div class="caption">
                                    <h3 class="center"><a href="#">IOS</a></h3>
                                    <p class="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse suscipit sequi obcaecati natus</p>
                                    <div class="button">
                                        <button type="button" class="btn">Подробнее</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="android services">
                                <span><svg
   
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   id="svg2"
   version="1.1"
   inkscape:version="0.91 r13725"
   width="100"
   height="100"
   viewBox="0 0 93.75 93.75"
   sodipodi:docname="android.svg">
  <metadata
     id="metadata8">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <defs
     id="defs6" />
  <sodipodi:namedview
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1"
     objecttolerance="10"
     gridtolerance="10"
     guidetolerance="10"
     inkscape:pageopacity="0"
     inkscape:pageshadow="2"
     inkscape:window-width="640"
     inkscape:window-height="480"
     id="namedview4"
     showgrid="false"
     inkscape:zoom="2.5173333"
     inkscape:cx="46.875"
     inkscape:cy="46.875"
     inkscape:window-x="248"
     inkscape:window-y="206"
     inkscape:window-maximized="0"
     inkscape:current-layer="svg2" />
  <path
     style="fill:#2b2b2b"
     d="M 31.930373,90.012283 C 16.767185,84.542451 5.4413093,71.832449 2.1801833,56.626345 -0.40310568,44.580882 3.0725373,29.250869 10.52012,19.841404 15.034494,14.137829 23.704786,7.6512666 30.355643,5.0017214 38.227985,1.865566 51.696965,1.4402867 60.308524,4.0559675 73.162639,7.9602847 84.717039,18.634245 89.508352,31.030783 c 3.163872,8.185864 3.584071,20.70497 0.982447,29.270251 -3.904111,12.853436 -14.552031,24.38715 -26.977089,29.221296 -4.09426,1.592931 -7.922773,2.210319 -15.303963,2.467928 -8.643369,0.301659 -10.628532,0.06046 -16.279374,-1.977975 z m 27.029906,-7.756246 c 9.524312,-3.314504 17.597558,-10.616963 21.911586,-19.819592 2.204345,-4.702281 2.494132,-6.46417 2.494132,-15.1642 0,-8.717881 -0.287371,-10.456873 -2.512553,-15.204436 C 72.022631,13.226723 49.085873,5.0457792 30.520068,14.115205 c -6.869175,3.355603 -14.074405,10.63554 -17.506772,17.68829 -2.494076,5.124773 -2.737523,6.500399 -2.737523,15.46875 0,8.968351 0.243447,10.343978 2.737523,15.46875 5.32012,10.931663 16.704606,19.482747 28.031042,21.054599 5.846089,0.811304 12.903311,0.20486 17.915941,-1.539557 z m -19.988458,-4.92633 c -1.729298,-0.438873 -4.787892,-1.539163 -6.796875,-2.445088 l -3.652699,-1.647138 0,-12.045117 0,-12.045119 18.28125,0 18.28125,0 0,12.072053 0,12.072052 -4.921875,2.133008 c -5.377977,2.33067 -15.816822,3.269257 -21.191051,1.905349 z M 20.787872,66.046487 c -3.157712,-3.693138 -3.515625,-4.648131 -3.515625,-9.380491 0,-5.413853 1.070179,-7.518751 3.822708,-7.518751 3.071602,0 3.756148,2.325575 3.478023,11.815726 l -0.269481,9.195256 -3.515625,-4.11174 z M 69.06951,60.496918 c 0.194476,-8.098709 0.51102,-9.918404 1.874612,-10.776455 3.102478,-1.95226 4.890363,0.378055 5.20069,6.778545 0.270981,5.588951 0.172194,5.862847 -3.515237,9.746272 l -3.794052,3.995715 0.233987,-9.744077 z M 28.997676,44.470552 c -0.991957,-1.605019 2.956021,-9.094161 5.96798,-11.320998 l 2.886976,-2.134433 -1.883277,-3.047207 c -1.065893,-1.724651 -1.497861,-3.285408 -0.995265,-3.596029 0.488407,-0.301852 1.767254,0.873821 2.841883,2.612607 1.856564,3.003984 2.143998,3.126661 5.771559,2.463315 2.099728,-0.383962 5.357956,-0.350727 7.240506,0.07386 1.882551,0.424584 3.462016,0.689814 3.509923,0.5894 1.368483,-2.868341 4.080628,-6.264995 4.482824,-5.614227 0.296231,0.479309 -0.194568,2.083584 -1.090661,3.565055 l -1.629261,2.693582 3.535862,3.19444 c 2.959681,2.673893 5.418882,7.528414 5.442793,10.744205 0.0081,1.079962 -35.411855,0.860494 -36.081842,-0.223568 z m 11.243321,-7.042057 c 0,-2.792004 -3.659621,-2.513064 -4.059413,0.309413 -0.25746,1.817638 0.05737,2.13246 1.875,1.875 1.456275,-0.206275 2.184413,-0.934413 2.184413,-2.184413 z m 17.596274,1.171875 c 0.66495,-1.906279 -0.329553,-3.515625 -2.172498,-3.515625 -2.066872,0 -3.126658,1.461884 -2.411274,3.326144 0.639465,1.666418 4.019843,1.806153 4.583772,0.189481 z"
     id="path3351"
     inkscape:connector-curvature="0" />
</svg>
</span>
                                <div class="caption">
                                    <h3 class="center"><a href="#">ANDROID</a></h3>
                                    <p class="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse suscipit sequi obcaecati natus</p>
                                    <div class="button">
                                        <button type="button" class="btn">Подробнее</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="windows services">
                                <span><svg
  
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   id="svg2"
   version="1.1"
   inkscape:version="0.91 r13725"
   width="100"
   height="100"
   viewBox="0 0 93.75 93.75"
   sodipodi:docname="windows.svg">
  <metadata
     id="metadata8">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <defs
     id="defs6" />
  <sodipodi:namedview
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1"
     objecttolerance="10"
     gridtolerance="10"
     guidetolerance="10"
     inkscape:pageopacity="0"
     inkscape:pageshadow="2"
     inkscape:window-width="640"
     inkscape:window-height="480"
     id="namedview4"
     showgrid="false"
     inkscape:zoom="2.5173333"
     inkscape:cx="46.875"
     inkscape:cy="46.875"
     inkscape:window-x="248"
     inkscape:window-y="206"
     inkscape:window-maximized="0"
     inkscape:current-layer="svg2" />
  <path
     style="fill:#292929"
     d="M 36.80874,90.312511 C 21.392091,86.96312 8.3620756,75.024757 3.7163682,59.992616 -5.1745048,31.224362 16.324482,2.6694917 46.875,2.6694917 c 20.029943,0 36.793847,11.9438743 43.052066,30.6735523 3.688052,11.037648 1.994988,26.435525 -3.983264,36.226509 -6.12794,10.03614 -17.884455,18.336137 -29.440858,20.78499 -7.702786,1.632254 -12.030276,1.623019 -19.694204,-0.04203 z M 58.260623,81.434963 C 73.460159,76.691193 83.669396,62.707386 83.596417,46.731992 83.542219,34.8675 78.571799,24.982524 69.185977,18.073076 62.05283,12.821952 55.692718,10.728162 46.875,10.728162 c -8.817718,0 -15.177831,2.09379 -22.310978,7.344914 C 15.178201,24.982524 10.207781,34.8675 10.153582,46.731992 10.040014,71.592865 34.125614,88.967491 58.260623,81.434963 Z M 53.90625,67.734598 C 41.981709,65.411365 43.125,66.447467 43.125,57.964131 l 0,-7.482139 9.375,0 9.375,0 0,9.375 c 0,5.15625 -0.316406,9.325762 -0.703125,9.265582 -0.386719,-0.06018 -3.65625,-0.68477 -7.265625,-1.387976 z m -22.5,-4.014434 -6.5625,-1.552584 -0.27911,-5.842794 -0.27911,-5.842794 7.544735,0 7.544735,0 0,7.5 c 0,4.125 -0.316406,7.45292 -0.703125,7.395378 -0.386719,-0.05754 -3.65625,-0.803286 -7.265625,-1.657206 z m -7.03125,-22.49721 0,-5.509037 7.5,-1.883508 7.5,-1.883507 0,7.392545 0,7.392545 -7.5,0 -7.5,0 0,-5.509038 z m 18.75,-1.85872 0,-7.367757 9.375,-1.869614 9.375,-1.869613 0,9.237371 0,9.237371 -9.375,0 -9.375,0 0,-7.367758 z"
     id="path3364"
     inkscape:connector-curvature="0" />
</svg>
</span>
                                <div class="caption">
                                    <h3 class="center"><a href="#">WINDOWS</a></h3>
                                    <p class="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse suscipit sequi obcaecati natus</p>
                                    <div class="button">
                                        <button type="button" class="btn">Подробнее</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="about" class="s_about">
        <div class="container-fluid">
            <div class="container-weight">
                <div class="row" data-columns>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="s_descr">

                            <h2 class="ab" name="contacts">Про нас</h2>
                        </div>
                    </div>
                </div>
                <div class="section_content">
                    <div class="row" data-columns>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <!--<div class="task_maps">-->
                            <div class="test_task">
                                <h3>Тестовое задание</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem omnis magnam dolorum distinctio necessitatibus, magni? Enim architecto exercitationem totam, dolorum tempora rerum repudiandae possimus laborum, nulla explicabo reiciendis atque in. ipsum dolor sit amet, consectetur adipisicing elit. Officiis eos quod fugit beatae dolores accusamus? Odit similique minus, in fuga ad, odio placeat deleniti vero maiores deserunt nihil, incidunt obcaecati. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum officia recusandae magni delectus ex nostrum, debitis non excepturi doloribus, id consequuntur similique error temporibus facere fugit tempora iusto, cumque ut.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="maps">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10582.019952838418!2d34.97160941362381!3d48.46602658825432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe3ba1e983453%3A0x8fe5288c21b22796!2z0LLRg9C7LiDQkNCy0ZbQsNGG0ZbQudC90LA!5e0!3m2!1suk!2sua!4v1460872476890" width="450" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-columns>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="skills">
                                <a href="#" class="skills_name"><h3>Умения</h3></a>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" style="min-width: 86%">HTML/HTML5</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" style="min-width: 80%">CSS/CSS3</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" style="min-width: 55%">PHOTOSHOP/ILLUSTRATOR</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" style="min-width: 70%">MOBILE DESIGN/RESPONSIVE DESIGN</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div id="form" class="forms">
                                <form id="contactform" name="contact" method="post" action="#">
                                    <input type="text" name="name" id="name" class="txt" tabindex="1" placeholder="Ваше имя" required>
                                    <input type="email" name="email" id="email" class="txt" tabindex="2" placeholder="E-mail Адрес" required>
                                    <input type="text" name="subject" id="subject" class="txt" tabindex="3" placeholder="Телефон" required>
                                    <textarea type="text" name="message" id="message" class="txtarea" tabindex="4" placeholder="Сообщение" required></textarea>
                                    <input type="submit" value="Отправить" class="btn">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>



    <footer class="container-fluid">
        <div class="container-weight">
            <div class="main_footer">
                <span class="copy">&copy; 2016 Антон Чернец</span>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo("template_directory"); ?>/bootstrap.js"></script>
</body>

</html>

