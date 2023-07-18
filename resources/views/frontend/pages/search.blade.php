@extends('frontend.shell')
@section('body')
@include('frontend.components.header')

<div class="outside-padding">
    <div class="searchbar">
        <form class="uk-hidden@m" action="{{url('/header/search')}}" method="post">
            <h2 class="uk-text-center txt-blue roboto-slab-regular">Suche nach Begriffen auf Seiten</h2>
            <div class="uk-child-width-1-1" uk-grid>
                <div class="uk-inline">
                    <button class="uk-form-icon uk-form-icon-flip" uk-icon="icon: search" type="submit"></button>
                    <input class="uk-input searchfield" type="text" placeholder="Search" id="dropdownsearch"
                        name="dropdownsearch">
                </div>
            </div>
        </form>
        <h2 class="uk-text-center txt-blue roboto-slab-regular">Suchergebnisse</h2>
    </div>
    {{-- <hr class="darkhr"> --}}
    <div class="resultslist">
        @if(isset($pages))
        @foreach($pages as $page)
        <a class="underlineatag" href="{{url($page->url)}}">
            <div uk-grid>
                <div class="uk-width-auto@m uk-width-1-1@s grid-center">

                    <img src="{{url('/assets/images/frontend/vitalairelogorgb.png')}}" width="100" alt="Product" />


                </div>
                <div class="uk-width-expand@m uk-width-1-1@s grid-center">
                    <h4 class="roboto-500 txt-blue font24">{{$page->title}}</h4>
                    <span class="txt-blue font18">{{substr($page->search,1150,500)}}...</span>
                </div>
            </div>
            <hr>
        </a>
        @endforeach
        @endif
    </div>
</div>

@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/search')
@endpush