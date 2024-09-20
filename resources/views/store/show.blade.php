<h1>Store Details</h1>

@foreach($data as $id)

    <h3>Store name : {{$id->store_name}}</h3>
    <h3>Store address : {{$id->store_address}}</h3>
    <h3>Store phone : {{$id->store_phone}}</h3>
    <h3>Store email : {{$id->store_email}}</h3>



@endforeach










    