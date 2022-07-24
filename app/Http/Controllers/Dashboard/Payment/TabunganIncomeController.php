<?php

namespace App\Http\Controllers\Dashboard\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\TabunganIncomeRequest;
use App\Models\StudentPayment;
use App\Models\TabunganIncome;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TabunganIncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = TabunganIncome::query();

            return DataTables::of($query)
                ->editColumn('price', function ($item) {
                    return number_format($item->price);
                })
                ->editColumn('created_at', function ($item) {
                    return date_format($item->created_at, 'd F Y - H:i');
                })
                ->editColumn('status', function ($item) {
                    return $item->status == 1 ? 'Lunas' : 'Titip';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.dashboard.tabungan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studentPayment = StudentPayment::all();

        return view('pages.dashboard.tabungan.create', compact('studentPayment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TabunganIncomeRequest $request)
    {
        $data = $request->all();
        TabunganIncome::create($data);

        return redirect()->route('dashboard.tabunganincome.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
