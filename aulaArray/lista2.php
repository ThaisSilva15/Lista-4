<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista 2-Vetores</title>
</head>
<body>
    
<?php
echo "Exercício 1<br>" ;

$vetor_1 = array();
for ($i=0; $i < 50; $i++){
    $vetor_1 [$i]=42;
    //echo "Índices: ". $i . " Valor: " .$vetor_1[$i] ." <br>";
}
echo"<pre>";
print_r($vetor_1);
echo"</pre>";

echo "Exercício 2<br>" ;

    $vetor_2 = array();
        for ($i=0; $i < 50; $i++){
         $vetor_2 [$i]= $i+1;
      }
echo"<pre>";
print_r($vetor_2);
echo"</pre>";


echo "Exercício 3<br>" ;
$vetor_3 = array();
 $maior = 0;
 $menor = 0;
 $soma=0;
 
     for ($i=0; $i < 30; $i++){
         $vetor_3 [$i]= $i;
         
         if($vetor_3[$i] > $maior){
            $maior = $vetor_3 [$i];
            $posicao =$i;
         }
         $soma= $vetor_3 [$i]+ $soma;
         $media=$soma/count ($vetor_3);
      }
echo"Maior: ".$maior ."<br>";
echo "Posição: " .$posicao ."<br>";
echo"Soma: " . $soma ."<br>";
echo"Média: " . $media ."<br>";

echo "Exercício 4<br>" ;
$vetor_4 = array();

    for ($i=0; $i < 50; $i++){
    $vetor_4 [$i]= ($i+1)*2;
    }
echo"<pre>";
print_r($vetor_4);
echo"</pre>";  

echo "Exercício 5<br>" ;
?>
    <select>
    <?php 
    $vetor_5 = array(
        0=>"Times",
        1=>"Barcelona",
        2=>"Real Madrid",
        3=>"Manchester City",
        4=>"Juventus",
        5=>"Paris Saint-Germain",
        6=>"Liverpool",
        7=>"Atlético de Madrid",
        8=>"Manchester United ",
        9=>"Chelsea"
    );
        for($i=0;$i<10;$i++){
     ?>  
        <option>
    <?php
        echo $vetor_5[$i];
    ?>
        </option>
        <?php
        }
        ?>
    </select>





    </body>
</html>