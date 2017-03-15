<ol class="breadcrumb">
  <li><a href="/admin/products">Список товаров</a></li>
  <li class="active">Изменение товара <?=$item['name']?></li>
</ol>
<h2 class="sub-header"><?=$item['name']?></h2>
<div class="table-responsive list-table">
    <form class="form-signin" role="form" action="/admin/products/edit/<?=$item['id']?>" method="POST">
        <table class="table table-striped table-middled table-hover">
            <tbody>
                <tr>
                    <td>Название</td>
                    <td>
                        <input type="text" class="form-control" value="<?=$item['name']?>" name="name">
                    </td>
                </tr>
                <tr>
                    <td>Количество</td>
                    <td>
                        <input type="text" class="form-control" value="<?=$item['count']?>" name="count">
                    </td>
                </tr>
                <tr>
                    <td>Цена</td>
                    <td>
                        <input type="text" class="form-control" value="<?=$item['price']?>" name="price">
                    </td>
                </tr>
                <tr>
                    <td>Фото</td>
                    <td>
                        <input type="text" class="form-control" value="<?=$item['image']?>" name="image">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="btn-toolbar">
            <button class="btn btn-lg btn-primary" type="submit">Сохранить</button>
            <a class="btn btn-lg btn-default" href="/admin/products" type="button">Назад</a>
        <div>
    </form>
</div>