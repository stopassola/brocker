<?php
$arquivo = file_get_contents("telefones.txt");
$regexp = "/\(\d{2}\) \d{4} \d{4}/";
preg_match_all($regexp, $telefones, $ocorrencias);
print_r($ocorrencias);
?>