<header class="topo" id='topoFixo'>

    <div class="site">

        <h1>Jho's Barbershop</h1>
        <button class="abrir-menu"></button>
        <nav class="menu">
            <button class="fechar-menu"></button>
            <?php $pgAtual = basename($_SERVER['PHP_SELF']); ?>

            <!-- nav>ul>li*6>a+tab -->
            <ul>
                <li><a class="<?php if ($pgAtual == 'index.php')
                                    echo 'menu-ativo'; ?>" href="index.php">Home</a></li>

                <li><a class="<?php if ($pgAtual == 'sobre.php')
                                    echo 'menu-ativo'; ?>" href="sobre.php">Sobre</a></li>

                <li><a class="<?php if ($pgAtual == 'servicos.php')
                                    echo 'menu-ativo'; ?>" href="servicos.php">Serviços</a></li>

                <li><a class="<?php if ($pgAtual == 'produtos.php')
                                    echo 'menu-ativo'; ?>" href="produtos.php">Produtos</a></li>

                <li><a class="<?php if ($pgAtual == 'galeria.php')
                                    echo 'menu-ativo'; ?>" href="galeria.php">Galeria</a></li>

                <li><a class="<?php if ($pgAtual == 'contato.php')
                                    echo 'menu-ativo'; ?>" href="contato.php">Contato</a></li>
            </ul>

        </nav>
        <ul class="rede-social topozao">
            <li><a href="https://www.instagram.com/jhos_barbershop/" target="_blank"><img src="assets/instagram-24.png" alt="Logo do instagram 60x60"></a></li>
            <li><a href="https://wa.me/5511958871348" target="_blank"><img src="assets/whatsapp-24.png" alt="Logo do whatsapp 60x60"></a></li>
            <li><a href="https://www.facebook.com/jhosbarbershop/" target="_blank"><img src="assets/facebook-24.png" alt="Logo do facebook 60x60"></a></li>
        </ul>

    </div>

</header>