<html>
<body>

<?php
    $Total=0;  

    $Nome=$_POST['nome'];

    
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
    
    $Total=$pergunta1+$pergunta2+$pergunta3+$pergunta4+$pergunta5+$pergunta6+$pergunta7+$pergunta8+$pergunta9+$pergunta10;
    echo "Nome $Nome <br>";
echo "Resultado $Total <br>";
switch($Total){
    case $Total>0 && $Total<=8;
    echo "Reprovado <br>";
        ?><br><img src="sad.gif"> <br>
        <audio controls>
       <source src="fail.mp3" type="audio/mpeg" autostart="true"> 
       </audio> 
        <?php
        break;
        
        case $Total <=9;
        echo "Aprovado ! <br>";
        ?>   <br> <img src="happy.gif">  <br>
        <br><audio controls>
       <source src="pass.mp3" type="audio/mpeg" autostart="true"> 
       </audio> 
         <?php
         break;
         
        case $Total <=10;
        echo "Aprovado, com pontuação máxima ! <br>";
        
       ?> <br><img src="happy.gif">  <br>
       <br><audio controls>
       <source src="pass.mp3" type="audio/mpeg" autostart="true"> 
       </audio>     
       <?php

}

?>
</body>
</html>