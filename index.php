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
<?php
$x = "My Test";
echo "<br>";
echo substr($x, 3);
?>

//<--*Caracteres de escape*-->
//\' Single Qiuote
//\" Double Quote
//\$ PHP variables
//\n New Line
//\r Carriage Return
//\t Tab
//\f Form Feed
//\ooo  Octal value
//\xhh  Hex value  

<?php
$x = "Somos chamados de '\Vikigns\' do norte";
?>
<?php
$a=5;
$b=5.34;
$c="25";
$y=1.9e411;
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($y);
echo "<br>";
?>

<?php
//verificar se o tipo de uma
//variavel e inteiro
$x=5985;
var_dump(is_int($x));
echo "<br>";
// verificar novamente
$x=3.14;
var_dump(is_int($x));
echo "<br>";
$x=10.123;
var_dump(is_float($x));
echo "<br>";
$x=1.9e411;
var_dump(is_infinite($x));
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
$x=25.232;
var_dump(is_string($x));
echo "<br>";
$x=5489;
var_dump(is_string($x));
echo "<br>";
$x="Meu Teste";
var_dump(is_string($x));
echo "<br>";
$x=12.5e869;
var_dump(is_string($x));
echo "<br>";
?>

<?php
//Converter folat para inteiro
echo "<br>";
$x=120.45075;
$int_cast=(int)$x;
echo $int_cast;
?>

<?php
echo "<br>";
$octeto = 172;
$mascara = 248;
$value = $octeto & $mascara;
echo "<br> Aplicando alteração AND entre a máscara e o octeto com o valor variavel $value";
?>

<?php
$valor = 15;
if ($valor == 15){ //testa se $valor é igual a 15//
echo "<br> Valor é 15";
}
elseif ($valor >= 10){
echo "<br> valor é maior ou igual a 10";
}
else {
echo "<br> valor é menor que 10";

}
echo "<br><br>";
echo "<br>";
?>

<?php
$v = "Fabio";
$nome = $v . " dos Reis";
echo $nome;
?>

<?php
$valor=10;
if ($valor==="10"){
	echo "valor é strting";
}
else 	{
	echo "Valor não é string";
}
echo "<br><br>";
echo "Agora, fazendo cast no valor atribuido a variavel; <br>";
$valor= (string)10;
if ($valor==="10") {
	echo "Valor não é string";
}
else {
	echo "Valor não é sttring";
}
?>	
<?php
$a = 10;
$b = 20;
echo ($a == 10) && ($b == 20);
echo"<br>";
if (($a == 10) && ($b == 20)){
	echo "Ambos os valores estão corretos <br>";
}
if (($a==20) && ($b==20)){
	echo "Ambos os valores estão corretos <br>";
}
if (($a==10) && ($b==10)){
echo "Ambos os valores estão errado <br>";
}
?>
<br>

<?php
$a = 3+5*4; 
$b = 4;
$c = 5;
echo "O valor da variavel é: $a";
echo"<br>";
echo"<br>";
$b = (3+5)*4;
echo "O valor da variavel é: $b";
echo"<br>";
echo"<br>";
?>
<?php
$a = 10;
$b = 9;
$c = 5;
$resultado = ($a+$b+$c)/3; 
echo "A média é : $resultado";
echo"<br>";
?>
<?php
$n = 6;
if ($n >= 7){
	echo "Esta Aprovado (a);";
}
else {
	echo"<br>";
	echo "Esta Reprovado (a);";
}
?>
<?php
echo "<br>";
$num = 22;

if($num <21){
echo "Num é menor que 18.";
}
else{ echo "Num é maior que 22.";
}
?>
<br>

<?php
$num = 10;
$mensagem = '';

if($num>30){
	$mensagem = ' O número é maior que 20 ';
}

elseif($num <20){
	$mensagem = ' O número é menor que 20 ';
}
elseif ($num== 20){
	$mensagem = ' O número é igual a 20 ';
}
else{
	$mensagem = "O número é nulo.";
}
?>
<br>
<?php
//Um aluno só pode usar o medicamento se for maior igual a 16 de idade, então se a idade for acima de 65 o uso tem que ser com restrições, se abaixo de 10 é proibido o uso do medicamento.
$idade = 0;
$mensagem ='';
if ($idade >= 16 && $idade<=65){
 $mensagem =' O Paciente pode usar o medicamento ';
	}
elseif($idade > 65){
 $mensagem =' O uso tem que ser com restrições ';
	}
elseif($idade <= 10 && $idade == 1 ){
 $mensagem =' É proibido o uso do medicamento ';
	}
else{
$mensagem = 'Idade não reconhecida';
	}
echo $mensagem .$idade;
?>
<br>
