@extends('master')

@section('content')

    <div class="container feature py-5">
        <div class="row">
            <div class="col-12">
                <div class="col-md-7 col-lg-8">
                        
                        <form class="needs-validation" novalidate="" action="{{route('store.add')}}" method="POST">
                          @csrf  
                        <div class="row g-3">
                            <div class="col-12">
                            <label for="storename" class="form-label">Store name</label>
                            <input type="text" class="form-control" name="storename"  placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid store name is required.   
                            </div>
                            </div>

                            <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="storeemail"  placeholder="you@example.com" required="">
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                            </div>

                            <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="storeaddress"  placeholder="1234 Main St" required="">
                            <div class="invalid-feedback">
                                Please enter your store address.
                            </div>
                            </div>

                            <div class="col-12">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" name="storephone"  placeholder="+91-123456789" required="">
                            <div class="invalid-feedback">
                                Please enter your store phone number.
                            </div>
                            </div>
                        </div>

                        <hr class="my-4">
                        
                        <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
                        </form>
                    </div>

            </div>
        </div>
    </div>





@endsection