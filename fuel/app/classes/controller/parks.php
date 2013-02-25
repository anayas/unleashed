<?php


class Controller_Parks extends Controller_Hybrid
{

	public function get_index()
	{
		$parks = Model_Park::get_all();

		$this->template->body = View::forge('parks/index', array(
			'parks' => $parks,
		));
		
		
	}
	
	public function get_map()
	{
			
		$this->template->body = View::forge('parks/map');
			
	}


	public function get_search()
	{
		$city  = Input::get('city');
		$parks = Model_Park::search_by_city($city);
		
		$this->template->query = $city;
		$this->template->body = View::forge('parks/search', array(
			'parks' => $parks, 
			
		));
	}
	public function address()
	{
		return $this->street.' , '.
			   $this->city.','.
			   $this->zip;
	}
}