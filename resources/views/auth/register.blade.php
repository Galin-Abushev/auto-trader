<x-layout>

    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">

        <x-forms.input class="border border-blue-500" label="Name" name="name" />

        <x-forms.input class="border border-blue-500" label="Email" name="email" type="email" />

        <x-forms.input class="border border-blue-500" label="Password" name="password" type="password" />

        <x-forms.input class="border border-blue-500" label="Password Confirmation" name="password_confirmation"
            type="password" />

        <x-forms.divider />

        <x-forms.input class="border border-blue-500" label="Employer Name" name="employer" />

        <x-forms.input class="border border-blue-500" label="Employer Logo" name="logo" type="file" />


        <x-forms.button>Create Account</x-forms.button>

    </x-forms.form>

</x-layout>