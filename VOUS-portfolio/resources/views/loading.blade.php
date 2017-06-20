@extends('templateBase')

@section('contenu')
<div class="row">
<div class="col-xs-12">
    <div class="messages">
        <div class="message"></div>
    </div>
</div>
<div class="col-xs-12">
    <div class="loading-logo">
        <img src="img/planet1.png" alt="" class="loading-logo-img">
    </div>
</div>
</div>

<script>
$('.message').typeIt({
    strings: 'Formation de la galaxie en cours',
    speed: 200,
    autoStart: true,
    cursor: false,
});

setTimeout(function () {
   window.location.href= 'index';

},15000);
</script>
@endsection
