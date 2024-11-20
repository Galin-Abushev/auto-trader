<a class="{{ request()->is('/') ? 'bg-blue-600 text-white' : 'text-blue-600'}}"
    aria-current="{{ request()->is('/') ? 'page': 'false'}}">
    {{ $slot}} </a>