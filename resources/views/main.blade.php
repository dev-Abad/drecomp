@extends('index')
@section('content')
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
            <img src="{{ asset('image/monitor/hkc.png') }}" class="card-img-top" alt="...">
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
            <img src="{{ asset('image/monitor/GAMDIAS27.png') }}" class="card-img-top" alt="...">
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
            <img src="{{ asset('image/monitor/msi.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">MSI MAG 27CQ6F 27″ </h3>
                    Screen Size:27 Inches<br>
                    Resolution:1920*1080<br>
                    Refresh Rate:180Hz<br>
                    Panel Type:RAPID VA<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:0.5ms<br>
                    <h3 class="fw-bold">PHP 13,500</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/monitor/gigabyte1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">Gigabyte GS27QCA 27"</h3>
                    Screen Size:27 Inches<br>
                    Resolution:2560 x 1440 (QHD)<br>
                    Refresh Rate:180Hz<br>
                    Panel Type:VA<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms<br>
                    <h3 class="fw-bold">PHP 9,250</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/monitor/viewsonic.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">ViewSonic VX2479A-HD PRO 24″ </h3>
                    Screen Size:27 Inches<br>
                    Resolution:1920*1080<br>
                    Refresh Rate:165Hz<br>
                    Panel Type:IPS FHD<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms<br>
                    <h3 class="fw-bold">PHP 7,300</h3>
                </p>
            </div>
        </div>
    </section>
    <section class="bg-light py-3 d-flex justify-content-around flex-wrap gap-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/monitor/n190hd.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">NVISION N190HD 19" LED MONITOR</h3>
                    Screen Size:19 Inches<br>
                    Resolution:1440 x 900<br>
                    Refresh Rate:60Hz<br>
                    Panel Type:TN<br>
                    Connectivity:HDMI and VGA<br>
                    Response Time:5ms<br>
                    <h3 class="fw-bold">PHP 1,850</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/monitor/n190hd.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">NVISION N200HD 20" LED MONITOR</h3>
                    Screen Size:20 Inches<br>
                    Resolution:1600X900<br>
                    Refresh Rate:60HZ<br>
                    Panel Type:TN<br>
                    Connectivity:HDMI and VGA<br>
                    Response Time:5MS<br>
                    <h3 class="fw-bold">PHP 1,950</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/monitor/h22v8.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">NVISION H22V8 21.5" </h3>
                    Screen Size:21.5 Inches<br>
                    Resolution:FHD 1920 x 1080<br>
                    Refresh Rate:60Hz<br>
                    Panel Type:TN Panel, LED<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:5ms<br>
                    <h3 class="fw-bold">PHP 2,495</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/monitor/aoc22.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">AOC 22B30HM2/71 22" </h3>
                    Screen Size:21.5 Inches<br>
                    Resolution:1980*1080<br>
                    Refresh Rate:120Hz<br>
                    Panel Type:VA<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms<br>
                    <h3 class="fw-bold">PHP 3,999</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/monitor/hd238.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">GAMDIAS ATLAS HD238IF III 23.8"</h3>
                    Screen Size:23.8 Inches<br>
                    Resolution:1920x1080 FHD<br>
                    Refresh Rate:120Hz<br>
                    Panel Type:IPS<br>
                    Connectivity:HDMI, DP<br>
                    Response Time:1ms<br>
                    <h3 class="fw-bold">PHP 4,999</h3>
                </p>
            </div>
        </div>
    </section>

    <section class="bg-light py-3 d-flex justify-content-around flex-wrap gap-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/monitor/VH22F.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">GAMDIAS ATLAS VH22F 22"</h3>
                    Screen Size:22 Inches<br>
                    Resolution:1920*1080<br>
                    Refresh Rate:100Hz<br>
                    Panel Type:VA<br>
                    Connectivity:HDMI and VGA<br>
                    Response Time:3ms<br>
                    <h3 class="fw-bold">PHP 4,150</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/monitor/24G2SE.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">AOC 24G2SE 24" </h3>
                    Screen Size:24 Inches<br>
                    Resolution:1920*1080<br>
                    Refresh Rate:165Hz<br>
                    Panel Type:VA<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms<br>
                    <h3 class="fw-bold">PHP 7,299</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/monitor/MP273W.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">MSI PRO MP273W 27"</h3>
                    Screen Size:27 Inches<br>
                    Resolution:1920*1080<br>
                    Refresh Rate:75Hz<br>
                    Panel Type:IPS<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:5ms<br>
                    <h3 class="fw-bold">PHP 8,999</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/monitor/eg27f1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">NVISION EG27F1 PRO 27"</h3>
                    Screen Size:27 Inches<br>
                    Resolution:1920*1080 FHD<br>
                    Refresh Rate:200Hz<br>
                    Panel Type:IPS<br>
                    Connectivity:HDMI and DP<br>
                    Response Time:1ms<br>
                    <h3 class="fw-bold">PHP 7,999</h3>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/monitor/mp242c.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">
                    <h3 class="fw-bold">MSI PRO MP242C SERIES 24"</h3>
                    Screen Size:23.8 Inches<br>
                    Resolution:1920 x 1080 (FHD)<br>
                    Refresh Rate:75Hz<br>
                    Panel Type:VA<br>
                    Connectivity:HDMI, DP<br>
                    Response Time:1ms(MPRT)<br>
                    <h3 class="fw-bold">PHP 7,550</h3>
                </p>
            </div>
        </div>
@endsection