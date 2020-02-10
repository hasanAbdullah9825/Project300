@extends('layout')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Reservations</h4>

        <table class="stack">
          <thead>
            <tr>
              <th width="200">ROOM</th>
              <th width="200">Name</th>
            </tr>
              
            @foreach($customers as $customer )
            <tr>
            <td>{{$customer->roomNo}}</td>
            <td>{{$customer->name}} {{$customer->lastname}}</td>
            </tr>
            @endforeach
          </thead>
          <tbody>
                    </tbody>
        </table>
      </div>
    </div>

    

   
    @endsection('content')