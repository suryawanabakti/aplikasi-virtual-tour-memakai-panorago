<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteProfile extends Model
{
    use HasFactory;
    public $table = 'website_profile';
    protected $guarded = ['id'];
}
