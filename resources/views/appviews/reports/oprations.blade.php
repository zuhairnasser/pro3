@extends('layouts.master')
@push('breadcrumb-item')
@endpush
@section('content-title', 'المنتجات')
@section('content')
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body p-1">
            <form>
                <div class="row">
                    <div class="col-sm-4 col-md-2">
                        <div class="form-group">
                            <label for="category">الصنف</label>
                            <select name="category" class="form-control">
                                <option selected hidden disabled>كل الاصناف</option>
                                @foreach ($categories as $category)
                                    <option {{ request()->get('category') == $category->name ? 'selected' : '' }}
                                        value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2">
                        <div class="form-group">
                            <label for="product">المنتج</label>
                            <select name="product" class="form-control">
                                <option selected hidden disabled>إختار المنتج...</option>
                                @foreach ($products as $product)
                                    <option {{ request()->get('product') == $product->name ? 'selected' : '' }}
                                        value="{{ $product->name }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2">
                        <div class="form-group">
                            <label for="category">المستخدم</label>
                            <select name="user" class="form-control">
                                <option selected hidden disabled>كل المستخدمين</option>
                                @foreach ($users as $user)
                                    <option {{ request()->get('user') == $user->id ? 'selected' : '' }}
                                        value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2">
                        <div class="form-group">
                            <label for="category">العملاء</label>
                            <select name="client" class="form-control">
                                <option selected hidden disabled>كل العملاء</option>
                                @foreach ($clients as $client)
                                    <option {{ request()->get('client') == $client->id ? 'selected' : '' }}
                                        value="{{ $client->id }}">{{ $client->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-2">
                        <div class="form-group">
                            <label for="status">نوع العملية</label>
                            <select name="status" class="form-control">
                                <option selected hidden disabled>كل العمليات</option>
                                <option {{ request()->get('status') == 'in' ? 'selected' : '' }} value="in">وارد</option>
                                <option {{ request()->get('status') == 'out' ? 'selected' : '' }} value="out">صادر
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-6">
                    <div class="btn-group mt-4">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> تصفية</button>
                        @if (request()->has('category') || request()->has('product') || request()->has('user') || request()->has('client') || request()->has('status'))
                            <button class="btn btn-danger" type="button"
                                onclick="document.location.href='{{ url('oprations-report') }}';"><i
                                    class="fa fa-times"></i>
                                إلغاء التصفية</button>
                        @endif
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
    <div class="card">

        <div class="card-body p-1">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">اسم المنتج</th>
                        <th scope="col">الصنف</th>
                        <th scope="col">الكمية</th>
                        <th scope="col">المستخدم</th>
                        <th scope="col"> العميل</th>
                        <th scope="col"> التاريخ</th>
                        <th scope="col"> نوع العملية</th>
                </thead>
                <tbody>
                    @foreach ($oprations as $opration)
                        <tr>
                            <td>{{ $opration->product }}</td>
                            <td>{{ $opration->category }}</td>
                            <td>{{ $opration->sum }}</td>
                            <td>{{ $opration->name }}</td>
                            <td>{{ $opration->client }}</td>
                            <td>{{ $opration->date }}</td>
                            <td>{{ $opration->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer" style="text-align:left;">

        </div>
    </div>
@endsection
