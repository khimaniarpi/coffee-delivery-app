@extends('master')

@section('content')

                <!-- Modal Search Start -->
                    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content rounded-0">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex align-items-center">
                                    <div class="input-group w-75 mx-auto d-flex">
                                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Search End -->


                    <!-- Single Page Header start -->
                    <div class="container-fluid page-header py-5">
                        <h1 class="text-center text-white display-6">Menu</h1>
                    </div>
                    <!-- Single Page Header End -->


                    <!-- Fruits Shop Start-->
                    <div class="container-fluid fruite py-5">
                        <div class="container">
                            <h1 class="mb-4">{{$category_name}}</h1>
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        
                                        <div class="col-6"></div>
        
                                    </div>
                        <div class="row g-4">
                            
                            <div class="col-lg-12">
                                <div class="row g-4 justify-content-center">
                                    @foreach($menu as $item)
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <a href="{{route('menu.show',$item->id)}}">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="{{asset('assets/user/img/' .  $item->item_img)}}" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                        <h4>{{$item->item_name}}</h4>
                                                        <p>{{$item->description}}</p>
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">₹ {{$item->price}}</p>
                                                            <a href="{{route('cart.index')}}">      
                                                                <x-add-to-cart-button class="ms-4">
                                                                        {{ __('Add To Cart') }} 
                                                                </x-add-to-cart-button>
                                                            </a>
                                                            <!-- <a href="{{ route('cart.index')}}" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                    <!-- <div class="col-12">
                                        <div class="pagination d-flex justify-content-center mt-5">
                                            <a href="#" class="rounded">&laquo;</a>
                                            <a href="#" class="active rounded">1</a>
                                            <a href="#" class="rounded">2</a>
                                            <a href="#" class="rounded">3</a>
                                            <a href="#" class="rounded">4</a>
                                            <a href="#" class="rounded">5</a>
                                            <a href="#" class="rounded">6</a>
                                            <a href="#" class="rounded">&raquo;</a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fruits Shop End-->

@endsection