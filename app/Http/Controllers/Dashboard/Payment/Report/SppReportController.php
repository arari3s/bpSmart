<?php

namespace App\Http\Controllers\Dashboard\Payment\Report;

use App\Http\Controllers\Controller;
use App\Models\SppExpenditure;
use App\Models\SppIncome;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SppReportController extends Controller
{
    public function sppincomereport()
    {
        if (request()->ajax()) {
            $query = SppIncome::query();

            return DataTables::of($query)
                ->editColumn('price', function ($item) {
                    return number_format($item->price);
                })
                ->editColumn('created_at', function ($item) {
                    return date_format($item->created_at, 'd F Y - H:i');
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.dashboard.report.spp.sppincome');
    }

    public function sppexpenditurereport()
    {
        if (request()->ajax()) {
            $query = SppExpenditure::query();

            return DataTables::of($query)
                ->editColumn('price', function ($item) {
                    return number_format($item->price);
                })
                ->editColumn('created_at', function ($item) {
                    return date_format($item->created_at, 'd F Y - H:i');
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.dashboard.report.spp.sppexp');
    }

    public function incomeprint()
    {
        $query = SppIncome::all();
        $no = 1;

        $pdf = Pdf::loadView('pages.dashboard.report.spp.sppincomereport', compact('query', 'no'))->setPaper('A4', 'potrait')->setOption(['defaultFont' => 'sans-serif']);
        return $pdf->stream('sppincome.pdf');
    }

    public function expenditureprint()
    {
        $query = SppExpenditure::all();
        $no = 1;

        $pdf = Pdf::loadView('pages.dashboard.report.spp.sppexpenditurereport', compact('query', 'no'))->setPaper('A4', 'landscape')->setOption(['defaultFont' => 'sans-serif']);
        return $pdf->stream('sppexpenditure.pdf');
    }
}
