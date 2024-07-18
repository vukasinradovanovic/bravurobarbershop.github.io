@extends('layouts.app')

@section('content-main')
<div class="row m-0 p-4">
    <div class="col-12 col-lg-6 py-2">
        <div class="row justify-content-center">
            <div id="carouselSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{ asset('storage/Slider2.jpg') }}" class="d-block w-100 img-fluid" alt="Slide 1">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('storage/Slider3.jpg') }}" class="d-block w-100 img-fluid" alt="Slide 2">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('storage/Slider4.jpg') }}" class="d-block w-100 img-fluid" alt="Slide 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 d-flex align-items-center">
        <div class="container-fluid bg-body-tertiary py-2 text-dark rounded" style="--bs-bg-opacity: .8;" id="tIstorijat">
        @foreach (trans('istorijat.par') as $paragraf)
            <p>{{ $paragraf['paragraf'] }}</p>
        @endforeach
        </div>
    </div>
</div>
@endsection