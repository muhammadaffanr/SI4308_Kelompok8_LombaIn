<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vaksin;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();

        return view('patient', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = time() . '.' . $request->image->extension();

        $request->image->move(public_path('img/patient/'), $img);

        Patient::insert([
            'id'=>$request->id,
            'lomba'=>$request->lomba,
            'nik'=>$request->nik,
            'Asal_Instansi_Pendidikan'=>$request->Asal_Instansi_Pendidikan,
            'Alamat'=>$request->Alamat,
            'image'=>$img,
            // 'kesan'=>$kesan,
            // 'pesan'=>$pesan,
        ]);

        return redirect('patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vaccine = vaksin::findOrFail($id);

        return view('add-patient', compact('vaccine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        $vaccine = vaksin::find($id);

        return view('edit-patient', compact('vaccine', 'patient'));
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
        if ($request->image == null) {
            Patient::where('id', $id)->update([
                // 'vaccine_id' => $request->vaccine_id,
            'id'=>$request->id,
            'lomba'=>$request->lomba,
            'nik'=>$request->nik,
            'Asal_Instansi_Pendidikan'=>$request->Asal_Instansi_Pendidikan,
            'Alamat'=>$request->Alamat,
            ]);
        }else{
            $img = time() . '.' . $request->image->extension();

            $request->image->move(public_path('img/patient/'), $img);

            Patient::insert([
                // 'id'=>$request->id,
                // 'lomba'=>$request->lomba,
                'nik'=>$request->nik,
                'alamat'=>$request->alamat,
                'image'=>$img,
                'Asal_Instansi_Pendidikan'=>$request->Asal_Instansi_Pendidikan
            ]);
        }

        return redirect('/patient');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return redirect('/patient');
    }
}
