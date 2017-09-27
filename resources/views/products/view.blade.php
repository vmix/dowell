@extends('layouts.app')

@section('navbar')
    @parent
@endsection

@section('content')
    <div class="container">
        {{ $products->links() }} <span class="pull-right"><a href="/parser">Закачать новую инфу</a></span>
        <?php foreach($products as $product) : ?>
            <div class="card border-danger mb-3">
                <div class="card-header">
                    <h2><?= $product['name'] ?></h2>
                </div>
                <div class="card-body row">
                    <div class="col-md-6">
                        <h5 class="card-title"><?= 'Модель: ' . $product['model'] ?></h5>
                        {{--<a href="/product/{{$product['id']}}" class="btn btn-primary disabled">Подробно...</a>--}} <!-- it's need for 'Detail Page' about each product-->
                        <div class="card-text"><?= "<b>Категория товара: </b>" . $product['categoryId'] . "<b> ID товара: </b>" . $product['offerId'] ?></div>
                        <div class="card-text"><?= 'URL: ' . '<a href="' . $product['url'] . '">' . $product['url'] . '</a>' ?></div>
                        <div class="card-text"><?= 'Цена: ' . $product['price']. ' ' . $product['currencyId']?></div>
                        <div class="card-text"><?= 'Картинка: ' . '<a href="' . $product['picture'] . '">' . $product['picture'] . '</a>' ?></div>
                        <div class="card-text"><?= 'Производитель: ' . $product['vendor'] . " Код вендора: " . $product['vendorCode'] ?></div>
                        <div class="card-text"><?php  if($product['manufacturer_warranty']) {echo 'Гарантия вендора: есть'; } else { echo 'Гарантия вендора: нет'; } ?></div>
                        <div class="card-text"><?php if($product['delivery']) { echo 'Доставка: есть';} else {echo 'Доставка: нет'; } ?></div>
                        <div class="card-text"><?= 'Стоимость: ' . $product['delivery_cost'] ?></div>
                        <div class="card-text"><?= 'Длительность: ' . $product['delivery_days'] . ' дней.'?></div>
                        <div><?php  if($product['available']) {echo 'Доступность: доступен'; } else { echo 'Доступность: нет'; } ?></div>
                        <div>
                            <?php if(!empty($product['params'])) {
                                echo '<b>Параметры: </b><br>';
                                        foreach(unserialize($product['params']) as $param) {
                                             echo $param . '<br>';
                                        }
                                    }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-text"><?= 'Описание: ' . $product['description'] ?></div>
                        <hr>
                        <div class="card-text"><?= 'Примечания: ' . $product['sales_notes'] ?></div>
                    </div>


                </div>
            </div>
        <?php endforeach; ?>
        {{ $products->links() }}
    </div>
@endsection