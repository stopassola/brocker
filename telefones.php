<?php
$conteudo = file_get_contents("./telefones.txt");

$regexp = "/\(\d{2}\) \d{4} \d{4}/";
preg_match_all($regexp, $conteudo, $ocorrencias);

$texto = "arijunior@gmail.com vamos ver se filtra
stopassola@hotmail.com para construirmos nosso robozinho de SPAM
stopassola@acimainteractive.com e agora ninja@tokyio é mais bizarro
sendo assim ainda tenho o e-mail ari.junior@ist.utl.pt";

$regexp = "/\S+@\S+\.\S+/";
preg_match_all($regexp, $texto, $ocorrencias);


print_r($ocorrencias);
?>