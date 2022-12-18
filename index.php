<?php include 'pages/header.php'; ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiRQAX8hzdKDJSmMMG7uvc6hSYVq-NwAI&callback=GMPStart" async defer></script>
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
        while ($row = $query->fetch_assoc()) {
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
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <h1 class="mb-4 pb-0">Cari Titik Jangkauan <br><span>5G</span> Telkomsel</h1>
        <p class="mb-4 pb-0">Cek jangkauan 5G Telkomsel di tempat atau daerah anda!</p>
        <a href="maps.php" class="glightbox play-btn mb-4"></a>
        <a href="#about" class="about-btn scrollto">Lihat Peta</a>
    </div>
</section><!-- End Hero Section -->
<main id="main">
    <section id="about">
        <!-- ======= Speakers Section ======= -->
        <div class="container" data-aos="zoom-out">
            <div class="section-header">
                <h2>Peta 5G</h2>
                <p>Klik salah satu titik lokasi untuk detail</p>
            </div>
            <div class="card bg-light mb-4">
                <div id="map"></div>
            </div>
            <div class="d-flex justify-content-end">
            <a href="category-cluster.php" class="btn btn-light rounded-pill shadow"><small class="p-3">Kategori</small></a>
                <a href="maps.php" class="btn btn-danger rounded-pill shadow ms-2"><small class="p-3">Lihat Peta</small></a>
            </div>
        </div>
    </section>
    <section id="schedule" class="section-with-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Lokasi 5G</h2>
                <p>Lihat berdasarkan kategori</p>
            </div>

            <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                <li class="nav-item">
                    <a class="nav-link active mt-3" href="#cluster" role="tab" data-bs-toggle="tab">Cluster Residensial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-3" href="#hotspot" role="tab" data-bs-toggle="tab">5G Hotspot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-3" href="#pendidikan" role="tab" data-bs-toggle="tab">Pendidikan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-3" href="#perkantoran" role="tab" data-bs-toggle="tab">Perkantoran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-3" href="#event" role="tab" data-bs-toggle="tab">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-3" href="#pemerintahan" role="tab" data-bs-toggle="tab">Pemerintahan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-3" href="#pariwisata" role="tab" data-bs-toggle="tab">Pariwisata</a>
                </li>
            </ul>

            <!-- <h3 class="sub-heading" data-aos="fade-up">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
                necessitatibus voluptatem quis labore perspiciatis quia.</h3> -->

            <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="cluster">
                    <?php
                    while ($hot = $cluster->fetch_assoc()) {;
                    ?>
                        <div class="row schedule-item">
                            <!-- <div id="map"></div> -->
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="places/<?= $hot['image'] ?>">
                                </div>
                                <h4><?= str_replace("_", " ", $hot['lokasi']); ?></h4>
                                <p><?= $hot['provinsi']; ?></p>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <!-- Schdule Day 1 -->
                <div role="tabpanel" class="col-lg-9 tab-pane fade" id="hotspot">
                    <?php
                    while ($hot = $hotspot->fetch_assoc()) {;
                    ?>
                        <div class="row schedule-item">
                            <!-- <div id="map"></div> -->
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="places/<?= $hot['image'] ?>">
                                </div>
                                <h4><?= str_replace("_", " ", $hot['lokasi']); ?></h4>
                                <p><?= $hot['provinsi']; ?></p>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <!-- End Schdule Day 1 -->

                <!-- Schdule Day 2 -->
                <div role="tabpanel" class="col-lg-9  tab-pane fade" id="pendidikan">

                    <?php
                    while ($hot = $pendidikan->fetch_assoc()) {;
                    ?>
                        <div class="row schedule-item">
                            <!-- <div id="map"></div> -->
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="places/<?= $hot['image'] ?>">
                                </div>
                                <h4><?= str_replace("_", " ", $hot['lokasi']); ?></h4>
                                <p><?= $hot['provinsi']; ?></p>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <!-- End Schdule Day 2 -->

                <!-- Schdule Day 3 -->
                <div role="tabpanel" class="col-lg-9  tab-pane fade" id="perkantoran">

                    <?php
                    while ($hot = $perkantoran->fetch_assoc()) {;
                    ?>
                        <div class="row schedule-item">
                            <!-- <div id="map"></div> -->
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="places/<?= $hot['image'] ?>">
                                </div>
                                <h4><?= str_replace("_", " ", $hot['lokasi']); ?></h4>
                                <p><?= $hot['provinsi']; ?></p>
                            </div>
                        </div>
                    <?php } ?>

                </div>

                <div role="tabpanel" class="col-lg-9  tab-pane fade" id="event">

                    <?php
                    while ($hot = $event->fetch_assoc()) {;
                    ?>
                        <div class="row schedule-item">
                            <!-- <div id="map"></div> -->
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="places/<?= $hot['image'] ?>">
                                </div>
                                <h4><?= str_replace("_", " ", $hot['lokasi']); ?></h4>
                                <p><?= $hot['provinsi']; ?></p>
                            </div>
                        </div>
                    <?php } ?>

                </div>

                <div role="tabpanel" class="col-lg-9  tab-pane fade" id="pemerintahan">

                    <?php
                    while ($hot = $pemerintahan->fetch_assoc()) {;
                    ?>
                        <div class="row schedule-item">
                            <!-- <div id="map"></div> -->
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="places/<?= $hot['image'] ?>">
                                </div>
                                <h4><?= str_replace("_", " ", $hot['lokasi']); ?></h4>
                                <p><?= $hot['provinsi']; ?></p>
                            </div>
                        </div>
                    <?php } ?>

                </div>

                <div role="tabpanel" class="col-lg-9  tab-pane fade" id="pariwisata">

                    <?php
                    while ($hot = $pariwisata->fetch_assoc()) {;
                    ?>
                        <div class="row schedule-item">
                            <!-- <div id="map"></div> -->
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="places/<?= $hot['image'] ?>">
                                </div>
                                <h4><?= str_replace("_", " ", $hot['lokasi']); ?></h4>
                                <p><?= $hot['provinsi']; ?></p>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <!-- End Schdule Day 2 -->

            </div>

        </div>

    </section><!-- End Schedule Section -->
</main>

<?php include 'pages/footer.php' ?>