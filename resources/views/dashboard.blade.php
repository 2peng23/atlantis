<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div>
            @include('div1')


            @include('div2')
            @include('div3')

        </div>
    </div>
</x-app-layout>
