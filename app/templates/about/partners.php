<div class="container about-partners">
    <div class="container-bg">
        <?require_once('about_menu.php');?>
        <div class="col-md-8 col-sm-8 right-side">
            <div class="right-side-content">
                <ul class="list-unstyled partner-list">
                    <?foreach($partners as $partner):?>
                        <li class="partner-item">
                            <div class="img-holder">
                                <img src="/files/images/partners/<?=$partner['logo']?>">
                            </div>
                            <div class="partner-description">
                                <?=$partner['description']?>
                            </div>
                        </li>
                    <?endforeach?>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div><!-- container -->