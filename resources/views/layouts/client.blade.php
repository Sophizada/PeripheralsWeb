<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Scripts e Stylesheet nativos --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/@yield('css').css">
    <script defer src="{{ asset('js') }}/@yield('js').js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/footer.css') }}">

    {{-- Font Aweasome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

    {{-- Carrossel --}}
    <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
    <script src="https://unpkg.com/embla-carousel-autoplay/embla-carousel-autoplay.umd.js"></script>

    <title>
        @section('title')
            Peripherals -
        @show
    </title>

</head>

<body>
    <header>
        <div class="box-logo">
            <a href="#">
                <img src="{{ asset('images/logo-peripherals.jpeg') }}" alt="Logo Peripherals">
            </a>
        </div>

        <nav id="navLinks">
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Ofertas</a></li>
                <li><a href="">Produtos</a></li>
                <li><a href="">Contato</a></li>
            </ul>
        </nav>

        <div class="box-icons">
            <button><img src="{{ asset('images/icons/lupa.png') }}" alt="Ícone de Pesquisa"></button>
            <button><img src="{{ asset('images/icons/avatar.png') }}" alt="Ícone de Usuário"></button>
            <button><img src="{{ asset('images/icons/heart.png') }}" alt="Ícone de Favoritos"></button>
            <button>
                <img src="{{ asset('images/icons/shopping-bag.png') }}" alt="Ícone do Carrinho de Compras">
            </button>
        </div>
    </header>

    <section class="container-content">
        @yield('content')
    </section>

    <footer class="footer">
        <div class="row-elements">
            <div class="column-info payment-methods">
                <div class="footer-logo">
                    <a href="#"><img src="{{ asset('images/Logo-nome.jpeg') }}" alt="Logo Peripherals"></a>
                </div>
                <p>Metodos de pagamentos aceitos</p>
                <a><img src="{{ asset('images/card-img.png') }}" alt="Métodos de pagamento aceitos"></a>
            </div>

            <div class="column-info sitemap">
                <h3>Submenu</h3>
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Termos</a></li>
                </ul>
            </div>

            <div class="column-info sitemap">
                <h3>Fale Conosco</h3>
                <ul>
                    <li><a href="#">Contate-nos</a></li>
                    <li><a href="#">feedback</a></li>
                    <li><a href="#">Dúvidas</a></li>
                    <li><a href="#">Localização</a></li>
                </ul>
            </div>

            <div class="column-info sitemap">
                <h3>Redes Sociais</h3>
                <div class="footer-newsletter">
                    <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <hr id="divisorLine">
        <div class="footer-copyright-text">
            <p>Copyright &copy; 2022 All right reserved | This model is made by JRM</p>
        </div>
    </footer>
</body>
<script src="{{ asset('js/admin/admin.js') }}"></script>

</html>
