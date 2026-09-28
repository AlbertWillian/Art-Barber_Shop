document.addEventListener('DOMContentLoaded', () => {
    // Menu Hambúrguer para Dispositivos Móveis
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    }

    // Scroll Suave para os Links Internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');

            // Ignora se for apenas '#'
            if (targetId === '#') return;

            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                e.preventDefault();

                // Fecha o menu mobile ao clicar em um link
                if (navMenu && navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                }

                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});


// const inputTexto = document.getElementById('nome');

// inputTexto.addEventListener('input', (e) => {
//     // Remove tudo o que NÃO for letra (A-Z) ou espaço
//     e.target.value = e.target.value.replace(/[^a-zA-ZÀ-ÿ\s]/g, '');
// })

// Função para redirecionar para o WhatsApp
function contratarPlano(nomePlano) {
    //  o número do WhatsApp com Código do País (55) + DDD + Número
    const numeroWhatsapp = "5575999999999"; 

    // Cria a mensagem personalizada
    const mensagem = encodeURIComponent(`Olá! Tenho interesse em contratar o ${nomePlano}. Como posso prosseguir?`);

    // Redireciona para o WhatsApp numa nova aba
    window.open(`https://wa.me/${numeroWhatsapp}?text=${mensagem}`, '_blank');
}


// Função que formata EM TEMPO REAL enquanto o usuário digita
function formatarAoDigitar(input) {
  let valor = input.value;

  // Garante que o "+55 " nunca seja apagado
  if (!valor.startsWith("+55 ")) {
    valor = "+55 " + valor.replace(/\D/g, "");
  }

  // Pega apenas os números após o +55
  let numeros = valor.substring(4).replace(/\D/g, "");

  // Limita o máximo a 11 dígitos (2 do DDD + 9 do número)
  if (numeros.length > 11) {
    numeros = numeros.slice(0, 11);
  }

  // Máscara progressiva durante a digitação
  if (numeros.length > 6) {
    // Enquanto digita, coloca o hífen na posição do celular (9XXXX-XXXX)
    numeros = numeros.replace(/^(\d{2})(\d{5})(\d{0,4})$/, "($1) $2-$3");
  } else if (numeros.length > 2) {
    numeros = numeros.replace(/^(\d{2})(\d{0,5})$/, "($1) $2");
  } else if (numeros.length > 0) {
    numeros = numeros.replace(/^(\d{0,2})$/, "($1");
  }

  input.value = "+55 " + numeros;
}

// Ajusta a posição do hífen se for um telefone FIXO
function ajustarAoTerminar(input) {
  let valor = input.value;
  let numeros = valor.substring(4).replace(/\D/g, "");

  // Se o usuário digitou exatamente 10 números 
  if (numeros.length === 10) {
    // Ajusta o hífen para o formato correto de fixo: (75) XXXX-XXXX
    numeros = numeros.replace(/^(\d{2})(\d{4})(\d{4})$/, "($1) $2-$3");
    input.value = "+55 " + numeros;
  }
}

// Validação antes de enviar o formulário
function validarEnvio(formulario) {
  const campo = document.getElementById('telefone');
  // O tamanho mínimo aceitável é 18 (fixo: +55 (75) 3333-3333)
  if (campo.value.length < 18) {
    alert("Por favor, preencha o número de telefone completo com o DDD.");
    campo.focus();
    return false;
  }
  return true;
}
