@css('frontend/uikit.min')
@css('frontend/fontstyles')
@css('frontend/headercomponent')
@css('frontend/home')
@css('frontend/webinarcomponent')

<div id="vapp">
  <Slideshowwebinar listwebinarurl="{{ url('/veranstaltungenwebinare/listWebinar') }}"></Slideshowwebinar>
</div>
@js('app')