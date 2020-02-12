
     @extends('layout')   
    @section('content')

    
    
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>New Client</h4>
        <form action="{{ route('client.update',['id'=>$client->id]) }}" method="post">
        @csrf
        @method('PUT')
          <div class="medium-4  columns">
            <label>Title</label>
            <select name="title">
                          <option value="mr" selected="selected">Mr.</option>
                          <option value="ms">Ms.</option>
                          <option value="mrs">Mrs.</option>
                          <option value="dr">Dr.</option>
                          <option value="mx">Mx.</option>
                        </select>
          </div>
          <div class="medium-4  columns">
            <label>Name</label>
            <input name="name" type="text" value="{{old('name',$client->name??null)}}" >
          </div>
          <div class="medium-4  columns">
            <label>Last Name</label>
            <input name="lastName" type="text" value="{{old('lastName',$client->lastname??null)}}">
          </div>
          <div class="medium-8  columns">
            <label>Address</label>
            <input name="address" type="text" value="{{old('address',$client->address??null)}}">
          </div>
          
          <div class="medium-4  columns">
            <label>City</label>
            <input name="city" type="text" value="{{old('city',$client->city??null)}}">
          </div>
          
          <div class="medium-12  columns">
            <label>Phone</label>
            <input name="email" type="text" value="{{old('email',$client->email??null)}}">
          </div>
          <div class="medium-12  columns">
            <input value="SAVE" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>

    
    @endsection('content')