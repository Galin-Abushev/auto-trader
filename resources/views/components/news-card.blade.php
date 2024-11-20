@props(['car'])

<div class="flex flex-col border-b border-blue-900 group bg-black/5">
    <div>
        <img src="http://picsum.photos/seed/{{ rand(0, 100000)}}/200/150" alt="">
        <div class="mt-5 mb-5 font-bold group-hover:text-red-600">Кратко описание до 70 символа</div>
    </div>


</div>