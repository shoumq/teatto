<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEATTO | admin</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/mobile.css">
</head>

<body>
<main>
    <div class="container mt-5 mb-5 admin">
        <section class="admin_pr">
            <p class="title">Продукты</p>
            <div class="row">
                @foreach($productObject as $product)
                    <a class="col-xs-3 col-md-3" style="color: black">
                        <form action="/admin/product/submit/{{ $product->code }}" method="post">
                            @csrf
                            <div class="col-sm card_product px-3 pt-3">
                                <div class="d-flex" style="justify-content: space-between;">
                                    <p class="sale px-3 py-1">
                                        Скидка {{ round((($product->old_price - $product->price) / $product->old_price) * 100) }}
                                        %</p>
                                    <button class="like_btn mb-2">
                                        <i class="bi bi-heart mt-2"></i>
                                    </button>
                                </div>
                                <img src="https://miro.medium.com/max/2400/2*Rrb0s3_J2rOpz0hcBnCjrA.jpeg" alt="">
                                <p class="id">Артикул: {{ $product->id }}</p>
                                <label>
                                    <div>Описание</div>
                                    <textarea style="margin-bottom: 0.5rem;" rows="10">{{ $product->desc }}</textarea>
                                </label>
                                <label>
                                    <div>Название</div>
                                    <input type="text" class="name mb-3" value="{{ $product->title }}"/>
                                </label>
                                <label>
                                    <div>Старая цена (если есть)</div>
                                    <input type="text" class="mb-3" value="{{ $product->old_price }}"/>
                                </label>
                                <label>
                                    <div>Настоящая цена</div>
                                    <input type="text" class="mb-3" value="{{ $product->price }}"/>
                                </label>

                                <button type="submit" class="btn btn-success mb-3">Сохранить</button>
                            </div>
                        </form>
                    </a>
                @endforeach
            </div>
        </section>
    </div>
</main>

<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/script.js"></script>
</body>

</html>
