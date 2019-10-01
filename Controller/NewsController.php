<?php

require_once("Model/News.php");

class  NewsController
{
	private $modelNews;

	public function __construct() {
		$this->modelNews = new News();
	}

	public function handle()
	{
		$action = isset($_GET['ac']) ? $_GET['ac'] : '';
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		switch ($action) {
			case '':
				$this->index();
				break;
			case 'add':
				$this->create();
				break;
			case 'store':
				$this->store();
				break;
			case 'show':
				$this->show($id);
				break;
			case 'edit':
				$this->edit($id);
				break;
			case 'update':
				$this->update($id);
				break;
			case 'delete':
				$this->delete($id);
				break;
			default:
				echo "Trang không tồn tại!";
				break;
		}
	}

	public function index()
	{
		$list = $this->modelNews->getAllNews();
		include_once("View/list.php");
	}

	public function create()
	{
		include_once("View/create.php");
	}

	public function store()
	{
		$news = $this->modelNews->insertNews();
		$list = $this->modelNews->getAllNews();
		include_once("View/list.php");
	}

	public function show($id)
	{
		if ($id) {
			$detail = $this->modelNews->getNewsDetail($id);
			include_once("View/show.php");
		} else {
			echo "Trang không tồn tại!";
		}

	}

	public function edit($id)
	{
		if ($id) {
			$detail = $this->modelNews->getNewsDetail($id);
			include_once("View/edit.php");
		} else {
			echo "Trang không tồn tại!";
		}
	}

	public function update($id)
	{
		$news = $this->modelNews->updateNews($id);
		$list = $this->modelNews->getAllNews();
		include_once("View/list.php");
	}

	public function delete($id)
	{
		if ($id) {
			$detail = $this->modelNews->deleteNews($id);
			$list = $this->modelNews->getAllNews();
			include_once("View/list.php");
		} else {
			echo "Trang không tồn tại!";
		}

	}
};
