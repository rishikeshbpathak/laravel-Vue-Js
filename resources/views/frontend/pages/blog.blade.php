@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
@js('backend/jquery.min')
<div class="uk-position-relative">
  <div class="banner-content-absolute" uk-grid>
    <div class="uk-width-1-1 grid-center">
      <div>
        <span class="new-banner-content roboto wh">Blog</span><br><br>
        <span class="roboto wh sub-banner-content">News, Tipps & Tricks</span>
      </div>
    </div>
  </div>
  <img class="banner-width" src="{{url('/assets/banner/vitalaire-diabetes-header-16-tslim-x2-blog.jpg')}}" alt="Blog">
  <br class="mob">
</div>
<div class="cust-padding custom-padding-top">
  <div uk-grid class="nav-tab">
    <div class="uk-width-auto">
      <a href="{{url('')}}">
        <img src="{{url('/assets/icons/home.png')}}" class="home-icons" alt="home">
      </a>
    </div>
    <div class="uk-width-auto txt-blue">
      <span uk-icon="icon:chevron-double-right;" class="vertical-icon"></span>
    </div>
    <div class="uk-width-expand@m uk-width-1-1@s txt-blue-darker">
      <a class="atag font16">
        Blog
      </a>
    </div>

  </div>

  <h1 class="txt-blue fonth1 roboto-slab-regular">
    VitalAire Diabetes Blog - einfach entspannter leben
  </h1>

  <h2 class="txt-blue fonth2 font24" style="margin-top: -5px;">
    Diabetes Erfahrungsberichte, technische Hinweise, Tipps und Tricks zur t:slim X2
  </h2>

  <div class="" uk-grid>
    <div class="uk-width-2-3@m uk-width-1-1@s">
      <div class="uk-text-justify tslim-para" style="margin: auto">
        <br>
        <p class="font18">
          Hallo und herzlich willkommen auf dem VitalAire Blog rund um Diabetes!
        </p>
        <p class="font18">
          Du hast Typ 1 Diabetes (T1D) oder ein Familienmitglied oder einer deiner Verwandten? Du möchtest mehr zum
          Leben mit Diabetes
          und der t:slim X2 Insulinpumpe erfahren? Dann bist du auf unserem Blog genau richtig. Mit Erfahrungsberichten,
          technischen
          Hinweisen, guten Tipps sowie weiteren Informationen aus erster Hand.
        </p>
        <p class="font18">
          Auf <a class="link" target="_blank" rel="noopener"
            href="https://www.instagram.com/tslim_insulinpumpe/">Instagram</a> und
          <a class="link" target="_blank" rel="noopener" href="https://www.facebook.com/vitalairediabetes">Facebook</a>
          informieren
          wir euch regelmäßig über Aktuelles, Messen und Termine oder kündigen neue Berichte rund um die t:lim X2
          Insulinpumpe an.
          Folge uns und bleibe up-to-date.
        </p>
        <p class="font18">
          Tipps zum Blog: Nutze die „Suche“ oder klicke auf die „Tags", wenn du etwas konkretes suchst.
        </p>
        <br>
        <div class="uk-padding" style="border-top: 1px solid #54afbe; border-bottom: 1px solid #54afbe">
          <p class="font16" style="color: #54afbe; margin:0">
            Die auf unserem Blog veröffentlichten Beiträge spiegeln allein die Meinungen und subjektiven Erfahrungen des
            jeweiligen
            Verfassers wider. Mit der Veröffentlichung dieser Beiträge wollen wir Erfahrungsberichte von Patienten oder
            Angehörigen
            veröffentlichen und so Personen mit Typ 1 Diabetes (T1D) oder Angehörigen einen Erfahrungs- und
            Meinungsaustausch ermöglichen.
            Die hier veröffentlichten Texte bleiben das geistige Eigentum des jeweiligen Verfassers. Im Falle einer
            beabsichtigten weiteren
            Veröffentlichung der Erfahrungsberichte, ist die Zustimmung des Verfassers des jeweiligen Blogbeitrages
            erforderlich.
          </p>
        </div>
      </div>
    </div>
    <div class="uk-width-1-3@m uk-width-1-1@s grid-center">
      <div>
        <img src="{{url('/assets/png/frontend/tslim-X2-icon-blog-vitalaire-diabeteswithbg.png')}}" alt="fingersensor">
      </div>
    </div>
  </div>
  <br>
  <br>

  <div class="uk-text-center uk-padding-large uk-padding-remove-horizontal uk-padding-remove-top" id="blog-results">
    <div class="uk-margin-remove">
      <input class="uk-input searchfield" type="text" placeholder="Blog-Artikel durchsuchen" id="searchblogs"
        name="searchblogs" />
      {{-- @if (isset($activecat) || isset($activetag))
      <img style="margin-left: 10px" src="{{url('/assets/png/frontend/search.png')}}" onload="scrollIntoBlog()"
        width="25" alt="search">
      @else
      <img style="margin-left: 10px" src="{{url('/assets/png/frontend/search.png')}}" width="25" alt="search">
      @endif --}}
      <img style="margin-left: 10px" src="{{url('/assets/png/frontend/search.png')}}" width="25" alt="search">
    </div>
  </div>
  <div uk-grid>
    <div class="uk-width-2-3@m uk-width-1-1@s center-webkit">
      @if (count($blogs) != 0)
      <div class="uk-child-width-1-2@l uk-width-1-1@m uk-grid-match" uk-grid>
        @foreach ($blogs as $blog)
        <div>
          <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
              @if ($blog->image != null)
              <img src="{{url('/storage/'.$blog->image)}}" height="350px" alt="{{ $blog->imagealt }}">
              @else
              <img src="{{url('/assets/images/frontend/blog_preview.png')}}" height="350px" alt="{{ $blog->imagealt }}">
              @endif
            </div>
            <div class="uk-card-body dirt-card-body uk-text-left">
              <div class="uk-child-width-1-2" style="margin-left:0" uk-grid>
                @foreach ($blogcategories as $blogcategory)
                @if ($blog->blogcategory_id == $blogcategory->id)
                <div class="single-line-ellipis uk-text-left" style="padding-left: 0">
                  <span class="roboto-slab-regular" style="color: #868686;">{{ $blogcategory->name }}</span>
                </div>
                @endif
                @endforeach
                <div class="single-line-ellipis uk-text-right" style="padding-left: 10px">
                  <span class="roboto-slab-regular" style="color: #6f6f6f;">
                    <img src="{{url('/assets/png/frontend/timer.png')}}" class="uk-inline-block" width="20px"
                      style="margin-top: -5px" alt="timer">
                    {{ $blog->readtime }}
                  </span>
                </div>
              </div>
              <br>
              <a href="{{url('/blog/view/'.$blog->url)}}" class="link">
                <h2 class="roboto-slab-regular uk-card-title multi-line-ellipsis-4"
                  style="margin-top: -10px; height: 130px; color: #6f6f6f; letter-spacing:0.9px">
                  {{ $blog->blogtitle }}
                </h2>
              </a>
              <p>
                <span class="single-line-ellipis roboto-slab-regular" style="color: #54afbe;">von {{ $blog->author
                  }}</span>
                <br>
                <br>
                <span class="multi-line-ellipsis-5 roboto-slab-regular" style="height: 135px; color: #6f6f6f;">
                  {{ $blog->blog_description }}
                </span>
              </p>
              <div class="uk-text-center">
                <a href="{{url('/blog/view/'.$blog->url)}}"
                  class="custom-button custom-button-blog-results letter-spacing-1 font16">ARTIKEL LESEN</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @else
      <div class="uk-text-center">
        <h4>Keine Blogs gefunden</h4>
      </div>
      @endif
    </div>
    <div class="uk-width-1-3@m uk-width-1-1@s uk-padding uk-text-center">
      <div>
        <h3 class="blog-options-title roboto-slab-regular" style="border: none">Nach Kategorie anzeigen</h3>
        <div>
          <select id="categoryselect" class="uk-select margin-top-input font22 txt-blue uk-text-left">
            @if (isset($activecat))
            @foreach ($blogcategories as $blogcategory)
            <option value="{{ $blogcategory->id }}" {{ ( $activecat==$blogcategory->id) ? 'selected' : '' }}>{{
              $blogcategory->name }}</option>
            @endforeach
            @else
            <option selected disabled>Kategorie wählen</option>
            @foreach ($blogcategories as $blogcategory)
            <option value="{{ $blogcategory->id }}">{{ $blogcategory->name }}</option>
            @endforeach
            @endif
          </select>
        </div>
      </div>
      <br>
      <br>
      <div>
        <h3 class="blog-options-title roboto-slab-regular">Artikel nach Tags anzeigen</h3>
        <div class="uk-child-width-auto uk-grid-small uk-grid-match uk-padding-small uk-padding-remove-vertical"
          uk-grid>
          @foreach ($blogtags as $blogtag)
          <div style="padding-left: 2px">
            <a href="{{url('/blog/tag/'.$blogtag->id)}}">
              @if (isset($activetag))
              <span class="tags-global {{ ( $activetag == $blogtag->id) ? 'tags-global-active' : '' }}">
                {{ $blogtag->name }}
              </span>
              @else
              <span class="tags-global">
                {{ $blogtag->name }}
              </span>
              @endif
            </a>
          </div>
          @endforeach
        </div>
      </div>
      <br>
      <br>
      <div>
        <h3 class="blog-options-title roboto-slab-regular">{{ count($famousblogs) }} beliebtesten Artikel</h3>
        <div class="uk-text-left">
          @foreach ($famousblogs as $famousblog)
          <div class="uk-flex uk-flex-middle uk-flex-1 font20 roboto-slab-regular"
            style="margin-bottom: 20px; gap:16px;">
            <div>
              <span class="txt-blue font26">
                {{ $loop->index + 1 }}
              </span>
            </div>
            <div><a href="{{url('/blog/view/'.$famousblog->url)}}" class="link"><span
                  style="color: #6f6f6f; letter-spacing: 0.8px">{{ $famousblog->blogtitle }}</span></a></div>
          </div>
          @endforeach
        </div>
      </div>
      <br>
      <br>
      <div>
        <div class="uk-padding font28" style="background-color: #86b5c3; color: white">
          <h3 class="font24 roboto-slab-regular" style="color: white">
            Folgt uns auf
          </h3>
          <div>
            <a class="atag" target="_blank" rel="noopener" href="http://Facebook.com/vitalairediabetes">
              <svg id="Ebene_1" style="width: 50px; fill: white;" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1024 1017.78">
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
            <a class="atag" target="_blank" rel="noopener" href="https://www.instagram.com/tslim_insulinpumpe/"
              uk-icon="icon: instagram; ratio: 2.5" style="margin: 0 10px"></a>
            <a class="atag" target="_blank" rel="noopener"
              href="https://www.youtube.com/channel/UC9vtebSfodK06daBxhEd0VA" uk-icon="icon: youtube; ratio: 2.5"></a>
          </div>
        </div>
      </div>
      <div>
        <br>
        <br>
      </div>
      <div>
        <div class="uk-padding font28" style="background-color: #86b5c3; color: white">
          <h3 class="font24 roboto-slab-regular" style="color: white">
            t:slim X2 Newsletter
          </h3>
          <div>
            <a href="{{url('/newsletter')}}" class="transparent-a-tag">
              <div class="back-transparent-text roboto font16">
                JETZT ANMELDEN
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    @if (isset($activecat))
    var activecat = {!! json_encode($activecat) !!};
    @else
    var activecat = null;
    @endif

    @if (isset($activetag))
    var activetag = {!! json_encode($activetag) !!};
    @else
    var activetag = null;
    @endif

    if (activecat != null || activetag != null) {
      location.hash = "#";
      location.hash = "#blog-results";
      location.hash = "#";
      location.hash = "#blog-results";
    }
  })
</script>
@include('frontend.components.footer')
@push('js')
@js('frontend/blog')
@endpush
@endsection
@push('css')
@css('frontend/blog')
@endpush