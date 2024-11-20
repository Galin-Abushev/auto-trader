<form {{ $attributes(["class"=> " space-y-2", "method" => "GET"]) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
    @csrf
    @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>