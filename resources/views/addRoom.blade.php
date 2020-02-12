@extends('layout')

@section('content')

div class="medium-4  columns">
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
@endsection('content')
          