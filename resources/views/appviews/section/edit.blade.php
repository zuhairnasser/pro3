@extends('layouts.master')
@push('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ url('section') }}"> الاقسام</a></li>
    <li class="breadcrumb-item"> تعديل </li>
@endpush
@section('content-title',"إضافة قسم جديد")
@section('content')
    <form method="post" action="{{ route('section.update', $section->id) }}">
        @csrf
        @method('PATCH')
        <div class="card card-outline card-primary">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="repository_id">المخزن</label>
                    <select name="repository_id" class="form-control" >
                        @foreach ($repositries as $repo)
                        <option value="{{$repo->id}}">{{$repo->name}}</option>
                        @endforeach
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">إسم الصنف</label>
                    <input name="name" id="name" required class="form-control @error('name') is-invalid @enderror"
                        value="{{ $section->name }}" />
                    @error('name')
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
