@extends('layouts.app')

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">LIST OF ALL INVENTORIES</h4>
                </div>
                <div class="card-body">

                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>package no</th>
                            <th>Date created</th>
                            <th>Sender Name</th>
                            <th>Sender Number</th>
                            <th>Reciever Name</th>
                            <th>Reciever Number</th>
                            <th>Item to be delivered</th>
                            <th>Pick up</th>
                            <th>Destination</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($customers as $customer)
                        <tbody>
                            <tr>
                                <td>
                                {{$customer->id}}
                                </td>
                                <td>
                                {{$customer->created_at}}
                                </td>
                                <td><span class="fw-bold">{{$customer->Sender_name}}</span></td>
                                <td>{{$customer->Sender_no}}</td>
                                <td>
                                <span class="fw-bold">{{$customer->reciever_name}}</span>
                                </td>
                                <td><span class="badge rounded-pill badge-light-primary me-1">{{$customer->reciever_no}}</span></td>
                                <td><span class="badge rounded-pill badge-light-primary me-1">{{$customer->item}}</span></td>
                                <td>
                                <span class="badge rounded-pill badge-light-primary me-1">{{$customer->pick_up}}</span>
                                </td>
                                <td>
                                <span class="badge rounded-pill badge-light-primary me-1">{{$customer->destination}}</span>
                                </td>
                                <td>
                                <span class="badge rounded-pill badge-light-primary me-1">Pending..</span>
                                </td>
                                <td>
                                <div class="d-flex">
                                    <a href="{{route('edit', ['id' => $customer->id])}}"  class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{route('customer.delete', ['id' => $customer->id])}}" class="btn btn-danger btn-sm ms-1">Delete </a>
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