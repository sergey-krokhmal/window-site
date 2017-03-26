<div class="window-slider">
    <span class="slider-left"></span>
    <span class="slider-right"></span>
    <ul class="bxslider">
        <?foreach($constructs as $construct):?>
            <li>
                <div class="img-holder">
                    <a href="/files/images/production/<?=$model_type?>/<?=$construct['image']?>" data-fancybox="group">
                        <img src="/files/images/production/<?=$model_type?>/<?=$construct['image']?>">
                    </a>
                </div>
                <div class="price-holder">
                    <div class="current-price"><?=$construct['price']?><span class="little-rub"></span></div>
                    <div class="action-price"><del><?=$construct['old_price']?></del><span class="little-rub"></span></div>
                </div>
            </li>
        <?endforeach?>
    </ul>
</div>