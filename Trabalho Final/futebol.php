
<?php
    $nome=$_POST['nome'];
    $total=0;

    
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
    
    if($pergunta1=="true"){
       $total++; 
    }
    
    if($pergunta2=="true"){
       $total++; 
    }
    
    if($pergunta3=="true"){
       $total++; 
    }
    
    if($pergunta4=="true"){
       $total++; 
    }
    
    if($pergunta5=="true"){
       $total++; 
    }
    
    if($pergunta6=="true"){
       $total++; 
    }
    
    if($pergunta7=="true"){
       $total++; 
    }
    
    if($pergunta8=="true"){
       $total++; 
    }
    
    if($pergunta9=="true"){
       $total++; 
    }
    
    if($pergunta10=="true"){
       $total++; 
    }
    $total=$pergunta1+$pergunta2+$pergunta3+$pergunta4+$pergunta5+$pergunta6+$pergunta7+$pergunta8+$pergunta9+$pergunta10;
    
    switch($total){
    case $total>0 && $total<=5;
    echo "Dedica te á pesca!";
        ?> <br><br><br><img src="sad.gif"> <br>
        <audio controls>
       <source src="fail.mp3" type="audio/mpeg" autostart="true"> 
       </audio> 
        <?php
        break;
        
        case $total == 6 ;
        echo "Vai para casa estudar! <br>";
        ?>   <br> <br><br><img src="vai.jpg">  <br>
        <br><audio controls>
       <source src="emotional.mp3" type="audio/mpeg" autostart="true"> 
       </audio> 
         <?php
         break;
         
        case $total == 7;
        echo "Safaste-te! <br>"; 
       ?> <br><br><br><img src="esca.jpg">  <br>
       <br><audio controls>
       <source src="gu.mp3" type="audio/mpeg" autostart="true"> 
       </audio>
       <?php
       break;
        
       case $total == 8;
        echo "Escapa! <br>"; 
       ?> <br><br><br><img src="safee.jpg">  <br>
       <br><audio controls>
       <source src="escapa.mp3" type="audio/mpeg" autostart="true"> 
       </audio>
       <?php
        break;
        
       case $total == 9;
        echo "Boa <br>"; 
       ?> <br><br><br><img src="yess.jpg">  <br>
       <br><audio controls>
       <source src="cr7.mp3" type="audio/mpeg" autostart="true"> 
       </audio>
       <?php     
       break;
       
       case $total == 10;
        echo "Fizeste batota de certeza!"; 
       ?><br> <br><br><img src="1.jpg">  <br>
       <br><audio controls>
       <source src="nice.mp3" type="audio/mpeg" autostart="true"> 
       </audio>
       <?php     
       break;
       
    }
    ?>