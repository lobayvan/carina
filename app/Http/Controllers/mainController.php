<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Helper;
use DB;

class mainController extends Controller
{
	public function index() {
		// shell
		$data['shell_count'] =\App\Models\Shell::count();
		$data['shell_count_active'] =\App\Models\Shell::where('status', 'active')->count();
		$data['shell_count_inactive'] =\App\Models\Shell::where('status', 'inactive')->count();
		// vps
		$data['vps_count'] =\App\Models\Vps::count();
		$data['vps_count_active'] =\App\Models\Vps::where('status', 'active')->count();
		$data['vps_count_inactive'] =\App\Models\Vps::where('status', 'inactive')->count();
		// cpanel
		$data['cpanel_count'] =\App\Models\Cpanel::count();
		$data['cpanel_count_active'] =\App\Models\Cpanel::where('status', 'active')->count();
		$data['cpanel_count_inactive'] =\App\Models\Cpanel::where('status', 'inactive')->count();

		// WEBSITE 
		$data['website_count'] =\App\Models\Cpanel::count() + 4;
		$data['website_count_active'] =\App\Models\Cpanel::where('status', 'active')->count() + 3;
		$data['website_count_inactive'] =\App\Models\Cpanel::where('status', 'inactive')->count() +1;

		// MAIL 
		$data['mail_count'] =\App\Models\Cpanel::count();
		$data['mail_count_active'] =\App\Models\Cpanel::where('status', 'active')->count();
		$data['mail_count_inactive'] =\App\Models\Cpanel::where('status', 'inactive')->count();

		// DATABASE 
		$data['database_count'] =\App\Models\Cpanel::count();
		$data['database_count_active'] =\App\Models\Cpanel::where('status', 'active')->count();
		$data['database_count_inactive'] =\App\Models\Cpanel::where('status', 'inactive')->count();

		//SQL INJECTION 
		$data['sql_injection_count'] =\App\Models\Cpanel::count();
		$data['sql_injection_count_active'] =\App\Models\Cpanel::where('status', 'active')->count();
		$data['sql_injection_count_inactive'] =\App\Models\Cpanel::where('status', 'inactive')->count();

		// XSS
		$data['xss_count'] =\App\Models\Cpanel::count();
		$data['xss_count_active'] =\App\Models\Cpanel::where('status', 'active')->count();
		$data['xss_count_inactive'] =\App\Models\Cpanel::where('status', 'inactive')->count();

		return view('home', [
			'data' => $data
		]);
	}
}
