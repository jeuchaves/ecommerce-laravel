## Sobre o projeto
Este é um projeto de um ecommerce utilizando a framework Laravel para o meu aprendizado.

## Detalhes da aplicação
A Aplicação foi feita com PHP 8.1, Composer e Laravel, portanto é necessário que tenha esses componentes instalados em sua máquina ou no servidor.<br>
O projeto conta com uma página home carregada pelo Controller apresentando em seu header as categorias da loja criadas automaticamente usando a fábrica e um conjunto pequeno de produtos em destaque. Cada categoria conta com o mesmo header recarregado pelo template em soma de uma grade de produtos que coincidem com a categoria. No entanto, os produtos podem alterar dependente do usuário logado haja vista que só são visíveis os produtos registrados pelo próprio usuário, isso foi proveniente do uso das Políticas do Laravel como uma regra de negócio para fins de testes.<br>
O projeto também conta com uma página do produto como modelo para a apresentação de cada um dos produtos e um carrinho com botões de edição e remoção assim como qualquer e-commerce tem.<br>
Por fim, o projeto conta com o dashboard robusto utilizando o Chart.js para apresentar relatório de vendas, quantidade de usuários. Tudo isso é possível através de um sistema de autenticação disponível pelo Laravel que permite o login seguro a plataforma.<br>

## O que eu aprendi?
Aprendi os comandos essencias da framework como o caso do **php artisan** para gerir alguns processos de criação automática de modelos, resources, factories tabelas no banco de dados.
- A arquitetura do software é baseado em MVC e por felicidade essa estrutura é muito conhecida na grade curricular da minha faculdade e portanto foi bem tranquilo entender o funcionamento.
- O template engine Blade é excelente para o desenvolvimento de views modernas e responsivas haja vista sua enorme flexibilidade de utilizar seus comandos diretamente na página de visualização.
- Acerca do sistemas de rotas da framework percebi que é muito intuitiva sua utilização haja vista que com um pouco de conhecimento de rotas préviamente ditas se tornam uma mão na roda o uso delas adjunto do conceito de tageamento e nomeação.
- Me aprofundei um pouco nas políticas do Laravel mas entendi seu funcionamento como regra de modelo de negócio abstratamente.
