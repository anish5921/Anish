<html>
<head>
    <style>
        .table{
            border: black solid 2px;
            border-collapse: collapse;
            width:300;
            height:120;        
        }
        .titulo_tabela{
            font-weight: bold;
        }
    </style>
</head>
<?php
    $total=0;

    $nome=$_POST['nome'];
    $data=$_POST['data'];
    $sexo=$_POST['sexo'];
    $orelha=$_POST['orelha'];
    
    $pergunta1=$_POST['radio1'];
    $pergunta2=$_POST['radio2'];
    $pergunta3=$_POST['radio3'];
    $pergunta4=$_POST['radio4'];
    $pergunta5=$_POST['radio5'];
    $pergunta6=$_POST['radio6'];
    $pergunta7=$_POST['radio7'];
    $pergunta8=$_POST['radio8'];
    $pergunta9=$_POST['radio9'];
    $pergunta10=$_POST['radio10'];
    $pergunta11=$_POST['radio11'];
    $pergunta12=$_POST['radio12'];
    $pergunta13=$_POST['radio13'];
    $pergunta14=$_POST['radio14'];
    $pergunta15=$_POST['radio15'];
  
  
    $total=$pergunta1+$pergunta2+$pergunta3+$pergunta4+$pergunta5+$pergunta6+$pergunta7+$pergunta8+$pergunta9+$pergunta10+$pergunta11+$pergunta12+$pergunta13+$pergunta14+$pergunta15;
    ?>
    
    <br><table class="table" border=2>
        <tr>
        <td class="titulo_tabela">Nome</td>
        <td><?php echo $nome?></td>
        </tr>
        
        <tr>
        <td class="titulo_tabela">Data de nascimento</td>
        <td><?php echo $data?></td>
        </tr>
        
        <tr>
        <td class="titulo_tabela">Sexo</td>
        <td><?php echo $sexo?></td>
        </tr>
        
        <tr>
        <td class="titulo_tabela">Tamanho da orelha</td>
        <td><?php echo $orelha?></td>
        </tr>
    
    </table>  <br>
  
    <?php

    
    if($total<=23){
         echo" 
         Parab�ns! seu estilo vida leva em conta a sa�de do planeta! Voc� sabe
equilibrar o uso dos recursos com sabedoria: se todos no planeta tivessem um estilo
de vida como o seu, conseguir�amos manter a vida na Terra sem esgotamento de
recursos. Que tal mobilizar mais pessoas e partilhar sua experi�ncia? Voc� pode
ajudar outras pessoas a encontrar um padr�o mais justo e sustent�vel tamb�m!";
         ?>
         <br><br><img src="vai.png"> <br><br>
         <br><audio controls>
       <source src="sad.mp3" type="audio/mpeg" autostart="true"> 
       </audio> 
         <?php     
    }
              
              
    if($total>=24 && $total<=44){
         echo"Sua pegada est� um pouco acima da capacidade do planeta. Vale a pena  
              reavaliar algumas op��es do seu cotidiano: se todos no planeta tivessem um estilo de  
              vida como o seu, precisar�amos de 2 (duas) Terras. Algumas mudan�as e ajustes
              podem lev�-lo a um estilo de vida mais sustent�vel, que traga menos impactos �  
              Natureza. Se voc� se juntar a outras pessoas pode ser mais f�cil!"; 
              ?>
         <br><br><img src="c.jpg">
         <br><audio controls>
         <source src="escapa.mp3" type="audio/mpeg" autostart="true">
         </audio> 
          <?php     
    }
               
    if($total>=45 && $total<=66){ 
         echo"Se todos no planeta tivessem um estilo de vida como o seu, seriam
necess�rias 3 (tr�s) Terras. Neste ritmo o planeta n�o vai ag�entar! Que tal fazer
uma reavalia��o dos seus h�bitos cotidianos hoje mesmo? D� uma olhada nas
sugest�es de como diminuir sua pegada e mobilizar mais pessoas!"; 
              ?>
         <br><br><img src="b.jpg"> 
          <br><audio controls>
       <source src="gu.mp3" type="audio/mpeg" autostart="true"> 
       </audio> 
          <?php     
    }  
              
    if($total>=67 && $total<=88){ 
         echo"Alerta total! Se todos no planeta tivessem um estilo de vida como o seu,
seriam necess�rias 4 (quatro) Terras. Sua pegada est� entre os padr�es mais
insustent�veis do mundo! � urgente reavaliar seu jeito de viver. Seu padr�o de
consumo e h�bitos de vida est�o causando danos � vida na Terra e amea�ando o
futuro. Mas n�o desanime, nunca � tarde para come�ar a mudar.";
              ?>
        <br><br><img src="safee.jpg"> 
         <br><audio controls>
       <source src="pass.mp3" type="audio/mpeg" autostart="true"> 
       </audio> 
         <?php     
    }  
         
?>
</html>