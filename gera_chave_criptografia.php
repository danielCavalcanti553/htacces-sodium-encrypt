<?php

include "func_sodium.php";
//Gera uma chave
$key = sodium_crypto_secretbox_keygen();

//gera uma string aleatória criptografada (base64)
$enc = safeEncrypt('Aula SENAC', $key); 
echo $enc;

// Cria um arquivo
$arquivo = fopen('meuarquivo.txt','w');
//verificamos se foi criado
if ($arquivo == false) die('Não foi possível criar o arquivo.');
//escrevemos no arquivo
$texto = $key;
// salva no arquivo
fwrite($arquivo, $texto);
//Fechamos o arquivo
fclose($arquivo);
