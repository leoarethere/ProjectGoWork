@extends('layouts.main')

@section('container')
    <!-- Main Content -->
    <br>
    <br>
    
    {{-- div class="pxp-container" sudah dihapus --}}
    <h2 class="pxp-section-h2 text-center">Tips & Trik</h2>
    <p class="pxp-text-light text-center">Daftar pertanyaan dan jawaban yang sering ditanyakan</p>

    <div class="row mt-4 mt-lg-5 justify-content-center">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Talenta</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Perusahaan</button>
                </div>
            </nav>
                
            <!-- Tab Pencari Kerja -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <div class="accordion pxp-faqs-accordion mt-4" id="pxpFAQsAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="pxpFAQsHeader2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pxpCollapseFAQs2" aria-expanded="false" aria-controls="pxpCollapseFAQs2">
                                        Akun &amp; Login
                                    </button>
                                </h2>
                                <div id="pxpCollapseFAQs2" class="accordion-collapse collapse" aria-labelledby="pxpFAQsHeader3" data-bs-parent="#pxpFAQsAccordion" style="">
                                    <div class="accordion-body">
                                        Diploy telah terintegrasi secara Single Sign-On (SSO) dengan website Digital Talent Scholarship sehingga alumni/kandidat dapat menggunakan akun yang sama dengan DTS
                                        tanpa perlu melalkuakn registrasi ulang.<br>
                                        Jika kamu belum memiliki akun silahkan daftar <a href="https://digitalent.komdigi.go.id/register" target="_blank">disini</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="pxpFAQsHeader3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pxpCollapseFAQs3" aria-expanded="false" aria-controls="pxpCollapseFAQs3">
                                        Bagaimana cara mendaftar pekerjaan?
                                    </button>
                                </h2>
                                <div id="pxpCollapseFAQs3" class="accordion-collapse collapse" aria-labelledby="pxpFAQsHeader3" data-bs-parent="#pxpFAQsAccordion">
                                    <div class="accordion-body">
                                        Untuk dapat mendaftar lowongan kamu wajib melakukan login, setelah itu klik tombol "Daftar" yang terdapat pada halaman detail lowongan kamu inginkan.
                                        <br><br>
                                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                            <strong class="text-dark">Penting: Pendaftaran dan proses rekrutmen oleh perusahaan mitra Diploy sepenuhnya gratis dan tidak dipungut biaya dalam bentuk apa pun. Harap berhati-hati terhadap segala bentuk penipuan yang mengatasnamakan Diploy atau mitra kami. Segala proses rekrutmen/seleksi yang dilakukan di luar platform menjadi tanggung jawab penuh pengguna.</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="pxpFAQsHeader4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pxpCollapseFAQs4" aria-expanded="false" aria-controls="pxpCollapseFAQs4">
                                        Mengapa saya tidak mendapat respon setelah apply secara online?
                                    </button>
                                </h2>
                                <div id="pxpCollapseFAQs4" class="accordion-collapse collapse" aria-labelledby="pxpFAQsHeader4" data-bs-parent="#pxpFAQsAccordion">
                                    <div class="accordion-body">
                                        Setiap Perusahaan memiliki preferensi sendiri untuk menyeleksi lamaran. Beberapa Perusahaan terkadang juga melakukan update status lamaran secara langsung. Namun, ada Perusahaan yang tidak akan menghubungi Anda kecuali mereka ingin memulai proses seleksi. </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="pxpFAQsHeader5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pxpCollapseFAQs5" aria-expanded="false" aria-controls="pxpCollapseFAQs5">
                                        Bagaimana caranya agar peluang saya untuk direkrut menjadi lebih besar?
                                    </button>
                                </h2>
                                <div id="pxpCollapseFAQs5" class="accordion-collapse collapse" aria-labelledby="pxpFAQsHeader5" data-bs-parent="#pxpFAQsAccordion">
                                    <div class="accordion-body">
                                        Update profile secara berkala seperti pengalaman, pendidikan, sertifikasi dan keterampilan akan sangat membantu.
                                        Kamu juga dapat mengikuti profiling/soft-skill assessmen yang teredia agar Perusahaan semakin tertarik dengan lamaranmu.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pencari Kerja -->

                    <!-- Tab Perusahaan -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        {{-- 1. Ubah ID accordion utama --}}
                        <div class="accordion pxp-faqs-accordion mt-4" id="pxpFAQsAccordionPerusahaan">
                            
                            <div class="accordion-item">
                                {{-- 2. Ubah ID header --}}
                                <h2 class="accordion-header" id="pxpFAQsHeaderPerusahaan1">
                                    {{-- 3. Sesuaikan target & controls --}}
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pxpCollapseFAQsPerusahaan1" aria-expanded="false" aria-controls="pxpCollapseFAQsPerusahaan1">
                                        Apa itu Diploy?
                                    </button>
                                </h2>
                                {{-- 4. Ubah ID collapse div dan data-bs-parent --}}
                                <div id="pxpCollapseFAQsPerusahaan1" class="accordion-collapse collapse" aria-labelledby="pxpFAQsHeaderPerusahaan1" data-bs-parent="#pxpFAQsAccordionPerusahaan">
                                    <div class="accordion-body">
                                        Diploy merupakan platform Digital Employment dan Talent Pool yang bertujuan untuk fasilitasi perluasan kesempatan kerja Alumni Digital Talent Scholarship,
                                        dengan mempertemukan para alumni dengan Perushaan yang sedang mencari tenaga kerjaan.
                                        Kandidat yang terdaftar pada platform Diploy hanya alumni telah menyelesaikan dan dinyatakan lulus pelatihan.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                {{-- Ubah ID header --}}
                                <h2 class="accordion-header" id="pxpFAQsHeaderPerusahaan2">
                                    {{-- Sesuaikan target & controls --}}
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pxpCollapseFAQsPerusahaan2" aria-expanded="false" aria-controls="pxpCollapseFAQsPerusahaan2">
                                        Akun &amp; Login
                                    </button>
                                </h2>
                                {{-- Ubah ID collapse div dan data-bs-parent --}}
                                <div id="pxpCollapseFAQsPerusahaan2" class="accordion-collapse collapse" aria-labelledby="pxpFAQsHeaderPerusahaan2" data-bs-parent="#pxpFAQsAccordionPerusahaan">
                                    <div class="accordion-body">
                                        Perusahaan dapat memanfaatkan Diploy sebagai platfom untuk merekrut kandidat secara gratis dan tanpa biaya langganan.<br><br>
                                        1. Tahapan pendafatran :
                                        <ul>
                                            <li>Membuat akun dan melengkapi informasi perusahaan <a href="https://digitalent.komdigi.go.id/register" target="_blank">disini</a></li>
                                            <li>Proses verifikasi (dilakukan oleh diploy untuk memastikan legalitas dan reputasi perusahaan)</li>
                                            <li>Aktivasi akun</li>
                                            <li>Mulai merekrut talenta</li>
                                        </ul>
                                        2. Login :
                                        <ul>
                                            <li>Perushaan yang telah lolos verifikasi dan aktif dapat melakukan login</li>
                                            <li>Login menggunakan username dan password yang digunakan saat pendaftaran <a href="https://digitalent.komdigi.go.id/register" target="_blank">disini</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- Lanjutkan pola ini untuk item-item lainnya jika ada --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <!-- End of Main Content -->
@endsection

