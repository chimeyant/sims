@extends('layouts.master')

@section('title')
    Permohonan Mutasi
@endsection


@section('content')
<div class="container">
    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                Formuli Permohonan Mutasi
            </h3>
            <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form method="POST" enctype="multipart/form-data" action="{{ route('siswa.permohonan.store') }}">
            @csrf
            <div class="card-body">
                <div class="font-size-h2 mb-5">
                    Biodata Siswa
                </div>
                <div class="form-group">
                    <label>Nama Siswa <span class="text-danger">*</span></label>
                    <input type="text" name="nama_siswa" class="form-control"  placeholder="Masukan Nama Lengkap Siswa"/>
                </div>
                <div class="form-group">
                    <label>Nomor Induk Kependudukan (NIK)<span class="text-danger">*</span></label>
                    <input type="text" name="nik" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>NISN <span class="text-danger"></span></label>
                    <input type="text" name="nisn" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir <span class="text-danger"></span></label>
                    <input type="text" name="tempat_lahir" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir <span class="text-danger"></span></label>
                    <input type="date" name="tanggal_lahir" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Kelas <span class="text-danger"></span></label>
                    <input type="text" name="kelas" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Nama Orang Tua/Wali <span class="text-danger"></span></label>
                    <input type="text" name="nama_wali" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Pekerjaan<span class="text-danger"></span></label>
                    <input type="text" name="pekerjaan" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group mb-1">
                    <label for="exampleTextarea">Alamat Siswa <span class="text-danger"></span></label>
                    <textarea class="form-control" id="alamat_siswa" name="alamat_siswa" rows="3"></textarea>
                </div>

                <div class="font-size-h2 mb-5 mt-10">
                    Data Permohonan
                </div>
                <div class="form-group">
                    <label>NPSN Sekolah Asal<span class="text-danger"></span></label>
                    <input type="text" name="npsn_sekolah_asal" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Sekolah Asal <span class="text-danger"></span></label>
                    <input type="text" name="asal_sekolah" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Kecamatan Sekolah Asal <span class="text-danger"></span></label>
                    <input type="text" name="kec_sekolah_asal" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>NPSN Sekolah Tujuan<span class="text-danger"></span></label>
                    <input type="text" name="npsn_sek_tujuan" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Sekolah Tujuan<span class="text-danger"></span></label>
                    <input type="text" name="sek_tujuan" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Kabupaten Sekolah Tujuan<span class="text-danger"></span></label>
                    <input type="text" name="kab_sek_tujuan" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group mb-1">
                    <label for="exampleTextarea">Alasan Pindah <span class="text-danger"></span></label>
                    <textarea class="form-control" id="alasan_pindah" name="alasan_pindah" rows="3"></textarea>
                </div>

                <div class="font-size-h4 mb-5 mt-5">
                    Dokumen Persyaratan
                </div>
                <div class="form-group">
                    <label>File Mutasi Dari Sekolah Asal<span class="text-danger"></span></label>
                    <input type="file" name="file_mut_sek_asal" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Surat Permohonan Sekolah Tujuan <span class="text-danger"></span></label>
                    <input type="file" name="file_super_sek_tujuan" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Photo Copy Rapor<span class="text-danger"></span></label>
                    <input type="file" name="file_pc_rapor" class="form-control"  placeholder=""/>
                </div>
                <div class="form-group">
                    <label>Surat Permohonan Orang Tuan<span class="text-danger"></span></label>
                    <input type="file" name="file_super_ortu" class="form-control"  placeholder=""/>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
            </div>
        </form>
        <!--end::Form-->
    </div>
</div>
@endsection
