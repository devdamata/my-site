<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        header {
            background-image: url('{{ asset('/docs/images/home/fundo-home.jpg') }}');
            background-size: cover;
            background-position: center;
            position: relative;
            height: 70vh;
        }

        header::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3); /* Máscara preta translúcida */
            background-image: radial-gradient(circle, black 2px, transparent 2px); /* Pontinhos pretos */
            background-size: 5px 5px; /* Espaçamento dos pontinhos */
            pointer-events: none;
            z-index: 1; /* Máscara acima da imagem de fundo */
        }

        header .content {
            position: relative;
            z-index: 2; /* Conteúdo acima da máscara */
        }
    </style>
</head>
<body>
  <div class="container-fluid">
    <header>
      <!-- Navbar -->
      <nav class="fixed w-full z-10">
        <div class="container mx-auto px-4">
          <div class="flex items-center justify-between py-4">
            <!-- Logo -->
            <a href="{{ url('/homev2') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('/docs/images/logo-damata-tecnology/logo-Damata-Technology-letra-branca.png') }}" class="h-20"
                    alt="Damata Technology Logo" />
            </a>
            <!-- Links -->
            <div class="hidden md:flex space-x-6">
              <a href="#" class="text-white hover:text-gray-300">Início</a>
              <a href="#" class="text-white hover:text-gray-300">Sobre</a>
              <a href="#" class="text-white hover:text-gray-300">Serviços</a>
              <a href="#" class="text-white hover:text-gray-300">Contato</a>
            </div>
            <!-- Botão Mobile -->
            <div class="md:hidden">
              <button class="text-white focus:outline-none">
                <!-- Ícone do menu -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </nav>
      <!-- Conteúdo Principal -->
      <div class="content h-full flex flex-col items-center justify-center text-center space-y-4">
        <div class="mb-6">
          <h1 class="text-white text-5xl font-bold">
            Bem-vindo ao futuro, criado especialmente para você.
          </h1>
          <h3 class="text-white text-lg mb-6">
            Descubra soluções inovadoras e personalizadas que transformarão suas ideias em realidade.
          </h3>
        </div>
        <!-- Seta animada -->
        <div class="mt-10">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-10 h-10 text-white animate-bounce"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </div>
      </div>

    </header>
    <!-- Resto do site -->
    <main class="py-10">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4">Conteúdo do Site</h2>
        <p class="text-gray-700">Aqui está o restante do conteúdo do site.</p>
      </div>
    </main>
  </div>
</body>
</html>
