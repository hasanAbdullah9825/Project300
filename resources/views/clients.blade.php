@extends('layout')   
    @section('content')


    
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Clients</h4>
        <div class="medium-2  columns"><a class="button hollow success" href="{{ route('clients_new') }}">ADD NEW CLIENT</a></div>


        
        <table class="stack">
          <thead>
            <tr>
              <th width="100">Name</th>
              <th width="100">Email</th>
              <th width="100">Action</th>
            </tr>
          </thead>
          <tbody>

              
             @foreach($Clients as $client)
             <tr>
                <td>{{$client->name}} {{$client->lastname}}</td>
                <td>{{$client->email}}</td>
                <td>
                  
                <a class="hollow button"  href="{{route('client.edit',['id'=>$client->id])}}">EDIT</a>
                  <a class="hollow button warning" href="{{route ('abailroom',['id'=>$client->id])}}">BOOK A ROOM</a>
                  <a  class="hollow button" href="{{route('destroy',['roomno'=>$client->roomNo,'clientId'=>$client->id])}}">Leave Room</a>
                </td>
              </tr>

             @endforeach
                           
                      </tbody>
        </table>

        
      </div>
    </div>
    @endsection('content')
