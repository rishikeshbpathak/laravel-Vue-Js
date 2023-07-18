@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="progress-container uk-visible@m" uk-sticky>
  <div class="progress-bar" id="myBar"></div>
</div>
<div class="uk-position-relative">
  <div class="banner-content-absolute" uk-grid>
    <div class="uk-width-1-1 grid-center">
      <div>
        {{-- <span class="new-banner-content roboto wh">Blog</span><br><br>
        <span class="roboto wh sub-banner-content">News, Tipps & Tricks</span> --}}
      </div>
    </div>
  </div>
  @if ($blog->coverimg != null)
  <img class="banner-width" src="{{url('/storage/'.$blog->coverimg)}}" alt="{{ $blog->coverimgalt }}">
  @else
  <img class="banner-width" src="{{url('/assets/images/frontend/blog_cover.png')}}" alt="{{ $blog->coverimgalt }}">
  @endif
  <br class="mob">
</div>
<div class="cust-padding uk-padding-remove-top" id="blogdiv">
  {{-- <div class="uk-text-center">
    <img src="{{url('/storage/'.$blog->coverimg)}}" alt="{{ $blog->coverimgalt }}" width="2080px">
  </div> --}}

  {{-- <br> --}}
  <br>
  <div>
    @foreach ($blogcategories as $blogcategory)
    @if ($blog->blogcategory_id == $blogcategory->id)
    <p>{{ $blogcategory->name}} | {{ $blog->readtime }} Lesezeit</p>
    @endif
    @endforeach
    <h1 class="txt-blue fonth1 roboto-slab-regular">
      {{ $blog->blogtitle }}
    </h1>

    <h2 class="txt-blue fonth2 font24" style="margin-top: -5px;">
      {{ $blog->subtitle }}
    </h2>

    <div class="uk-padding uk-padding-remove-horizontal linka font18">
      {!! $blog->content !!}
    </div>
  </div>

  <div class="font18 dirt-card-body uk-padding">
    <div class="" uk-grid>
      <div class="uk-width-1-5@m uk-width-1-1@s">
        <p><b>Verfasst von:</b></p>
      </div>
      <div class="uk-width-4-5@m uk-width-1-1@s">
        <p>{{ $blog->author }}</p>
      </div>
    </div>
    <div class="" uk-grid>
      <div class="uk-width-1-5@m uk-width-1-1@s">
        <p><b>Veröffentlicht:</b></p>
      </div>
      <div class="uk-width-4-5@m uk-width-1-1@s">
        <p>{{date('d. F Y, H:i', strtotime($blog->edited_at))}} Uhr</p>
      </div>
    </div>
    <div class="" uk-grid>
      <div class="uk-width-1-5@m uk-width-1-1@s">
        <p><b>Quellenangaben:</b></p>
      </div>
      <div class="uk-width-4-5@m uk-width-1-1@s linka">
        {!! $blog->sources !!}
      </div>
    </div>

    <br>
    <br>
    <div class="uk-text-center">
      <span class=" letter-spacing-1 bold">
        Themen:
      </span>
      <br />
      <div class="uk-padding-small uk-padding-remove-bottom">
        @foreach ($blogtags as $blogtag)
        @foreach ($blog->tag as $currenttag)
        @if ($currenttag == $blogtag->id)
        <a href="{{url('/blog/tag/'.$blogtag->id)}}">
          <span class="tags-global">
            {{ $blogtag->name }}
          </span>
        </a>
        @endif
        @endforeach
        @endforeach
      </div>
    </div>
    <br>
    <br>
    <div class="uk-text-center">
      <span class=" letter-spacing-1 bold">
        Diesen Artikel weiterempfehlen:
      </span>
      <br>
      <div class="uk-padding-small uk-padding-remove-bottom uk-inline-block">
        <div class="uk-flex">
          <div class="border-social-icons">
            <div style="margin: auto">
              <a class="atag" target="_blank" rel="noopener"
                href="mailto:diabetes@vitalaire.de?subject={{ $blog->blogtitle }}&body=Hallo.%0D%0A%0D%0AIch habe diesen interessanten Artikel zum Thema Diabetes entdeckt:%0D%0A%0D%0A{{ $blog->blogtitle }}%0D%0A{{ $blog->subtitle }}%0D%0A%0D%0A{{rawurlencode(url('/blog/view/'.$blog->url))}}">
                <img src="{{url('/assets/png/frontend/mail.png')}}" width="50" alt="mail" />
              </a>
            </div>
          </div>
          <div class="border-social-icons" style="margin: 0 10px">
            <div style="margin: auto;">
              <a class="atag" target="_blank" rel="noopener" href="http://Facebook.com/vitalairediabetes">
                <svg id="Ebene_1" style="width: 50px; fill: white;" data-name="Ebene 1"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1017.78">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #fff;
                      }
                    </style>
                  </defs>
                  <title>f_logo_RGB-White_1024</title>
                  <path class="cls-1"
                    d="M1024,512C1024,229.23,794.77,0,512,0S0,229.23,0,512c0,255.55,187.23,467.37,432,505.78V660H302V512H432V399.2C432,270.88,508.44,200,625.39,200c56,0,114.61,10,114.61,10V336H675.44c-63.6,0-83.44,39.47-83.44,80v96H734L711.3,660H592v357.78C836.77,979.37,1024,767.55,1024,512Z" />
                </svg>
              </a>
            </div>
          </div>
          <div class="border-social-icons">
            <div style="margin: auto">
              <a class="atag" target="_blank" rel="noopener" href="https://www.instagram.com/tslim_insulinpumpe/"
                uk-icon="icon: instagram; ratio: 2.5" style="color: white"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="cust-padding-small uk-text-center dirt-card-body uk-padding-large">
  <h1 class="txt-blue fonth1 roboto-slab-regular letter-spacing-1 font28">
    Hat dir dieser Artikel gefallen?
  </h1>
  <br>
  <Likedislikeblog likesupdate="{{url('/blog/updatelikes/')}}" dislikesupdate="{{url('/blog/updatedisLikes/')}}"
    likeslist="{{url('/blog/oneblog/'. $blog->id)}}"></Likedislikeblog>
</div>
@if (count($similarblogs) > 0)
<br>
<br>
<div class="cust-padding custom-padding-top">
  <div class="uk-text-center">
    <h1 class="txt-blue fonth1 roboto-slab-regular letter-spacing-1 font28">
      Artikel zu ähnlichen Themen
    </h1>
  </div>
  <br>
  <br>
  <div uk-slider="autoplay: true">

    <div class="uk-position-relative">

      <div class="uk-slider-container uk-light">
        <ul class="uk-slider-items uk-child-width-1-1@s uk-grid-small uk-child-width-1-3@m image-slide">
          @foreach($similarblogs as $similarblog)
          <li>
            <div class="uk-card uk-card-default">
              <div class="uk-card-media-top">
                <img src="{{url('/storage/'.$similarblog->image)}}" height="350px" alt="{{ $similarblog->imagealt }}">
              </div>
              <div class="uk-card-body dirt-card-body uk-text-left">
                <div class="uk-child-width-1-2" style="margin-left:0" uk-grid>
                  @foreach ($blogcategories as $blogcategory)
                  @if ($similarblog->blogcategory_id == $blogcategory->id)
                  <div class="single-line-ellipis uk-text-left" style="padding-left: 0">
                    <span class="roboto-slab-regular" style="color: #868686;">
                      {{ $blogcategory->name }}
                    </span>
                  </div>
                  @endif
                  @endforeach
                  <div class="single-line-ellipis uk-text-right" style="padding-left: 10px">
                    <span class="roboto-slab-regular" style="color: #6f6f6f;">
                      <img src="{{url('/assets/png/frontend/timer.png')}}" class="uk-inline-block"
                        style="margin-top: -5px; width: 20px !important" alt="timer">
                      {{ $similarblog->readtime }}
                    </span>
                  </div>
                </div>
                <br>
                <a href="{{url('/blog/view/'.$similarblog->url)}}" class="link">
                  <h2 class="roboto-slab-regular uk-card-title multi-line-ellipsis-4"
                    style="margin-top: -10px; height: 130px; color: #6f6f6f; letter-spacing:0.9px">
                    {{ $similarblog->blogtitle }}
                  </h2>
                </a>
                <div class="uk-text-center">
                  <a href="{{url('/blog/view/'.$similarblog->url)}}"
                    class="custom-button custom-button-blog-results letter-spacing-1 font16">ARTIKEL LESEN</a>
                </div>
              </div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
      <div>
        <a style="margin:0" class="uk-position-center-left-out uk-position-small slider-arrow" href="#"
          uk-slidenav-previous uk-slider-item="previous"></a>
        <a style="margin:0" class="uk-position-center-right-out uk-position-small slider-arrow" href="#"
          uk-slidenav-next uk-slider-item="next"></a>
      </div>
    </div>
    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
    <br>
    <br>
  </div>
</div>
@endif

@include('frontend.components.footer')
@push('js')
<script>
  window.onscroll = function() {showBar()};

function showBar() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.getElementById('blogdiv').clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>
@endpush
@endsection
@push('css')
@css('frontend/blog')
@endpush