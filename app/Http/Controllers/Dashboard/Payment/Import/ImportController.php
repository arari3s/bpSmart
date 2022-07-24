<?php

namespace App\Http\Controllers\Dashboard\Payment\Import;

use App\Http\Controllers\Controller;
use App\Imports\StudentImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function studentimport()
    {
        return view('pages.dashboard.student.import');
    }

    public function studentimportvalidate(Request $request)
    {
        $request->validate([
            'excel' => 'required|mimes:xlsx,xls',
        ]);

        $path = $request->file('excel');

        Excel::import(new StudentImport, $path);

        return redirect()->route('dashboard.student.index');
    }
}
