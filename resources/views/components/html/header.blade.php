<div class="header">

    <div class="flex items-center justify-between">
        <div class="flex items-center py-2 font-bold text-blue-600 ">
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.png')}}" alt="">
            </a>
        </div>

        <div class="flex items-center py-2 space-x-6 font-bold text-blue-600 ">
            @auth
            <div>
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')

                    <button>Log Out</button>
                </form>
            </div>

            <div>
                <a href="/cars/create"> + Добави обява </a>
            </div>


            @endauth



        </div>
    </div>
    <nav class="flex items-center justify-between py-4 font-bold text-blue-600 border-b-4 border-blue-600 rounded-t-lg">

        <div class="space-x-0.25 ">

            <a href="/"
                class="rounded-t px-2 pb-1 {{ request()->is('/') ? 'bg-blue-600 text-white' : 'text-white bg-gray-500'}}"
                aria-current="rounded-t {{ request()->is('/') ? 'page': 'false'}}">Начало</a>
            <a href="/frontcars/search"
                class="rounded-t px-2 pb-1 {{ request()->is('frontcars/search') || ('frontcars/result') ? 'bg-blue-600 text-white' : 'text-white bg-gray-500'}}"
                aria-current="rounded-t px-2 {{ request()->is('frontcars/search') || ('frontcars/result') ? 'page': 'false'}}">Търсене</a>
            <a href="/publish"
                class="rounded-t px-2 pb-1 {{ request()->is('publish') ? 'bg-blue-600 text-white' : 'text-white bg-gray-500'}}"
                aria-current="rounded-t px-2 {{ request()->is('publish') ? 'page': 'false'}}">Публикуване</a>
            <a href="https://fakti.bg/"
                class="rounded-t px-2 pb-1 {{ request()->is('news') ? 'bg-blue-600 text-white' : 'text-white bg-gray-500'}}"
                aria-current="rounded-t {{ request()->is('news') ? 'page': 'false'}}">Новини</a>
            <a href="/my-cars"
                class="rounded-t px-2 pb-1 {{ request()->is('my-cars') ? 'bg-blue-600 text-white' : 'text-white bg-gray-500'}}"
                aria-current="rounded-t {{ request()->is('my-cars') ? 'page': 'false'}}">Моите обяви</a>



        </div>
        @guest
        <div class="space-x-4">
            <a href="/login"> Вход </a>
            <a href="/register"> Регистрация </a>

        </div>
        @endguest



    </nav>

    @auth
    <nav
        class="flex items-center justify-between px-1 py-2 text-xs font-bold text-white bg-blue-900 border-b-4 border-blue-600 ">

        <div class="space-x-4">
            <a href="" class="text-yellow-200"> Управление от администратор: </a>
            <a href="/admincars"> Автомобили </a>
            <a href="/carbrands"> Марки </a>
            <a href="/carmodels"> Модели </a>
            <a href="/carengines"> Двигатели </a>
            <a href=""> Скоростни кутии </a>
            <a href=""> Категории </a>
            <a href=""> Стандарти </a>
            <a href=""> Цветове </a>
            <a href="/carequipments"> Характеристики </a>
            <a href="/carequipmentgroups"> Характеристики(групи) </a>
            <a href=""> Състояния </a>
            <a href="/regions"> Региони </a>
            <a href=""> Новини </a>


        </div>
    </nav>
    @endauth


</div>