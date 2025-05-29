<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>InfraEstruturaEmFalta</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css'])
</head>
<body class="bg-black text-white font-sans">

    <!-- Navbar simples no topo -->
    <nav class="flex justify-between items-center px-8 py-4 max-w-7xl mx-auto">
        <a href="/" class="text-3xl font-bold tracking-wide hover:text-gray-300 transition">InfraEstruturaEmFalta</a>
        <div>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-white hover:text-gray-300 px-">>Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-white hover:text-gray-300 px-4">Sair</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="bg-white text-black font-semibold px-6 py-3 rounded border border-black hover:bg-gray-300 transition">>Entrar</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-white text-black font-semibold px-6 py-3 rounded border border-black hover:bg-gray-300 transition">>Cadastrar</a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>

    <!-- Hero section -->
    <section class="max-w-7xl mx-auto px-8 py-20 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 space-y-8">
            
            <p class="text-xl max-w-lg leading-relaxed">
                Bem-vindo! Neste site, você poderá registrar suas reclamações relacionadas às condições das vias públicas em nosso país, contribuindo assim para a melhoria da infraestrutura urbana.
            </p>

            @if (Route::has('login'))
                <div class="flex space-x-4">
                    @auth
                        <a href="{{ url('/mapa') }}" class="bg-white text-black font-semibold px-6 py-3 rounded border border-black hover:bg-gray-300 transition">
                        Ir para o mapa
                    </a>

                    
                        
                    @endauth
                </div>
            @endif
        </div>

        <div class="md:w-1/2 mt-12 md:mt-0">
            <!-- Você pode colocar uma imagem relacionada ao tema aqui -->
            <img src="{{ asset('images/infraestrutura-hero.png') }}" alt="Infraestrutura" class="rounded-lg shadow-lg" />
        </div>
    </section>

    <!-- Footer simples -->
    <footer class="bg-gray-900 text-gray-400 text-center py-8 mt-20">
        &copy; {{ date('Y') }} InfraEstruturaEmFalta. Todos os direitos reservados.
    </footer>

</body>
</html>
