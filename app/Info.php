<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = ['NameInEnglish','NameInBangla','FathersName','MothersName','SpouseName',
        'DOB','HomeDistrict','PermanentAddress','PresentAddress','NID','PhoneNumber','CellNumber'   ,
        'Email','BloodGroup','Religion','Gender','IEB','Image','Institution','Department','Shift','BatchOrPassingYear','PersonalDetails','CV',
        'NameOfOrg','Position','JobType','WorkingPlace','VisitingCard'];
}
