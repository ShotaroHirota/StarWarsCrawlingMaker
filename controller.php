<?php

session_destroy();

session_start();
// require_once('logic.php');
$ref = $_POST["refferer"];
if ($ref=="episode_selected") {

	$selected_episode = $_POST["episode"];


	$url = "http://swapi.co/api/films/$selected_episode/";
	$json = file_get_contents($url);
	$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
	$arr = json_decode($json,true);


	// print_r($arr);
	$title = $arr[title];
	$opening_crawl= $arr[opening_crawl];

	$_SESSION[episode] = EPISODE.$selected_episode;
	$_SESSION[title] = $title;
	$_SESSION[opening_crawl] = $opening_crawl;

	header('Location:view.php') ;
}elseif ($ref=="free_writing") {
	$episode = $_POST["episode"];
	$title = $_POST["title"];
	$opening_crawl = $_POST["opening_crawl"];

	$_SESSION[episode] = $episode;
	$_SESSION[title] = $title;
	$_SESSION[opening_crawl] = $opening_crawl;


	header('Location:view.php') ;

}
