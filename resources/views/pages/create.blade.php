@extends('layouts.app')

@section('content')
    <section id="basic-vertical-layouts">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
            @include('errors.error')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Apply</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" action="./create" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Sender Name</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="sender_name" placeholder="sender Name" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="contact-info-vertical">Sender Phone Number</label>
                                        <input type="text" id="contact-info-vertical" class="form-control" name="sender_no" placeholder="Sender number" />
                                    </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Reciever Name</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="reciever_name" placeholder="Reciever Name" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="contact-info-vertical">Reciever Phone Number</label>
                                        <input type="text" id="contact-info-vertical" class="form-control" name="reciever_no" placeholder="Reciever number" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="contact-info-vertical">Item to be delivered</label>
                                        <input type="text" id="contact-info-vertical" class="form-control" name="item" placeholder="Item to be delivered" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="contact-info-vertical">Pick up address</label>
                                        <input type="text" id="contact-info-vertical" class="form-control" name="pick_up" placeholder="Pick up address" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="contact-info-vertical">Destination address</label>
                                        <input type="text" id="contact-info-vertical" class="form-control" name="destination" placeholder="Destination address" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary me-1">Submit</button>
{{--                                    <button type="reset" class="btn btn-outline-secondary">Reset</button>--}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

