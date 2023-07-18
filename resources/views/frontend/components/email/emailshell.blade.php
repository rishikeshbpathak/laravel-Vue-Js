<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if ($metatags != '')
    <title>{{ $metatags->title }} | Vital-aire</title>
    <meta name="description" content="{{ $metatags->description }}">
    <meta name="keywords" content="{{ $metatags->keyword }}">
    @else
    <title>Vital-aire</title>
    <meta name="description" content="Vital-aire description">
    <meta name="keywords" content="Vital-aire keywords">
    @endif
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/assets/png/frontend/favicon.png')}}">
    <style type="text/css">
        .uk-text-center {
            text-align: center;
        }

        body {
            font-family: Roboto-regular;
            line-height: 1.5;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Roboto-regular;
        }

        @font-face {
            font-family: Roboto-regular;
            src: url(https://cdn.discordapp.com/attachments/725016728525996093/725017088464388226/Robotoregular.ttf);
            font-weight: normal;
        }

        @font-face {
            font-family: Roboto-700;
            src: url(https://cdn.discordapp.com/attachments/725016728525996093/725023360396034048/Roboto700.ttf);
            font-weight: normal;
        }

        @font-face {
            font-family: Roboto-Slab-regular;
            src: url(https://cdn.discordapp.com/attachments/725016728525996093/725023603157893201/RobotoSlabregular.ttf);
            font-weight: normal;
        }

        .email-back-blue {
            background-color: rgb(84, 175, 190);
        }

        .email-header {
            padding: 20px 0px;
        }

        .txt-initial {
            color: rgb(111, 111, 111);
        }

        *+.uk-table {
            margin-top: 20px;
        }

        .uk-table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            margin-bottom: 20px;
        }

        .email-padding {
            padding: 4% 25%;
        }

        .para-link {
            color: inherit !important;
        }

        .font0_8 {
            font-size: 0.7em;
        }

        .roboto-bold {
            font-family: Roboto-700;
        }

        /* * {
            font-size: 1em;
        } */

        a:hover {
            text-decoration: none;
        }

        .email-button {
            background-color: rgb(84, 175, 190);
            color: white !important;
            padding: 15px 50px;
            border: none;
            border-radius: 5px;
            font-family: Roboto-500;
            text-decoration: none !important;
            font-style: normal;
            font-variant-ligatures: normal;
            font-variant-caps: normal;
            font-variant-numeric: normal;
            font-variant-east-asian: normal;
            font-weight: 400;
            font-stretch: normal;
            font-size: 15px;
            line-height: normal;
            /* -webkit-appearance: button; */
            -webkit-writing-mode: horizontal-tb !important;
            text-rendering: auto;
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: center;
            cursor: pointer;
            align-items: flex-start;
        }

        .email-button:hover {
            background-color: rgb(68, 146, 158);
            transition: .3s;
            color: white !important;
        }

        .atag {
            text-decoration: underline;
            text-transform: none;
            color: inherit !important;
        }

        .atag:hover {
            text-decoration: underline;
            color: inherit !important;
        }

        .cust-padding {
            padding-left: 15%;
            padding-right: 15%;
            padding-bottom: 5%;
        }

        .h-margin-top {
            margin-top: -20px;
            display: block;
        }

        .image-width {
            width: 170px;
        }

        .grid-center {
            margin: auto;
        }

        .border-bottom {
            border-bottom: 1px solid black;
            padding-bottom: 10px;
            margin-top: 15px !important;
        }

        .payment-table td {
            padding: 0px !important;
        }

        .payment-table {
            margin-top: 20px;
        }

        .uk-grid {
            margin-left: 0px !important;
        }

        .uk-grid>div:first-child {
            padding-left: 0px;
        }


        .border-bottom>td {
            padding-bottom: 20px !important;
        }

        .border-top-padding>td {
            padding-top: 20px !important;

        }

        /* .star-padding>img {
            margin: 10px !important;
        } */

        footer {
            color: white;
            background-color: rgb(119, 119, 119);
        }

        footer>div {
            padding: 20px;
        }

        .wh {
            color: white;
        }

        .email-footer-link-first {
            color: white !important;
            margin-left: 0px;
            padding-left: 0px;
            border-left: none;
        }

        .email-footer-link {
            color: white !important;
            margin-left: 10px;
            padding-left: 10px;
            border-left: 1px solid white;
        }

        .email-footer-link:hover,
        .email-footer-link-first:hover,
        .social-icon a:hover {
            color: white;
            transition: .3s;
        }

        .uk-text-right {
            text-align: right;
        }

        @media(max-width:800px) {
            .email-padding {
                padding: 3% 10%;
            }

            .mob-tex-center {
                text-align: center !important;
            }

            .mob-grid-no-padding>div {
                padding-left: 0px !important;
            }

            .mob-star-width {
                width: 100%;
            }
        }
    </style>
    @css('frontend/uikit.min')
</head>

<body>
    <div id="vapp">
        @yield('body')
    </div>
    @js('app')
    @js('frontend/uikit.min')
    @js('frontend/uikit-icons.min')
</body>

</html>