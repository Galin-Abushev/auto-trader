<x-layout>
    <x-page-heading>Редакция на снимките на автомобила :</x-page-heading>

    <form class="max-w-2xl mx-auto space-y-6" method="POST" action="/admincars/{{ $data->id }}">
        @csrf
        @method('PATCH')

        <div class="flex gap-1 mt-1 thumbnail-photos">
            @if(!empty($data->carPhotos))
            @foreach ($data->carPhotos->take(12) as $photo)

            <div class="w-32 h-20">

                <img src="{{ asset('storage/' . $photo->file_path) }}" alt="Car Photo"
                    class="object-cover w-full h-full shadow img-thumbnail">
                <div>
                    <a href="/admincars/photos/delete/{id}">Изтрий</a>
                </div>
            </div>

            @endforeach
            @else <h1>Няма качени снимки за този автомобил</h1>
            @endif
        </div>
        <x-forms.button form="form-edit">Редактирай</x-forms.button>
    </form>
    <form method="POST" action="/admincars/photos/{{ $data->id }}" id="form-delete" class="hiden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>