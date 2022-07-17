@extends('layouts.master')
@push('breadcrumb-item')
@endpush
@section('content-title', 'المنتجات')
@section('content')
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body p-1">
            <div class="row">
                <div class="col-sm-4 col-md-2">
                    <div class="form-group">
                        <label for="category">الصنف</label>
                        <select name="category" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="col-sm-4 col-md-2">
                    <div class="form-group">
                        <label for="category">الصنف</label>
                        <select name="category" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="col-sm-4 col-md-2">
                    <div class="form-group">
                        <label for="category">الصنف</label>
                        <select name="category" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body p-1">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">اسم الصنف</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer" style="text-align:left;">

        </div>
    </div>
@endsection
