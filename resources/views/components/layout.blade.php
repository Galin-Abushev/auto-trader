<!DOCTYPE html>
<html lang="en">

<x-html.head />

<body class="mb-10 mx-60">

    <x-html.header />

    <div class="content">
        <main class="mt-10 ">
            {{ $slot }}
        </main>
    </div>

    <x-html.footer />

</body>

</html>