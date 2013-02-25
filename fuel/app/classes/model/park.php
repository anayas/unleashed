<?php


class Model_Park extends \Orm\Model
{
	protected static $_table_name = 'parks';

	protected static $_properties = array(
		'id',
		'parkname',
		'street',
		'city',
		'zip',
		'parkhours',
		'parkfees',
		'description',
		'created',
		'modified',
	);


	public static function search_by_city($city)
	{
		return static::find()->where('city' , $city)->get();
	}
	
	public static function get_all()
	{
		return static::find()->get();
	}
}