<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Permohonan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\AssignOp\Mod;

use function Laravel\Prompts\error;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pages.users.permohonan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        try {
            //code...
            $nama_siswa = $request->nama_siswa;
            $nik = $request->nik;
            $nisn = $request->nisn;
            $tempat_lahir = $request->tempat_lahir;
            $tanggal_lahir = $request->tanggal_lahir;
            $kelas = $request->kelas;
            $nama_wali = $request->nama_wali;
            $pekerjaan = $request->pekerjaan;
            $alamat_siswa = $request->alamat_siswa;
            $alasan_pindah = $request->alasan_pindah;
            $npsn_sekolah_asal = $request->npsn_sekolah_asal;
            $asal_sekolah = $request->asal_sekolah;
            $kec_sekolah_asal = $request->kec_sekolah_asal;
            $npsn_sek_tujuan = $request->npsn_sek_tujuan;
            $sek_tujuan = $request->sek_tujuan;
            $kab_sek_tujuan = $request->kab_sek_tujuan;


            //file
            $file_mut_sek_asal = $request->file('file_mut_sek_asal');
            $file_super_sek_tujuan = $request->file('file_super_sek_tujuan');
            $file_pc_rapor = $request->file('file_pc_rapor');
            $file_super_ortu = $request->file('file_super_ortu');


            //upload proses
            $file_mut_sek_asal_name = time().'-'. $file_mut_sek_asal->getClientOriginalName() .'.'. $file_mut_sek_asal->getClientOriginalExtension();
            $file_mut_sek_asal->move(public_path('uploads'), $file_mut_sek_asal_name);

            $file_super_sek_tujuan_name = time().'-'. $file_super_sek_tujuan->getClientOriginalName().'.'. $file_super_sek_tujuan->getClientOriginalExtension();
            $file_super_sek_tujuan->move(public_path('uploads'), $file_super_sek_tujuan_name);

            $file_pc_rapor_name = time().'-'. $file_pc_rapor->getClientOriginalName().'.'. $file_pc_rapor->getClientOriginalExtension();
            $file_pc_rapor->move(public_path('uploads'), $file_pc_rapor_name);

            $file_super_ortu_name = time().'-'. $file_super_ortu->getClientOriginalName().'.'. $file_super_ortu->getClientOriginalExtension();
            $file_super_ortu->move(public_path('uploads'),$file_super_ortu_name);


            //save data
            $model = new Permohonan();
            $model->user_id = auth()->user()->id;
            $model->nama_siswa = $nama_siswa;
            $model->nik = $nik;
            $model->nisn = $nisn;
            $model->tempat_lahir = $tempat_lahir;
            $model->tanggal_lahir = $tanggal_lahir;
            $model->kelas = $kelas;
            $model->nama_wali = $nama_wali;
            $model->pekerjaan = $pekerjaan;
            $model->alamat_siswa = $alamat_siswa;
            $model->alasan_pindah = $alasan_pindah;
            $model->npsn_sekolah_asal = $npsn_sekolah_asal;
            $model->asal_sekolah = $asal_sekolah;
            $model->kec_sekolah_asal = $kec_sekolah_asal;
            $model->npsn_sek_tujuan = $npsn_sek_tujuan;
            $model->sek_tujuan = $sek_tujuan;
            $model->kab_sek_tujuan = $kab_sek_tujuan;
            $model->file_mut_sek_asal = $file_mut_sek_asal_name;
            $model->file_super_sek_tujuan = $file_super_sek_tujuan_name;
            $model->file_pc_rapor = $file_pc_rapor_name;
            $model->file_super_ortu= $file_super_ortu_name;
            $model->status=1;
            $model->save();

            return redirect()->route('siswa.dashboard');

        } catch (\Throwable $th) {
            //throw $th;

            dd($th);

            Session::flash('failed',"Opps..., terjadi kesalahan");

            return redirect()->route('siswa.permohonan.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
