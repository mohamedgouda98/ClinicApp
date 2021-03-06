<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use Illuminate\Http\Request;
use App\Http\Interfaces\DiagnosisInterface;
use App\Http\Requests\Diagnosis\DiagnosisRequest;

class DiagnosisController extends Controller
{
    protected $DiagnosisInterface;
    public function __construct(DiagnosisInterface $diagnosisInterface)
    {
        $this->DiagnosisInterface=$diagnosisInterface;
    }

    public function index()
    {
        return $this->DiagnosisInterface->index();
    }

    public function store(DiagnosisRequest $request)
    {
        return $this->DiagnosisInterface->store($request);
    }

    public function edit( Diagnosis $diagnosis)
    {
        return $this->DiagnosisInterface->edit($diagnosis);
    }

    public function update(DiagnosisRequest $request, Diagnosis $diagnosis)
    {
        return $this->DiagnosisInterface->update($request,$diagnosis);
    }

    public function destroy(Request $request)
    {
        return $this->DiagnosisInterface->destroy($request);

    }
}
