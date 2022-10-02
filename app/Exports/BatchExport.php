<?php

namespace App\Exports;

use App\Model\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class BatchExport implements FromQuery
{
    use Exportable;

    public function setCode(int $code)
    {
        $this->code = $code;
        return $this;
    }

    public function query()
    {
        return Registration::query()->where('passing_year', $this->code)->where('approval_status', 1)->orderBy('last_code','asc');
    }
}
