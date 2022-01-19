@extends('layouts.app')

@section('content')
    <section id="basic-vertical-layouts">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
            @include('errors.error')
                <div class="card">
                    <div class="card-header justify-center"> 
                    <h4 class="card-title">Edit {{$customers->Sender_name}}'s Information</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" action="{{route('update', ['id' => $customers->id])}}" method="post">
                        <input type="hidden" name="_method" value="PATCH">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1">
                                        <input type="text" id="first-name-vertical" class="form-control" name="sender_name" placeholder="Sender Name" value = "{{$customers->Sender_name}}"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Sender No</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="sender_no" placeholder="Sender Number" value = "{{$customers->Sender_no}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-vertical">Reciever Name</label>
                                        <input type="text" id="email-id-vertical" class="form-control" name="reciever_name" placeholder="Reciever Name" value = "{{$customers->reciever_name}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="contact-info-vertical">Reciever No</label>
                                        <input type="text" id="contact-info-vertical" class="form-control" name="reciever no" placeholder="Reciever Number" value = "{{$customers->reciever_no}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="contact-info-vertical">Item</label>
                                        <input type="text" id="contact-info-vertical" class="form-control" name="item" placeholder="Item to be delivered" value ="{{$customers->item}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="contact-info-vertical">Pick up address</label>
                                        <input type="text" id="contact-info-vertical" class="form-control" name="pick_up" placeholder="Pick up address"  value = "{{$customers->pick_up}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="contact-info-vertical">destination</label>
                                        <input type="text" id="contact-info-vertical" class="form-control" name="destination" placeholder="Delivery address" value = "{{$customers->destination}}" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary me-1">Save</button>
                                    <a href="/inventories"  class="btn btn-secondary me-1">Back</a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

