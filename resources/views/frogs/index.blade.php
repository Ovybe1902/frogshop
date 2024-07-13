<!-- resources/views/frogs/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des grenouilles</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">

            @foreach ($frogs as $frog)
                <!-- Start Column 1 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">

                        <img src="{{asset('assets/images/' . $frog->image)}}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">{{ $frog->name }}</h3>
                        <p>{{ $frog->descriptions }}</p>
                        <strong class="product-price">{{ $frog->price }}</strong>

                        
                        <form action="{{ route('frogs.addToCart', ['id' => $frog->id_frog]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                <span class="icon-cross">
                                    <img src="{{ asset('assets/images/cross.svg') }}" class="img-fluid">
                                </span>
                            </button>
                        </form>

                    </a>
                </div> 
                <!-- End Column 1 -->
            @endforeach

        </div>
    </div>
@endsection
