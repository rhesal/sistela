@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="overflow-hidden shadow-none card bg-light-info position-relative">
            <div class="px-4 py-3 card-body">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="mb-8 fw-semibold">Add STELA</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted " href="{{ route('admin.dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item" class="text-muted"><a class="text-muted "
                                        href="{{ route('all.stela') }}">Entry STELA - Manual</a></li>
                                <li class="breadcrumb-item" aria-current="page">Add Stela</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="{{ asset('dist/images/breadcrumb/ChatBc.png') }}" alt=""
                                class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5>STELA Form</h5>
                        <form class="form-horizontal r-separator" method="POST" action="{{ route('store.stela') }}">
                            @csrf
                            <div class="card-body">
                                <div class="mb-0 form-group row align-items-center">
                                    <label for="nama_ibu" class="col-3 text-end control-label col-form-label">
                                        Nama Dokter / Bidan
                                    </label>
                                    <div class="pt-2 pb-2 col-9 border-start">
                                        <select name="petugas" class="select2 form-control"
                                            style="width: 100%; height: 36px">
                                            <option>Select</option>
                                            @foreach ($pegawai as $item)
                                                <option value="{{ $item['nama'] }}">{{ $item['nama'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-0 form-group row align-items-center">
                                    <label for="nama_ibu" class="col-3 text-end control-label col-form-label">
                                        Nama Ibu
                                    </label>
                                    <div class="pt-2 pb-2 col-9 border-start">
                                        <input type="text" class="form-control text-capitalize" name="nama_ibu"
                                            id="nama_ibu" placeholder="Nama Ibu" />
                                    </div>
                                </div>
                                <div class="mb-0 form-group row align-items-center">
                                    <label for="nama_ayah" class="col-3 text-end control-label col-form-label">
                                        Nama Ayah
                                    </label>
                                    <div class="pt-2 pb-2 col-9 border-start">
                                        <input type="text" class="form-control text-capitalize" name="nama_ayah"
                                            id="nama_ayah" placeholder="Nama Ayah" />
                                    </div>
                                </div>
                                <div class="mb-0 form-group row align-items-center">
                                    <label for="alamat" class="col-3 text-end control-label col-form-label">
                                        Alamat
                                    </label>
                                    <div class="pt-2 pb-2 col-9 border-start">
                                        <input type="text" class="form-control text-capitalize" name="alamat"
                                            id="alamat" placeholder="Alamat" />
                                    </div>
                                </div>
                                <div class="mb-0 form-group row align-items-center">
                                    <label for="nama_anak" class="col-3 text-end control-label col-form-label">
                                        Nama Anak
                                    </label>
                                    <div class="pt-2 pb-2 col-9 border-start">
                                        <input type="text" class="form-control text-capitalize" name="nama_anak"
                                            id="nama_anak" placeholder="Nama Anak" />
                                    </div>
                                </div>
                                <div class="mb-0 form-group row align-items-center">
                                    <label for="tgl_lahir" class="col-3 text-end control-label col-form-label">
                                        Hari Lahir Anak
                                    </label>
                                    <div class="pt-2 pb-2 col-9 border-start">
                                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir"
                                            placeholder="Hari Lahir Anak" />
                                    </div>
                                </div>
                                <div class="mb-0 form-group row align-items-center">
                                    <label for="jam_lahir" class="col-3 text-end control-label col-form-label">
                                        Jam Lahir
                                    </label>
                                    <div class="pt-2 pb-2 col-9 border-start">
                                        <input type="time" class="form-control" name="jam_lahir" id="jam_lahir"
                                            placeholder="Jam Lahir" />
                                    </div>
                                </div>
                                <div class="mb-0 form-group row align-items-center">
                                    <label for="inputEmail3" class="col-3 text-end control-label col-form-label">
                                        Jenis Kelamin
                                    </label>
                                    <div class="pt-2 pb-2 col-9 border-start">
                                        <div class="form-check">
                                            <input name="jenis_kelamin" type="radio" class="form-check-input"
                                                value="laki-laki" name="radio-stacked" required />
                                            <label class="form-check-label" for="laki">Laki-Laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input name="jenis_kelamin" type="radio" class="form-check-input"
                                                value="perempuan" name="radio-stacked" required />
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-0 form-group row align-items-center">
                                    <label for="example-number-input" class="col-3 text-end control-label col-form-label">
                                        Anak Ke
                                    </label>
                                    <div class="pt-2 pb-2 col-9 border-start">
                                        <input class="form-control" type="number" name="anak_ke" id="anak_ke"
                                            placeholder="0" />
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border-top">
                                <div class="mb-0 form-group text-end">
                                    <button type="submit"
                                        class="px-4 btn btn-info rounded-pill waves-effect waves-light">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    username: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'Please Enter Name',
                    },
                    username: {
                        required: 'Please Enter Username',
                    },
                    email: {
                        required: 'Please Enter Email',
                    },
                    password: {
                        required: 'Please Enter Password',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
