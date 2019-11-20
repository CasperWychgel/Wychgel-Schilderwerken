@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top: 20vh">
            <div class="col-sm-12 mb-5">
                <div class="d-lg-none">
                    <h1 class="text-center text-white">Instagram</h1>
                </div>
                <div class="d-none d-lg-block">
                    <h1 class="display-3 text-center text-white">Instagram</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10 ">
                <div class="jumbotron bg-white shadow-lg justify-content-center">
                    <h1 class="display-4 text-center">Onze Instagram.</h1>
                    <p class="lead text-center">Op de Instagram tijdlijn staat een grote hoeveelheid beeldmateriaal van het werk dat word verricht door Wychgel Schilderwerken.</p>

                </div>
            </div>
            <div class="col-lg-10 ">
                <div class="jumbotron bg-white shadow-lg justify-content-center">
                    <div id="pixlee_container"></div><script type="text/javascript">window.PixleeAsyncInit = function() {Pixlee.init({apiKey:'X79RGtLJ_LFjzuDKOAvU'});Pixlee.addSimpleWidget({widgetId:'23348'});};</script><script src="//instafeed.assets.pixlee.com/assets/pixlee_widget_1_0_0.js"></script>
                    <hr class="my-4">
                    <a class="btn btn-primary btn-lg flex-center" href="https://www.facebook.com/Wychgel-Schilderwerken-178602402341349/" role="button">Bekijk de Instagram pagina</a>
                </div>
            </div>
        </div>
    </div>



@endsection
