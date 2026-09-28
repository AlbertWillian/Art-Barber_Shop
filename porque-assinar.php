<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porque Assinar? - ART BarberShop</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Barra de Navegação -->
    <header class="header">
        <div class="nav-container">
            <nav class="nav-menu" id="navMenu">
                <a href="index.php#quem-somos">Quem somos</a>
                <a href="index.php#planos">Planos</a>
                <a href="servicos.php">Serviços</a>
                <a href="porque-assinar.php" class="active">Porque assinar?</a>
                <a href="contato.php">Contato</a>
            </nav>
            <div class="menu-toggle" id="menuToggle" aria-label="Abrir menu" role="button" tabindex="0">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <div class="header-spacing"></div>

    <!-- Seção Porque Assinar -->
    <section id="porque-assinar" class="section porque-assinar">
        <div class="container">
            <h2 class="section-title">
                <span class="thin">PORQUE SER UM</span><br>
                <span class="highlight">ASSINANTE?</span>
            </h2>

            <!-- Icones -->
            <div class="vantagens-grid">
                <div class="vantagem-card">
                    <i class="fas fa-piggy-bank vantagem-icon"></i>
                    <h3>Economia Real</h3>
                    <p>Se corta o cabelo ou faz a barba mais de 2 vezes por mês, o plano paga-se a si próprio. Poupe até 40% no final do mês.</p>
                </div>

                <div class="vantagem-card">
                    <i class="fas fa-user-ninja vantagem-icon"></i>
                    <h3>Visual Sempre Novo</h3>
                    <p>Esqueça esperar o cabelo crescer para cortar. Com a assinatura, pode manter o degradê e a barba alinhados semanalmente.</p>
                </div>

                <div class="vantagem-card">
                    <i class="fas fa-star vantagem-icon"></i>
                    <h3>Atendimento VIP</h3>
                    <p>Os assinantes têm acesso a horários exclusivos na agenda e atendimento prioritário com os melhores barbeiros.</p>
                </div>

                <div class="vantagem-card">
                    <i class="fas fa-tags vantagem-icon"></i>
                    <h3>Descontos Exclusivos</h3>
                    <p>Receba até 15% de desconto na compra de produtos capilares, pomadas, óleos de barba e tratamentos especiais.</p>
                </div>
            </div>

            <!-- Tabela Comparativa -->
            <div class="comparativo-box">
                <h3 class="comparativo-titulo">VEJA A DIFERENÇA NO SEU BOLSO</h3>
                <div class="comparativo-grid">
                    <div class="comparativo-card sem-assinatura">
                        <h4>SEM ASSINATURA</h4>
                        <ul>
                            <li><i class="fas fa-times"></i> 4 Cortes no mês: <strong>R$ 200,00</strong></li>
                            <li><i class="fas fa-times"></i> Sem desconto em produtos</li>
                            <li><i class="fas fa-times"></i> Pagamento a cada visita</li>
                            <li><i class="fas fa-times"></i> Sujeito a filas e espera</li>
                        </ul>
                        <div class="total-gasto">Gasto Médio: <span>R$ 200/mês</span></div>
                    </div>

                    <div class="comparativo-card com-assinatura">
                        <div class="badge-recomendado">RECOMENDADO</div>
                        <h4>COM ASSINATURA</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Cortes e Barba Ilimitados/Frequentes</li>
                            <li><i class="fas fa-check"></i> Até 15% de desconto em produtos</li>
                            <li><i class="fas fa-check"></i> Mensalidade Fixa e Sem Surpresas</li>
                            <li><i class="fas fa-check"></i> Agendamento Prioritário</li>
                        </ul>
                        <div class="total-gasto destaque">Plano a partir de: <span>R$ 94,99/mês</span></div>
                    </div>
                </div>

                <div class="cta-container">
                    <a href="index.php#planos" class="btn-escolher-plano">Escolher o Meu Plano Agora</a>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>

</body>
</html>