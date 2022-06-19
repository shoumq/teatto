@extends("layout")

@section("content")

    <main>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-6">
                    <img src="https://miro.medium.com/max/2400/2*Rrb0s3_J2rOpz0hcBnCjrA.jpeg" style="width: 100%;"
                         alt="">
                </div>
                <div class="col-lg-6 prod">
                    <form action="" method="post">
                        <p class="title mt-5">{{ $productObject->title }}</p>
                        <p class="desc">{{ $productObject->desc }}</p>
                        <p class="id fs-4">id: {{ $productObject->id }}</p>
                        <div style="width: 150px" class="text-center mt-5">
                            <p class="sale px-3 py-1">
                                Скидка {{ round((($productObject->old_price - $productObject->price) / $productObject->old_price) * 100) }}
                                %</p>
                        </div>
                        <div class="d-flex">
                            <del class="fs-4">{{ $productObject->old_price }} ₽</del>
                            <p class="price fs-4">{{ $productObject->price }} ₽</p>
                        </div>
                        <button type="submit" class="green_link px-5 fs-4 mt-3">Купить</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
