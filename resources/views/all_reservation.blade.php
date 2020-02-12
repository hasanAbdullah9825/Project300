@extends('layout')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Reservations</h4>

        <table class="stack">
          <thead>
            <tr>
              <th width="100">ROOM Number</th>
              <th width="100">Name</th>
              <th width="100">Entry Date</th>
              <th width="100">Leave Date</th>
              <th width="100">Address</th>
              <th width="100">Phone</th>
            </tr>
              
            @foreach($customers as $customer )
            <tr>
            <td>{{$customer->roomNo}}</td>
            <td>{{$customer->name}} {{$customer->lastname}}</td>
            <td>{{$customer->date}}</td>
            <td>{{$customer->ldate}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->email}}</td>
            
            </tr>
            @endforeach
          </thead>
          <tbody>
                    </tbody>
        </table>
      </div>
    </div>

    

   
    @endsection('content')