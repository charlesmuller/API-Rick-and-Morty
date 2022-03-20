## Criado em PHP por Charles Müller da Silva ##

- Para executar em windows:
1 - Baixar xampp (https://www.apachefriends.org/pt_br/download.html);
2 - No xampp ativar o apache;
3 - Inserir os arquivos clonados do github dentro da pasta htdoc que está dentro da pasta onde o xampp foi instalado no pc (geralmente no disco C:);
4 - Abrir o navegador em localhost/ pasta-onde-estão-os-arquiovos e vai rodar.

- Para executar em linux:
1 - Clonar o repositório do git;
2 - Rodar no terminal o comando (inserir comando aqui) dentro do diretório onde foi clonado a aplicação;
3 - Abrir localhost e a aplicação vai rodar.






####################
Novas implementações no app:

- Não é possível trocar de personagem pela interface;
- Não puxa os episódios que os personagem estão automaticamente, apenas apresenta um episódio qualquer que foi setado no código;
- Filtra pelo gênero do personagem mas na troca no id no código é necessário saber o id do personagem para apresentar na tela;
- Não puxa mais do que uma página da api por vez (é preciso ir até a variável $url e alterar a "page" para 2 ou 3... para pegar 
outras páginas;