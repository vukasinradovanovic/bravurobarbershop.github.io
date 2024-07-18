<div class="container text-center">
            <div class="row m-0 d-flex align-items-center flex-column-reverse flex-lg-row">
                <div class="col-4 py-5 d-none d-md-block">
                    <a href="index.html"><img src="{{ asset('storage/logo.png') }}" alt="logo" class="img-fluid rounded-circle bg-body-tertiary expand" style="--bs-bg-opacity: .8;" width="200"></a>
                </div>
                <div class="col-md-4 col-12">
                    <div class="row-2 py-3 d-flex flex-xl-row flex-column align-items-center">
                    @foreach(trans('footer.buttons') as $item)
                            <div class="container-fluid py-2">
                                @if (isset($item['route']))
                                    <a href="{{ route($item['route'], ['locale' => App::getLocale()]) }}" class="btn btn-outline-light rounded-10 justify-content-center fs-5">{{ $item['label'] }}</a>
                                @elseif (isset($item['url']))
                                    <a href="{{ $item['url'] }}" class="btn btn-outline-light rounded-10 justify-content-center fs-5">{{ $item['label'] }}</a>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <div class="row fs-3 py-2">
                        @foreach(trans('footer.icons') as $icon)
                            <div class="col-2">
                                <a href="{{ $icon['slug'] }}" class="text-light"><i class="{{ $icon['name'] }}"></i></a>
                            </div>
                        @endforeach
                    </div>
                    <div class="row py-4">
                        @foreach(trans('footer.rights') as $text)
                            <p class="text-center text-light">&copy;{{ $text }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 col-12 text-light text-center">
                    @foreach(trans('footer.informations') as $info)
                        <div class="row-12 row-lg-4 py-2 w-100">
                            <p>{{ $info['info'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>