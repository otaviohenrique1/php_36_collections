<?php

$cursos = [
  'Introdução ao PHP',
  'DDD com PHP',
  'Coleções em PHP',
];

$cursosOo = [
  'Orentação a Objetos',
  'Object Calisthenics com PHP'
];

$cursos[] = 'Arrays em PHP';

$novoArray = array_merge($cursos, $cursosOo);

$intro = array_shift($novoArray);

var_dump($intro, $novoArray);
