<?php

require 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use Alura\BuscadorDeCursos\Funcoes;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');


$funcoes = new Funcoes(); // Criando uma instância da classe Funcoes

foreach ($cursos as $curso) {
    $funcoes->exibeMensagem($curso); // Chamando o método da instância
}
