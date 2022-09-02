<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
            'student_classrooms_id' => $row[1],
            'name' => $row[2],
            'email' => $row[3],
            'roles' => $row[4],
            'password' => $row[6],
        ]);
    }
}
