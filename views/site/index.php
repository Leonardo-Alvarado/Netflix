<?php

/** @var yii\web\View $this */

$this->title = 'Netflix';
?>
<div class="site-index">

<!-- Hero Section -->
<div class="hero-section" style="background-image: url('https://www.yangcanggih.com/wp-content/uploads/2023/02/Netflix-ilustration.jpg'); background-size: cover; background-position: center; height: 70vh;">
    <div class="hero-overlay" style="background-color: rgba(0,0,0,0.6); height: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <!-- Netflix-like font style and bold text with text shadow -->
        <h1 class="display-3 text-light" style="font-family: 'Poppins', sans-serif; font-size: 4rem; font-weight: 700; text-shadow: 3px 3px 5px rgba(0,0,0,0.8); text-align: center;">Bienvenido a Netflix</h1>
        <p class="lead text-light" style="font-family: 'Poppins', sans-serif; font-size: 1.75rem; font-weight: 400; text-shadow: 2px 2px 4px rgba(0,0,0,0.8); text-align: center;">Disfruta de series y películas ilimitadas.</p>
        <!-- Large, red button similar to Netflix's CTA -->
        <a class="btn btn-danger btn-lg" href="https://www.netflix.com/ec/" style="font-family: 'Poppins', sans-serif; padding: 12px 30px; font-size: 1.25rem;">Ver ahora</a>
    </div>
</div>


    <!-- Content Sections -->
    <div class="content-sections">

        <!-- Tendencias (Trends) -->
        <div class="container mt-5">
            <h3 class="mb-4">Tendencias</h3>
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <img src="https://dnm.nflximg.net/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABXgUlRCHX3PgckyG7L_FabG4Cb-NWMkjGrldf0na9abMGkvCRRFu-kotK4wIWLpqDXdxRwd2VFXKi_Jo3u7ybOYK-MFEXHgt_Femk8kaWMLlq053sBIgbvvWU3IYtXt3M_LBqg.jpg?r=a96/250x150" class="img-fluid rounded" alt="Portada 1">
                </div>
                <div class="col-lg-3 mb-4">
                    <img src="https://dnm.nflximg.net/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABWHdfXaOfTOBoXxCJn6TtrFL6E6A8fmw3de7NJUjhXmULkfoJ51h6KlF2v9pHwOHfUbNs9DT5ywC0TPLEhQG75bxqTVojzyBcVnMuAvyW1glNqFzRu-IXJ3MeiS9DC-NhyGMqg.jpg?r=2e1/250x150" class="img-fluid rounded" alt="Portada 2">
                </div>
                <div class="col-lg-3 mb-4">
                    <img src="https://dnm.nflximg.net/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABW-il5dvjqphNA7An1dw4DmcXsgDnTBbOH8gLe6FqzAlzPNNCxBY-qV2b9xVutfWpmoK4DA7Qd8ZPUEG5p9x5eFDCgohgibHuON8AwcqBDdQFlMQZy4WOqg2Xd2slxPsLd8qxQ.jpg?r=1e8/250x150" class="img-fluid rounded" alt="Portada 3">
                </div>
                <div class="col-lg-3 mb-4">
                    <img src="https://dnm.nflximg.net/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABdS9aMIqNZTzCxEOnF7u4QVmNuc6g8Mxiy8lzA84P8wkh86NMTz2J4IiuusDzeNHYSPI-RBO8sO4ZDr3bI533qr5GNH26nxRLZsO.jpg?r=df4/250x150" class="img-fluid rounded" alt="Portada 4">
                </div>
            </div>

            <!-- Nuevos Lanzamientos (New Releases) -->
            <h3 class="mb-4">Nuevos Lanzamientos</h3>
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <img src="https://dnm.nflximg.net/api/v6/mAcAr9TxZIVbINe88xb3Teg5_OA/AAAABclGiGIia-QRiKj1l1X_rYvvNpvSQ-tZ9Tr8yPOZe-ZFg7jvKztmOocDaQn5P7z_iBlh_Q68EePEtFpsSBGOcmL7ODj_0ycyUNg7j6WA5Me19LQ-IeGIg6lRGpju_BU43Ic_PQ.jpg?r=41b/250x150" class="img-fluid rounded" alt="Portada 5">
                </div>
                <div class="col-lg-3 mb-4">
                    <img src="https://dnm.nflximg.net/api/v6/mAcAr9TxZIVbINe88xb3Teg5_OA/AAAABZ3bKO5vkJL1RWNfQ_q6X-g-D0dKtUM2k4VTBciJJNXvrBDBofPhaofFW-ih36Ivrx4vim3wfhHRzbj4XUzytfnGMBmDEQZGimtP-5Z4-f8w58i_d0yNegdoQXLZcz4LogOSVQ.jpg?r=bf0/250x150" class="img-fluid rounded" alt="Portada 6">
                </div>
                <div class="col-lg-3 mb-4">
                    <img src="https://dnm.nflximg.net/api/v6/mAcAr9TxZIVbINe88xb3Teg5_OA/AAAABR7hpN9qGDHPZU21VFmACIRuC61tZF0ZnzbcszZVfQPXpU9pioIhsAfT4-f5K4mN1eKlaw69AEC7dq4NQmudYgUhPToPuWcTvf1WcGMcopuHRR2414nIN_vOsyISYRP9RV8t6Q.jpg?r=f9e/250x150" class="img-fluid rounded" alt="Portada 7">
                </div>
                <div class="col-lg-3 mb-4">
                    <img src="https://dnm.nflximg.net/api/v6/mAcAr9TxZIVbINe88xb3Teg5_OA/AAAABd79ecvaqttOpjk_qVsuk2G5n9d76CsxeDvQ8aKtWeajzXnyRZEXj07K3wMLD8kUPySc--AyOHsG-hsJs7JIcWo0EX4M2ChLH8aFCeUi8qXVzpuf7Ib8uOGg9Nt5jlRGO5Pfuw.jpg?r=7b4/250x150" class="img-fluid rounded" alt="Portada 8">
                </div>
            </div>

            <!-- Mi Lista (My List) -->
            <h3 class="mb-4">Mi Lista</h3>
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <img src="https://occ-0-8081-3934.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABRi-qcVAjAhbKXSxRHGetsZXSER8Upyu2o5sUIGU9sqm3N-CqZaQGktDQBogpBoO3DKCQgaq4-wzFYqpAUbUGZPNWbS1dAo9QRk.jpg?r=181/250x150" class="img-fluid rounded" alt="Portada 9">
                </div>
                <div class="col-lg-3 mb-4">
                    <img src="https://occ-0-8081-3934.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABYdEb-mgLOO9qdxqSqJC9hLQUKZG5Tc3tOLqC9UT3rVffhPMagUeupqUO-mgI_nIgfgTKE22Z2mdCHOr30Atu5d4aAimTFHK69_ZIyprqX6ixklBhMMm7vrREELcMvHXRl7bDHs1evHQOj40JNj7ieOBg8LNsLONN-zCjguZ5TCHouVlHVo0OAJg7Mwxj6mj2dLtP88zo_PCbtAO4jtUq-wtoNTbnVY9GttHLXVVb5QPo9nQ_yBv7y4PEGqExNdI0E73zHbXdiUs-azo_ppfvCVkeUbbuVlvOaWeZoSPXjqv0AbWLYWlZ9AOYbtY3bIPcqMykB0u9mV_l6Lz2MHHrkUC.jpg?r=535/250x150" class="img-fluid rounded" alt="Portada 10">
                </div>
                <div class="col-lg-3 mb-4">
                    <img src="https://occ-0-8081-3934.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABY3q6eG1wyUq8w299U8H-S2CSWBqr7D_kVLupDITJlASLWfqO7P6IgeVqXuh5x58JTk_YvuBMcZqLxoWypXMZ1fS2o6XIaqM6C0.jpg?r=d7c/250x150" class="img-fluid rounded" alt="Portada 11">
                </div>
                <div class="col-lg-3 mb-4">
                    <img src="https://occ-0-8081-3934.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABVTc8b2MDbOG79wxqwEyARxHpd2w3wlKbXCCdrziH49A3g74J5sCr4Dskm97KeauGN2TNqdF7FvoHYIxiv42I4mwUnWtYUHruhQ.jpg?r=739/250x150" class="img-fluid rounded" alt="Portada 12">
                </div>
            </div>
        </div>

    </div>

</div>
