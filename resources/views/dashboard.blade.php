<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Voce está logado!") }}

                    <!-- Link para o mapa -->
                    <a href="{{ url('/mapa') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Ir para o Mapa de Infraestrutura
                    </a>
                    <!-- Botão para voltar ao Welcome -->
                    <a href="{{ url('/') }}" class="mt-4 ml-4 inline-block bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                        Voltar para o Início
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>