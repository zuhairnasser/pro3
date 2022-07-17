@extends('layouts.master')
@push('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ url('home') }}">الأصناف</a></li>
    <li class="breadcrumb-item"> تعديل </li>
@endpush
@section('content-title', trans('companies.create.content-title'))
@section('content')
    <form method="post" action="{{ route('category.update', $category->id) }}">
        @csrf
        @method('PATCH')
        <div class="card card-outline card-primary">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">إسم الصنف</label>
                    <input name="name" id="name" required
                        class="form-control @error('name') is-invalid @enderror" value="{{ $category->name }}" />
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="card-footer" style="text-align:left;">
                <button class="btn btn-primary">
                    <i class="fa fa-save"></i> @lang('buttons.save')
                </button>
            </div>
        </div>
    </form>
@endsection
