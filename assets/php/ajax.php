<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
// $name = 'oswaldo';
echo $name;
