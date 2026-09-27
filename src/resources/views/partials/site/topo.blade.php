<header class="topo" id='topoFixo'>

    <div class="site">

        <h1>Jho's Barbershop</h1>
        <button class="abrir-menu"></button>
        <nav class="menu">
            <button class="fechar-menu"></button>
            <?php $pgAtual = basename($_SERVER['PHP_SELF']); ?>

            <!-- nav>ul>li*6>a+tab -->
            <ul>
                <li> <a href="{{ route('home') }}">Home</a></li>

                <li><a href="{{ route('sobre') }}">Sobre</a></li>

                <li><a href="{{ route('servicos') }}">Serviços</a></li>

                <li><a href="{{ route('produto') }}">Produtos</a></li>

                <li><a href="{{ route('galeria') }}">Galeria</a></li>

                <li><a href="{{ route('contato') }}">Contato</a></li>
            </ul>

        </nav>
        <ul class="rede-social topozao">
            <li><a href="https://www.instagram.com/jhos_barbershop/" target="_blank"><img src="{{ asset('jho_barber/assets/instagram-24.png')}}" alt="Logo do instagram 60x60"></a></li>
            <li><a href="https://wa.me/5511958871348" target="_blank"><img src="{{ asset('jho_barber/assets/whatsapp-24.png')}}" alt="Logo do whatsapp 60x60"></a></li>
            <li><a href="https://www.facebook.com/jhosbarbershop/" target="_blank"><img src="{{ asset('jho_barber/assets/facebook-24.png')}}" alt="Logo do facebook 60x60"></a></li>
        </ul>

    </div>

</header>