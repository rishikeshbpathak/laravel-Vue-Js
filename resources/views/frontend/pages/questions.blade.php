@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="cust-padding">
    <div uk-grid class=" nav-tab">
        <div class="uk-width-auto">
            <a href="{{url('')}}">
                <img src="{{url('/assets/icons/home.png')}}" class="home-icons" alt="home">
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-auto txt-blue">
            <a class="vitalaireatag font16">
                Service & Support
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-auto txt-blue">
            <a href="{{url('/faq')}}" class="vitalaireatag font16">
                FAQ
            </a>
        </div>
        <div class="uk-width-auto txt-blue">
            <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
            <div>
                <a class="vitalaireatag font16">
                    {{-- @if(strlen($onefaqquestion->question) > 100)
                {{ substr($onefaqquestion->question, 0, 100) }}...
                    @else
                    {{ $onefaqquestion->question }}
                    @endif --}}

                    {{ $onefaqquestion->question }}
                </a>
            </div>
        </div>
        {{-- <div class="uk-width-expand uk-visible@m">
        </div> --}}

    </div>

    <div class="uk-padding-small uk-padding-remove-bottom uk-padding-remove-horizontal">
        @foreach ($tags as $tag)
            @foreach ($onefaqquestion->tag as $singletag)
                @if ($singletag == $tag->id)
                    <span class="tags-global" style="background-color: {{ $tag->bg_color }}">{{ $tag->name }}</span>
                @endif
            @endforeach
        @endforeach
    </div>

    <h1 class="txt-blue fonth1 roboto-slab-regular letter-spacing-2">
        {{ $onefaqquestion->question }}
    </h1>
    <div class="uk-grid-match" uk-grid>
        <div class="uk-width-expand@m uk-width-1-1@sc grid-center">
            <div class="questionsptag">
                <p class="font18 ">
                    {!! $onefaqquestion->answer !!}
                </p>
            </div>
        </div>
        <div class="uk-width-auto@m uk-width-1-1@s grid-center uk-visible@m ">
            <div>
                @foreach ($faqcategories as $faqcategory)
                @if ($onefaqquestion->faqcategory_id == $faqcategory->id)
                @if ($faqcategory->imagealt)
                <img src="{{url('/storage/'.$faqcategory->image)}}" width="200" alt="{{ $faqcategory->imagealt }}">
                @else
                <img src="{{url('/storage/'.$faqcategory->image)}}" width="200" alt="category">
                @endif
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <br>

    @if ($onefaqquestion->image)
    <div class="uk-text-center">
        @if($onefaqquestion->imagealt)
        <img src="{{url('/storage/'.$onefaqquestion->image)}}" width="550" alt="{{ $onefaqquestion->imagealt }}">
        @else
        <img src="{{url('/storage/'.$onefaqquestion->image)}}" width="550" alt="question-image">
        @endif
    </div>
    <br>
    @endif

    @if ($onefaqquestion->video)
    <div id="youtube-base">
        <div class="uk-text-center">
            <div class="video-container">
                <iframe width="550" height="300" src="https://www.youtube.com/embed/{{ $onefaqquestion->video }}">
                </iframe>
            </div>
        </div>
    </div>
    <br>
    @endif

    @if ($onefaqquestion->button_title)
    <div class="uk-text-center">
        <div class="uk-inline">
            <h3 class="txt-blue roboto-slab-regular font28 letter-spacing-1">
                Weitere Informationen
            </h3>
            <a href="{{$onefaqquestion->button_url}}" class="custom-button letter-spacing-1 font16">
                {{ $onefaqquestion->button_title }}
            </a>
        </div>
    </div>
    @endif
</div>

@if (!empty($questionpdfs))
<div class="back-lblue">
    <div class="cust-padding-small uk-text-center">
        <div class="uk-text-center">
            <p class="txt-blue roboto-slab-regular letter-spacing-1 font28">
                Deine Downloads
            </p>
        </div>
        <div class="uk-inline uk-text-left">
            @foreach ($questionpdfs as $questionpdf)
            @if ($questionpdf->question_id == $onefaqquestion->id)
            <div style="padding-top: 3%">
                <a href="{{storage($questionpdf->filelocation)}}" class="txt-blue font18" target="_blank"
                    rel="noopener">
                    {{ $questionpdf->filename }}
                </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endif
<div class="cust-padding-small uk-text-center">
    <h1 class="txt-blue fonth1 roboto-slab-regular letter-spacing-1 font28">
        War dieser Artikel hilfreich?
    </h1>
    <br>
    <Likedislike likesupdate="{{url('/faq/updatelikes/')}}" dislikesupdate="{{url('/faq/updatedisLikes/')}}"
        likeslist="{{url('/faq/onequestion/'. $onefaqquestion->id)}}"></Likedislike>
</div>

<Faqsubquestion allvquestions="{{ url('/faq/allquestions') }}" faqcategory="{{ url('/faq/faqcategory') }}" alltagsquery="{{ url('/faq/alltags') }}" >
</Faqsubquestion>

<div class="back-dblue">
    <div class="cust-padding-small">
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-auto@m uk-width-1-1@s grid-center">
                <div>
                    <h1 class="wh letter-spacing-2" style="margin: 0px!important;">
                        Konnten wir dir nicht helfen?
                    </h1>
                </div>
            </div>
            <div class="uk-width-auto@m uk-width-1-1@s grid-center padding-top-kontakt-btn">
                <div class="uk-text-center">
                    <a href="{{url('/kontakt')}}" class="custom-button button-white letter-spacing-2 font16">
                        KONTAKT
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/faq')
@endpush