<meta charset="utf-8">

<style>#map{height: 100%;}</style>
   
<div id="map"></div>

<?php
    $url = "../datos/Obras.xml";
    $xml = simplexml_load_file ( $url );
    
    //Evento por el cual recojo la fecha clickada en el calendario
    if(isset($_GET['fecha']))
    { 
        $fecha = new DateTime($_GET['fecha']); 
        $fecha = $fecha->format('Y-m-d');
    }
    else
    { 
        $fecha = date('Y-m-d'); 
    }
?>

<script type="text/javascript">
    var locations = 
    [
        <?php  
        $contador = 1;
        foreach ($xml as $obra)
        {
            /*Compruebo la calle l'alguer para que no pete la comilla simple*/
            $coincidencia = strpos($obra->NomCalle, "'");
            $obra->NomCalle = str_replace("'", "\'", $obra->NomCalle);
            $obra->TipoObra = str_replace("'", "\'", $obra->TipoObra);
            /*if($coincidencia === false)
            {
                $obra->NomCalle = $obra->NomCalle;
            }
            else{
                $obra->NomCalle = str_replace("'", "\'", $obra->NomCalle);
            }
        
            $coincidencia2 = strpos($obra->TipoObra, "'");
            if($coincidencia2 === false)
            {
                $obra->TipoObra = $obra->TipoObra;
            }
            else
            {   
                $obra->TipoObra = str_replace("'", "\'", $obra->TipoObra);
            }*/

            $obraphp['fechainicio']=$obra->FechaInicio;
            $obraphp['fechafin']=$obra->FechaFin;
            $obra['fechainicio'] = substr($obraphp['fechainicio'], 0, -9);
            $fechainicio = new DateTime($obra['fechainicio']);
            $obra['fechafin'] = substr($obraphp['fechafin'], 0, -9);
            $fechafin = new DateTime($obra['fechafin']);

            if($fecha>=$fechainicio->format('Y-m-d') && $fecha<=$fechafin->format('Y-m-d'))
            {
                $coordoriX = $obra->COORDENADA_X;
                $coordoriY = $obra->COORDENADA_Y;

                $USO = 30;
                $Pi = 3.14159265358979323846;

                $semieje_mayor = 6378388;
                $semieje_menor = 6356911.94613;

                $excentricidad = sqrt($semieje_mayor*$semieje_mayor-$semieje_menor*$semieje_menor)/$semieje_mayor;
                $segunda_excentricidad = sqrt($semieje_mayor*$semieje_mayor-$semieje_menor*$semieje_menor)/$semieje_menor;
                $excentricidad_cuadrada = $segunda_excentricidad*$segunda_excentricidad;
                $radio_polar_de_curvatura = $semieje_mayor*$semieje_mayor/$semieje_menor;

                $Coord_sin_retranqueo_X=$coordoriX-500000;
                $Coord_sin_retranqueo_Y=$coordoriY;

                $meridiano_central=6*$USO-183;
                $Phi=$Coord_sin_retranqueo_Y/(6366197.724*0.9996);
                $v=($radio_polar_de_curvatura*0.9996)/sqrt(1+$excentricidad_cuadrada*cos($Phi)*cos($Phi));
                $a=$Coord_sin_retranqueo_X/$v;
                $A1=sin(2*$Phi);
                $A2=$A1*cos($Phi)*cos($Phi);
                $J2=$Phi+($A1/2);
                $J4=(3*$J2+$A2)/4;
                $J6=(5*$J4+$A2*cos($Phi)*cos($Phi))/3;
                $Alfa=3*$excentricidad_cuadrada/4;
                $Beta=5*$Alfa*$Alfa/3;
                $Gamma=35*$Alfa*$Alfa*$Alfa/27;
                $Besubfi=0.9996*$radio_polar_de_curvatura*($Phi-$Alfa*$J2+$Beta*$J4-$Gamma*$J6);
                $b=($Coord_sin_retranqueo_Y-$Besubfi)/$v;
                $Zeta=$excentricidad_cuadrada*$a*$a*cos($Phi)*cos($Phi)/2;
                $Xi=$a-$a*$Zeta/3;
                $eta=$b*(1-$Zeta)+$Phi;
                $variable1=(exp($Xi)-exp(-$Xi))/2;
                $variable2=atan($variable1/cos($eta));
                $Tao=atan(cos($variable2)*tan($eta));
                $Longitud=($variable2*180/$Pi)+$meridiano_central;
                $Latitud=($Phi+(1+$excentricidad_cuadrada*cos($Phi)*cos($Phi)-((3*$excentricidad_cuadrada*sin($Phi)*cos($Phi)/2)*($Tao-$Phi)))*($Tao-$Phi))*180/$Pi;

                $LongitudAproxWGS84=$Longitud+(1.5/10000);
                $LatitudAproxWGS84=$Latitud+(6.5/10000);
        ?>
            
            ['<?php 
                $fechainicio = new DateTime(substr($obra->FechaInicio, 0, -9)); 
                $fechafin = new DateTime(substr($obra->FechaFin, 0, -9)); 
                echo    "<br /><b>Dirección:</b> ".$obra->NomCalle.
                        "<br /><b>Titular:</b> ".$obra->Titular.
                        "<br /><b>Tipo:</b> ".$obra->TipoObra.
                        "<br /><b>Inicio:</b> ".$fechainicio->format("d-m-Y").
                        "<br /><b>Fin:</b> ".$fechafin->format("d-m-Y").
                        "<br /><br />"; ?>',
                         <?php echo  $LatitudAproxWGS84; ?>, 
                         <?php echo  $LongitudAproxWGS84; ?>,
                         <?php echo  $contador;
                ?>],

            <?php
            $contador++; 
            } // If hoy
        } //Foreach
  ?>
  ];
</script> 

<script>
function openInfoWindow(marker){
    var markerLatLng = marker.getPosition();
    var latitud = markerLatLng.lat();
    var longitud = markerLatLng.lng();
    parent.lat(latitud);
    parent.lon(longitud);
}

function initMap(){
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: new google.maps.LatLng(39.418054, -0.384090),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++)
    {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
          animation: google.maps.Animation.DROP,
          map: map,
          title: 'Haga clic en el icono para conocer los datos de la obra.',
          icon: '../assets/img/construction.png'
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
    }

    var input = /** @type {!HTMLInputElement} */(parent.document.getElementById('pac-input'));

    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);

    var marker = new google.maps.Marker({
        draggable: true,
        animation: google.maps.Animation.DROP,
        map: map,
        anchorPoint: new google.maps.Point(0, -29)
    });

    autocomplete.addListener('place_changed', function()
    {
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Seleccione una dirección de la propuestas en el desplegable.");
            return;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } 
        else 
        {
          map.setCenter(place.geometry.location);
          map.setZoom(17);  // Why 17? Because it looks good.
        }
        
        marker.setIcon(/** @type {google.maps.Icon} */({
          url: '',
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(35, 35)
        }));

        marker.setPosition(place.geometry.location);
        marker.setVisible(true);

        var address = '';
        if (place.address_components) 
        {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }
    });

    /* Sets a listener on a radio button to change the filter type on Places
    // Autocomplete.
    function setupClickListener(id, types)
    {
        var radioButton = document.getElementById(id);
        radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
        });
    }
    */

    //setupClickListener('changetype-all', []);
    //setupClickListener('changetype-address', ['address']);
    //setupClickListener('changetype-establishment', ['establishment']);
    //setupClickListener('changetype-geocode', ['geocode']);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUjbsyBMmx_suEMNIQMt4_eKlTskh0rfY&signed_in=true&libraries=places&callback=initMap"
    async defer></script> 
    
    
    
<!--<script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbJ16uUP1tqA_-qsojvMCBV12V71rukHA&signed_in=true&libraries=places&callback=initMap"
    async defer></script>-->
<?php    //AIzaSyAAHdzKh6xLUmJYzREK69UiJm6F2Bp8DJQ  // otra cleve correcta 
?>