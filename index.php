<?php 

// Requires
require_once 'MCdfg.php';
require_once 'MClist.php';
use Minecraft\Tools\MCdfg;
use Minecraft\Tools\MClist;
$gen = new MCdfg();


// Chose your params
$loop	 				= MClist::NUMERIC_1_60;
$template 				= 'effect_give_s.mcfunction';
$output_file_prefix 	= '';
$output_file_ext		= '.mcfunction';


// Generate
$gen->loop($loop, $template, [$output_file_prefix, $output_file_ext]);
