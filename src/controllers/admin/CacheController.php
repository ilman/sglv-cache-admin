<?php

namespace Scienceguard\SglvCacheAdmin\Controllers\Admin;

use Scienceguard\SglvCore\Controllers\BaseController;
use View;
use User;
use Input;
use Redirect;
use Cache;
use Exception;
use Event;
use Log;
use Notification;


use Scienceguard\SG_Util;

class CacheController extends BaseController {

	public function __construct()
	{
		\Lib\Template::setBaseDir(realpath(__DIR__.'/../../'));
	}

	public function getCache()
	{
		$data = array(
			'content' => 'admin/cache/form',
		);

		return View::make($this->template, $data);
	}

	public function postCache()
	{
		$cache_key = Input::get('cache_key');

		try{
			if($cache_key=='ALL'){
				Cache::flush();
			}
			else{
				Cache::forget($cache_key);
			}

			Notification::success(trans('notif.delete_cache_success'));
			return Redirect::to('admin/cache');
		}
		catch(Exception $e){
			Log::error($e);
			Notification::error(trans('notif.delete_cache_failed'));
			return Redirect::to('admin/cache');
		}
	}

}