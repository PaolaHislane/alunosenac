<?php
//Numeros sortidos
define("INFERIOR",1);
define("SUPERIOR",100);

$numero = rand(INFERIOR, SUPERIOR);
echo "Meu numero da sorte: <br>";
echo $numero."<br>";
?>
<?php
$x = 5; //Ambito global

function meuTeste () {
    echo "<p>A variavel x dentro da função é: $x</p><br>";
    }
    //Ambito local
         meuTeste ();
    echo "<p>A variavel x dentro da função é: $x</p><br>";
   
?>

<?php
$x = 5;
$y = 10;
function numero(){
    global $x, $y;
    $y= $x + $y;
    }
numero();
echo $y;
?>

<?php
//ambito estatico
function teste(){
        static $x = 0;
        echo $x;
        $x++;
    }
echo "<br>";
echo "<br>";
teste();
echo "<br>";
teste();
echo "<br>";
teste();

?>
<?php
echo "<br>Geovane da Costa";
print "<br>Geovane da Costa<br><br>";
?>
<?php
$x = 5;
var_dump($x);
echo "<br>";
?>
<?php
$x = 'Minha string';
$y = "Minha string 2!";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
?>
<?php
$x = 3.14;
var_dump($x);
echo "<br>";
?>
<?php
$x = true;
var_dump($x);
echo "<br>";
?>
<?php
$cars =array("BMW","BYD","AUDI");
var_dump($cars);
echo "<br>";
?>
<?php
//contagem de letras
echo"<br>";
echo strlen("Olá Mundo")
?>
<?php
//contagem de palavras
echo "<br>";
echo str_word_count ("Olá Mundo")
?>
<?php
echo "<br>";
//deu ruim
echo strpos ("Novo bravo mundo", "iron Maind")
?>

<?php
// Escrevendo Maiusculo
$x = "Ola mundo";
echo strtoupper($x);
$x = "Novo Teste";
echo strtolower ($x);
?>
<?php
//Substituindo Palavra
$x = "Meu teste";
echo "<br>";
echo str_replace ("Teste", "Arquivo", $x);
?>
<?php
//Inverter Arquivo frente/Trás
$x ="Meu teste";
echo "<br>";
echo strrev ($x);
echo "<br>";
?>
<?php
//Tirar os espaços em branco
$x=" Meu teste";
echo trim($x);
echo "<br>";
?>
<?php
echo"<input value='" . $x ."'>";
echo "<br>";
echo"<input value='" . trim($x) . "'>";
?>
<?php
$x="Meu ";
$y="teste";
$z=$x . $y;
echo"<br>";
echo$z;
?>
<?php
$x="Paola Hislane ";
$y="Higino Braga";
$z=$x . $y;
echo"<br>";
echo$z;
?>

