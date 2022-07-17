@extends('layouts.master')
@push('breadcrumb-item')
@endpush
@section('content-title', 'المخازن')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{url("repository/create")}}" class="btn btn-sm btn-success">
                <i class="fa fa-add"></i>إضافة مخزن جديد
            </a>
        </div>
        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم المخزن</th>
                        <th scope="col">العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($repositories as $repository)
                        <tr>
                            <td>{{ $repository->id }}</td>
                            <td>{{ $repository->name }}</td>
                            <td>
                                <a class="btn" href="{{ route('repository.edit', $repository->id) }}">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>

                            </td>

                            <td>
                                <form action="{{ route('repository.destroy', $repository->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">حذف</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer" style="text-align:left;">

        </div>
    </div>
@endsection
