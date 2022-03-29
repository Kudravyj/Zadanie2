@extends('layouts.app')

@section('content')
<section class="Profil">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div style="margin-left: 43%">
                            <a href="/user/create">    
                                <img src="/svg/Plus.svg" alt="" style="height: 100px;">
                            </a>
                            <p >Add new Invoice</p>
                            </div>
                            <div style="">

                            </div>
                        </div>
                        <hr class="m-2">
                        @foreach($user->names as $invoice)
                        <div class="Profil1">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card m-1">
                                        <div class="row d-flex ml-5">
                                            <div class="col-2 p-3">
                                                <img src="/svg/document.svg" class="greatimage w-100" alt="img1">
                                            </div>
                                            <div class="col-6 d-flex">
                                                <div class="mt-3">
                                                    <div><p>{{ $invoice->name }}/{{ $invoice->middlename }}</p></div>
                                                </div>
                                            </div>  
                                            <div class="col-2 p-3">
                                                @method('delete')
                                                <a href="/p/{{ $invoice->id }}/delete">
                                                    <img src="/svg/cancel.svg" class="greatimage" style="height: 40px" alt="img1">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @if($user->names->count() == 0)
                        <div class="Profil1">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="p-4">
                                        <p style="text-align: center;">It seem's like you don't have any Invoice:(</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>
    @endsection