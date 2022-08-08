<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
   protected $fillable = ['full_name', 'mobile_number', 'email', 'department', 'passing_year', 'tshirt_size', 'paytransaction_id'];
}
