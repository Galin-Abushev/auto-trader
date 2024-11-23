<section>
    <h1 class="mb-4 text-2xl font-bold">{{ $car->carBrand->brand_name }} {{ $car->carModel->model_name }}</h1>

    <!-- Other car details -->

    <div class="mt-6">
        <h2 class="mb-2 text-xl font-bold">Клиентски запитвания:</h2>

        @if ($carRequests->isEmpty())
        <p class="text-gray-600">Все още няма запитвания за този автомобил.</p>
        @else
        <ul class="space-y-4">
            @foreach ($carRequests as $request)
            <li class="p-4 border border-gray-300 rounded-md">
                <p><strong>От:</strong> {{ $request->name }}</p>
                <p><strong>Имейл:</strong> {{ $request->email }}</p>
                <p><strong>Запитване:</strong> {{ $request->message }}</p>
                <p class="text-sm text-gray-500">Изпратено на: {{ $request->created_at->format('d M Y, H:i') }}</p>
            </li>
            @endforeach
        </ul>
        @endif
    </div>
</section>