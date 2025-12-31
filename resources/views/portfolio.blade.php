@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="section-title">Portfolio & Proyek Teknologi</h1>
        <p class="lead mb-4">Berikut adalah beberapa proyek teknologi yang telah saya kembangkan, mencerminkan kemampuan dalam web development dan application development.</p>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-4 mb-4">
        <div class="card project-card h-100">
            <div class="card-body">
                <div class="mb-3">
                    <span class="badge bg-primary">Website</span>
                    <span class="badge bg-info">E-Commerce</span>
                </div>
                <h4 class="card-title fw-bold">MineCart</h4>
                <p class="card-text text-muted mb-3">Website E-Catalog & E-Commerce UMKM yang dikembangkan menggunakan HTML, CSS, dan JavaScript Modular dengan fokus pada desain responsif dan user experience.</p>
                <div class="mb-3">
                    <small class="text-muted"><i class="bi bi-tools me-1"></i>HTML5, CSS3, JavaScript</small>
                </div>
                <a href="https://projekan-html-pangeranvalerensco.vercel.app/" target="_blank" class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-eye me-1"></i>Lihat Demo
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card project-card h-100">
            <div class="card-body">
                <div class="mb-3">
                    <span class="badge bg-success">Java</span>
                    <span class="badge bg-secondary">Desktop App</span>
                </div>
                <h4 class="card-title fw-bold">Struktura</h4>
                <p class="card-text text-muted mb-3">Aplikasi Manajemen Organisasi berbasis alur pengajuan menggunakan Java Fundamental dengan implementasi konsep OOP dasar dan sistem validasi proses.</p>
                <div class="mb-3">
                    <small class="text-muted"><i class="bi bi-tools me-1"></i>Java, OOP, System Design</small>
                </div>
                <button class="btn btn-outline-success btn-sm" disabled>
                    <i class="bi bi-code-slash me-1"></i>Source Code Available
                </button>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card project-card h-100">
            <div class="card-body">
                <div class="mb-3">
                    <span class="badge bg-dark">C Language</span>
                    <span class="badge bg-warning">Management System</span>
                </div>
                <h4 class="card-title fw-bold">Tunas Scout</h4>
                <p class="card-text text-muted mb-3">Sistem manajemen data anggota pramuka yang dibangun dengan Bahasa C, mengimplementasikan logika dasar dan struktur data untuk simulasi sistem administrasi organisasi.</p>
                <div class="mb-3">
                    <small class="text-muted"><i class="bi bi-tools me-1"></i>C Language, Data Structure</small>
                </div>
                <button class="btn btn-outline-dark btn-sm" disabled>
                    <i class="bi bi-database me-1"></i>Data Management System
                </button>
            </div>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col-12">
        <h2 class="section-title">Proyek Kolaborasi</h2>
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="card-title">Website Pendaftaran Mahasiswa Baru UNAS PASIM</h4>
                        <p class="card-text">Terlibat sebagai asisten dosen dalam pengembangan website pendaftaran mahasiswa baru dengan fokus pada struktur sistem dan user experience.</p>
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-info me-2">Collaboration</span>
                            <span class="badge bg-primary">Web Development</span>
                        </div>
                        <a href="https://pasim.kafemikrochip.com/" target="_blank" class="btn btn-primary">
                            <i class="bi bi-link-45deg me-1"></i>Kunjungi Website
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <i class="bi bi-laptop text-primary" style="font-size: 4rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h2 class="section-title">Teknologi yang Digunakan</h2>
        <div class="card">
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-md-3 mb-4">
                        <div class="p-3">
                            <i class="bi bi-filetype-html text-danger" style="font-size: 3rem;"></i>
                            <h5 class="mt-2">HTML5</h5>
                            <p class="small text-muted">Struktur Web</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="p-3">
                            <i class="bi bi-filetype-css text-primary" style="font-size: 3rem;"></i>
                            <h5 class="mt-2">CSS3</h5>
                            <p class="small text-muted">Styling & Layout</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="p-3">
                            <i class="bi bi-filetype-js text-warning" style="font-size: 3rem;"></i>
                            <h5 class="mt-2">JavaScript</h5>
                            <p class="small text-muted">Interaktivitas</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="p-3">
                            <i class="bi bi-github text-dark" style="font-size: 3rem;"></i>
                            <h5 class="mt-2">Git & GitHub</h5>
                            <p class="small text-muted">Version Control</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection