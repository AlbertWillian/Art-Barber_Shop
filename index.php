<?php
$planos = [
    [
        'nome' => 'Plano Essencial',
        'precos' => [
            'Corte' => 'R$ 94,99',
            'Barba' => 'R$ 109,99',
            'Corte e Barba' => 'R$ 169,99'
        ],
        'recursos' => [
            ['texto' => '10% Desconto Produtos', 'ativo' => true],
            ['texto' => 'Desconto Serviços Extras', 'ativo' => true],
            ['texto' => 'Desconto Empresas Parceiras', 'ativo' => true],
            ['texto' => 'Horário Exclusivo', 'ativo' => true],
            ['texto' => 'Brindes', 'ativo' => true],
        ]
    ],
    [
        'nome' => 'Plano Flex',
        'precos' => [
            'Corte (Seg a Qua)' => 'R$ 74,99',
            'Barba (Seg a Qua)' => 'R$ 89,99',
            'Corte e Barba (Seg a Qui)' => 'R$ 139,99'
        ],
        'recursos' => [
            ['texto' => '10% Desconto Produtos', 'ativo' => true],
            ['texto' => 'Desconto Serviços Extras', 'ativo' => true],
            ['texto' => 'Desconto Empresas Parceiras', 'ativo' => true],
            ['texto' => 'Horário Exclusivo', 'ativo' => false],
            ['texto' => 'Brindes', 'ativo' => false],
        ]
    ],
    [
        'nome' => 'Plano Exclusive',
        'precos' => [
            'Corte' => 'R$ 159,99',
            'Barba' => 'R$ 179,99',
            'Corte e Barba' => 'R$ 299,99'
        ],
        'recursos' => [
            ['texto' => '15% Desconto Produtos', 'ativo' => true],
            ['texto' => 'Desconto Serviços Extras', 'ativo' => true],
            ['texto' => 'Desconto Empresas Parceiras', 'ativo' => true],
            ['texto' => 'Horário Exclusivo', 'ativo' => true],
            ['texto' => 'Brindes', 'ativo' => true],
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ART BarberShop</title>
    <!-- Fonte para Ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- CSS Próprio -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navegação -->
    <header class="header">
        <div class="nav-container">
            <nav class="nav-menu" id="navMenu">
                <a href="#quem-somos">Quem somos</a>
                <a href="#planos">Planos</a>
                <a href="servicos.php">Serviços</a>
                <a href="porque-assinar.php">Porque assinar?</a>
                <a href="contato.php">Contato</a>
            </nav>
            <div class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!--Banner Principal -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="logo">
                <span class="logo-art">ART</span>
                <span class="logo-barber">BarberShop</span>
            </div>
        </div>
    </section>

    <!-- Seção Quem Somos -->
    <section id="quem-somos" class="section quem-somos">
        <div class="container">
            <h2 class="section-title">
                <span class="thin">QUEM</span><br>
                <span class="highlight">SOMOS</span>
            </h2>

            <div class="description">
                <p>
                    Uma barbearia dedicada a oferecer serviços de corte de cabelo e barba para homens. Nossa equipe de barbeiros experientes está comprometida em proporcionar um atendimento de qualidade, mantendo-se atualizada com as tendências e técnicas mais recentes. Além disso, criamos um ambiente acolhedor e descontraído para que nossos clientes se sintam confortáveis durante sua visita. Nosso objetivo é ajudar os homens a se sentirem <strong>confiantes e com uma aparência impecável</strong>.
                </p>
                <p>
                    Entendemos que a autoconfiança é fundamental para o sucesso em todas as áreas da vida. É por isso que nos dedicamos a ajudar os homens a se sentirem confiantes e preparados para enfrentar qualquer desafio que surja em seu caminho. Na nossa barbearia, não apenas transformamos aparências, mas também <strong>transformamos vidas</strong>.
                </p>
            </div>

            <!-- Missão, Visão, Valores -->
            <div class="mvv-grid">
                <div class="mvv-card">
                    <i class="fas fa-bullseye icon"></i>
                    <h3>MISSÃO</h3>
                    <p>Oferecer serviços de alta qualidade em cuidados masculinos, proporcionando uma experiência única e personalizada, com foco em bem-estar, estilo e satisfação dos clientes.</p>
                </div>

                <div class="mvv-card">
                    <i class="fas fa-eye icon"></i>
                    <h3>VISÃO</h3>
                    <p>Nosso objetivo é ser referência reconhecida e preferida da região, destacando-se pela excelência no atendimento, técnicas inovadoras e compromisso com a tradição.</p>
                </div>

                <div class="mvv-card">
                    <i class="fas fa-gem icon"></i>
                    <h3>VALORES</h3>
                    <p>
                        Excelência no atendimento<br>
                        Profissionalismo<br>
                        Tradição e inovação<br>
                        Ambiente acolhedor<br>
                        Higiene e segurança
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Planos por Assinatura -->
    <section id="planos" class="section planos">
        <div class="container">
            <h2 class="section-title">
                <span class="thin">PLANOS POR</span><br>
                <span class="highlight">ASSINATURA</span>
            </h2>

            <div class="planos-grid">
                <?php foreach ($planos as $plano): ?>
                    <div class="plano-card">
                        <h3 class="plano-titulo"><?php echo $plano['nome']; ?></h3>
                        
                        <div class="precos-list">
                            <?php foreach ($plano['precos'] as $servico => $preco): ?>
                                <div class="preco-item">
                                    <span><?php echo $servico; ?></span>
                                    <strong><?php echo $preco; ?></strong>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <hr class="divider">

                        <ul class="recursos-list">
                            <?php foreach ($plano['recursos'] as $recurso): ?>
                                <li class="<?php echo $recurso['ativo'] ? 'ativo' : 'inativo'; ?>">
                                    <i class="fas <?php echo $recurso['ativo'] ? 'fa-check' : 'fa-times'; ?>"></i>
                                    <span><?php echo $recurso['texto']; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <button class="btn-contratar" onclick="contratarPlano('<?php echo $plano['nome']; ?>')">Contratar</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
                                
    <script src="script.js"></script>
</body>
</html>