<html>
<head>
     <style>
        h1{
            color:Red;
        }
        .title_tabela{
            background-color: black;
            color:white;
            font-weight: bold;
        }
        .tabela{
            border: black solid 4px;
            width:1000;
            height:120;        
        }
     </style>
</head>
<body>
<h1>P�gada Ecol�gica</h1>


<form action="pegada.php" method="post">
    Nome: <input type=text name="nome"><br><br>
    Data de nascimento: <input type=text name="data"><br><br>
    Sexo: 
    <select name="sexo">
        <option value=""></option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
        <option value="Outro">Outro</option>
        <option value="Prefiro n�o divulgar">Prefiro n�o divulgar</option>
    </select>
    <br><br>
    Tamanho das orelhas:<br>
    <input type="radio" name="orelha" value="S">S<br>
    
    <input type="radio" name="orelha" value="M">M<br>
    
    <input type="radio" name="orelha" value="L">L<br>

    <br>
    <br>
<table class="tabela">
<tr>
    <td class="title_tabela">1) Ao fazer compras no supermercado:</td> 
</tr>

    <tr><td><input type="radio" name="radio1" value="4"> Compro tudo que tenho vontade, sem prestar aten��o no pre�o, na marca ou na embalagem;   </td></tr>
    <tr><td><input type="radio" name="radio1" value="3"> Uso apenas o pre�o como crit�rio de escolha;   </td></tr>
    <tr><td><input type="radio" name="radio1" value="2"> Presto aten��o se os produtos de uma determinada marca s�o ligados a alguma empresa que n�o respeita o meio ambiente ou quest�es sociais;   </td></tr>
    <tr><td><input type="radio" name="radio1" value="1"> Procuro considerar pre�o e qualidade, al�m de escolher produtos que venham em embalagens recicl�veis e que respeitem crit�rios ambientais e sociais.   </td></tr>

</table><br><br>

<table class="tabela">
<tr>
    <td class="title_tabela">2) Entre os alimentos que normalmente voc� consome, que quantidade � pr�-preparada, embalada ou importada?</td> 
</tr>

    <tr><td><input type="radio" name="radio2" value="4"> Quase todos;   </td></tr>
    <tr><td><input type="radio" name="radio2" value="3"> Metade;</td></tr>
    <tr><td><input type="radio" name="radio2" value="2"> Um quarto;   </td></tr>
    <tr><td><input type="radio" name="radio2" value="1"> Muito poucos. A maior parte dos alimentos que consumo n�o � pr�-preparada nem embalada, tem origem org�nica e � produzida na regi�o onde vivo.   </td></tr>

</table><br><br>

<table class="tabela">
<tr>
    <td class="title_tabela">3) O que acontece com o lixo produzido na sua casa?</td> 
</tr>

    <tr><td><input type="radio" name="radio3" value="4"> N�o me preocupo muito com o lixo;</td></tr>
    <tr><td><input type="radio" name="radio3" value="3"> Tudo � colocado em sacos recolhidos pelo lixeiro, mas n�o fa�o a menor id�ia para onde vai;</td></tr>
    <tr><td><input type="radio" name="radio3" value="2"> O que � recicl�vel � separado;</td></tr>
    <tr><td><input type="radio" name="radio3" value="1"> O lixo seco � direcionado � reciclagem e o lixo org�nico, encaminhado para a compostagem (transforma��o em adubo).  </td></tr>

</table><br><br>

<table class="tabela">
<tr>
    <td class="title_tabela">4) Que eletrodom�sticos voc� utiliza (escolha a op��o que mais se pare�a com a situa��o de sua casa)?</td> 
</tr>

    <tr><td><input type="radio" name="radio4" value="4"> Geladeira, freezer, m�quina de lavar roupa/tanquinho e forno de microondas;</td></tr>
    <tr><td><input type="radio" name="radio4" value="3"> Geladeira e m�quina de lavar roupa/tanquinho;</td></tr>
    <tr><td><input type="radio" name="radio4" value="2"> Geladeira e forno microondas;</td></tr>
    <tr><td><input type="radio" name="radio4" value="1"> Geladeira.  </td></tr>

</table><br><br>

<table class="tabela">
<tr>
    <td class="title_tabela">5) Voc� considera, na sua escolha de compras de eletrodom�sticos e l�mpadas, informa��es referentes � efici�ncia energ�tica do produto (se o produto consome menos energia).</td> 
</tr>

    <tr><td><input type="radio" name="radio5" value="4"> N�o. Compro sempre as l�mpadas e os eletrodom�sticos que estiverem mais baratos;</td></tr>
    <tr><td><input type="radio" name="radio5" value="3"> Utilizo l�mpadas frias, mas n�o levo em considera��o a efici�ncia energ�tica de eletrodom�sticos;</td></tr>
    <tr><td><input type="radio" name="radio5" value="2"> Compro eletrodom�sticos que consomem menos energia e utilizo l�mpadas incandescentes(amarelas); </td></tr>
    <tr><td><input type="radio" name="radio5" value="1"> Sim. S� utilizo l�mpadas frias e compro os eletrodom�sticos que consomem menos energia.</td></tr>

</table><br><br>

<table class="tabela">
<tr>
    <td class="title_tabela">6) Voc� deixa luz, aparelhos de som, computadores ou televis�o ligados quando n�o est�o sendo utilizados?</td> 
</tr>

    <tr><td><input type="radio" name="radio6" value="4"> Sim. Deixo luzes acesas, computador e tv ligados, mesmo quando n�o estou no ambiente ou utilizando-os;</td></tr>
    <tr><td><input type="radio" name="radio6" value="3"> Deixo a luz dos c�modos ligada quando sei que em alguns minutos vou voltar ao local;</td></tr>
    <tr><td><input type="radio" name="radio6" value="2"> Deixo o computador ligado, mas desligo o monitor quando n�o estou utilizando; </td></tr>
    <tr><td><input type="radio" name="radio6" value="1"> N�o. Sempre desligo os aparelhos e l�mpadas quando n�o estou utilizando, ou deixo o computador em estado de hiberna��o (stand by).</td></tr>

</table><br><br>


<table class="tabela">
<tr>
    <td class="title_tabela">7) Quantas vezes por semana, em m�dia, voc� liga o ar condicionado em casa ou no trabalho?</td> 
</tr>

    <tr><td><input type="radio" name="radio7" value="4"> Praticamente todos os dias;</td></tr>
    <tr><td><input type="radio" name="radio7" value="3"> Entre tr�s e quatro vezes;</td></tr>
    <tr><td><input type="radio" name="radio7" value="2"> Entre uma e duas vezes por semana;</td></tr>
    <tr><td><input type="radio" name="radio7" value="1"> N�o tenho ar condicionado.</td></tr>

</table><br><br>

<table class="tabela">
<tr>
    <td class="title_tabela">8) Quanto tempo voc� leva, em m�dia, tomando banho diariamente?</td> 
</tr>

    <tr><td><input type="radio" name="radio8" value="4"> Mais de 20 minutos;</td></tr>
    <tr><td><input type="radio" name="radio8" value="3"> Entre 10 e 20 minutos;</td></tr>
    <tr><td><input type="radio" name="radio8" value="2"> Entre 10 e 5 minutos;</td></tr>
    <tr><td><input type="radio" name="radio8" value="1"> Menos de 5 minutos.</td></tr>

</table><br><br>

<table class="tabela">
<tr>
    <td class="title_tabela">9) Quando voc� escova os dentes:</td> 
</tr>

    <tr><td><input type="radio" name="radio9" value="4"> A torneira permanece aberta o tempo todo;</td></tr>
    <tr><td><input type="radio" name="radio9" value="1"> A torneira � aberta apenas para molhar a escova e na hora de enxaguar a boca.</td></tr>

</table><br><br>

<table class="tabela">
<tr>
    <td class="title_tabela">10) Quantos habitantes moram em sua cidade?</td> 
</tr>

    <tr><td><input type="radio" name="radio10" value="8"> Acima de 500 mil pessoas;</td></tr>
    <tr><td><input type="radio" name="radio10" value="6"> De 100 mil a 500 mil pessoas;</td></tr>
    <tr><td><input type="radio" name="radio10" value="4"> De 20 mil a 100 mil pessoas;</td></tr>
    <tr><td><input type="radio" name="radio10" value="2"> Menos de 20 mil pessoas.</td></tr>

</table><br><br>

<table class="tabela">
<tr>
    <td class="title_tabela">11) Quantas pessoas vivem na sua casa ou apartamento?</td> 
</tr>

    <tr><td><input type="radio" name="radio11" value="8"> 1 pessoa;</td></tr>
    <tr><td><input type="radio" name="radio11" value="6"> 2 pessoas;</td></tr>
    <tr><td><input type="radio" name="radio11" value="4"> 3 pessoas;</td></tr>
    <tr><td><input type="radio" name="radio11" value="2"> 4 pessoas ou mais.</td></tr>

</table><br><br>

<table class="tabela">
<tr>
    <td class="title_tabela">12) Qual � a �rea da sua casa/apartamento?</td> 
</tr>

    <tr><td><input type="radio" name="radio12" value="8"> 170 metros quadrados ou mais;</td></tr>
    <tr><td><input type="radio" name="radio12" value="6"> De 100 a 170 metros quadrados (3 quartos);</td></tr>
    <tr><td><input type="radio" name="radio12" value="4"> De 50 a 100 metros quadrados (2 quartos);</td></tr>
    <tr><td><input type="radio" name="radio12" value="2"> 50 metros quadrados ou menos (1 quarto).</td></tr>

</table><br><br>

<table class="tabela">
<tr>
    <td class="title_tabela">13) Com que freq��ncia voc� consome produtos de origem animal(carne, peixe, ovos, latic�nios)?</td> 
</tr>

    <tr><td><input type="radio" name="radio13" value="8"> Como carne todos os dias;</td></tr>
    <tr><td><input type="radio" name="radio13" value="6"> Como carne uma ou duas vezes por semana;</td></tr>
    <tr><td><input type="radio" name="radio13" value="4"> Como carne raramente, mas ovos/latic�nios quase todos os dias;</td></tr>
    <tr><td><input type="radio" name="radio13" value="2"> Nunca (vegetariano).</td></tr>

</table><br><br>

<table class="tabela">
<tr>
    <td class="title_tabela">14) Qual o tipo de transporte que voc� mais utiliza?</td> 
</tr>

    <tr><td><input type="radio" name="radio14" value="8"> Carro � meu �nico meio de transporte e, na maioria das vezes, ando sozinho;</td></tr>
    <tr><td><input type="radio" name="radio14" value="6"> Tenho carro, mas procuro fazer a p� os percursos mais curtos e privilegio o uso de transporte coletivo sempre que poss�vel;</td></tr>
    <tr><td><input type="radio" name="radio14" value="4"> N�o tenho carro e uso transporte coletivo;</td></tr>
    <tr><td><input type="radio" name="radio14" value="2"> N�o tenho carro, uso transporte coletivo quando necess�rio, mas ando muito a p� ou de bicicleta.</td></tr>

</table><br><br>

<table class="tabela">
<tr>
    <td class="title_tabela">15) Por ano, quantas horas voc� gasta andando de avi�o?</td> 
</tr>

    <tr><td><input type="radio" name="radio15" value="12"> Acima de 50 horas;</td></tr>
    <tr><td><input type="radio" name="radio15" value="9"> 25 horas;</td></tr>
    <tr><td><input type="radio" name="radio15" value="6"> 10 horas;</td></tr>
    <tr><td><input type="radio" name="radio15" value="3"> Nunca ando de avi�o.</td></tr>

</table><br><br>

<input type=submit>
</form>
</body>
</html>