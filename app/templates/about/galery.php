<div class="container about-galery">
    <div class="container-bg">
        <?require_once('about_menu.php');?>
        <div class="col-md-8 col-sm-8 right-side">
            <div class="right-side-content">
                <div class="galery-slider">
                    <span class="slider-left"></span>
                    <span class="slider-right"></span>
                    <ul class="bxslider">
                        <?foreach($photos as $i => $photo):?>
                            <li>
                                <div class="img-holder">
                                    <img src="/files/images/galery/<?=$photo['name']?>">
                                </div>
                            </li>
                        <?endforeach?>
                    </ul>
                    <div class="bx-pager">
                        <?foreach($photos as $i => $photo):?>
                            <a data-slide-index="<?=$i?>" href="">
                                <span class="img-holder">
                                    <img src="/files/images/galery/<?=$photo['name']?>" />
                                </span>
                            </a>
                        <?endforeach?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div><!-- container -->