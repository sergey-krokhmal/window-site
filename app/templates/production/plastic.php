
<div class="top-main">
    <div class="container">
        <div class="col-md-4 col-sm-4">
        </div>
        <div class="col-md-8 col-sm-8" >
            <?require_once("production_menu.php");?>
            <?if (isset($model_name)):?>
                <div class="window-info">
                    <div class="window-title"><span class="window-info-model"><?=$model_name?></span> <a class="window-info-more" href="/">Подробнее...</a></div>
                    <div class="window-info-details">
                        <div class="window-info-photo-holder">
                            <img class="window-info-photo-img" src="/files/images/production/plastic/<?=$model_image?>"/>
                        </div>
                        <div class="window-info-params">
                            <ul class="list-unstyled">
                                <?foreach($model_params as $param):?>
                                    <li><?=$param?></li>
                                <?endforeach?>
                                <!--li>Сопротивление теплопередаче - 0,63 м<sup>2</sup>&bull;C/Вт</li-->
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            <?endif?>
            <?require_once('slider.php')?>            
        </div>
        <div class="clearfix"></div>
    </div><!-- container -->
</div>
<div class="bottom-main container">
    <?require_once('production_description.php')?>
</div>
        