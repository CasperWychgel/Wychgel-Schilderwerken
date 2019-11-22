@extends('layout')

@section('content')
    <style>
        body{
            background-image: url(../img/wychgelpaintpackaging-light.png);
        }
    </style>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
        <div class="col-md-12 col-sm-6 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal"style="color: #52a0c4;">Instagram</h1>
            <p class="lead font-weight-normal">Voor het laten zien van mijn werk post ik foto's op mijn instagram account, neem rustig een kijkje in mijn werk.</p>
            <a class="btn btn-outline-secondary" target="_blank" href="Instagram link">Mijn Instagram</a>
        </div>
        <div class="col-md-12 col-sm-6 p-lg-5 mx-auto my-5">
            <div id="pixlee_container"></div><script type="text/javascript">window.PixleeAsyncInit = function() {Pixlee.init({apiKey:'X79RGtLJ_LFjzuDKOAvU'});Pixlee.addSimpleWidget({widgetId:'23348'});};</script><script src="//instafeed.assets.pixlee.com/assets/pixlee_widget_1_0_0.js"></script>

        </div>
    </div>



@endsection
