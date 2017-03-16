<ol class="breadcrumb">
  <li><a href="/admin/products">Список товаров</a></li>
  <li class="active"><?=$item['name']?></li>
</ol>
<h2 class="sub-header"><?=$item['name']?></h2>
<div class="table-responsive list-table">
    <table class="table table-striped table-middled table-hover">
        <tbody>
            <tr>
                <td>Название</td>
                <td><?=$item['name']?></td>
            </tr>
            <tr>
                <td>Количество</td>
                <td><?=$item['count']?></td>
            </tr>
            <tr>
                <td>Цена</td>
                <td><?=$item['price']?></td>
            </tr>
            <tr>
                <td>Фото</td>
                <td><?=$item['image']?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <a class="btn btn-default glyphicon glyphicon-pencil" title="Изменить товар" href="/admin/products/edit/<?=$item['id']?>"></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
