<x-layout>
    @if ($data->isEmpty())
    <p>Няма автомобили съответстващи на зададените критерии.</p>
    @else
    <div>

        @foreach ( $data as $car )

        <a href="/frontcars/show/{{$car->id}}/">
            <x-front-search-card :$car />
        </a>
        @endforeach

    </div>

    @endif
    <div class="mt-6">
        {{ $data->links() }}
    </div>
</x-layout>