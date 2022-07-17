@extends('layouts.master')
@push('breadcrumb-item')
@endpush
@section('content-title', 'المنتجات')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ url('product/create') }}" class="btn btn-sm btn-success">
                <i class="fa fa-add"></i>إضافة منتج جديد
            </a>
        </div>
        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم المنتج</th>
                        <th scope="col">الصنف</th>
                        <th scope="col">الشركة المصنعة</th>
                       
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->manufacture->name }}</td>
                          
                            <td>
                                <a class="btn" href="{{ route('product.edit', $product->id) }}">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>
                            </td>

                            <td>
                                <form action="{{ route('product.destroy', $product->id) }}" method="post">
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
