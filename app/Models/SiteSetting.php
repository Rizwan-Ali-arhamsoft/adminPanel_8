<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
	use HasFactory;

	protected $fillable = [
		'site_name',
		'site_title',
		'site_keywords',
		'site_description',
		'site_email',
		'site_phone',
		'site_mobile',
		'site_address',
		'support_email',
		'contactus_email',
		'uniswap_link',
		'facebook_url',
		'twitter_url',
		'medium_url',
	];
}
