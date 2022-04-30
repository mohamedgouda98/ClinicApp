<?php
namespace App\Http\Repositories;

use App\Models\Diagnosis;
use App\Models\Diagnose_img;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Interfaces\DiagnosisInterface;

class DiagnosisRepository implements  DiagnosisInterface {

   protected $diagnosisModel;
   protected $diagnose_imgModel;
   public function __construct(Diagnosis $diagnosis,Diagnose_img $diagnose_img)
   {
       $this->diagnosisModel=$diagnosis;
       $this->diagnose_imgModel=$diagnose_img;
   }

    public function create(){

    }

    public function store($request){

    }

    public function edit($diagnosis){

     
    return view('admin.diagnosis.edit',compact('diagnosis'));

    }

    public function update($request, $diagnosis){
        $diagnosis->update([
            'complaint'   =>$request->complaint ?? null,
            'diagnosis'   =>$request->diagnosis ?? null,
            'investigation'=>$request->investigation ?? null,
            'treamtent'    =>$request->treamtent ?? null,
            'reseen'       =>$request->reseen ?? null,
            'hn'           =>$request->hn ?? null,
            'phnx'         =>$request->phnx ?? null, 
            'wt'           =>$request->wt ?? null,
            'tep'          =>$request->tep ?? null,
            'hc'           =>$request->hc ?? null,
            'chest'        =>$request->chest ?? null,
            'abd'          =>$request->abd ?? null,
            'gentalia'     =>$request->gentalia ?? null,
            'other'        =>$request->other ?? null
        ]);
                    

            Alert::success('success', 'Diagnosis Updated Successfully');
            return redirect()->back();

    }

    public function destroy($request){

    }
}
