<?php

namespace App\Imports;

use App\Models\Snack;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SnackImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return Snack::updateOrCreate(
            ['name' => $row['name']],
            [
                'price' => $row['price'],
                'stock' => $row['stock'] ?? 0,
            ]
        );
    }
}
