@extends('layouts.master')
@push('breadcrumb-item')
@endpush
@section('content-title', 'الاقسام')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ url('section/create') }}" class="btn btn-sm btn-success">
                <i class="fa fa-add"></i>إضافة قسم جديد
            </a>

            
        </div>
        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم القسم</th>
                        <th scope="col">المخزن</th>
                        <th scope="col">العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sections as $section)
                        <tr>
                            <td>{{ $section->id }}</td>
                            <td>{{ $section->name }}</td>
                            <td>{{ $section->repository->name }}</td>
                            <td>
                                <a class="btn" href="{{ route('section.edit', $section->id) }}">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('section.destroy', $section->id) }}" method="post">
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
