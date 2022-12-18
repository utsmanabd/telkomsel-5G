<?php include 'pages/header.php' ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiRQAX8hzdKDJSmMMG7uvc6hSYVq-NwAI&callback=GMPStart" async defer></script>
<?php include 'maps/pariwisata.php'  ?>
<main id="main">
    <section id="schedule" class="section-with-bg" style="background-color:#0e1626">
        <div class="container mt-4">
            <div id="map"></div>

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mt-3" href="category-cluster.php">Cluster Residensial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-3" href="category-hotspot.php">5G Hotspot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-3" href="category-pendidikan.php">Pendidikan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-3" href="category-perkantoran.php">Perkantoran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-3" href="category-event.php">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-3" href="category-pemerintahan.php">Pemerintahan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active mt-3" href="#pariwisata">Pariwisata</a>
                </li>
            </ul>
            <div class="card rounded-5 p-3">
                <div class="section-header">
                    <h2 class="mt-5">Titik Lokasi 5G - Pariwisata</h2>
                </div>
                <!-- <h3 class="sub-heading" data-aos="fade-up">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
                necessitatibus voluptatem quis labore perspiciatis quia.</h3> -->

                <div class="tab-content row justify-content-center">

                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="cluster">
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
                                    <!-- <div class="d-flex justify-content-end">
                                    <input class="btn btn-danger" type="submit" name="cari" value="Cari">
                                </div> -->

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

                    <div role="tabpanel" class="col-lg-9  tab-pane fade show active" id="pariwisata">

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
        </div>

    </section><!-- End Schedule Section -->
</main>
<?php include 'pages/footer.php' ?>