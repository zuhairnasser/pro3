@extends('layouts.master')
@push('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ url('product') }}">الأصناف</a></li>
    <li class="breadcrumb-item">تعديل منتج </li>
@endpush
@section('content-title', 'تعديل منتج')
@section('content')
    <form method="post" action="{{ route('product.update', $product[0]->id) }}">
        @csrf
        @method('PATCH')
        @csrf
        <div class="card card-outline card-primary">
            <div class="card-header">
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="manufacture_id">الشركة المصنعة</label>
                    <select name="manufacture_id" class="form-control">
                        <option selected hidden disabled value="{{ $product[0]->manufacture_id }}">
                            {{ $product[0]->manufacture->name }}</option>
                        @foreach ($manufactures as $manufacture)
                            <option value="{{ $manufacture->id }}">{{ $manufacture->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category_id">الصنف</label>
                    <select name="category_id" class="form-control">
                        <option selected hidden disabled value="{{ $product[0]->category_id }}">
                            {{ $product[0]->category->name }}</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">إسم المنتج</label>
                    <input name="name" id="name" required class="form-control @error('name') is-invalid @enderror"
                        value="{{ $product[0]->name }}" />
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">ملاحظات</label>
                    <input name="description" id="description" required
                        class="form-control @error('description') is-invalid @enderror"
                        value="{{ $product[0]->description }}" />
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
