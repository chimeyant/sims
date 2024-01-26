
@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="container">
    <div class="row flex-center">
        <div class="col-lg-4">
            <!--begin::Mixed Widget 14-->
            <div class="">
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title font-weight-bolder">Progress Permohonan</h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column ">
                        <div class="flex-grow-1">
                            <div class="row flex-center font-size-h2 mb-5">
                                DALAM PROSES
                            </div>
                        </div>
                        <div class="pt-5">
                            <a href="{{ route('siswa.permohonan.index') }}" class="btn btn-success btn-shadow-hover font-weight-bolder w-100 py-3">Unduh Surat Rekomendasi</a>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>

            </div>
            <!--end::Mixed Widget 14-->
        </div>
    </div>
</div>
@endsection

@section('footscript')
    <!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/widgets.js?v=7.0.4"></script>
		<!--end::Page Scripts-->
@endsection

