@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <h1 class="section-title text-center">Hubungi Saya</h1>
        <p class="text-center lead mb-5">Mari berdiskusi tentang kolaborasi, proyek teknologi, atau peluang pengembangan organisasi.</p>
        
        <div class="row">
            <div class="col-md-5 mb-4">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4">Informasi Kontak</h3>
                        
                        <div class="mb-4">
                            <h5><i class="bi bi-geo-alt text-primary me-2"></i>Lokasi</h5>
                            <p class="mb-0">Sibolga, Sumatera Utara</p>
                            <p class="text-muted small">Bersedia untuk kerja remote maupun onsite</p>
                        </div>
                        
                        <div class="mb-4">
                            <h5><i class="bi bi-envelope text-primary me-2"></i>Media Sosial</h5>
                            <div class="d-flex flex-wrap gap-2 mt-2">
                                <a href="http://github.com/pangeranvalerensco-maker" target="_blank" class="btn btn-dark btn-sm">
                                    <i class="bi bi-github me-1"></i>GitHub
                                </a>
                                <a href="https://www.instagram.com/varelrivaldi_hutabarat/" target="_blank" class="btn btn-danger btn-sm">
                                    <i class="bi bi-instagram me-1"></i>Instagram
                                </a>
                                <a href="https://www.facebook.com/varel.rival.9" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="bi bi-facebook me-1"></i>Facebook
                                </a>
                            </div>
                        </div>
                        
                        <div>
                            <h5><i class="bi bi-clock text-primary me-2"></i>Waktu Respons</h5>
                            <p class="mb-1">Senin - Jumat: 09.00 - 17.00 WIB</p>
                            <p class="mb-0 text-muted small">Biasanya merespons dalam 24 jam</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-7 mb-4">
                <div class="card">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4">Kirim Pesan</h3>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama Anda" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="nama@email.com" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Subjek</label>
                                <input type="text" class="form-control" placeholder="Tentang apa yang ingin didiskusikan?" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Jenis Pesan</label>
                                <select class="form-select" required>
                                    <option selected disabled>Pilih jenis pesan...</option>
                                    <option value="project">Proyek Teknologi</option>
                                    <option value="consultation">Konsultasi Organisasi</option>
                                    <option value="collaboration">Kolaborasi</option>
                                    <option value="other">Lainnya</option>
                                </select>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">Pesan</label>
                                <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda di sini..." required></textarea>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-send me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-12">
                <div class="card bg-light">
                    <div class="card-body text-center p-4">
                        <h4 class="mb-3">Prinsip Komunikasi Saya</h4>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="p-3">
                                    <i class="bi bi-chat-square-text text-primary fs-3"></i>
                                    <h6 class="mt-2">Responsif</h6>
                                    <p class="small mb-0">Menanggapi dengan cepat dan tepat</p>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="p-3">
                                    <i class="bi bi-lightbulb text-primary fs-3"></i>
                                    <h6 class="mt-2">Solutif</h6>
                                    <p class="small mb-0">Berfokus pada solusi, bukan masalah</p>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="p-3">
                                    <i class="bi bi-shield-check text-primary fs-3"></i>
                                    <h6 class="mt-2">Profesional</h6>
                                    <p class="small mb-0">Etika dan kerahasiaan terjamin</p>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="p-3">
                                    <i class="bi bi-hand-thumbs-up text-primary fs-3"></i>
                                    <h6 class="mt-2">Kolaboratif</h6>
                                    <p class="small mb-0">Terbuka untuk diskusi dan masukan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form values
        const name = this.querySelector('input[type="text"]').value;
        const email = this.querySelector('input[type="email"]').value;
        const subject = this.querySelectorAll('input[type="text"]')[1].value;
        const message = this.querySelector('textarea').value;
        
        // Show success message
        alert(`Terima kasih ${name}! Pesan Anda telah berhasil dikirim. Saya akan menghubungi Anda melalui ${email} dalam waktu 24 jam.`);
        
        // Reset form
        this.reset();
    });
</script>
@endsection