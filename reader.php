<?php

$data = file_get_contents('projects.json');
$json = json_decode($data, true);
$number = rand(0, 4);
