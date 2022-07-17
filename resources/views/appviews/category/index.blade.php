@extends('layouts.master')
@push('breadcrumb-item')
@endpush
@section('content-title', 'الأصناف')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{url("category/create")}}" class="btn btn-sm btn-success">
                <i class="fa fa-add"></i>إضافة صنف جديد
            </a>
        </div>
        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم الصنف</th>
                        <th scope="col">العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                          <td>
                                <a class="btn" href="{{ route('category.edit', $category->id) }}">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>

                            </td>

                            <td>
                                <form action="{{ route('category.destroy', $category->id) }}" method="post">
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
    </div>
@endsection
