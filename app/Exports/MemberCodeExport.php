<?php

namespace App\Exports;

use App\Model\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class MemberCodeExport implements FromQuery
{
    use Exportable;

    // invitation_code','!=','0

    public function setCode(int $code)
    {
        $this->code = $code;
        return $this;
    }

    public function query()
    {
        return Registration::query()->where('code_reference', $this->code)->orderBy('last_code','asc');
    }
}

