    @extends('layouts.app')
    @section('template_title')
    
    @endsection
    @section('content')
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-5 float-start">

                    @includeif('partials.errors')

                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title">Crear Denuncia</span>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('envio') }}"  role="form" enctype="multipart/form-data">
                                @csrf

                                @include('public.form')

                            </form>
                        </div>
                    </div>
                </div>

                
                 <div class="col-md-5 float-end">
                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title">Mapa</span>
                        </div>
                        <div class="card-body" >
                            <div id="mapDiv" > </div>
                        <button id="button" class="btn btn-primary"> Mostrar ubicación </button>


    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDA8dJes6KRdgiJfA5HMhfimfVOIos91R8&callback=initMap"></script>
    <script>
    function initMap() {
        const pyCoords = {lat:-23.442503, lng: -58.443832};


        const  map= new google.maps.Map(mapDiv, {
            center:pyCoords,
            zoom: 6,
        });
        const marker = new google.maps.Marker({
            position: pyCoords,
            map: map,
        });
        
        button.addEventListener("click",() =>{

         if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                ({coords: {latitude, longitude} }) => {
                    const coords = {
                        lat : latitude,
                        lng : longitude,
                    };
                    map.setCenter(coords);
                    map.setZoom(8);
                    marker.setPosition(coords);
                },
                () => {
                    alert("Ocurrio un error");
                }
            );
         }else{
            alert("Tu navegador no dispone de geolocalizacion");

         }
         });
         }

    </script>


                        </div>
                    </div>
                </div>

            </div>
    

    </section>
    
    @endsection

