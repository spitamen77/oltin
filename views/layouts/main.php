<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


        <?= $content ?>

<?php $this->endBody() ?>

<div class="col-lg-12 bg-primary">
    <div class="col-lg-4">
            <div class="col-lg-4">
                <img src="dist/image/bayroq-gerb_kichik.png">
            </div>
    <div class="col-lg-8">
        <h4>АНДИЖОН ВИЛОЯТИ</h4>
        <h5>ОЛТИНКЎЛ ТУМАНИ ҲОКИМЛИГИ</h5>  
    </div>
    <div class="12">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <b>ЭСЛАТМА!</b>
    <br>
    Сайтдаги маълумотлардан фойдаланилганда
    мазкур сайт манбаа сифатида кўрсатилиши шарт                    
                        
    </div>
    </div>

    <div class="col-lg-4">
    <h4><b>МАНЗИЛ:</b><br></h4>
    Ўзбекистон Республикаси,<br>
    Андижон в., Ўлтинкўл т.,<br>
    Мустақиллик к., 185, 220100<br><br>
    Иш вақти: 900-1800, тушлик: 1300-1400<br>
    Дам олиш куни: шанба, якшанба<br>
    Тел.:  (0 374) 225 12 45<br>
    Факс: (0 374) 225 12 45

    </div>

    <div class="col-lg-4">
                <br>
            <div class="col-lg-10">
                    Янгиланиш:<br><br>
                    Сўнги марта сайтдаги маълумотлар<br>
                    24.09.2016 куни янгиланган
                    <br>
                    <br>
                    <br>
                    <br>
                    <img src="dist/image/pkm.jpg">
            </div>
            <div class="col-lg-2">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
            &copy;Leon 
           </div>                   
    </div>

<div class="container-fluid">
    <div class="col-lg-12">
        <div style="background: url(dist/image/footer_naqsh.png); height: 32px; width: 1130px; left: 0; margin-left: -45px; padding-left: 0px">
        </div>
            <h5 class="text-center">Барча ҳуқуқлар ҳимояланган. Сайт LEON web studiyasi томонидан ишлаб чиқилган. 2016 й.</h5>
        </div>
     </div>         
</div>
</div>
</div>
                            <!-- BU YERDA ASOSIY THUBNAIL TUGADI -->
</div>
</body>
</html>
<?php $this->endPage() ?>
