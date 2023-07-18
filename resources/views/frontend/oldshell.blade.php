<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if ($metatags != '')
    <title>{{ $metatags->title }}</title>
    <meta name="Description" content="{{ $metatags->description }}">
    <meta name="Keywords" content="{{ $metatags->keyword }}">
    @else
    <title>VitalAire</title>
    <meta name="Description" content="Die innovative t:slim X2 ist die clevere Insulinpumpe von VitalAire für Menschen mit Diabetes. Einfach entspannter Leben.">
    <meta name="Keywords" content="t:slim X2, Insulinpumpe, Diabetes, VitalAire">
    @endif
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/assets/png/frontend/favicon.png')}}">
    @css('frontend/uikit.min')
    @css('frontend/fontstyles')
    @stack('css')
</head>

<body>
    <div id="app">
        @yield('body')
    </div>
    @js('frontend/vue')
    @js('frontend/axios.min')
    @js('frontend/uikit.min')
    @js('frontend/uikit-icons.min')
    {{-- @js('frontend/app') --}}
    @stack('js')
</body>
{{-- 
<script>
    var vm = new Vue({
        el: '#app'
        , data: {
            @stack('vuedata')
        },

        watch: {
            @stack('vuewatch')
        },

        created: function() {
            @stack('vuecreated')
        },

        mounted: function() {
            @stack('vuemounted')
        },

        methods: {
            @stack('vuemethods')
        }
    });

</script> --}}


</html>