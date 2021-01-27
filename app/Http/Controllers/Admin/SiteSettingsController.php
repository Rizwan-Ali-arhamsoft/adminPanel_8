<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;

class SiteSettingsController extends Controller
{

	public function index(Request $request)
	{
		$data = [];
		$data['model'] = SiteSetting::first();
		return view('admin.site-settings.form',$data);
	}

	public function store(Request $request)
	{
		$validated = $request->validate([
			'site_name' => 'required|max:100',
			'site_title' => 'required|max:100',
			'site_keywords' => 'required',
			'site_description' => 'required',
			'site_email' => 'required|max:50',
			'site_phone' => 'required|max:50',
			'site_mobile' => 'required|max:50',
			'site_address' => 'required',
			'support_email' => 'required|max:50',
			'contactus_email' => 'required|max:50',
		]);

		$model = SiteSetting::first();
		$model->fill($request->all());
		$model->save();

		return redirect()->route('admin.site_settings.index')->with('status','Record saved successfully.');
	}
}
