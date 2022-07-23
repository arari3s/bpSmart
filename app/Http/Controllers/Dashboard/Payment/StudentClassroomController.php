<?php

namespace App\Http\Controllers\Dashboard\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentClassroomRequest;
use App\Models\Classroom;
use App\Models\Student;
use App\Models\StudentClassroom;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class StudentClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Classroom $classroom)
    {
        if (request()->ajax()) {
            $query = StudentClassroom::with('student')->where('classrooms_id', $classroom->id);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="inline-block border border-teal-500 bg-teal-500 text-white rounded-md px-2 py-1 m-1 font-semibold transition duration-500 ease select-none hover:bg-teal-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.student-classroom.student-payment.index', $item->id) . '">
                            Tambah Pembayaran
                        </a>
                        <form class="inline-block" action="' . route('dashboard.student-classroom.destroy', $item->id) . '" method="POST">
                            <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-1 font-semibold transition duration-500 ease select-none hover:bg-red-800 focus:outline-none focus:shadow-outline" >
                                Hapus
                            </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.dashboard.studentClassroom.index', compact('classroom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Classroom $classroom)
    {
        $student = Student::all();

        return view('pages.dashboard.studentClassroom.create', compact('classroom', 'student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentClassroomRequest $request, Classroom $classroom)
    {
        $data = $request->input('students_id');

        foreach ($data as $d) {
            StudentClassroom::create([
                'classrooms_id' => $classroom->id,
                'students_id' => $d,
            ]);
        }

        return redirect()->route('dashboard.classroom.student-classroom.index', $classroom->id);
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
    public function destroy(StudentClassroom $studentClassroom)
    {
        $studentClassroom->delete();

        return redirect()->route('dashboard.classroom.student-classroom.index', $studentClassroom->classrooms_id);
    }
}
