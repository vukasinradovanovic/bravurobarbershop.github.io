@extends('layouts.app')

@section('content-header')
  @include('layouts.baner')
@endsection

@section('content-main')
  <div class="container w-100 w-lg-75 py-3">
    <div class="row">
        <h2 class="cenovnik text-dark text-center py-2 text-uppercase" id="cenovnik">{{ __('main.cenovnik') }}</h2>
    </div>
    <hr class="border border-dark border-3 opacity-75 w-100 my-0">
    <div class="container-fluid w-100 bg-dark shadow rounded-bottom">
        <table class="table table-hover table-borderless table-responsive justify-content-center fs-5">
          @foreach(trans('table') as $item)
            <tr class="table-dark">
                <td class="p-2">{{ $item['label'] }}</td>
                <td class="text-end p-2">{{ $item['price'] }}</td>
            </tr>
          @endforeach
        </table>
    </div>
</div>
<div class="container w-100 w-lg-50 py-5">
    <div class="container">
        <h2 class="text-dark text-uppercase text-center py-2">{{ __('main.berberskiAlat') }}</h2>
    </div>
    <hr class="border border-dark border-3 opacity-75 w-100 my-0">
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 text-center">
      @foreach(trans('main.main-cards') as $card)
        <div class="col p-2">
            <div class="card shadow p-3 mb-5 bg-body-tertiary rounded h-100 border-dark border-1">
                <img src="{{ asset($card['image']) }}" class="card-img-top" alt="{{ $card['title'] }}">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">{{ $card['title'] }}</h5>
                    <p class="card-text">{{ $card['text'] }}</p>
                    <p>{{ $card['price'] }} &euro;</p>
                    <a href="#" class="btn btn-outline-dark text-uppercase">{{ $card['button'] }}</a>
                </div>
            </div>
        </div>
      @endforeach
    </div>
</div>
@endsection

