<?php

namespace App\Http\Controllers\Dashboard\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassroomRequest;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Classroom::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="inline-block border border-teal-500 bg-teal-500 text-white rounded-md px-2 py-1 m-1 font-semibold transition duration-500 ease select-none hover:bg-teal-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.classroom.student-classroom.index', $item->id) . '">
                            Tambah Siswa
                        </a>
                        <a class="inline-block border border-sky-500 bg-sky-500 text-white rounded-md px-4 py-1 m-1 font-semibold transition duration-500 ease select-none hover:bg-sky-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.classroom.edit', $item->id) . '">
                            Edit
                        </a>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.dashboard.classroom.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.classroom.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClassroomRequest $request)
    {
        $data = $request->all();
        Classroom::create($data);

        return redirect()->route('dashboard.classroom.index');
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
    public function edit(Classroom $classroom)
    {
        return view('pages.dashboard.classroom.edit', compact('classroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClassroomRequest $request, Classroom $classroom)
    {
        $data = $request->all();
        $classroom->update($data);

        return redirect()->route('dashboard.classroom.index');
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
