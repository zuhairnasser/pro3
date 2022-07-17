@extends('layouts.master')
@push('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ url('client') }}">الزبائن</a></li>
    <li class="breadcrumb-item"> تعديل </li>
@endpush
@section('content-title', "تعديل بيانات الزبون")
@section('content')
    <form method="post" action="{{ route('client.update', $client->id) }}">
        @csrf
        @method('PATCH')
        <div class="card card-outline card-primary">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">إسم الزبون</label>
                    <input name="name" id="name" required
                        class="form-control @error('name') is-invalid @enderror" value="{{ $client->name }}" />
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
