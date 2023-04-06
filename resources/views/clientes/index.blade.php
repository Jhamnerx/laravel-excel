<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CLIENTES
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            LISTA AQUI
        </div>
        <x-laravel-blade-sortable::sortable>
            <x-laravel-blade-sortable::sortable-item sort-key="jason">
                Jason
            </x-laravel-blade-sortable::sortable-item>
            <x-laravel-blade-sortable::sortable-item sort-key="andres">
                Andres
            </x-laravel-blade-sortable::sortable-item>
            <x-laravel-blade-sortable::sortable-item sort-key="matt">
                Matt
            </x-laravel-blade-sortable::sortable-item>
            <x-laravel-blade-sortable::sortable-item sort-key="james">
                James
            </x-laravel-blade-sortable::sortable-item>
        </x-laravel-blade-sortable::sortable>
    </div>

</x-app-layout>
