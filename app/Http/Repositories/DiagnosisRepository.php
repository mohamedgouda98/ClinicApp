<?php
namespace App\Http\Repositories;

use App\Http\Traits\Uploader;
use App\Models\Booking;
use App\Models\DiagnoseImg;
use App\Models\Diagnosis;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Interfaces\DiagnosisInterface;

class DiagnosisRepository implements  DiagnosisInterface
{
   use Uploader;

   protected $diagnosisModel;
   protected $diagnoseImgModel;
   protected $bookingModel;

   public function __construct(Diagnosis $diagnose,DiagnoseImg $diagnoseImg, Booking $booking)
   {
       $this->diagnosisModel   =  $diagnose;
       $this->diagnoseImgModel =  $diagnoseImg;
       $this->bookingModel     =  $booking;
   }

    public function index()
    {
        $diagnoses = $this->diagnosisModel::with('patients')->orderBy('id', 'desc')->paginate(10);
        return view('admin.diagnoses.index', compact('diagnoses'));
    }

    public function store($request)
    {
        DB::transaction(function () use ($request){
            $diagnose = $this->diagnosisModel::create([
                'patient_id'   => $request->patient_id,
                'complaint'    => $request->complaint ?? null,
                'diagnosis'    => $request->diagnosis ?? null,
                'investigation'=> $request->investigation ?? null,
                'treamtent'    => $request->treamtent ?? null,
                'reseen'       => $request->reseen ?? null,
                'hn'           => $request->hn ?? null,
                'phnx'         => $request->phnx ?? null,
                'wt'           => $request->wt ?? null,
                'tep'          => $request->tep ?? null,
                'hc'           => $request->hc ?? null,
                'chest'        => $request->chest ?? null,
                'abd'          => $request->abd ?? null,
                'gentalia'     => $request->gentalia ?? null,
                'other'        => $request->other ?? null
            ]);

            $files = $request->file('diagnosis_img');
            if ($request->hasFile('diagnosis_img')) {

                foreach($files as  $key=> $file){
                    $fileName = time(). $key.'.' .$file->extension();
                    $file = $this->uploadImage($file, $fileName, 'diagnose_files', null);
                    $this->diagnoseImgModel::create([
                        'diagnose_id' => $diagnose->id,
                        'img'         => $fileName
                    ]);
                }
            }

            $bookId = $this->bookingModel::where('patient_id', $request->patient_id)->select('id')->first();
            if ($bookId) {
                $this->bookingModel::destroy($bookId->id);
            }


        });
        Alert::success('success', 'Diagnose Created Successfully');
        return redirect(route('admin.diagnose.index'));
    }

    public function edit($diagnosis)
    {
         return view('admin.diagnoses.edit',compact('diagnosis'));
    }

    public function update($request, $diagnosis)
    {
            DB::transaction(function () use ($request, $diagnosis){
                $diagnosis->update([
                    'complaint'    => $request->complaint ?? null,
                    'diagnosis'    => $request->diagnosis ?? null,
                    'investigation'=> $request->investigation ?? null,
                    'treamtent'    => $request->treamtent ?? null,
                    'reseen'       => $request->reseen ?? null,
                    'hn'           => $request->hn ?? null,
                    'phnx'         => $request->phnx ?? null,
                    'wt'           => $request->wt ?? null,
                    'tep'          => $request->tep ?? null,
                    'hc'           => $request->hc ?? null,
                    'chest'        => $request->chest ?? null,
                    'abd'          => $request->abd ?? null,
                    'gentalia'     => $request->gentalia ?? null,
                    'other'        => $request->other ?? null,
                    'patient_id'   => $request->patient_id
                ]);

                $files = $request->file('diagnosis_img');
                $images= $diagnosis->diagnosisImg;

                if ($request->hasFile('diagnosis_img')) {

                    
                    foreach($images as $image){

                        $this->diagnoseImgModel->destroy($image->id);
                          unlink(public_path('images/diagnose_files/'.$image->img));
                   
                     }  
                    foreach($files as $key =>$file){
                        $fileName = time(). $key.'.' .$file->extension();
                        $file = $this->uploadImage($file, $fileName, 'diagnose_files',null);
                        $this->diagnoseImgModel::create([
                            'diagnose_id' => $diagnosis->id,
                            'img'         =>  $fileName,
                        ]);
                    
                     }
                }
            });
            Alert::success('success', 'Diagnosis Updated Successfully');
            return redirect()->back();

    }

    public function destroy($request)
    {
        $diagnose = $this->diagnosisModel::findOrFail($request->id);
        if ($diagnose) {
            $diagnose->destroy($diagnose->id);
            return 1;
        }
        return 0;
    }
}
