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


        <!-- Hero Start -->
        <div class="container-fluid py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <!-- <h4 class="mb-3 text-secondary">100% Organic Foods</h4> -->
                        <h1 class="mb-5 display-3 text-primary">Cup of joy in a world of chaos...</h1>
                        <div class="position-relative mx-auto">
                            <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="number" placeholder="Search">
                            <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%;">Submit Now</button>
                        </div>
                    </div>
                    <!-- <div class="col-md-12 col-lg-5">
                        <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active rounded">
                                    <img src="{{asset('assets/user/img\coffee img 2.jpg')}}" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                                     <a href="#" class="btn px-4 py-2 text-white rounded"></a> 
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="{{asset('assets/user/img\coffee img1.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                    <a href="#" class="btn px-4 py-2 text-white rounded"></a>
                                </div>
                            </div>
                             <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button> 
                             <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button> 
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Handcrafted Curation Start-->
        <div class="container-fluid fruite py-4">
            <div class="container">
                <div class="tab-class text-center">
                    <div class="row g-4">
                        <div class="col-lg-4 text-start mb-5">
                            <h1>Handcrafted Curation</h1>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        @foreach($categories as $category)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <a href="{{route('menu.index',$category->id)}}"> 
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="{{asset('assets/user/img/' .  $category->category_img)}}" class="img-fluid w-100 rounded-top" alt=""> 
                                                    </div>
                                                    
                                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                        <h4>{{$category->category_name}}</h4>
                                                    </div>
                                                </div>
                                            </a>           
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>      
            </div>
        </div>
        <!-- Handcrafted Curation End-->

         <!-- Barista Recommends Start-->
        <div class="container-fluid vesitable py-4">
            <div class="container">
                <h1 class="mb-0">Barista Recommends</h1>
                <div class="owl-carousel vegetable-carousel justify-content-center">
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{asset('assets/user/img/hot-chocolate.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        
                        <div class="p-4 rounded-bottom">
                            <h4>Signature Hot Chocolate</h4>
                            <p>Short(237ml)</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">₹ 309</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{asset('assets/user/img/cold-brew-black.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        
                        <div class="p-4 rounded-bottom">
                            <h4>Cold Brew Black Coffee</h4>
                            <p>Short(cold Brew black)</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">₹ 299</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{asset('assets/user/img/ice-latte.jpg')}}" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        
                        <div class="p-4 rounded-bottom">
                            <h4>Tall Iced Caffè Latte</h4>
                            <p>Tall()</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">₹ 388</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{asset('assets/user/img/pumkin-latte.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        
                        <div class="p-4 rounded-bottom">
                            <h4>Pumpkin Spice Latte</h4>
                            <p>SHORT(237 ML) .219 Kcal</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">₹ 430</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{asset('assets/user/img/cream-latte.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        
                        <div class="p-4 rounded-bottom">
                            <h4>Cookie Creme Latte</h4>
                            <p>SHORT(237 mL) .344 Kcalt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">₹ 480</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{asset('assets/user/img/vegetable-item-6.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        
                        <div class="p-4 rounded-bottom">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">$7.99 / kg</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{asset('assets/user/img/vegetable-item-5.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        
                        <div class="p-4 rounded-bottom">
                            <h4>Potatoes</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">$7.99 / kg</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{asset('assets/user/img/vegetable-item-6.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        
                        <div class="p-4 rounded-bottom">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">$7.99 / kg</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Barista Recommends End -->

@endsection