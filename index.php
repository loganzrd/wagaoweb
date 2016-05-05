<?php
/**
 * Created by CredisisTEAM.
 * User: wsilvaaa
 * Date: 04/05/16
 * Time: 19:09
 */

header('Content-Type: text/html; charset=UTF-8');

require 'vendor/autoload.php';

$slugifier = new \Slug\Slugifier();

// Definindo tratamento de caracteres com acentuação
$slugifier->setTransliterate(true);

$frase = 'Frase com acentuação para teste de criação de slug';

$slug = $slugifier->slugify($frase);

echo '<b>Frase natural: </b>' . $frase . "<br /><br />";
echo '<b>Frase com aplicação de slug: </b>' . $slug . "<br /><br />";