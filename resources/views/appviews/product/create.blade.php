@extends('layouts.master')

@push('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ url('product') }}">الأصناف</a></li>
    <li class="breadcrumb-item">إضافة منتج </li>
@endpush

@section('content-title', "إضافة منتج")

@section('content')
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        <div class="card card-outline card-primary">
            <div class="card-header">
            </div>
            <div class="card-body">

             
                <div class="form-group">
                    <label for="manufacture">الشركة المصنعة</label>
                    <select name="manufacture" class="form-control">
                        @foreach ($manufactures as $manufacture)
                            <option value="{{ $manufacture->id }}">{{ $manufacture->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="category">الصنف</label>
                    <select name="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="name">إسم المنتج</label>
                    <input name="name" id="name" required class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" />
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">ملاحظات</label>
                    <input name="description" id="description" required
                        class="form-control @error('description') is-invalid @enderror"
                        value="{{ old('description') }}" />
                    @error('description')
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
