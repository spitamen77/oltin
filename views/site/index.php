<?php

/* @var $this yii\web\View */

$this->title = 'Oltinko`l tumani hokimligi';
?>
<!-- Asosiy konteyner -->
    <div class="container" id="main_container">
        <!-- Eng yuqoridagi 1-navigatsiya -->
        <nav class="navbar navbar-default" id="navbar_top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar1">
              <ul class="nav navbar-nav">
                <li><a href="#">O`zbekcha <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="#">Ўзбекча</a></li>
                <li><a href="#">Русский</a></li>
                <li class="border_right"><a href="#">English</a></li>
                <li class="border_right"><p class="navbar-text">12:06:32 (GMT+5)  23.09.2016 як</p></li>
              </ul>
              <form class="navbar-form navbar-left border_right" method="get" action="">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">
                    <span class="glyphicon glyphicon-search"></span>
                  </span>
                  <input type="text" name="search" class="form-control" placeholder="Излаш учун матнни киритинг..." aria-describedby="basic-addon1">
                  <span class="input-group-btn">
                    <input class="btn btn-default" type="submit" value="">
                  </span>
                </div>
              </form>
              <ul class="nav navbar-nav">
                <li>
                    <a href="#" id="special">
                     <span class="glyphicon glyphicon-eye-open"></span> Махсус имкониятлар
                    </a>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="thumbnail" id="main_thumbnail">
            <!-- Header boshlanyapti -->
            <header>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="dist/image/bayroq-gerb.png">
                    </div>
                    <div class="col-lg-4">
                        <h1 style="color: #808080; font-family: 'Times New Roman">
                            <small >АНДИЖОН ВИЛОЯТИ</small>
                            ОЛТИНКЎЛ ТУМАНИ ҲОКИМЛИГИ
                        </h1>
                    </div>
                    <div class="col-lg-4">
                        <img src="dist/image/uzbekistan.png">
                    </div>
                </div>
            </header>
            <!-- Header tugadi -->

            <!-- Asosiy menu boshlanyapti -->
            <nav class="navbar navbar-default" style="background: #cccccc;">
                  <div class="container-fluid" style="padding-right: 0; padding-left: 0;">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar2">
                      <ul class="nav navbar-nav" id="menyu">
                        <li class="dropdown changed">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ЎЗБЕКИСТОН</a>
                          <ul class="dropdown-menu" style="">
                            <li><a href="#">ДАВЛАТ РАМЗЛАРИ</a></li>
                            <li><a href="#">ГЕОГРАФИК ЖОЙЛАШУВ</a></li>
                            <li><a href="#">КОНСИТУТСИЯ</a></li>
                            <li><a href="#">БИРИНЧИ ПРЕЗИДЕНТ</a></li>
                            
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">АНДИЖОН ВИЛОЯТИ</a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  ТУМАН ҲОКИМЛИГИ</a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  ЭЛЕКТРОН ҲУКУМАТ</a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  ИНТЕРАКТИВ ҲИЗМАТЛАР</a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                          </ul>
                        </li>
                        <li><a href="">БОҒЛАНИШ</a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            <!-- Asosiy menu tugadi -->
            <!-- CHAP TOMON ELEMENTLARI BOSHLANDI -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                      <div class="panel-heading" id="head">ЯНГИЛИКЛАР</div>
                      <div class="panel-body" id="body" >
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="image-date">
                                    <img src="dist/image/oltinkol.jpg" class="img-thumbnail">   </a>
                                    <div class="date">
                                        <span id="number">6</span> <br> СЕНТЯБРЬ <br> 2016
                                    </div>
                                </div>
                                <div class="news">
                                <p id="sarlavha">ЎЗБЕКИСТОН ПРЕЗИДЕНТЛИГИГА САЙЛОВЛАР БОШЛАНДИ</p>
                                <h5 class="text">&nbsp; &nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</h5>
                                
                            </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row under_hr">
                                    <div class="col-lg-6">
                                        <div class="image-date">
                                            <img src="dist/image/raqqosa.jpg" class="img-thumbnail">    
                                            <div class="date">
                                                <span id="number">6</span> <br> СЕНТЯБРЬ <br> 2016
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="text2">Барча сиёсий партияларга сайловaда иштирок этишга ижозат берилди...</p>
                                    </div>
                                    <img id="rule" src="dist/image/rule.png">
                                </div>
                                <div class="row under_hr">
                                    <div class="col-lg-6">
                                        <div class="image-date">
                                            <img src="dist/image/rio.jpg" class="img-thumbnail">    
                                            <div class="date">
                                                <span id="number">6</span> <br> СЕНТЯБРЬ <br> 2016
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="text1">Рио-де-Жанейро шаҳрида бўлиб ўтган XV ёзги Паралимпия ўйинларида юқори натижаларга эришган спортчи ...</p>
                                    </div>
                                    <img id="rule" src="dist/image/rule.png">
                                </div>
                                <div class="row under_hr">
                                    <div class="col-lg-6">
                                        <div class="image-date">
                                            <img src="dist/image/bayroq-gerb.jpg" class="img-thumbnail">    
                                            <div class="date">
                                                <span id="number">6</span> <br> СЕНТЯБРЬ <br> 2016
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="text1">Ўзбекистон Республикаси Президенти сайловини ўтказувчи округ сайлов комиссиялари..</p>
                                    </div>

                                </div>
                            </div>
                         </div>
                        </div>
            

                    </div>
                    <!-- MY GOV REKLAMASI -->
                            <a href="#">
                                <img class="gov" src="dist/image/my.gov.uz.jpg">
                            </a>

    <!--    M E D I A T E K A    B O SH L A N Y A P T I -->
<p> 
<div class="panel panel-default" >  
    <div class="panel-heading" id="head">МЕДИАТЕКА</div>
        <div class="panel-body" id="body">
            <div class="row">
                            <div class=" col-lg-3"> 
                                <a href="#">
                                     <img src="dist/image/mediateka1.jpg"
                                             class="img-thumbnail">
                                 </a>
                            </div>  
                
                <div class=" col-lg-3"> 
                    <a href="#">
                         <img src="dist/image/mediateka2.jpg"
                                 class="img-thumbnail">
                      </a>
                </div>

                            <div class=" col-lg-3"> 
                                <a href="#">
                                     <img src="dist/image/mediateka3.jpg"
                                             class="img-thumbnail">
                                 </a>
                            </div>      

                <div class=" col-lg-3"> 
                    <a href="#">
                         <img src="dist/image/mediateka4.jpg"
                                 class="img-thumbnail">
                     </a>
                </div>  
    <div class="col-lg-12">
    <p>
                            <div class="row">
                                <div class=" col-lg-3" ">   
                                    <a href="#">
                                         <img src="dist/image/mediateka5.jpg"
                                                 class="img-thumbnail">
                                    </a>
                                </div>  

                <div class=" col-lg-3" ">   
                    <a href="#">
                         <img src="dist/image/mediateka6.jpg"
                                 class="img-thumbnail">
                     </a>
                </div>

                            <div class=" col-lg-3" ">   
                                <a href="#">
                                     <img src="dist/image/mediateka7.jpg"
                                             class="img-thumbnail">
                                </a>
                            </div>

                <div class=" col-lg-3" ">   
                    <a href="#">
                         <img src="dist/image/mediateka8.jpg"
                                 class="img-thumbnail">
                      </a>
                </div>
    </p>
    </div>  
                            <div class="row">
                                      <a href="#">
                                        <h4 class="text-center barcha">БАРЧА МЕДИМАТЕРИАЛЛАР</h4>   
                                      </a>
                            </div>

             </div>
        </div>  
    </div>      
</div>  
</p>    
                <!-- M E D I A T E K    T U G A D I  -->
            
                   <!-- K A R U S E L BOSHLANYAPTI -->
<div class="panel panel-default">
    <div class="panel-heading" id="head">CАВОЛ-ЖАВОБ</div>
        <div class="panel-body" id="body">
            <div id="carousel-example-generic" class="carousel slide" 
                data-ride="carousel" >

                <!-- Indicators -->
  <!-- <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> -->

                            
                            <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            

                             <div class="col-lg-4">
                                <h4>САВОЛ-
                                    <small>
                                        salom salom salom salom salom salom salom salom salom salom salom salom salom salom salom salom 
                                    </small>
                                </h4>
                                <h4>ЖАВОБ
                                    -<small>
                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat deleniti voluptas, tempore iure 
                                     </small>
                                </h4>
                                             <br>
                             </div>

                             <div class="col-lg-4 text-primary">
                                <h4>САВОЛ-
                                    <small class="text-primary">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quaerat velit recusandae 
                                    </small>
                                </h4>
                                <h4>ЖАВОБ-
                                    <small class="text-primary">
                                         Lorem ipsum dolor sit amet, elit. Repellat  tempore iure ea ut 
                                     </small>
                                </h4>
                                             <br>
                             </div>

                             <div class="col-lg-4">
                                <h4>САВОЛ-
                                    <small>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni 
                                    </small>
                                </h4>
                                <h4>ЖАВОБ
                                    -<small>
                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat deleniti voluptas, tempore iure 
                                     </small>
                                </h4>
                                             <br>
                            </div>                   
                          </div>
                        
                          <div class="item">
                            

                             <div class="col-lg-4">
                                <h4>САВОЛ-
                                    <small>
                                        Hayr hayr hayr hayr hayr hayr hayr hayr hayr hayr hayr hayr hayr hayr hayr hayr hayr hayr hayr hayr 
                                    </small>
                                </h4>
                                <h4>ЖАВОБ
                                    -<small>
                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat deleniti voluptas, tempore iure 
                                     </small>
                                </h4>
                                             <br>
                             </div>

                             <div class="col-lg-4 text-primary">
                                <h4>САВОЛ-
                                    <small class="text-primary">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni 
                                    </small>
                                </h4>
                                <h4>ЖАВОБ-
                                    <small class="text-primary">
                                         Lorem ipsum dolor sit amet, elit. Repellat  tempore iure ea ut 
                                     </small>
                                </h4>
                                             <br>
                             </div>

                             <div class="col-lg-4">
                                <h4>САВОЛ-
                                    <small>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni 
                                    </small>
                                </h4>
                                <h4>ЖАВОБ
                                    -<small>
                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat deleniti voluptas, tempore iure 
                                     </small>
                                </h4>
                                            
                            </div>                   
                          </div>
<!-- Controls -->
                    <!-- Soyani yo'qotish uchun-style="background:none; -->
                    
                  <a class="left carousel-control" href="           #carousel-example-generic" role="button" data-slide="prev" id="soya_1" >
                    <span class="glyphicon glyphicon-menu-left"  aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" id="soya_2">
                    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
        </div>
    
                    

                    <br>
                        <div class="text-center">
                            <button class=" btn btn-default btn-xs">
                                <h4>САВОЛ ЮБОРИШ</h4>
                            </button>
                    </div>
            </div>
        </div>
    </div>           <!-- K A R U S E L    T U G A D I -->

        <!-- X U D U D N I NG   M A' M U R I Y   T U Z I L I S H I -->

    <div class="panel panel-default" id="xarita">
        <div class="panel-heading" id="head">ҲУДУДИЙ МАЪМУРИЙ ТУЗИЛИШ
         </div>
             <div class="panel-body" id="body" >
                <div class="col-lg-5">
                     <select class="form-control">
                              <option>АНДИЖОН</option>
                              <option>ФАРГОНА</option>
                              <option>НАМАНГАН</option>
                              <option>ТОШКЕНТ</option>
                              <option>САМАРКАНД</option>
                     </select>
                </div>
            
    
        <div class="col-lg-7 text-center">
            <h4 style="color: #808080; font-size:20px;">Андижон вилояти<br>
                <small>Аҳолиси - 2 910,5 минг киши<br>
                    Ҳудуди - 6542 км.кв<br>
                    Туманлар сони - 12 та<br>
                    Вилоят сайти - www.andijan.uz<br>
                    Ҳокимлик манзили -  Андижон ш.<br>
                    Мустақиллик к. 185-уй
                </small>
            </h4>
        </div>
                        <div class="col-lg-12">
                            <img  src="dist/image/mamuriy_xarita.png" class="harita">
                        </div>
                        
    </div>
    </div>
    <!--        M A' M U R I Y      X A R I T A         T U G A D I -->
                
                            <!-- M Y GOV REKLAMA         -->
                            
                                    <a href="#">            
                                        <img class="gov" src="dist/image/my.gov.uz.jpg">               
                                    </a>                                    
                <!-- C O L-LG-8  CH A P   T O M O N   T U G A D I -->

</div>
    
                        
                <!-- CHAP TOMON ELEMENTLARI TUGADI -->

    <!-- B U   Y E R D A N    O' N G    T O M O N    B O SH L A N Y A P T I -->
                
    <div class="col-lg-4">

    
            <img src="dist/image/ona_va_bola.jpg"><br>
                <a href="#" class="oq">
                <div class="ona">
                     2016 <small style="font-size: 20px;"> ЙИЛ<br>
                    СОҒЛОМ ОНА ВА БОЛА ЙИЛИ</small>
                    </a> 
                 </div> 
                    <!--  style="padding-left:23px; padding-right: 23px;border-radius: 0;" -->
    
                            <h1 class="text-center">
                                <small> КАЛЕНДАРЬ
                                </small>
                            </h1>

                                <img src="dist/image/kalendar.jpg">

                            <h1 class="text-center">
                                <small> ОБ-ҲАВО 
                                </small>
                            </h1>   
                                <img src="dist/image/pogoda.jpg">

                            <h1 class="text-center">
                                <small> ВАЛЮТАЛАР КУРСИ
                                </small>
                            </h1>   
                                <img src="dist/image/kurs.jpg">

                            <h1 class="text-center">
                                <small> КОММУНАЛ ТЎЛОВЛАР
                                </small>
                            </h1>
                                <img src="dist/image/kommunal.jpg">

                             <h1>
                                <img src="dist/image/ochiq_malumotlar.jpg" style="border: 1px solid #cdcdcd">
                             </h1>

                             <h1 class="text-center">
                                <small>ИШОНЧ ТЕЛЕФОНЛАРИ</small>

                                <div class="ishonch"><br>
                                    <img src="dist/image/tel.png">
                                   0 374 123-45-67
                                <br>
                                <br>
                                    <img src="dist/image/printer.png">
                                     0 374 123-45-67
                                </div>
                            </h1>
                            <br>
                            <img src="dist/image/mustaqillik.jpg">
                            <p>
                            <span></span>
    <div class="thumbnail" id="baho">
        <h4 class="text-center" style="color: #808080;">Сайтни баҳоланг</h4>
            <div class="radio" >
                <label>
                     <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            <small>Яхши</small>
                    </label><br>
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            <small>Ўртача</small>
                     </label><br>
            
                <label>
                     <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                          <small> Қониқарсиз </small>
                    </label>
            </div>
                    <a href="#" class="btn btn-info  active text-center" role="button" id="javob"> Жавоб бериш / Натижалар
                    </a> 
                    </h3>
            </div>
            </h4>
    </div>

                <!-- BU YERDAN O'NG TOMON COL-LG-4 TUGADI -->

     <!-- BU YERDAN F O Y D A L I   M A N B A L A R BOSHLANDI -->

<div class="col-lg-12">
   <div class="panel panel-default">
        <div class="panel-heading" id="head">ФОЙДАЛИ МАНБААЛАР</div>
            <div class="panel-body" id="body">
                <div class="row">
                         <div class=" col-lg-2">    
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="dist/image/bayroq-gerb_little.png">
                                    </a>
                                        <h5 class="text-center">
                                         <small>
                                         <a href="#">Ўзбекистон Республикаси
                                                Ҳукумат портали
                                        </a>
                                        </small>
                                
                            </div>
                        </div>
                    <div class=" col-lg-2"> 
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="dist/image/gov.uz.png">
                                        <h5 class="text-center">
                                         <small>Ягона инетрактив
                                                Давлат ҳизматлар
                                                    портали
                                        </small>
                                </a>
                        </div>
                    </div>
                    <div class=" col-lg-2"> 
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="dist/image/ochiq_mal.png">
                                        <h5 class="text-center">
                                         <small>Ўзбекистон Республикаси
                                                очиқ маълумотлар<br> 
                                                портали
                                        </small>
                                </a>
                        </div>
                    </div>
                    <div class=" col-lg-2"> 
                            <div class="thumbnail"> 
                                <a href="#">
                                    <img src="dist/image/lexx.uz.png">
                                        <h5 class="text-center">
                                         <small>Ўзбекистон Республикаси
                                                    қонун ҳужжатлари
                                                    маълумотлари миллий базаси
                                        </small>
                                </a>
                            </div>
                    </div>

                    <div class=" col-lg-2"> 
                            <div class="thumbnail"> <br>
                                <a href="#">
                                    <img src="dist/image/e-kommunal.png">
                                        <h5 class="text-center">
                                         <small>Коммунал хўжалиги ва
                                                уй-жой фонди портали
                                        </small>
                                </a>
                            </div>
                    </div>

                    <div class=" col-lg-2"> 
                            <div class="thumbnail"><br> 
                                <a href="#">
                                    <img src="dist/image/umail.png">
                                        <h5 class="text-center">
                                         <small>Ўзбекистон Республикаси
                                                    қонун ҳужжатлари
                                                    маълумотлари миллий базаси
                                        </small>
                                </a>
                            </div>
                    </div>
                
            </div>

            <div class="row">
                        <div class=" col-lg-2"> 
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="dist/image/bayroq-gerb_little.png">
                                 </a>
                                <h5 class="text-center">
                                         <small>
                                                Андижон вилоят <br>
                                                        ҳокимлиги
                                                
                                        </small>
                                
                            </div>
                        </div>
                    <div class=" col-lg-2"> 
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="dist/image/bayroq-gerb_little.png">
                                        <h5 class="text-center">
                                         <small>Фарғона вилоят<br>
                                                    ҳокимлиги
                                        </small>
                                </a>
                            </div>
                    </div>

                    <div class=" col-lg-2"> 
                            <div class="thumbnail"><br>
                                <a href="#">
                                    <img src="dist/image/ziyonet.png"><br>
                                        <h5 class="text-center">
                                         <small>Таълим портали
                                        </small>
                                </a>
                            </div>
                    </div>  

                    <div class=" col-lg-2"> 
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="dist/image/birja.png">
                                        <h5 class="text-center">
                                        <b>EXARID.UZEX.UZ</b>
                                </a>
                                         <small>Корпоратив харидлар
                                                    савдо тизими
                                        </small>
                                
                            </div>
                    </div>
                    <div class=" col-lg-2"> 
                            <div class="thumbnail"><br>
                                <a href="#">
                                    <img src="dist/image/uforum.png">
                                        <h5 class="text-center">
                                        
                                </a><br>
                                         <small>Ягона бирлашган
                                                форум майдони
                                        </small>
                                
                            </div>
                    </div>  
                    <div class=" col-lg-2"> 
                            <div class="thumbnail"><br>
                                <a href="#">
                                    <img src="dist/image/e-ijro.png">
                                        <h5 class="text-center">
                                        
                                </a><br>
                                         <small>Ҳимояланган электрон
                                                ҳужжат айланиш
                                                тизими
                                        </small>
                                
                                </h5>
                            </div>
                    </div>          
            
<div class="col-lg-offset-12">
<img src="dist/image/yuqoriga.jpg">

            </div>  
        </div>      
    </div>
</div>

