@extends('layouts.master')

@push('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ url('/section') }}">الأقسام</a></li>
    <li class="breadcrumb-item">إضافة قسم </li>
@endpush

@section('content-title',"إضافة قسم جديد")

@section('content')
<form method="post" action="{{route('section.store')}}">
        @csrf
        <div class="card card-outline card-primary">
            <div class="card-header">

            </div>

            <div class="card-body">

                <div class="form-group">
                    <label for="repo">المخزن</label>
                    <select name="repo" class="form-control">
                        @foreach ($repositries as $repo)
                        <option value="{{$repo->id}}">{{$repo->name}}</option>
                        @endforeach
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">إسم القسم</label>
                    <input name="name" id="name" required class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" />
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
