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
                                <option selected hidden disabled>إختار الصنف...</option>
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
                                @foreach ($products_selection as $product)
                                    <option {{ request()->get('product') == $product->name ? 'selected' : '' }}
                                        value="{{ $product->name }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <x-has-permission permissions="super-admin">
                    <div class="col-sm-4 col-md-2">
                        <div class="form-group">
                            <label for="repository">المخزن</label>
                            <select name="repository" class="form-control">
                                <option selected hidden disabled>إختار المخزن...</option>
                                @foreach ($repositories as $repository)
                                    <option {{ request()->get('repository') == $repository->name ? 'selected' : '' }}
                                        value="{{ $repository->name }}">{{ $repository->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    </x-has-permission>
                    <div class="col-sm-4 col-md-2">
                        <div class="form-group">
                            <label for="category">القسم</label>
                            <select name="section" class="form-control">
                                <option selected hidden disabled>إختار القسم...</option>
                                @foreach ($sections as $section)
                                    <option {{ request()->get('section') == $section->name ? 'selected' : '' }}
                                        value="{{ $section->name }}">{{ $section->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2">
                        <div class="form-group">
                            <label for="category">المستخدم</label>
                            <select name="user" class="form-control">
                                <option selected hidden disabled>إختار المستخدم...</option>
                                @foreach ($users as $user)
                                    <option {{ request()->get('user') == $user->id ? 'selected' : '' }}
                                        value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="btn-group mt-4">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> تصفية</button>
                            @if (request()->has('category') || request()->has('section') || request()->has('user') || request()->has('count') || request()->has('product') || request()->has('to'))
                                <button class="btn btn-danger" type="button"
                                    onclick="document.location.href='{{ url('products') }}';"><i
                                        class="fa fa-times"></i>
                                    إلغاء التصفية</button>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if ($products->count() > 0)
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body p-1">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">اسم المنتج</th>
                            <th scope="col">الصنف</th>
                            <th scope="col">المخزن</th>
                            <th scope="col">القسم</th>
                            <th scope="col"> الكمية</th>
                            <th scope="col"> التاريخ</th>
                            <th scope="col"> المستخدم</th>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->product }}</td>
                                <td>{{ $product->category }}</td>
                                <td>{{ $product->repositry }}</td>
                                <td>{{ $product->section }}</td>
                                <td>{{ $product->sum }}</td>
                                <td>{{ $product->date }}</td>
                                <td>{{ $product->user }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer" style="text-align:left;">

            </div>
        </div>
    @else
        <h4> عفوا لا توجد بيانات</h4>
    @endif

@endsection
