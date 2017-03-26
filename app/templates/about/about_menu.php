<?
    $links = array(
        "/about/production" => "производство",
        "#1" => "сертификаты",
        "/about/galery" => "галерея",
        "#2" => "новости",
        "/about/reviews" => "клиенты о нас",
        "/about/partners" => "наши партнеры",
    );
?>
<div class="col-md-4 col-sm-4 left-side">
    <div class="page-name-holder">
        <div class="page-name">
            <?=ABOUT_TITLE??'О компании'?>
        </div>
    </div>
    <nav class="side-menu">
        <?foreach($links as $link => $caption):?>
            <a class="btn btn-default btn-block btn-side-menu <?=($url_path == $link)?'active':''?>" href="<?=$link?>"><?=$caption?></a>
        <?endforeach?>
    </nav>
</div>