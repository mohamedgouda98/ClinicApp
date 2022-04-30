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
            'complaint'   =>$request->complaint,
            'diagnosis'   =>$request->diagnosis,
            'investigation'=>$request->investigation,
            'treamtent'    =>$request->treamtent,
            'reseen'       =>$request->reseen,
            'hn'           =>$request->hn,
            'phnx'         =>$request->phnx,
            'wt'           =>$request->wt,
            'tep'          =>$request->tep,
            'hc'           =>$request->hc,
            'chest'        =>$request->chest,
            'abd'          =>$request->abd,
            'gentalia'     =>$request->gentalia,
            'other'        =>$request->other
        ]);
                    

            Alert::success('success', 'Diagnosis Updated Successfully');
            return redirect()->back();

    }

    public function destroy($request){

    }
}
