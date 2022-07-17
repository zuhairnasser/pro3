@extends('layouts.master')
@push('breadcrumb-item')
@endpush
@section('content-title', 'المخزون')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ url('get-import') }}" class="btn btn-sm btn-success">
                <i class="fa fa-add"></i>إضافة مخزون جديد
            </a>
        </div>
        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم المنتج</th>
                        <th scope="col">القسم</th>
                        <th scope="col">الكمية</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stores as $store)
                        <tr>
                            <td>{{ $store->id }}</td>
                            <td>{{ $store->product }}</td>
                            <td>{{ $store->section }}</td>
                            <td>{{ $store->sum }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer" style="text-align:left;">

        </div>
    </div>
@endsection
