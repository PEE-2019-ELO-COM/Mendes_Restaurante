




# Serviço de Restaurante :plate_with_cutlery:

<img src="imagens/TelaInicial.jpg" width="100%" alt="Tela Inicial">

## Motivação

<p>Dos restaurantes que ja frequentei, a maioria dele possuía um garçom que ignorava as pessoas para não ser chamado ou então que prestava um mal atendimento.</p>
<p>Desta forma, surgiu a ideia de criar uma plataforma onde os clientes pudessem ter a opção de pedir a comida por algum aparelho sem a necessidade de um garçom vir a mesa para isso ou ate mesmo chamar o garçom por este mesmo aparelho</p>

## Implementação
<p>A linguagem escolhida para implementar esta plataforma foi a Web, sendo o principal motivo desta escolha o meu conhecimento prévio de como programar a interface gráfica, pois devido ao curto tempo e diversas outras demandas, não teria como aprender muita coisa para implementar as mínimas funcionalidades que desejava</p>

## Interface Gráfica
### Aba do cliente
<ul>Aqui nós temos a interface gráfica do cliente, onde ele pode:
<li>A partir de um cardápio completo do restaurante, escolher a quantidade</li>
<li>Ver quantos pedidos ja realizou e o total da sua conta ate o momento</li>
<li>Chamar o garçom para que seja realizado um atendimento pessoal</li>
<li>Pedir para fechar sua conta</li>
</ul>
<bdi>Segue imagens</bdi>

<img src="imagens/InterfaceGraficaCliente1.png">
<br>
<img src="imagens/InterfaceGraficaCliente2.png">


### Aba do Controle de Pedidos
<ul>Aqui nós temos a interface do operador do controle de pedidos, onde ele pode:
<li>Visualizar na mesma hora o produto pedido pelo cliente e sua quantidade, onde estará indicado em qual mesa foi feito o pedido</li>
<li>Emitir que o pedido ja esta pronto</li>
<li>Caso todos os pedidos ja tenham sido emitidos, podemos clicar numa opção de finalizar o trabalho do dia, o qual salvará um arquivo com registro de todos os pedidos naquele dia e reproduzira na tela a quantidade de pedidos no dia e o quanto de dinheiro entrou</li>
</ul>

<img src="imagens/InterfaceGraficaDono1.png">
<br>
<img src="imagens/InterfaceGraficaDono2.png">
<br>
<img src="imagens/InterfaceGraficaDono3.png">

## Portabilidade
<p>Apesar de ter colocado um exemplo com Restaurante Japones e 2 mesas, podemos facilmente adaptar para quantas mesas quisermos e qualquer tipo de restaurante</p>

## Tutorial para utilizar o projeto
<ol>Para poder utilizar este projeto tem que seguir o seguinte passo-a-passo:
<li>Acesse o este <a href="https://www.apachefriends.org/pt_br/download.html">link</a> e instale o programa</li>
<li>No terminal do SQL digite os seguintes <a href="Tutorial/DB.txt">códigos</a> que estão em um bloco de notas
<li>Agora é so utilizar o <ins color="red">mesa1.php</ins> e <ins>mesa2.php</ins> para controlar a aba do cliente e <ins>dono.php</ins> para controlar a aba do controle de pedidos
