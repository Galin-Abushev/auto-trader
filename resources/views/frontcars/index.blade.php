<x-layout>
    <section>
        <h3 class="mb-6 font-bold border-b-4 border-blue-600">Най-новите обяви за Автомобили и Джипове</h3>


        <div class="grid gap-8 lg:grid-cols-4">

            @foreach ( $cars as $car )

            <a href="/frontcars/show/{{$car->id}}/">
                <x-car-card :$car />
            </a>
            @endforeach

        </div>

    </section>

    <section>
        <div class="flex items-center py-4 font-bold">
            <a href="/">
                <img src="{{ Vite::asset('resources/images/news-logo.jpg')}}" alt="">
            </a>
            <h3 class="mt-10 mb-6 font-bold hover:text-red-600">Новини от днес и последния час във ФАКТИ.БГ</h3>
        </div>

        <div class="grid gap-8 lg:grid-cols-5">
            <x-news-card />
            <x-news-card />
            <x-news-card />
            <x-news-card />
            <x-news-card />


        </div>


    </section>

</x-layout>