@extends('layouts.main')

@section('content')
<div class="hero-section p-5 mb-5 rounded-4">
    <div class="row align-items-center">
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold mb-3">Pangeran Valerensco Rivaldi Hutabarat</h1>
            <p class="lead fs-4 mb-4">Mahasiswa | Aktivis Organisasi | Ketua Program Beasiswa | Web & Application Developer</p>
            <p class="mb-4">Saya adalah pribadi yang sistematis, visioner, dan berorientasi pada solusi dengan pengalaman kepemimpinan lebih dari lima tahun serta aktif dalam pengembangan teknologi informasi.</p>
            <div class="d-flex gap-3">
                <a href="/about" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
                <a href="/contact" class="btn btn-outline-light btn-lg">Hubungi Saya</a>
            </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="stat-card">
                <div class="stat-number">5+</div>
                <p class="mb-0">Tahun Pengalaman Organisasi</p>
            </div>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center p-4">
                <i class="bi bi-lightbulb fs-1 text-primary mb-3"></i>
                <h4 class="card-title">Visioner</h4>
                <p class="card-text">Mampu melihat peluang dan merancang strategi untuk masa depan organisasi dan teknologi.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center p-4">
                <i class="bi bi-gear fs-1 text-primary mb-3"></i>
                <h4 class="card-title">Sistematis</h4>
                <p class="card-text">Pendekatan terstruktur dalam menyelesaikan masalah dan mengelola proyek.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center p-4">
                <i class="bi bi-rocket fs-1 text-primary mb-3"></i>
                <h4 class="card-title">Orientasi Solusi</h4>
                <p class="card-text">Fokus pada pencarian dan implementasi solusi yang efektif dan efisien.</p>
            </div>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col-12">
        <h2 class="section-title">Ringkasan Profesional</h2>
        <div class="card">
            <div class="card-body p-4">
                <p>Mahasiswa dengan rekam jejak panjang dalam kepemimpinan organisasi pelajar, kepemudaan, dan kemahasiswaan, serta aktif mengembangkan diri di bidang teknologi dan sistem manajemen organisasi.</p>
                <p>Perpaduan pengalaman lapangan, administrasi, legislasi, dan pengembangan aplikasi membentuk karakter saya sebagai pribadi yang sistematis, visioner, dan berorientasi pada solusi.</p>
                <p>Memiliki pengalaman lebih dari lima tahun dalam dunia organisasi, mulai dari tingkat sekolah, daerah, hingga perguruan tinggi. Terbiasa memimpin, menyusun kebijakan internal, mengelola administrasi, serta mengembangkan sistem kerja berbasis alur dan struktur.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-header">
                <h4 class="mb-0">Hard Skills</h4>
            </div>
            <div class="card-body">
                <div class="d-flex flex-wrap">
                    <span class="badge-skill">HTML5 & CSS3</span>
                    <span class="badge-skill">JavaScript</span>
                    <span class="badge-skill">Bahasa C & Java</span>
                    <span class="badge-skill">Git & GitHub</span>
                    <span class="badge-skill">Responsive Design</span>
                    <span class="badge-skill">System Analysis</span>
                    <span class="badge-skill">Flowchart Design</span>
                    <span class="badge-skill">Organizational Management</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-header">
                <h4 class="mb-0">Soft Skills</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Kepemimpinan dan Manajemen Tim</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Public Speaking dan Argumentasi</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Analisis Masalah dan Problem Solving</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Administrasi dan Dokumentasi</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Disiplin, Konsisten, dan Bertanggung Jawab</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection