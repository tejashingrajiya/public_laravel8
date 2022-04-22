<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
	
	  protected $fillable = [
			'name',
			'country_name',
			'created_at',
			'updated_at',
			];
}
