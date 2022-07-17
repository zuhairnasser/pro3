@extends('layouts.master')

@section('content-title', 'الصفحة الرئيسية')

@section('content')
    <div class="row">
        
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
                <div class="inner">
                    <h2>المخازن</h2>
                    <h2>{{ $repo }}</h2>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ url('repository') }}" class="small-box-footer">التفاصيل <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
                <div class="inner">
                    <h2>ألاقسام</h2>
                    <h2>{{ $sections }}</h2>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ url('section') }}" class="small-box-footer">التفاصيل <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
                <div class="inner">
                    <h2>المنتجات</h2>
                    <h2>{{ $products }}</h2>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ url('product') }}" class="small-box-footer">التفاصيل <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
                <div class="inner">
                    <h2>الزبائن</h2>
                    <h2>{{ $clients }}</h2>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ url('client') }}" class="small-box-footer">التفاصيل <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
                <div class="inner">
                    <h2>الاصناف</h2>
                    <h2>{{ $category }}</h2>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ url('category') }}" class="small-box-footer">التفاصيل <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
                <div class="inner">
                    <h2>الشركات </h2>
                    <h2>{{ $mans }}</h2>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ url('manufacture') }}" class="small-box-footer">التفاصيل <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>


    </div>
@endsection
