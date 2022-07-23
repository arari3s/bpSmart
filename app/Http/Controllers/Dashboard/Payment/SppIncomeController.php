<?php

namespace App\Http\Controllers\Dashboard\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\SppIncomeRequest;
use App\Models\SppIncome;
use App\Models\StudentPayment;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SppIncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = SppIncome::where('name', '!=', '')->get();

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
        return view('pages.dashboard.spp.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studentPayment = StudentPayment::all();

        return view('pages.dashboard.spp.create', compact('studentPayment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SppIncomeRequest $request)
    {
        $data = $request->all();
        SppIncome::create($data);

        return redirect()->route('dashboard.sppincome.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SppIncome  $sppIncome
     * @return \Illuminate\Http\Response
     */
    public function show(SppIncome $sppIncome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SppIncome  $sppIncome
     * @return \Illuminate\Http\Response
     */
    public function edit(SppIncome $sppIncome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SppIncome  $sppIncome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SppIncome $sppIncome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SppIncome  $sppIncome
     * @return \Illuminate\Http\Response
     */
    public function destroy(SppIncome $sppIncome)
    {
        //
    }
}
