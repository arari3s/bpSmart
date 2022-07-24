<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Student([
            'nis' => $row[1],
            'name' => $row[2],
            'phone' => $row[3],
            'gender' => $row[4],
            'address' => $row[5],
        ]);
    }
}
