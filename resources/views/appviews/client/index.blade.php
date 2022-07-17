@extends('layouts.master')
@push('breadcrumb-item')
@endpush
@section('content-title', 'الزبائن')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{url("client/create")}}" class="btn btn-sm btn-success">
                <i class="fa fa-add"></i>إضافة زبون جديد
            </a>
        </div>
        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم الزبون</th>
                        <th scope="col">العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->name }}</td>
                          <td>
                                <a class="btn" href="{{ route('client.edit', $client->id) }}">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>

                            </td>

                            <td>
                                <form action="{{ route('client.destroy', $client->id) }}" method="post">
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
