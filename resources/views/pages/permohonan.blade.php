@extends('layouts.master')

@section('title')
    Daftar Permohonan
@endsection

@section('content')
<div class="content">
    <div class="col-lg-12 pb-10">
        <!--begin::Advance Table Widget 4-->
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Daftar Permohonan</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">Berikut adalah  permohonan yang belum di proses</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-0 pb-3">
                <div class="tab-content">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                            <thead>
                                <tr class="text-left text-uppercase">
                                    <th style="min-width: 250px" class="pl-7">
                                        <span class="text-dark-75">Nama Pemohon</span>
                                    </th>
                                    <th style="min-width: 100px">Tanggal</th>
                                    <th style="min-width: 130px">Status</th>
                                    <th style="min-width: 80px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $item)
                                    <tr>
                                        <td class="pl-0 py-8">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50 symbol-light mr-4">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $item->nama_siswa }}</a>
                                                    <span class="text-muted font-weight-bold d-block">NISN: {{ $item->nisn }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $item->created_at }}</span>

                                        </td>
                                        <td>
                                            @if ($item->status == '1')
                                            <span class="text-dark-75 bg-red-50 font-weight-bolder d-block font-size-lg">Belum Di Tindak Lanjuti</span>

                                            @else
                                            <span class="text-dark-75 bg-red-50 font-weight-bolder d-block font-size-lg">Selesai</span>
                                            @endif
                                        </td>
                                        <td class="pr-0 text-right">
                                            <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">Lihat</a>
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- <tr>

                                </tr>

                                <tr>
                                    <td class="pl-0 py-8">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 symbol-light mr-4">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                                </span>
                                            </div>
                                            <div>
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Romi</a>
                                                <span class="text-muted font-weight-bold d-block">NISN: 213827398</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">01/01/2024</span>

                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Belum Di Tindak Lanjuti</span>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">Lihat</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0 py-8">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 symbol-light mr-4">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                                </span>
                                            </div>
                                            <div>
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Dudy Fathan</a>
                                                <span class="text-muted font-weight-bold d-block">NISN: 213827398</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">01/01/2024</span>

                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Belum Di Tindak Lanjuti</span>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">Lihat</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0 py-8">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 symbol-light mr-4">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                                </span>
                                            </div>
                                            <div>
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Fachran</a>
                                                <span class="text-muted font-weight-bold d-block">NISN: 213827398</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">01/01/2024</span>

                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Belum Di Tindak Lanjuti</span>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">Lihat</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0 py-8">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 symbol-light mr-4">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                                </span>
                                            </div>
                                            <div>
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Reza Satria</a>
                                                <span class="text-muted font-weight-bold d-block">NISN: 213827398</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">01/01/2024</span>

                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Belum Di Tindak Lanjuti</span>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">Lihat</a>
                                    </td>
                                </tr> --}}

                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Advance Table Widget 4-->
    </div>
</div>
@endsection
