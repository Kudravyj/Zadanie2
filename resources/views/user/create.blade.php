@extends('layouts.app')

@section('content')
    <section class="Profil">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                    <div class="card-header text-center">New Invoice</div>
                        <div class="card-body">
                            <form action="/p" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="d-flex">
                                        <div class="input p-3 w-100">
                                            <p class="ml-5">Name</p>
                                            <input id='name'
                                            type="text"
                                            class="form-control{{ $errors->has('description') ? ' is-invalid' : ''}}"
                                            name="name">
                                        </div>
                                        <div class="input p-3 w-100">
                                            <p class="ml-5">Middlename</p>
                                            <input id='middlename'
                                            type="text"
                                            class="form-control{{ $errors->has('description') ? ' is-invalid' : ''}}"
                                            name="middlename">
                                        </div>
                                    </div>
                                    <div class="row p-3 w-70">
                                        <button class="btn btn-primary">Post</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection