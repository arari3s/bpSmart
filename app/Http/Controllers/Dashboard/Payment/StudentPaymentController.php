<?php

namespace App\Http\Controllers\Dashboard\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentPaymentRequest;
use App\Models\Payment;
use App\Models\StudentClassroom;
use App\Models\StudentPayment;
use Yajra\DataTables\Facades\DataTables;

class StudentPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StudentClassroom $studentClassroom)
    {
        if (request()->ajax()) {
            $query = StudentPayment::with('studentclassroom.student')->where('student_classrooms_id', $studentClassroom->id);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="inline-block border border-amber-500 bg-amber-500 text-white rounded-md px-2 py-1 m-1 font-semibold transition duration-500 ease select-none hover:bg-amber-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.student-payment.show', $item->id) . '">
                            Show
                        </a>
                        <a class="inline-block border border-sky-500 bg-sky-500 text-white rounded-md px-4 py-1 m-1 font-semibold transition duration-500 ease select-none hover:bg-sky-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.student-payment.edit', $item->id) . '">
                            Edit
                        </a>
                        <form class="inline-block" action="' . route('dashboard.student-payment.destroy', $item->id) . '" method="POST">
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
        return view('pages.dashboard.studentPayment.index', compact('studentClassroom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StudentClassroom $studentClassroom)
    {
        $payment = Payment::all();

        return view('pages.dashboard.studentPayment.create', compact('studentClassroom', 'payment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentPaymentRequest $request, StudentClassroom $studentClassroom)
    {
        StudentPayment::create([
            'student_classrooms_id' => $studentClassroom->id,
            'spp_id' => $request->input('spp_id'),
            'sarana_id' => $request->input('sarana_id'),
            'pts1_id' => $request->input('pts1_id'),
            'pts2_id' => $request->input('pts2_id'),
            'pas_id' => $request->input('pas_id'),
            'pat_id' => $request->input('pat_id'),
            'infaq_id' => $request->input('infaq_id'),
            'pkl_id' => $request->input('pkl_id'),
            'ki_id' => $request->input('ki_id'),
            'perpisahan_id' => $request->input('perpisahan_id'),
            'du_id' => $request->input('du_id'),
            'tabungan_id' => $request->input('tabungan_id'),
        ]);

        return redirect()->route('dashboard.student-classroom.student-payment.index', $studentClassroom->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(StudentPayment $studentPayment)
    {
        return view('pages.dashboard.studentPayment.show', compact('studentPayment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentPayment $studentPayment)
    {
        $payment = Payment::all();

        return view('pages.dashboard.studentPayment.edit', compact('studentPayment', 'payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentPaymentRequest $request, StudentPayment $studentPayment)
    {
        $data = $request->all();

        $studentPayment->update($data);

        return redirect()->route('dashboard.student-classroom.student-payment.index', $studentPayment->student_classrooms_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentPayment $studentPayment)
    {
        $studentPayment->delete();

        return redirect()->route('dashboard.student-classroom.student-payment.index', $studentPayment->student_classrooms_id);
    }
}
