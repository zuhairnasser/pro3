@extends('layouts.master')

@push('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ url('/opration') }}">تخريج مخزون</a></li>
    <li class="breadcrumb-item">تخريج مخزون </li>
@endpush

@section('content-title', 'تخريج مخزون')

@section('content')
    <form method="post" action="{{ route('export') }}">
        @csrf
        <div class="card card-outline card-primary">
            <div class="card-header">

            </div>

            <div class="card-body">

              
                <div class="form-group">
                    <label for="product">اسم المنتج</label>
                    <select name="product" class="form-control">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="client">اسم الزبون</label>
                    <select name="client" class="form-control">
                        @foreach ($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="count">الكمية</label>
                    <input name="count" id="count" required class="form-control @error('count') is-invalid @enderror"
                        value="{{ old('count') }}" />
                    @error('count')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="card-footer" style="text-align:left;">
                <button class="btn btn-primary">
                    <i class="fa fa-save"></i> حفظ
            </div>
        </div>
    </form>
@endsection
