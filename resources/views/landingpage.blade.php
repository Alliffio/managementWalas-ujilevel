<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('landing_page/style.css')}}">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <title>Landing Page</title>
</head>
<body>
    <div class="warp">
        <header>
            <div class="logo">SMK Taruna Bhakti</div>
            <div class="menu">
                <ul>
                    <li><a href="{{ route('login') }}">Login as User</a></li>
                </ul>
            </div>
        </header>
    </div>

    <div class="container">
        <div class="content">
            <h1>Aplikasi Managemen untuk Wali Kelas SMK TARUNA BHAKTI</h1>
            <div class="btn-group">
                <a href="admin" class="color1">Get Manage</a>
                <!-- <a href="#">Learn more</a> -->
            </div>
        </div>
    
        <div class="gif">
            <img src="{{asset('landing_page/blue-office.jpg')}}" style="width: 500px;">
        </div>
    </div>

    <div class="about-title">
        <center>
            <h2>About School</h2>
        </center> 
    </div>

    <div class="about">
        <div class="about-inner">
            <p>SMK Taruna Bhakti Depok dirancang untuk membekali siswa agar menguasai ilmu pengetahuan khususnya dalam bidang Teknologi Informasi dan Komunikasi  yang berkualitas, serta memiliki kecakapan hidup. Program pembelajaran SMK Taruna Bhakti  memberi perhatian khusus (ciri khas) pada penguasaan TIK khususnya bidang Teknik Komputer dan Jaringan (TKJ), Multimedia (MM) serta Rekaya Perangkat Lunak (RPL)  dengan menggunakan kurikulum Nasional yang secara inovatif diperkaya oleh SMK Taruna Bhakti berdasarkan VISI, MISI, TUJUAN serta TARGET SMK Taruna Bhakti.
                Selain pembelajaran di kelas (intrakurikuler) dan pengembangan bakat/minat melalui ekstrakurikuler, siswa memperluas wawasan melalui berbagai macam program yang membekali siswa untuk memiliki kecakapan hidup antara lain: Character Building, Science Camp, Mendatangkan Guru Tamu dari Dunai Usaha/Industri yang relevan dll, serta memberi kesempatan luas kepada  siswa untuk berkompetisi dalam bidang akademis dan non-akademis baik tingkat Nasional, Regional, dan Internasional.
                Proses dan efektifitas pembelajaran didukung oleh guru yang kompeten, bimbingan dan konseling, serta sarana pendidikan yang lengkap.</p>
        </div>
        <div class="about-image">
            <img src="{{asset('landing_page/about-img.png')}}" alt="gambar" style="width: 500px;">
        </div>
    </div>

    <div class="other-title">
        <center>
            <h2>About Apps</h2>
        </center> 
    </div>

    <div class="other">
        <div class="other-image">
            <img src="{{asset('landing_page/other-img.png')}}" alt="gambar" style="width: 500px;">
        </div>
        <div class="other-inner">
            <p>Aplikasi Management Walas adalah aplikasi yang berguna untuk mengatur dan memantau semua hal yang berhubungan dengan sekolah. Aplikasi ini dibuat untuk wali kelas yang ingin memantau semua kegiatan para siswa dengan tujuan dimudahkannya komunikasi antara siswa dan guru. Aplikasi ini juga friendly dan mudah dipakai.</p>
        </div>
    </div>
</body>
</html>