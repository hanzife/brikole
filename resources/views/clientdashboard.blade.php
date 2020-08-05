@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        <!-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif -->
                        @if (session()->has('id'))
                            You are logged in as {{$value}}
                            @foreach($ClientData as $rowClient)
                                bonjour {{$rowClient->nom}}
                            @endforeach
                        @endif


                      

                      
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
