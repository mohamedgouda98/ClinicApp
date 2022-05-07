<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\PatientInterface;
use App\Http\Requests\Patient\PatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    private $patientInterface;

    public function __construct(PatientInterface $patient)
    {
        $this->patientInterface = $patient;
    }

    public function index()
    {
        return $this->patientInterface->index();
    }
    public function search(){
        return $this->patientInterface->search();
    }

    public function create()
    {
        return $this->patientInterface->create();
    }

    public function store(PatientRequest $request)
    {
        return $this->patientInterface->store($request);
    }

    public function show(Patient $patient)
    {
        return $this->patientInterface->show($patient);
    }

    public function edit(Patient $patient)
    {
        return $this->patientInterface->edit($patient);
    }

    public function update(PatientRequest $request, Patient $patient)
    {
        return $this->patientInterface->update($request, $patient);
    }

    public function destroy(Request $request)
    {
        return $this->patientInterface->destroy($request);
    }

    public function createDiagnose(Patient $patient)
    {
        return $this->patientInterface->createDiagnose($patient);
    }
}
