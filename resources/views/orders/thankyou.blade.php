@extends('shopping.layouts.new')
@section('content')
<div class="page-wrap">
    <!-- Page content -->
    <div class="page-content">
        <main class="main-content">
            <section class="not-found-wrap text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h2 style="color: green">Your Order Has Been Placed succesfully.</h2>
                            <p></p>
                            <a href="{{ route('landing-page') }}" class="btn btn-primary btn-lg">Go to homepage</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div> <!-- /.page-content -->
</div> <!-- /.page-wrap -->
@endsection