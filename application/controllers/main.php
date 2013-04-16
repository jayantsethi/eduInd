<?php
class Main_Controller extends Base_Controller {
		
	public function get_home()
	{
		return View::make('home.homepage')->with('title','EducateINDIA');
	}
	
	public function get_about()
	{
		return View::make('home.about')->with('title','About Us : EducateINDIA');
	}
	
}
?>