<x-layout>
    <x-page-heading>Редакция на снимките на автомобил: {{ $data->carbrand->brand_name}} - {{
        $data->carmodel->model_name}}
    </x-page-heading>

    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

    <form class="max-w-2xl mx-auto space-y-6" method="POST" action="/admincars/photos/edit/{{ $data->id }} "
        enctype="multipart/form-data">
        @csrf
        <div>
            <label>Качете снимки (максимум {{ $alabala->maxPhotos }} снимки)</label>
            <input type="file" name="car_photos[]" multiple>
        </div>
        <div>
            <x-forms.button class="text-white">Качи снимките</x-forms.button>
        </div>

        <div class="flex gap-1 mt-1 thumbnail-photos">
            @if(!empty($data->carPhotos))
            @foreach ($data->carPhotos->take($alabala->maxPhotos) as $photo)
            <div class="w-32 h-20">

                <img src="{{ asset('storage/' . $photo->file_path) }}" alt="Car Photo"
                    class="object-cover w-full h-full shadow img-thumbnail">
                <div>
                    <a href="/admincars/photos/delete/{{$photo->id}}">Изтрий</a>
                </div>
            </div>

            @endforeach
            @else <h1>Няма качени снимки за този автомобил</h1>
            @endif
        </div>
    </form>

</x-layout>