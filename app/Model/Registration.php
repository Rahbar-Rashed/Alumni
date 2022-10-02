<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
   protected $fillable = ['full_name', 'mobile_number', 'email', 'department', 'passing_year', 'tshirt_size', 'home_district','dropping_point','account_transaction_number','payment_type','guest_money','driver','payable_amount','invitation_code','approval_status'];
}