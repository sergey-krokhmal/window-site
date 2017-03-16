<h2 class="sub-header">Список товаров</h2>
<div class="table-responsive list-table">
    <table class="table table-striped table-middled table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Количество</th>
                <th>Цена</th>
                <th>Картинка</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?foreach($items as $index => $item):?>
            <tr>
                <td><?=$index+1?></td>
                <td><?=$item['name']?></td>
                <td><?=$item['count']?></td>
                <td><?=$item['price']?></td>
                <td><?=$item['image']?></td>
                <td>
                    <a class="btn btn-default glyphicon glyphicon-eye-open" title="Посмотреть товар" href="/admin/products/<?=$item['id']?>"></a>
                    <a class="btn btn-default glyphicon glyphicon-pencil" title="Изменить товар" href="/admin/products/edit/<?=$item['id']?>"></a>
                </td>
            </tr>
            <?endforeach?>
        </tbody>
    </table>
</div>
