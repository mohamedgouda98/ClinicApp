<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\PatientInterface;
use App\Models\Booking;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PatientRepository implements PatientInterface
{
    private $patientModel;
    private $bookingModel;

    public function __construct(Patient  $patient, Booking $booking)
    {
        $this->patientModel = $patient;
        $this->bookingModel = $booking;
    }

    public function index()
    {
        $patients = $this->patientModel::with('book')->orderBy('id', 'desc')->paginate(10);
        return view('admin.patient.index', compact('patients'));
    }

    public function create()
    {
        return view('admin.patient.create');
    }

    public function store($request)
    {
        DB::transaction(function () use($request){

          $patient =   $this->patientModel::create([
                'name' => $request->name,
                'age' => $request->age,
                'address' => $request->address,
                'phone' => $request->phone,
                'father_name' => $request->father_name,
                'father_age' => $request->father_age,
                'father_job' => $request->father_job,
                'mather_name' => $request->mother_name,
                'mather_age' => $request->mother_age,
                'mather_job' => $request->mother_job,
                'relation_type' => $request->relation_type,
                'number_of_births' => $request->number_of_births,
                'date' => $request->date ?? null,
                'note' => $request->note ?? null
            ]);

          $book = $this->bookingModel::create([
              'patient_id' => $patient->id
          ]);
            Alert::success('success', 'Patient Created Successfully, Book Id Number ' . $book->id);
        });

        return redirect(route('admin.patient.index'));
    }

    public function show($patient)
    {
        // TODO: Implement show() method.
    }

    public function edit($patient)
    {
        // TODO: Implement edit() method.
    }

    public function update($request, $patient)
    {
        // TODO: Implement update() method.
    }

    public function destroy($request)
    {
        $patient = $this->patientModel::findOrFail($request->id);
        if ($patient) {
            $patient->destroy($patient->id);
            return 1;
        }
        return 0;
    }
}
