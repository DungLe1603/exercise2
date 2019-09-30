<?php

require_once("Model/News.php");

class  NewsController
{
	public function index()
	{
		$modelNews = new News();
		if (!isset($_GET['id'])) {
			$list = $modelNews->getAllNews();
			include_once("View/list.php");
		} else {
			$detail = $modelNews->getNewsDetail($_GET['id']);
			include_once("View/show.php");
		}

	}
};

$news = new NewsController();
$news->index();
