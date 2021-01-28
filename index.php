<?php 

// Requires
require_once 'MCdfg.php';
require_once 'MClist.php';
use Minecraft\Tools\MCdfg;
use Minecraft\Tools\MClist;
$gen = new MCdfg();


// Chose your params
$loop	 				= MClist::FOOD_ALL;
$template 				= 'advancement_consume_to_function.json';
$output_file_prefix 	= 'eat_';
$output_file_ext		= '.json';


// Generate
$gen->loop($loop, $template, [$output_file_prefix, $output_file_ext]);
