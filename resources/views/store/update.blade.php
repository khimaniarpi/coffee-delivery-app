@extends('master')

@section('content')

    <div class="container feature py-5">
        <div class="row">
            <div class="col-12">
                <h1>Update Store Data</h1>
                <div class="col-md-7 col-lg-8">
                        
                        <form class="needs-validation" novalidate="" action="{{route('store.update', $data->id )}}" method="POST">
                          @csrf  
                        <div class="row g-3">
                            <div class="col-12">
                            <label for="storename" class="form-label">Store name</label>
                            <input type="text" class="form-control" name="storename"  placeholder="" value="{{ $data->store_name}}" required="">
                            <div class="invalid-feedback">
                                Valid store name is required.
                            </div>
                            </div>

                            <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="storeemail"  placeholder="you@example.com" value="{{ $data->store_email}}" required="">
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                            </div>

                            <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="storeaddress"  placeholder="" value="{{ $data->store_address}}" required="">
                            <div class="invalid-feedback">
                                Please enter your store address.
                            </div>
                            </div>

                            <div class="col-12">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" name="storephone"  placeholder="+91-123456789" value="{{ $data->store_phone}}" required="">
                            <div class="invalid-feedback">
                                Please enter your store phone number.
                            </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Update</button>
                        </form>
                    </div>

            </div>
        </div>
    </div>





@endsection