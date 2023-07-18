@extends('frontend.shell')
@section('body')
@include('frontend.components.header')
<div class="impressum-padding">
    <h1 class="titleh2">Impressum</h1>

    <h2 class="titleh3">Angaben gemäß § 5 TMG</h2>
    <p class="font18">VitalAire GmbH<br />
    Bornbarch 2<br />
    22848 Norderstedt</p>

    <p class="font18">Handelsregister: HRB 14468 KI<br />
    Registergericht: Amtsgericht Kiel, Gerichtsstand: Norderstedt</p>

    <p class="font18"><strong>Vertreten durch:</strong><br />
    Moez Karaoud, Philippe Ogé</p>

    <h2 class="titleh3">Kontakt</h2>
    <p class="font18">Telefon: 0800 / 2 51 11 11*<br />
    Telefax: 0800 / 2 02 02 02*<br />
    E-Mail: info@vitalaire.de</p>

    <h2 class="titleh3">Umsatzsteuer-ID</h2>
    <p class="font18">Umsatzsteuer-Identifikationsnummer gemäß § 27 a Umsatzsteuergesetz:<br />
    DE811146542</p>

    <h2 class="titleh3">Aufsichtsbehörde</h2>
    <p class="font18">Landesamt für soziale Dienste Schleswig-Holstein<br />
    Abteilung Arzneimittelüberwachung<br />
    Adolf-Westphal-Str. 4<br />
    24143 Kiel</p>
    <p class="font18"><a class="link" style="word-break: break-all" href="https://www.schleswig-holstein.de/DE/Landesregierung/LASD/lasd_node.html" target="_blank" rel="noopener noreferrer">https://www.schleswig-holstein.de/DE/Landesregierung/LASD/lasd_node.html</a></p>

    <h2 class="titleh3">Redaktionell verantwortlich</h2>
    <p class="font18">VitalAire GmbH<br />
    Bornbarch 2<br />
    22848 Norderstedt</p>

    <h2 class="titleh3">Verbraucher­streit­beilegung/Universal­schlichtungs­stelle</h2>
    <p class="font18">Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>

    <h2 class="titleh3">
        Quellenangaben für die verwendeten Bilder und Grafiken:
        istockphoto.com
    </h2>
    <p class="font18">
        <b>istockphoto.com: 
        </b><br>
        1002673938 ©️Imgorthand, Foto mit Beinen auf dem Steg, 1054822022 ©️Dontstop, Foto mit Kinderhand, 1165298715
        ©️sumnersgraphicsinc, Frau Wand, 1134449241 ©️PIKSEL Frau U-Bahn, 815839302 ©️golero, Mann Kopfhörer, 1194677310
        ©️South_agency, Mann Jogging, 690878832 ©️YakobchukOlena, Junge Tennis, 1127794824 ©️RgStudio, Frau Couch,
        1153891088 ©️urbazon Frau Fernsehen, 1170474207 ©️South_agency, Frau telefoniert 970408048 ©️oBeDeRo, Mann Bus,
        1173884977 ©️TommL, Frau Frischetheke, 1142154160 ©️shapecharge, Mann wandern, 1184611900 ©️shurkin_son, Frau
        Wohnzimmer, 183867809 ©️EHStock, Frau Universität, ©️alvarez, Glücklicher Mann mit Brille und lockiges Haar,
        936315424, ©️AlexanderNakic, Professor im Amphitheater, 1128666915, ©️ozgurcankaya, Junger Mann arbeitet von zu Hause aus, 1223887644 , ©️mixetto, Teenager lernt Online Gitarre spielen, 1219409028
        <br><br>
        <b>Produktfotos, Grafiken, Icons:</b>
        <br>
        Tandem Diabetes Care, Inc.
        Dirk Hannemann, <a class="link" style="word-break: break-all" target="_blank" rel="noopener" href="https://dhannemann.de/">dhannemann.de</a>
        <br><br>
        <b>Testimonials: 
        </b><br>
        Charlotte, Peter, Tandem Diabetes Care, Inc.
        <br><br>
        <b>Webseitenkonzept, Webdesign, Programmierung: 
        </b><br>
        <a class="link" style="word-break: break-all" target="_blank" rel="noopener" href="https://dhannemann.de/">dhannemann.de</a> - Dirk Hannemann,
        Online- & Printkommunikation, Hamburg
        <br><br>
    </p>
</div>
@include('frontend.components.footer')
@endsection
@push('css')
@css('frontend/impressum')
@endpush