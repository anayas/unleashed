<?php


class Controller_Site extends Controller_Hybrid
{

	public function get_index()
	{
		$this->template->body = '';
	}


	public function get_search()
	{

	}


	public function post_search()
	{

	}
	
	
	public function get_about()
	{
		$this->template->body = View::forge('site/about');
	}
	
	public function get_home()
	{
		$this->template->body = View::forge('site/home');
	}
	
}