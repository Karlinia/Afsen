<?php

namespace App\Imports;

use App\Models\Position;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PositionImport implements ToModel, WithHeadingRow
{
    protected $company_id;

    function __construct($company_id) {
            $this->company_id = $company_id;
    }

    public function model(array $row)
    {
        return new Position([
            'company_id' => $this->company_id,
            'position_name' => $row['position_name'],
            'group' => $row['group'],
        ]);
    }
}
