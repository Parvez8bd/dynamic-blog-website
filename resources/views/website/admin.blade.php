<x-guest-layout>
    <x-slot name="title">Dashboard</x-slot>

    

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-5 text-primary text-center">
                   <h1><a href="{{ route('login') }}">log in</a></h1>
                   <h1><a href="{{ route('register') }}">Register</a></h1>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>