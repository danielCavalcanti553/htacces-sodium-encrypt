<?php

include "func_sodium.php";
$enc = "qG3PP4fDp99cd2bEwVo0I1yt+FczqBN7WuqOeUvJKMwgxnSYWynQmLj7y30SuA3Iex8=";

echo "<br/>-------------- <br/>";
$arquivo = fopen ('meuarquivo.txt', 'r');
// Lê o conteúdo do arquivo 
while(!feof($arquivo))
{
//Mostra uma linha do arquivo
$linha = fgets($arquivo, 5000);

}
// Fecha arquivo aberto
fclose($arquivo);

$dec = safeDecrypt($enc, $linha); //decrypts encoded string generated via safeEncrypt function 
echo $dec;
