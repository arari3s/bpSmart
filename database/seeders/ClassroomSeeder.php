<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classrooms = [
            [
                'name' => 'X DKV1',
                'department' => 'DESAIN KOMUNIKASI VISUAL',
            ],
            [
                'name' => 'X DKV2',
                'department' => 'DESAIN KOMUNIKASI VISUAL',
            ],
            [
                'name' => 'X DKV3',
                'department' => 'DESAIN KOMUNIKASI VISUAL',
            ],
            [
                'name' => 'X DKV4',
                'department' => 'DESAIN KOMUNIKASI VISUAL',
            ],
            [
                'name' => 'X AKL1',
                'department' => 'AKUNTANSI DAN KEUANGAN LAMBAGA',
            ],
            [
                'name' => 'X AKL2',
                'department' => 'AKUNTANSI DAN KEUANGAN LAMBAGA',
            ],
            [
                'name' => 'X OTKP1',
                'department' => 'OTOMATISASI DAN TATA KELOLA PERKANTORAN',
            ],
            [
                'name' => 'X OTKP2',
                'department' => 'OTOMATISASI DAN TATA KELOLA PERKANTORAN',
            ],
            [
                'name' => 'X BDPM',
                'department' => 'BISNIS DARING DAN PEMASARAN',
            ],
            [
                'name' => 'XI MM1',
                'department' => 'MULTIMEDIA',
            ],
            [
                'name' => 'XI MM2',
                'department' => 'MULTIMEDIA',
            ],
            [
                'name' => 'XI MM3',
                'department' => 'MULTIMEDIA',
            ],
            [
                'name' => 'XI AKL1',
                'department' => 'AKUNTANSI DAN KEUANGAN LAMBAGA',
            ],
            [
                'name' => 'XI OTKP1',
                'department' => 'OTOMATISASI DAN TATA KELOLA PERKANTORAN',
            ],
            [
                'name' => 'XI BDPM',
                'department' => 'BISNIS DARING DAN PEMASARAN',
            ],
            [
                'name' => 'XII MM1',
                'department' => 'MULTIMEDIA',
            ],
            [
                'name' => 'XII MM2',
                'department' => 'MULTIMEDIA',
            ],
            [
                'name' => 'XII MM3',
                'department' => 'MULTIMEDIA',
            ],
            [
                'name' => 'XII AKL1',
                'department' => 'AKUNTANSI DAN KEUANGAN LAMBAGA',
            ],
            [
                'name' => 'XII AKL2',
                'department' => 'AKUNTANSI DAN KEUANGAN LAMBAGA',
            ],
            [
                'name' => 'XII OTKP1',
                'department' => 'OTOMATISASI DAN TATA KELOLA PERKANTORAN',
            ],
            [
                'name' => 'XII BDPM',
                'department' => 'BISNIS DARING DAN PEMASARAN',
            ],
        ];

        DB::table('classrooms')->insert($classrooms);
    }
}
