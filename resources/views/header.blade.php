<div class="container">
    <header class="header py-3">
        <a href="/" class="logo">TEATTO</a>
        <div class="input_box">
            <input type="text" placeholder="Поиск..." style="border-radius: 8px;">
            <button class="btn-gr px-3" type="button" style="border-radius: 8px;">Найти</button>
        </div>
        <div class="info text-center">
            <p class="phone mt-3">+7 (916) 716-27-17</p>
            <p class="timew">ПН-ВС с 9:00 до 18:00</p>
        </div>
        <div class="favor text-center">
            <i class="bi bi-heart mt-2"></i>
            <p>Избранное (0)</p>
        </div>
        <a data-bs-toggle="modal" data-bs-target="#regModal" href="/" class="green_link px-3 py-2">Войти</a>
    </header>
</div>
<nav>
    <div class="container">
        <div id="links">
            <a href="/categories" class="link">Категории</a>
            <a href="/" class="link">Скидки</a>
            <a href="/" class="link">Популярное</a>
            <a href="/" class="link">Вакансии</a>
            <a href="/" class="link">О нас</a>
            <a href="/" class="link">Новости</a>
        </div>
    </div>
</nav>


<div class="mob_header p-2 d-flex">
    <a href="/" class="logo">TEATOO</a>
    <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" id="burger_btn">
        <i class="bi bi-list"></i></button>
</div>
<div class="white_header d-flex p-2">
    <div class="mt-1">
        <input type="text" placeholder="Поиск..." style="border-radius: 8px;">
        <button class="btn-gr px-3" type="button" style="border-radius: 8px;">Найти</button>
    </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel"
     style="width: 70%;">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        ...
    </div>
</div>
