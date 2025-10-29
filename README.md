# 🧮 Calculadora de IMC (PHP + HTML)

## 📘 Descrição
Uma calculadora simples de IMC (Índice de Massa Corporal) construída com PHP e HTML para fins educacionais.  
O sistema recebe o peso e a altura do usuário, calcula o IMC e retorna a classificação (Magreza, Saudável, Sobrepeso, Obesidade, etc.) com base nos critérios da Organização Mundial da Saúde.

Este repositório é ideal para quem está aprendendo PHP e quer ver um exemplo prático de processamento de formulário, validação básica e exibição de resultados.

---

## ✨ Principais funcionalidades
- Recebe peso (kg) e altura (m ou cm) via formulário HTML.
- Calcula o IMC e apresenta a classificação e o resultado formatado.
- Validação básica de entrada (números positivos, conversão de cm para metros).
- Layout simples e fácil de entender para estudar o fluxo de dados entre HTML e PHP.

---

## 🧰 Tecnologias
- PHP 8.2+ (recomendado 8.3+)
- HTML5 / CSS3 / JavaScript (opcional para melhorias de UX)

---

## ✅ Pré-requisitos
Antes de rodar o projeto localmente, instale:
1. PHP 8.2 ou superior  
   🔗 https://www.php.net/downloads
2. (Opcional) XAMPP / WAMP / MAMP para ambiente com Apache + PHP  
   - XAMPP: https://www.apachefriends.org/
3. (Opcional) Visual Studio Code ou outro editor de sua preferência  
   🔗 https://code.visualstudio.com/

---

## 🚀 Executando localmente

Opção A — Usando o servidor embutido do PHP (recomendado para testes rápidos)
1. Abra o terminal na pasta raiz do projeto (onde está o arquivo index.php).
2. Execute:
   php -S localhost:8000
3. Acesse no navegador:
   http://localhost:8000

Opção B — Usando XAMPP/WAMP/MAMP
1. Copie a pasta do projeto para a pasta `www` (XAMPP) ou `htdocs` conforme sua instalação.
2. Inicie o Apache pelo painel do XAMPP/WAMP/MAMP.
3. Acesse no navegador:
   http://localhost/<nome-da-pasta-do-projeto>/

---

## 🧭 Como usar
1. Abra a página no navegador.
2. Insira o peso em quilogramas (ex.: 68.5).
3. Insira a altura em metros (ex.: 1.75) ou em centímetros (ex.: 175). O sistema converte automaticamente quando necessário.
4. Clique em "Calcular" — o IMC e a classificação serão exibidos.

Exemplo de interpretação:
- < 18.5 — Magreza
- 18.5 — 24.9 — Saudável
- 25.0 — 29.9 — Sobrepeso
- ≥ 30.0 — Obesidade

(A classificação acima segue os parâmetros amplamente utilizados pela OMS; ajuste conforme necessidade.)

---

## ✅ Boas práticas e validações recomendadas
- Validar no servidor: garantir que peso e altura sejam números positivos.
- Normalizar entrada: aceitar vírgula e ponto como separadores decimais (ex.: 1,75 ou 1.75).
- Tratar entradas vazias e mostrar mensagens de erro amigáveis ao usuário.
- Sanitizar dados caso planeje estender o projeto (ex.: armazenar resultados).

---

## 💡 Possíveis melhorias (próximos passos)
- Adicionar testes unitários (PHPUnit) para a função de cálculo do IMC.
- Tornar o layout responsivo e melhorar a experiência com JavaScript.
- Suportar múltiplas classificações regionais ou personalizáveis.
- Adicionar Dockerfile para ambientes reproduzíveis.
- Registrar histórico de cálculos com persistência (SQLite / MySQL) — opcional.

---

## 📁 Estrutura sugerida do projeto
- index.php — página principal com formulário.
- calcular.php — lógica do cálculo (ou lógica integrada ao index).
- assets/
  - css/
  - js/
  - img/

A estrutura real pode variar; ajuste conforme sua implementação atual.

---

## 🧾 Licença
Licença MIT — sinta-se à vontade para usar, modificar e distribuir. (Adicione um arquivo LICENSE se desejar.)

---

## 🤝 Contribuições
Contribuições são bem-vindas! Abra issues para melhorias ou correções e envie pull requests com descrições claras das mudanças.

---

## 📬 Contato
Desenvolvido por JulianaForbici.  
Se quiser entrar em contato: abra uma issue neste repositório ou adicione seu e-mail/perfil para contato direto.
