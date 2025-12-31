@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-12 text-center mb-5">
        <h1 class="section-title">Layanan yang Saya Tawarkan</h1>
        <p class="lead">Mengintegrasikan keahlian teknologi dengan pengalaman manajemen organisasi untuk memberikan solusi yang komprehensif.</p>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-4 mb-4">
        <div class="card service-card h-100">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <i class="bi bi-code-slash text-primary" style="font-size: 3rem;"></i>
                </div>
                <h3 class="card-title text-center mb-3">Web Development</h3>
                <p class="card-text text-center">Membangun website profil, portofolio, dan e-commerce responsif menggunakan teknologi modern dengan fokus pada user experience dan performa optimal.</p>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>HTML5, CSS3, JavaScript</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Responsive Design</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Cross-browser Compatibility</li>
                    <li><i class="bi bi-check-circle text-success me-2"></i>Performance Optimization</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card service-card h-100">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <i class="bi bi-diagram-3 text-primary" style="font-size: 3rem;"></i>
                </div>
                <h3 class="card-title text-center mb-3">System Analysis</h3>
                <p class="card-text text-center">Merancang alur sistem (Flowchart) dan logika aplikasi untuk kebutuhan administrasi organisasi yang efisien dengan pendekatan terstruktur.</p>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Flowchart Design</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>System Logic Planning</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Process Optimization</li>
                    <li><i class="bi bi-check-circle text-success me-2"></i>Documentation</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card service-card h-100">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <i class="bi bi-people text-primary" style="font-size: 3rem;"></i>
                </div>
                <h3 class="card-title text-center mb-3">Manajemen Organisasi</h3>
                <p class="card-text text-center">Konsultasi pengelolaan administrasi, penyusunan kebijakan internal, dan kepemimpinan tim berdasarkan pengalaman organisasi lebih dari 5 tahun.</p>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Administrative Management</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Policy Development</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Team Leadership</li>
                    <li><i class="bi bi-check-circle text-success me-2"></i>Strategic Planning</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card service-card h-100">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <i class="bi bi-laptop text-primary" style="font-size: 3rem;"></i>
                </div>
                <h3 class="card-title text-center mb-3">Application Development</h3>
                <p class="card-text text-center">Membangun aplikasi sederhana dengan Bahasa C dan Java untuk manajemen data dan organisasi dengan konsep pemrograman dasar yang solid.</p>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Java Fundamental</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>C Language Basics</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Data Structure</li>
                    <li><i class="bi bi-check-circle text-success me-2"></i>Basic Algorithms</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card service-card h-100">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <i class="bi bi-files text-primary" style="font-size: 3rem;"></i>
                </div>
                <h3 class="card-title text-center mb-3">Administrasi & Dokumentasi</h3>
                <p class="card-text text-center">Membantu pengelolaan administrasi dan dokumentasi organisasi atau institusi dengan sistem yang terstruktur dan mudah diakses.</p>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Document Archiving</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Administrative System</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Record Keeping</li>
                    <li><i class="bi bi-check-circle text-success me-2"></i>Reporting System</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card service-card h-100">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <i class="bi bi-chat-dots text-primary" style="font-size: 3rem;"></i>
                </div>
                <h3 class="card-title text-center mb-3">Pelatihan & Konsultasi</h3>
                <p class="card-text text-center">Memberikan pelatihan dan konsultasi mengenai kepemimpinan, organisasi, dan teknologi dasar untuk pengembangan kapasitas individu dan tim.</p>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Leadership Training</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Organizational Consultation</li>
                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Basic Tech Training</li>
                    <li><i class="bi bi-check-circle text-success me-2"></i>Career Development</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-12">
        <div class="card bg-light">
            <div class="card-body text-center p-5">
                <h3 class="mb-3">Siap Bekerja Sama?</h3>
                <p class="mb-4">Saya terbuka untuk kolaborasi, proyek freelance, atau diskusi tentang peluang teknologi dan organisasi.</p>
                <a href="/contact" class="btn btn-primary btn-lg">
                    <i class="bi bi-chat-left-text me-2"></i>Hubungi Saya Sekarang
                </a>
            </div>
        </div>
    </div>
</div>
@endsection