<?php

namespace App\Http\Controllers;

use App\Jobs\ChangeLocale;
use App\Models\Tag;

class HomeController extends Controller
{

	/**
	 * Display the home page.
	 *
	 * @return Response
	 */
	public function test()
	{
		$tags =  Tag::all();
		return view('pages.test',array('tags'=>$tags));
	}




	public function index()
	{
		$tags =  Tag::all();
		return view('front.index',array('tags'=>$tags));
	}

	public function workwithTAG()
	{
		$tags =  Tag::all();

		return view('pages.workwithtag',array('tags'=>$tags));
	}

	public function TheRules()
	{
				$tags =  Tag::all();

		return view('pages.compliance',array('tags'=>$tags));
	}

	public function FAQ()
	{
				$tags =  Tag::all();

		return view('pages.faq',array('tags'=>$tags));
	}
	/**
	 * Change language.
	 *
	 * @param  App\Jobs\ChangeLocaleCommand $changeLocale
	 * @param  String $lang
	 * @return Response
	 */
	public function language( $lang,
		ChangeLocale $changeLocale)
	{		
		$lang = in_array($lang, config('app.languages')) ? $lang : config('app.fallback_locale');
		$changeLocale->lang = $lang;
		$this->dispatch($changeLocale);

		return redirect()->back();
	}

}
