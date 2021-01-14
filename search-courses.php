<?php

require_once __DIR__ . '/vendor/autoload.php';

use Beyondercode\CourseFinder\SearchEngine;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$engine = new SearchEngine($client, $crawler);
$courses = $engine->search('/cursos-online-programacao/php');

foreach ($courses as $course) {
	echo $course . PHP_EOL;
}
