<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRE COMPUTER CENTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('image/dre logo.png') }}">
</head>
<body>
    <header class="navbar bg-body-tertiary">
        <div class="d-flex justify-content-between w-100">
            <a class="navbar-brand" href="#">
            <img src="{{ asset('image/dre logo.png') }}" alt="DRELOGO" width="200" height="125" class="d-inline-block align-text-top">
            </a>
            <ul class="nav align-items-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">BUILD YOUR PC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PACKAGES/PROMO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT US</a>
            </li>
            </ul>
        </div>
    </header>

<section>
    <div id="featureCarousel" class="carousel slide my-5" data-bs-ride="carousel">
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
            <h3 class="fw-bold">WE ALSO OFFER SERVICE</h3>
            <p class="fw-normal">DESKTOP REPAIR | LAPTOP REPAIR | PRINTER REPAIR</p>
            </div>
            <div class="carousel-item">
            <h3 class="fw-bold">DESKTOP PACKAGE PROMO </h3>
            <p class="fw-normal">PRICE STARTS @14,999 W/ PRINTER</p>
            </div>
            <div class="carousel-item">
            <h3 class="fw-bold">PISONET ALSO AVAILABLE</h3>
            <p class="fw-normal">PRICE STARTS @13,999</p>
            </div>
        </div>

        <div class="container mt-5">
        <h1 class="text-center fw-bold">WELCOME TO DRE COMPUTER CENTER</h1>
        <p class="text-center">YOUR ONE STOP SHOP FOR ALL YOUR COMPUTER NEEDS<br>
        WE OFFER A WIDE RANGE OF COMPUTER PARTS AND ACCESSORIES<br>
        FROM DESKTOPS TO LAPTOPS, WE HAVE IT ALL<br>
        </p>
    </div>
    </section>
    <h2 class="text-center fw-bold my-5" style="background-color: blue; color: white; padding: 10px;">MONITORS</h2>

    <section class="bg-light py-3 d-flex justify-content-around flex-wrap gap-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/hkc.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">HKC MG34H2UB 34"</h3>
                    Screen Size:34 Inches<br>
                    Resolution:WQHD 3440 x 1440<br>
                    Refresh Rate:165Hz<br>
                    Panel Type:VA<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms MPRT<br>
                    <h3 class="fw-bold">PHP 14,695</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/GAMDIAS27.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">Gamdias Atlas HD27CG </h3>
                    Screen Size:27 Inches<br>
                    Resolution:1920*1080<br>
                    Refresh Rate:165Hz<br>
                    Panel Type:VA<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms MPRT<br>
                    <h3 class="fw-bold">PHP 7,695</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/msi.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">MSI MAG 27CQ6F 27″ </h3>
                    Screen Size:27 Inches<br>
                    Resolution:1920*1080<br>
                    Refresh Rate:165Hz<br>
                    Panel Type:VA<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms MPRT<br>
                    <h3 class="fw-bold">PHP 13,500</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/gigabyte1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">Gigabyte GS27QCA 27"</h3>
                    Screen Size:27 Inches<br>
                    Resolution:1920*1080<br>
                    Refresh Rate:165Hz<br>
                    Panel Type:VA<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms MPRT<br>
                    <h3 class="fw-bold">PHP 9,250</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/viewsonic.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">ViewSonic VX2479A-HD PRO 24″ </h3>
                    Screen Size:27 Inches<br>
                    Resolution:1920*1080<br>
                    Refresh Rate:165Hz<br>
                    Panel Type:VA<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms MPRT<br>
                    <h3 class="fw-bold">PHP 7,300</h3>
                </p>
            </div>
        </div>
    </section>
    <section class="bg-light py-3 d-flex justify-content-around flex-wrap gap-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/acer.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">Acer Nitro VG240Y</h3>
                    Screen Size:24 Inches<br>
                    Resolution:1920*1080<br>
                    Refresh Rate:75Hz<br>
                    Panel Type:IPS<br>
                    Connectivity:HDMI and VGA<br>
                    Response Time:1ms VRB<br>
                    <h3 class="fw-bold">PHP 6,500</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/samsung.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">Samsung Odyssey G5</h3>
                    Screen Size:27 Inches<br>
                    Resolution:2560*1440<br>
                    Refresh Rate:144Hz<br>
                    Panel Type:VA<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms MPRT<br>
                    <h3 class="fw-bold">PHP 15,000</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/lg.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">LG UltraGear 24GN600</h3>
                    Screen Size:24 Inches<br>
                    Resolution:1920*1080<br>
                    Refresh Rate:144Hz<br>
                    Panel Type:IPS<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms MBR<br>
                    <h3 class="fw-bold">PHP 10,500</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/asus.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">ASUS TUF Gaming VG27AQ</h3>
                    Screen Size:27 Inches<br>
                    Resolution:2560*1440<br>
                    Refresh Rate:165Hz<br>
                    Panel Type:IPS<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms MPRT<br>
                    <h3 class="fw-bold">PHP 20,000</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/dell.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">Dell UltraSharp U2723QE</h3>
                    Screen Size:27 Inches<br>
                    Resolution:3840*2160<br>
                    Refresh Rate:60Hz<br>
                    Panel Type:IPS<br>
                    Connectivity:HDMI, DP, and USB-C<br>
                    Response Time:5ms<br>
                    <h3 class="fw-bold">PHP 35,000</h3>
                </p>
            </div>
        </div>
    </section>

    <section class="bg-light py-3 d-flex justify-content-around flex-wrap gap-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/acer.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">Acer Nitro VG240Y</h3>
                    Screen Size:24 Inches<br>
                    Resolution:1920*1080<br>
                    Refresh Rate:75Hz<br>
                    Panel Type:IPS<br>
                    Connectivity:HDMI and VGA<br>
                    Response Time:1ms VRB<br>
                    <h3 class="fw-bold">PHP 6,500</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/samsung.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">Samsung Odyssey G5</h3>
                    Screen Size:27 Inches<br>
                    Resolution:2560*1440<br>
                    Refresh Rate:144Hz<br>
                    Panel Type:VA<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms MPRT<br>
                    <h3 class="fw-bold">PHP 15,000</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/lg.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">LG UltraGear 24GN600</h3>
                    Screen Size:24 Inches<br>
                    Resolution:1920*1080<br>
                    Refresh Rate:144Hz<br>
                    Panel Type:IPS<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms MBR<br>
                    <h3 class="fw-bold">PHP 10,500</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/asus.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">ASUS TUF Gaming VG27AQ</h3>
                    Screen Size:27 Inches<br>
                    Resolution:2560*1440<br>
                    Refresh Rate:165Hz<br>
                    Panel Type:IPS<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms MPRT<br>
                    <h3 class="fw-bold">PHP 20,000</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/dell.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">Dell UltraSharp U2723QE</h3>
                    Screen Size:27 Inches<br>
                    Resolution:3840*2160<br>
                    Refresh Rate:60Hz<br>
                    Panel Type:IPS<br>
                    Connectivity:HDMI, DP, and USB-C<br>
                    Response Time:5ms<br>
                    <h3 class="fw-bold">PHP 35,000</h3>
                </p>
            </div>
        </div>
    </section>
        
    <footer class="bg-dark text-white text-center py-3 mt-auto position-fixed bottom-0 w-100">
        <p>&copy; 2025 EybiDev. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>