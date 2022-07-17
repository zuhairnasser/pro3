@extends('layouts.master')
@push('breadcrumb-item')
@endpush
@section('content-title', 'المخازن')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ url('opration/create') }}" class="btn btn-sm btn-success">
                <i class="fa fa-add"></i>إضافة مخزون جديد
            </a>
        </div>
        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم المنتج</th>
                        <th scope="col">الزبون</th>
                        <th scope="col">الكمية</th>
                        <th scope="col">التاريخ</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($oprations as $opration)
                        <tr>

                            <td>{{ $opration->id }}</td>
                            <td>{{ $opration->product }}</td>
                            <td>{{ $opration->client }}</td>
                            <td>{{ $opration->sum }}</td>
                            <td>{{ $opration->date }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer" style="text-align:left;">

        </div>
    </div>
@endsection
