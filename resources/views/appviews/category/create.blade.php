@extends('layouts.master')
@push('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ url('category') }}">الأصناف</a></li>
    <li class="breadcrumb-item">إضافة صنف </li>
@endpush
@section('content-title',"إضافة صنف جديد")
@section('content')
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="card card-outline card-primary">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="category_name">إسم الصنف</label>
                    <input name="category_name" id="category_name" required
                        class="form-control @error('category_name') is-invalid @enderror"
                        value="{{ old('category_name') }}" />
                    @error('category_name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="card-footer" style="text-align:left;">
                <button class="btn btn-primary">
                    <i class="fa fa-save"></i> حفظ 
                </button>
            </div>
        </div>
    </form>
@endsection