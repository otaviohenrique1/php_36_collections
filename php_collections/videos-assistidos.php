<?php

require_once 'vendor/autoload.php';

use Alura\Collections\Video;
use Ds\Map;

$video1 = new Video('Aprendendo mapas');
$video2 = new Video('Aprendendo conjuntos');
$video3 = new Video('Aprendendo mapas');

// $videosAssisitidos = [
//   spl_object_hash($video1) => new DateTimeImmutable('2021-02-03'),
//   spl_object_hash($video2) => new DateTimeImmutable('2021-02-01'),
// ];
// echo $videosAssisitidos[spl_object_hash($video1)]->format('d/m/Y') . PHP_EOL;

// $videosAssistidos = new SplObjectStorage();
// $videosAssistidos->attach($video1, new DateTimeImmutable('2021-02-03'));
// $videosAssistidos->attach($video2, new DateTimeImmutable('2021-02-01'));
// $videosAssistidos->attach($video3, new DateTimeImmutable());

$videosAssistidos = new Map();
$videosAssistidos->put($video1, new DateTimeImmutable('2021-02-03'));
$videosAssistidos->put($video2, new DateTimeImmutable('2021-02-01'));
$videosAssistidos->put($video3, new DateTimeImmutable());

// echo $videosAssisitidos->get($video1)->format('d/m/Y') . PHP_EOL;

foreach ($videosAssistidos as $video) {
  // echo $videosAssistidos[$video]->format('d/m/Y') . PHP_EOL;
  var_dump($video);
}

$primeiroVideoAssistido = $videosAssistidos->first();
var_dump($primeiroVideoAssistido->value);
