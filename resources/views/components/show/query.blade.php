@if (auth()->check())
<form action="{{ route('send-query') }}" method="POST" class="grid-cols-12 mt-4">
    @csrf

    <input type="hidden" name="car_id" value="{{ $car->id }}">

    <div class="grid grid-cols-12 mt-4">
        <div class="grid col-span-8 px-4 py-2 mt-2 border border-b-4 rounded-sm borderBox bg-slate-100">
            <div class="mb-4">
                <label for="name" class="block text-sm font-bold">Твоето име</label>
                <input type="text" name="name" id="name" value="{{ auth()->user()->name }}"
                    class="w-full px-3 py-2 border rounded" readonly>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-bold">Твоя имейл</label>
                <input type="email" name="email" id="email" value="{{ auth()->user()->email }}"
                    class="w-full px-3 py-2 border rounded" readonly>
            </div>

            <div class="mb-4">
                <label for="message" class="block text-sm font-bold">Твоето запитване към продавача</label>
                <textarea name="message" id="message" rows="5" class="w-full px-3 py-2 border rounded"
                    required></textarea>
            </div>

            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
                Изпрати запитване
            </button>
        </div>
    </div>
</form>
@endif
@if (session('success'))
<div class="p-4 mb-4 text-green-700 bg-green-200 border border-green-300 rounded max-w-[692px]">
    {{ session('success') }}
</div>
@endif