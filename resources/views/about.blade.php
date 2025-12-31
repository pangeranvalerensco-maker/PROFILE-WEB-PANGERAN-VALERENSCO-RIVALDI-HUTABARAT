@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="section-title">Profil Lengkap</h1>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="mb-0">Identitas Pribadi</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong><i class="bi bi-person-badge me-2"></i>Nama Lengkap:</strong><br>
                        Pangeran Valerensco Rivaldi Hutabarat</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong><i class="bi bi-geo-alt me-2"></i>Tempat Asal:</strong><br>
                        Sibolga, Sumatera Utara</p>
                    </div>
                </div>
                <p><strong><i class="bi bi-award me-2"></i>Status:</strong><br>
                Mahasiswa | Aktivis Organisasi | Ketua Program Beasiswa | Web Developer & Application Developer Dasar</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h3 class="mb-0">Riwayat Pendidikan</h3>
            </div>
            <div class="card-body">
                <div class="timeline">
                    <div class="timeline-item">
                        <h5>S1 Teknik Informatika</h5>
                        <p class="text-muted mb-1">UNAS PASIM Bandung (Aktif)</p>
                        <p class="small">Mahasiswa aktif dengan fokus pada pengembangan web dan aplikasi</p>
                    </div>
                    <div class="timeline-item">
                        <h5>SMA Negeri 1 Sibolga</h5>
                        <p class="text-muted mb-1">Ketua OSIS 2022-2023</p>
                        <p class="small">Mengembangkan kepemimpinan dan organisasi selama masa sekolah</p>
                    </div>
                    <div class="timeline-item">
                        <h5>SMP Negeri 3 Sibolga</h5>
                        <p class="text-muted mb-1">Pendidikan Dasar</p>
                        <p class="small">Membangun fondasi pengetahuan dan keterampilan dasar</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h3 class="mb-0">Pengalaman Kerja</h3>
            </div>
            <div class="card-body">
                <div class="mb-4">
                    <h5><i class="bi bi-briefcase me-2"></i>Staf Tata Usaha (TU)</h5>
                    <p class="text-muted mb-1">SDN 084088 Kota Sibolga – 2024</p>
                    <ul>
                        <li>Mengelola administrasi sekolah dan pengarsipan dokumen</li>
                        <li>Membantu pelayanan administrasi guru, siswa, dan kepala sekolah</li>
                        <li>Mendukung kelancaran operasional sekolah secara administratif</li>
                    </ul>
                </div>
                <div>
                    <h5><i class="bi bi-person-workspace me-2"></i>Asisten Dosen</h5>
                    <p class="text-muted mb-1">Bapak Eko Travada, Sp., S.T., M.T. – 2025</p>
                    <ul>
                        <li>Terlibat dalam pengembangan Website Pendaftaran Mahasiswa Baru</li>
                        <li>Membantu perancangan struktur sistem dan alur pengguna</li>
                        <li>Mendukung pengelolaan konten dan aspek teknis website</li>
                    </ul>
                    <p class="mb-0"><strong>Website:</strong> <a href="https://pasim.kafemikrochip.com/" target="_blank">https://pasim.kafemikrochip.com/</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="mb-0">Pengalaman Organisasi Utama</h4>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <h6><i class="bi bi-building me-2"></i>DPM UNAS PASIM</h6>
                    <p class="small mb-2">Anggota Komisi I - Legislasi, Advokasi, dan Persidangan</p>
                </div>
                <div class="mb-3">
                    <h6><i class="bi bi-mortarboard me-2"></i>Program Beasiswa PUB</h6>
                    <p class="small mb-2">Ketua Program (2025-2026)</p>
                </div>
                <div class="mb-3">
                    <h6><i class="bi bi-people me-2"></i>PC IPM Sibolga Kota</h6>
                    <p class="small mb-2">Ketua Umum (2020-2022)</p>
                </div>
                <div class="mb-3">
                    <h6><i class="bi bi-flag me-2"></i>Gerakan Pramuka Kota Sibolga</h6>
                    <p class="small mb-2">Ketua Bidang Kajian Kepramukaan DKC (2023-2024)</p>
                </div>
                <div>
                    <h6><i class="bi bi-diagram-3 me-2"></i>Organisasi Lainnya</h6>
                    <p class="small mb-0">Wakil Sekretaris PC Pemuda Muhammadiyah, Ketua Rohis, Ketua PMR, dan lainnya</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Nilai Pribadi</h4>
            </div>
            <div class="card-body">
                <p class="mb-3"><i class="bi bi-check-lg text-primary me-2"></i>Menjunjung tinggi ilmu yang bermanfaat</p>
                <p class="mb-3"><i class="bi bi-check-lg text-primary me-2"></i>Kepemimpinan yang beretika</p>
                <p class="mb-3"><i class="bi bi-check-lg text-primary me-2"></i>Kedisiplinan dan konsistensi</p>
                <p class="mb-3"><i class="bi bi-check-lg text-primary me-2"></i>Komitmen untuk berkembang dan berkontribusi</p>
                <p class="mb-0"><i class="bi bi-check-lg text-primary me-2"></i>Integrasi teknologi & tata kelola organisasi</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Pengalaman Organisasi Detail</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 border-primary">
                            <div class="card-body">
                                <h5 class="card-title">DPM UNAS PASIM</h5>
                                <p class="card-text">Anggota Komisi I – Legislasi, Advokasi, dan Persidangan</p>
                                <ul class="small ps-3">
                                    <li>Penyusunan dan pengawasan kebijakan kemahasiswaan</li>
                                    <li>Kajian tata tertib dan regulasi internal</li>
                                    <li>Proses advokasi dan persidangan organisasi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 border-success">
                            <div class="card-body">
                                <h5 class="card-title">Program Beasiswa PUB</h5>
                                <p class="card-text">Ketua Program (2025–2026)</p>
                                <ul class="small ps-3">
                                    <li>Koordinasi program beasiswa mahasiswa</li>
                                    <li>Pengelolaan administrasi dan seleksi</li>
                                    <li>Penghubung kampus dan penerima beasiswa</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 border-warning">
                            <div class="card-body">
                                <h5 class="card-title">PC IPM Sibolga Kota</h5>
                                <p class="card-text">Ketua Umum (2020–2022)</p>
                                <ul class="small ps-3">
                                    <li>Kepemimpinan organisasi pelajar tingkat kota</li>
                                    <li>Pengembangan program dan kegiatan</li>
                                    <li>Koordinasi dengan organisasi sejenis</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection