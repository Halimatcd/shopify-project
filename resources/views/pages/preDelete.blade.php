@extends('layouts.app')

@section('content')
    <section id="basic-vertical-layouts">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                @include('errors.error')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Delete {{$customers->sender_name}}'s Information</h4>
                        <p>Enter a detialed message as to why you want to delete this student record</p>
                    </div>
                    <div class="card-body">
                    
                        <form class="form form-vertical" action="{{route('delete.delete', ['id' => $customers->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Deletion Reason</label>
                                        <input type="text" id="first-name-vertical" 
                                        class="form-control" name="delete_comment" 
                                        placeholder="e.g give us a reason for deletion" 
                                        required/>
                                    </div>
                                </div>
                            
                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger me-1">Proceed to Trash</button>
                                    <a href="/inventories"  class="btn btn-secondary me-1">cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection