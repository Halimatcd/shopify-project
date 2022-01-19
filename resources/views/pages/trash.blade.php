
  
@extends('layouts.app')

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            @include('errors.error')
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Delete Records</h4>
                </div>
            
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Sender Name</th>
                            <th>Sende No</th>
                            <th>Reciever Name</th>
                            <th>Reciever No</th>
                            <th>Item</th>
                            <th>Pick up</th>
                            <th>Destination</th>
                            <th>Date Deleted</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $customers)
                            <tr>
                                <td>
                                    {{$customers->id}}
                                </td>
                                <td>
                                    <span class="fw-bold">{{$customers->Sender_name}}</span>
                                </td>
                                <td>{{$customers->Sender_no}}</td>
                                <td>
                                    {{$customers->reciever_name}}
                                </td>
                                <td><span class="badge rounded-pill badge-light-primary me-1">{{$customers->reciever_no}}</span></td>
                                <td><span class="badge rounded-pill badge-light-primary me-1">{{$customers->item}}</span></td>
                                <td><span class="badge rounded-pill badge-light-primary me-1">{{$customers->pick_up}}</span></td>
                                <td><span class="badge rounded-pill badge-light-primary me-1">{{$customers->destination}}</span></td>
                                <td><span class="badge rounded-pill badge-light-primary me-1">{{\Carbon\Carbon::parse($customers->deleted_at)->diffForHumans()}}</span></td>
                                <td>
                                    
                            <form action="{{route('delete.trash', ['id' => $customers->id])}}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                                <a href="{{route('customers.restore', ['id' => $customers->id])}}" class="btn btn-success btn-sm ms-1"> Restore </a>
                                 <button type="submit" class="btn btn-danger">Delete User</button>
                            </form>
                           </div> 
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection