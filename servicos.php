<?php
$servicos = [
    [
        'icone' => 'fa-scissors',
        'titulo' => 'Corte Masculino',
        'descricao' => 'Corte clássico ou moderno com tesoura e máquina, lavagem inclusa e finalização com pomada.',
        'duracao' => '40 min',
        'preco' => 'R$ 50,00'
    ],
    [
        'icone' => 'fa-user-tie',
        'titulo' => 'Barboterapia',
        'descricao' => 'Modelagem de barba com toalha quente, óleos essenciais, massagem facial e pós-barba.',
        'duracao' => '35 min',
        'preco' => 'R$ 45,00'
    ],
    [
        'icone' => 'fa-crown',
        'titulo' => 'Combo ART (Corte + Barba)',
        'descricao' => 'O pacote completo para renovar o visual. Inclui lavagem especial, corte, barba completa e bebidas.',
        'duracao' => '1h 15min',
        'preco' => 'R$ 85,00'
    ],
    [
        'icone' => 'fa-spray-can',
        'titulo' => 'Pigmentação / Disfarce',
        'descricao' => 'Cobertura de fios brancos ou realce dos contornos do cabelo e da barba com acabamento natural.',
        'duracao' => '30 min',
        'preco' => 'R$ 35,00'
    ],
    [
        'icone' => 'fa-eye',
        'titulo' => 'Design de Sobrancelha',
        'descricao' => 'Limpeza e alinhamento do desenho das sobrancelhas com navalha ou pinça.',
        'duracao' => '15 min',
        'preco' => 'R$ 20,00'
    ],
    [
        'icone' => 'fa-pump-soap',
        'titulo' => 'Tratamento Capilar',
        'descricao' => 'Hidratação e reconstrução profunda para cabelos ressecados ou danificados.',
        'duracao' => '25 min',
        'preco' => 'R$ 40,00'
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços - ART BarberShop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Ficheiro de Estilos CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Barra de Navegação -->
    <header class="header">
        <div class="nav-container">
            <nav class="nav-menu" id="navMenu">
                <a href="index.php#quem-somos">Quem somos</a>
                <a href="index.php#planos">Planos</a>
                <a href="servicos.php" class="active">Serviços</a>
                <a href="porque-assinar.php">Porque assinar?</a>
                <a href="contato.php">Contato</a>
            </nav>
            <div class="menu-toggle" id="menuToggle" aria-label="Abrir menu" role="button" tabindex="0">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <div class="header-spacing"></div>

    <!-- Seção Serviços -->
    <section id="servicos" class="section servicos">
        <div class="container">
            <h2 class="section-title">
                <span class="thin">NOSSOS</span><br>
                <span class="highlight">SERVIÇOS</span>
            </h2>

            <div class="servicos-grid">
                <?php foreach ($servicos as $servico): ?>
                    <div class="servico-card">
                        <div class="servico-header">
                            <i class="fas <?php echo $servico['icone']; ?> servico-icon"></i>
                            <span class="servico-duracao">
                                <i class="far fa-clock"></i> <?php echo $servico['duracao']; ?>
                            </span>
                        </div>

                        <h3><?php echo $servico['titulo']; ?></h3>
                        <p class="servico-desc"><?php echo $servico['descricao']; ?></p>

                        <div class="servico-footer">
                            <span class="servico-preco"><?php echo $servico['preco']; ?></span>
                            <a href="https://wa.me/5575999999999?text=Olá,%20gostaria%20de%20agendar%20o%20serviço:%20<?php echo urlencode($servico['titulo']); ?>" 
                               target="_blank" 
                               class="btn-agendar">
                               Agendar
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <script src="script.js"></script>

</body>
</html>