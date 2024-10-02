@extends('master')

@section('content')



        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Gift Card</h1>
        </div>
        <!-- Single Page Header End -->

        <!-- Voucher Start -->
        <div class='container-fluid voucher py-5 mb-5'>
            <div class ='container'>
                <div class="row align-items-center">
                    <div class="card mb-3 me-5 col-md-6 col-lg-4 col-xl-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="{{asset('assets/user/img/gift.jpg')}}" class="img-fluid rounded-start" alt="voucher">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3 me-5 col-md-6 col-lg-4 col-xl-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="{{asset('assets/user/img/gift.jpg')}}" class="img-fluid rounded-start" alt="voucher">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="card mb-3 me-5 col-md-6 col-lg-4 col-xl-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="{{asset('assets/user/img/gift.jpg')}}" class="img-fluid rounded-start" alt="voucher">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                </div>
                                </div>
                            </div>
                    </div>
                    
                    <div class="card mb-3 me-5 col-md-6 col-lg-4 col-xl-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                    <img src="{{asset('assets/user/img/gift.jpg')}}" class="img-fluid rounded-start" alt="voucher">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>

        </div>
        <!-- Voucher End -->

@endsection