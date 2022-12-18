<script type="text/javascript">
    let map;
    let infoWindow;
    let mapOptions;
    let bounds;

    function GMPStart() {
        var stylers = [{
                "elementType": "geometry",
                "stylers": [{
                    "color": "#1d2c4d"
                }]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#8ec3b9"
                }]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#1a3646"
                }]
            },
            {
                "featureType": "administrative.country",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#4b6878"
                }]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#64779e"
                }]
            },
            {
                "featureType": "administrative.province",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#4b6878"
                }]
            },
            {
                "featureType": "landscape.man_made",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#334e87"
                }]
            },
            {
                "featureType": "landscape.natural",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#023e58"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#283d6a"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#6f9ba5"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#1d2c4d"
                }]
            },
            {
                "featureType": "poi.business",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#023e58"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#3C7680"
                }]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#304a7d"
                }]
            },
            {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#98a5be"
                }]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#1d2c4d"
                }]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#2c6675"
                }]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#255763"
                }]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#b0d5ce"
                }]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#023e58"
                }]
            },
            {
                "featureType": "transit",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "transit",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#98a5be"
                }]
            },
            {
                "featureType": "transit",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#1d2c4d"
                }]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#283d6a"
                }]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#3a4762"
                }]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#0e1626"
                }]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#4e6d70"
                }]
            }
        ]
        // infoWindow ini digunakan untuk menampilkan pop-up diatas marker terkait lokasi markernya
        infoWindow = new google.maps.InfoWindow;
        //  Variabel berisi properti tipe peta yang bisa diubah-ubah
        mapOptions = {
            styles: stylers,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        // Deklarasi untuk melakukan load map Google Maps API
        map = new google.maps.Map(document.getElementById('map'), mapOptions);
        // Variabel untuk menyimpan batas kordinat
        bounds = new google.maps.LatLngBounds();
        // Pengambilan data dari database MySQL
        <?php

        while ($row = $cl->fetch_assoc()) {
            $nama = $row["lokasi"];
            $provinsi = $row['provinsi'];
            $kategori = $row['kategori'];
            $lat  = $row["lat"];
            $long = $row["long"];
            $img = $row['image'];
            echo "addMarker($lat, $long, '$nama', '$provinsi', '$kategori', '$img');\n";
        }
        ?>
        // Proses membuat marker 
        var location;
        var marker;

        function addMarker(lat, lng, info, prov, kat, img) {
            location = new google.maps.LatLng(lat, lng);
            bounds.extend(location);
            marker = new google.maps.Marker({
                map: map,
                position: location
            });
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info, prov, kat, img);
        }
        // Proses ini dapat menampilkan informasi lokasi Kota/Kab ketika diklik dari masing-masing markernya
        function bindInfoWindow(marker, map, infoWindow, info, prov, kat, img) {
            google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent('<h3 style="color:black">' + info.replaceAll('_', ' ') + '</h3>' + '<br>' +
                    '<img src="places/' + img + '"style="width:200px;height:100%" class="img-fluid rounded mx-auto d-block">' + '<br>' +
                    '<p style="color:black"><b>Provinsi : ' + prov + '<br>' +
                    'Kategori : ' + kat + '<br>' +
                    '</b></p>');
                infoWindow.open(map, marker);
            });
        }
    }
</script>