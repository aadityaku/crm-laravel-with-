     {{-- check this api for token --}}
    {{-- https://outpost.mapmyindia.com/api/security/v2.3.0/oauth/token?grant_type=client_credentials&client_id=33OkryzDZsKW6BuqN16P5baNNzcG3dh1HAEALNcBgm9Wwg8tCX0BszR_w1FXcATvpAc0Q4bcVmw2D9bpmZQj4w==&client_secret=lrFxI-iSEg9IVs1MCe5aFD9CySi3l00CxQdsbmP9kP5lULcVjsouqhVpPI_pI1DkeSYfdDNoNueohXjjXmSG4CH0Z02mAlcL --}}
  @extends('homepages/base')
  @section('map')
  <meta name="desciption" content="Mapmyindia Direction Plugin">
      <script src="https://apis.mapmyindia.com/advancedmaps/v1/62715c90-96f4-4954-9870-ae119bfe5dc0/map_load?v=1.5"></script>
      <script src="https://apis.mapmyindia.com/advancedmaps/api/62715c90-96f4-4954-9870-ae119bfe5dc0/map_sdk_plugins"></script>
      <style>
        body{margin: 0}
        #map{
            width: 100%; height: 100vh; margin: 0; padding: 0;
        }
        #direction{color: #000;max-width: 99%;width:300px;position:absolute;z-index: 999;font-size: 15px;padding:10px;border: 1px solid #ddd;outline: none !important;top:55px;border-radius:10px;margin:2px 4px;}
    </style>
  @endsection
    @section('content')
    <div id="map"></div>
    <div id="direction"></div>
    @endsection
    @section('js')
        
    
        <script>
         /*Map Initialization*/
          var map = new MapmyIndia.Map('map', {center: [28.09, 78.3], zoom: 5, search: false});
          
          /*direction plugin initialization*/
            var direction_option={
                map:map,
                end:{label:'India Gate, Delhi',geoposition:"1T182A"},
		callback:function(data){console.log(data);}
            }
            var direction_plugin=MapmyIndia.direction(direction_option);  
            //direction_plugin.remove(); 
       </script>
       @endsection
    