@extends('layouts.master')

@push('breadcrumb-item')
    <li class="breadcrumb-item">المستخدمين</li>
    <li class="breadcrumb-item">المستخدمين</li>
@endpush

@section('content-title', "المستخدمين")

@section('content')
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{url('accounts/create')}}" class="nav-link">إنشاء مستخدم جديد</a>
            </li>
        </ul>
    </nav>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="text-align:center;">#</th>
                    <th>الاسم</th>
                    <th>البريد الالكتروني</th>
                    <th>الصلاحية</th>
                    <th style="text-align:center;">العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td style="text-align:center;">{{$loop->iteration}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                         {{$user->permissions}}
                        </td>
                        <td style="text-align:center;">
                            <div class="btn btn-group-sm">
                                <a class="btn btn-primary"  href="{{url('accounts/'.encrypt($user->getKey()).'/edit')}}">
                                    <i class="fa fa-edit"></i>تعديل
                                </a>
                                <a class="btn btn-danger delete" href="{{url('accounts/'.encrypt($user->getKey()).'/delete')}}">
                                    <i class="fa fa-trash"></i>حذف
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
