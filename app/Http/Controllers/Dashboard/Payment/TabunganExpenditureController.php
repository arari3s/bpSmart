<?php

namespace App\Http\Controllers\Dashboard\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\TabunganExpenditureRequest;
use App\Models\TabunganExpenditure;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TabunganExpenditureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = TabunganExpenditure::query();

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
        return view('pages.dashboard.tabunganexp.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.tabunganexp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TabunganExpenditureRequest $request)
    {
        $data = $request->all();
        TabunganExpenditure::create($data);

        return redirect()->route('dashboard.tabunganexpenditure.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort(404);
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
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return abort(404);
    }
}
