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
         Parabéns! seu estilo vida leva em conta a saúde do planeta! Você sabe
equilibrar o uso dos recursos com sabedoria: se todos no planeta tivessem um estilo
de vida como o seu, conseguiríamos manter a vida na Terra sem esgotamento de
recursos. Que tal mobilizar mais pessoas e partilhar sua experiência? Você pode
ajudar outras pessoas a encontrar um padrão mais justo e sustentável também!";
         ?>
         <br><br><img src="vai.png"> <br><br>
         <br><audio controls>
       <source src="sad.mp3" type="audio/mpeg" autostart="true"> 
       </audio> 
         <?php     
    }
              
              
    if($total>=24 && $total<=44){
         echo"Sua pegada está um pouco acima da capacidade do planeta. Vale a pena  
              reavaliar algumas opções do seu cotidiano: se todos no planeta tivessem um estilo de  
              vida como o seu, precisaríamos de 2 (duas) Terras. Algumas mudanças e ajustes
              podem levá-lo a um estilo de vida mais sustentável, que traga menos impactos à  
              Natureza. Se você se juntar a outras pessoas pode ser mais fácil!"; 
              ?>
         <br><br><img src="c.jpg">
         <br><audio controls>
         <source src="escapa.mp3" type="audio/mpeg" autostart="true">
         </audio> 
          <?php     
    }
               
    if($total>=45 && $total<=66){ 
         echo"Se todos no planeta tivessem um estilo de vida como o seu, seriam
necessárias 3 (três) Terras. Neste ritmo o planeta não vai agüentar! Que tal fazer
uma reavaliação dos seus hábitos cotidianos hoje mesmo? Dê uma olhada nas
sugestões de como diminuir sua pegada e mobilizar mais pessoas!"; 
              ?>
         <br><br><img src="b.jpg"> 
          <br><audio controls>
       <source src="gu.mp3" type="audio/mpeg" autostart="true"> 
       </audio> 
          <?php     
    }  
              
    if($total>=67 && $total<=88){ 
         echo"Alerta total! Se todos no planeta tivessem um estilo de vida como o seu,
seriam necessárias 4 (quatro) Terras. Sua pegada está entre os padrões mais
insustentáveis do mundo! É urgente reavaliar seu jeito de viver. Seu padrão de
consumo e hábitos de vida estão causando danos à vida na Terra e ameaçando o
futuro. Mas não desanime, nunca é tarde para começar a mudar.";
              ?>
        <br><br><img src="safee.jpg"> 
         <br><audio controls>
       <source src="pass.mp3" type="audio/mpeg" autostart="true"> 
       </audio> 
         <?php     
    }  
         
?>
</html>