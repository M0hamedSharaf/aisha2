@extends('master')

@section('breadcrumb')
    <div class="page-header">
        <div class="page-title">
            <h3>Create Teacher</h3>
        </div>
        <div class="dropdown filter custom-dropdown-icon">
            <a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><span class="text"><span>Show</span> : Daily Analytics</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-down">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg></a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="filterDropdown">
                <a class="dropdown-item" data-value="<span>Show</span> : Daily Analytics"
                    href="{{ route('admin.home') }}">Home</a>
                <a class="dropdown-item" data-value="<span>Show</span> : Daily Analytics"
                    href="{{ route('admin.teacher.index') }}">Teachers</a>
                <a class="dropdown-item" data-value="<span>Show</span> : Weekly Analytics"
                    href="{{ route('admin.teacher.create') }}">Create Teacher</a>
                    {{-- <a class="dropdown-item" data-value="<span>Show</span> : Weekly Analytics"
                        href="{{ route('admin.teacher.create', $teacher->id) }}">Edite Teacher</a> --}}
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:24px;">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4 class="text-center text-primary">Form controls</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area" style="height: 571px;">

                        <form action="{{ route('admin.teacher.store') }}" method="post" class="form-horizontal">
                            @csrf
                            <x-form.text name="name" label="??????????" :value="old('name')" />

                            <x-form.date name="birthday" label="?????????? ??????????????" :value="old('birthday')" />

                            <x-form.text name="phone" label="????????????" :value="old('phone')" />

                            <x-form.textarea name="note" label="????????????" :value="old('note')" />


                            <button type="submit" class="btn btn-primary float-right">
                                Submit
                            </button>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
