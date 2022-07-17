@extends('layouts.master')

@push('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{url('accounts')}}">المستخدمين</a></li>
    <li class="breadcrumb-item">{{$user->name}}</li>
    <li class="breadcrumb-item">تعديل</li>
@endpush

@section('content-title',"تعديل بيانات المستخدم")

@section('content')
    <form action="{{url('accounts/'.encrypt($user->getKey()).'/update')}}" method="post">
        @csrf
        <div class="card card-outline card-primary">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col col-md-6 form-group">
                        <label for="uname">اسم المستخدم</label>
                        <input name="uname" id="uname" required value="{{old('uname')??$user->name}}" class="form-control @error('uname') is-invalid @enderror"/>
                        @error('uname')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col col-md-6 form-group">
                        <label for="email">البريد الالكتروني</label>
                        <input type="email" name="email" id="email" required value="{{old('email')??$user->email}}" class="form-control @error('email') is-invalid @enderror"/>
                        @error('email')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col col-md-6 form-group">
                        <label for="password">كلمة المرور</label>
                        <input type="password" name="password" id="password"  class="form-control @error('password') is-invalid @enderror"/>
                        @error('password')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col col-md-6 form-group">
                        <label for="password_confirmation">تأكيد كلمة المرور</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"  class="form-control @error('password_confirmation') is-invalid @enderror"/>
                    </div>
                </div>
                <hr />

                <div class="form-group">
                    <label for="permission">الصلاحية</label>
                    <select multiple name="permission[]" id="permission" class="form-control @error('permission') is-invalid @enderror" required>
                        <option selected disabled hidden>@lang('accounts.forms.choose-permission')</option>
                        @foreach($permissions as $permission)
                            <option {{in_array($permission['hidden_name'], explode(',', $user->permissions), true)?'selected':''}} value="{{encrypt($permission['hidden_name'])}}">{{$permission['display_name']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer" style="text-align:left;">
                <button class="btn btn-primary" type="submit">
                    <i class="fa fa-save"></i>تعديل
                </button>
            </div>
        </div>
    </form>
@endsection
