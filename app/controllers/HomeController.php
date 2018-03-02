<?php


/**
* \HomeController
*/
class HomeController extends BaseController
{
  
  public function home()
  {
	//echo '<pre>';
	//$model =  Article::first();
	//print_r($model->toArray());
	
	//$this->view = View::make('home')->with('article',Article::first())
                                    //->withTitle('MFFC :-D')

                                    //->withFuckMe('OK!');

	Redis::set('key','123',5,'s');

	echo Redis::get('key');




  }


	public function info(){

		phpinfo();


	}












}
