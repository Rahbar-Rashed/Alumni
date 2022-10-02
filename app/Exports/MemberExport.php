<?php

namespace App\Exports;

use App\Model\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class MemberExport implements FromQuery
{
    use Exportable;

    public function setStatus(int $status)
    {
        $this->status = $status;
        return $this;
    }

    public function setCode(int $code)
    {
        $this->code = $code;
        return $this;
    }

    public function query()
    {
        return Registration::query()->where('approval_status', $this->status)->orderBy('last_code','asc');
    }
}
