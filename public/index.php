<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Antonio Cafe</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- header section --}}
    <header class="header">
        <img src="{{ asset('images\San Antonio Cafe.svg') }}" alt="Logo">

        <nav class="navbar">
            <a href="#">HOME</a>
            <a href="#">MENU</a>
            <a href="#">ABOUT</a>
            <a href="#">WHY?</a>
            <a href="#">WHAT?</a>
        </nav>
        
        <div class="navseaper">
            <img src="{{ asset('images\search-button.svg') }}" alt="search" href="#">
            <img src="{{ asset('images\person.svg') }}" alt="person" href="#">
        </div>
    </header>

    {{-- hero --}}
    <div class="bagian1">
        <section>
            <div class="hero">
                <div class="theText">
                    <h1>Selamat Datang ke<span> San Antonio Cafe</span></h1>
                    <p>Nikmati pengalaman kopi yang tak terlupakan di San Antonio Cafe. Kami menghadirkan cita rasa kopi terbaik dari biji-biji pilihan, disajikan dalam lingkungan yang nyaman dan penuh kehangatan. Temui teman-teman baru atau nikmati momen pribadi Anda di kafe kami.</p>
                    <button>Book a Table</button>
                </div>
                <div>
                    <img src="{{ asset('images\cafe1.svg') }}" alt="" class="cafe1">
                </div>
            </div>
        </section>
        <section>
            <div class="hero2">
                <div class="info">
                    <img src="{{ asset('images\time.svg') }}" alt="">
                    <h3>Today 10:00 am - 07:00 pm</h3>
                    <p>Working hours</p>
                </div>
                <div class="info">
                    <img src="{{ asset('images\location.svg') }}" alt="">
                    <h4>Jl. Brigjend Darsono Bypass No.33</h4>
                    <p>Get Direction</p>
                </div>
                <div class="info">
                    <img src="{{ asset('images\call.svg') }}" alt="">
                    <h3>(0231) 486475</h3>
                    <p>Call Online</p>
                </div>
            </div>
        </section>
    </div>

    <section>
        <div class="menu">
            <h1>MENU</h1>
            <p>Top menu items</p>
            <div class="themenu">
                <div class="isiMenu">
                    <img src="{{ asset('images\menu1.svg') }}" alt="">
                    <h2>Honey Cake or Medovik</h2>
                    <p>Medovik adalah kue lapis yang populer di negara-negara bekas Uni Soviet</p>
                </div>
                <div class="isiMenu">
                    <img src="{{ asset('images\menu2.svg') }}" alt="">
                    <h2>Tiramisu</h2>
                    <p>Tiramisù adalah kue keju khas Italia dengan taburan bubuk kakao di atasnya.</p>
                </div>
                <div class="isiMenu">
                    <img src="{{ asset('images\menu3.svg') }}" alt="">
                    <h2>Chocolate volcanoes</h2>
                    <p>Chocolate volcanoes merupakan kue yang mengombinasikan elemen dari kue cokelat tanpa tepung dan souffle.</p>
                </div>
                <div class="isiMenu">
                    <img src="{{ asset('images\menu4.svg') }}" alt="">
                    <h2>Black coffee</h2>
                    <p>Black coffee merupakan jenis minuman kopi hitam yang menghasilkan cita rasa kopi super pahit & pekat.</p>
                </div>
            </div>
            <button>Download Full Menu</button>
        </div>
    </section>

    <section>
        <div class="about">
            <h1 class="tentang">Tentang Kami</h1>
            <p class="abouttext">Kami di San Antonio Cafe adalah pecinta kopi yang berkomitmen untuk memberikan pengalaman kopi terbaik kepada pelanggan kami. Kafe kami didirikan pada tahun [Tahun Pendirian] di [Kota Anda], dan sejak itu, kami telah menjadi tempat favorit bagi para pencinta kopi dan penggemar makanan lezat di sekitar daerah ini.</p>
            <h1 class="tentang">Visi & Misi</h1>
            <div class="vimi">
                <div class="visi">
                    <h1>Visi</h1>
                    <p>Visi kami adalah menciptakan ruang yang hangat dan nyaman di mana orang dapat bersantai, bekerja, atau bersosialisasi sambil menikmati kopi berkualitas tinggi dan makanan yang lezat. Kami selalu berusaha untuk memberikan pelayanan terbaik dan menciptakan momen-momen yang berharga bagi setiap pelanggan.</p>
                </div>
                <div class="misi">
                    <h1>Misi</h1>
                    <ul>
                        <li>Menghadirkan berbagai macam kopi pilihan dari seluruh dunia, mulai dari biji kopi organik hingga kopi eksotis.</li>
                        <li>Menyajikan makanan yang lezat dan sehat yang cocok untuk semua selera.</li>
                        <li>Menyediakan ruang yang nyaman dengan dekorasi yang hangat dan suasana yang ramah.</li>
                        <li>Mendukung komunitas lokal dengan berpartisipasi dalam acara dan inisiatif komunitas.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="choose">
            <img src="{{ asset('images\cafe2.svg') }}" alt="" class="cafe2">
            <div class="chooseus">
                <div>
                    <h1>Why people choose us?</h1>
                </div>
                <div class="bagian">
                    <div class="thebagian1">
                        <div>
                            <h3>Kualitas Kopi Terbaik</h3>
                            <p>Kami bangga dengan kualitas biji kopi terbaik yang kami gunakan untuk menciptakan secangkir kopi yang tak terlupakan.</p>
                        </div>
                        <div>
                            <h3>Menu Variatif</h3>
                            <p>Dengan menu yang beragam, kami menyajikan lebih dari sekadar kopi. Temukan berbagai pilihan teh, makanan lezat, dan minuman spesial.</p>
                        </div>
                    </div>
                    <div class="thebagian2">
                        <div>
                            <h3>Pelayanan Terbaik</h3>
                            <p>Tim kami selalu berusaha memberikan pelayanan terbaik kepada setiap pelanggan. Keinginan Anda adalah prioritas kami.</p>
                        </div>
                        <div>
                            <h3>Lokasi Strategis</h3>
                            <p>Terletak di lokasi strategis, kami mudah diakses dan menjadi tempat yang nyaman untuk rapat atau berkumpul.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="people">
            <div class="say">
                <h1>What people say about our cafe</h1>
                <p>Terletak di lokasi strategis, kami mudah diakses dan menjadi tempat yang nyaman untuk rapat atau berkumpul</p>
                <div class="name">
                    <img src="{{ asset('images\foto.svg') }}" alt="" class="person">
                    <h2>Decky Pratama Putra</h2>
                </div>
            </div>
            <img src="{{ asset('images\cafe3.svg') }}" alt="" class="cafe3">
        </div>
    </section>
</body>
</html>