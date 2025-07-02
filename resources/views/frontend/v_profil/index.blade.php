@extends('layouts.main')

@section('container')
    <!-- Main Content -->
    <div class="container my-5">
        <form>
            <div class="space-y-12">
                <!-- Bagian Profil -->
                <div class="border-bottom pb-5 mb-5">
                    <h2 class="h4 fw-semibold">Profil</h2>
                    <p class="mt-1 text-muted">Informasi ini akan ditampilkan secara publik, jadi berhati-hatilah dengan apa yang Anda bagikan.</p>

                    <div class="mt-4 row g-3">
                        <div class="col-md-8">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text">workcation.com/</span>
                                <input type="text" class="form-control" name="username" id="username" placeholder="janesmith">
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="about" class="form-label">Tentang</label>
                            <textarea name="about" id="about" rows="3" class="form-control"></textarea>
                            <div class="form-text">Tulis beberapa kalimat tentang diri Anda.</div>
                        </div>

                        <div class="col-12">
                            <label for="photo" class="form-label">Foto</label>
                            <div class="d-flex align-items-center gap-3">
                                <!-- Ikon Pengguna dari Bootstrap Icons -->
                                <i class="bi bi-person-circle photo-placeholder text-secondary"></i>
                                <button type="button" class="btn btn-outline-secondary btn-sm">Ubah</button>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="cover-photo" class="form-label">Foto Sampul</label>
                            <div class="file-drop-area text-center">
                                <i class="bi bi-card-image display-4 text-secondary"></i>
                                <div class="mt-2">
                                    <label for="file-upload" class="text-primary" style="cursor: pointer;">
                                        <span>Unggah file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="d-none">
                                    </label>
                                    <span> atau seret dan lepas</span>
                                </div>
                                <p class="small text-muted mt-1">PNG, JPG, GIF hingga 10MB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bagian Informasi Pribadi -->
                <div class="border-bottom pb-5 mb-5">
                    <h2 class="h4 fw-semibold">Informasi Pribadi</h2>
                    <p class="mt-1 text-muted">Gunakan alamat permanen tempat Anda dapat menerima surat.</p>

                    <div class="mt-4 row g-4">
                        <div class="col-md-6">
                            <label for="first-name" class="form-label">Nama depan</label>
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="last-name" class="form-label">Nama belakang</label>
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="form-control">
                        </div>

                        <div class="col-md-8">
                            <label for="email" class="form-label">Alamat email</label>
                            <input id="email" name="email" type="email" autocomplete="email" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="country" class="form-label">Negara</label>
                            <select id="country" name="country" autocomplete="country-name" class="form-select">
                                <option>Amerika Serikat</option>
                                <option>Kanada</option>
                                <option>Meksiko</option>
                                <option>Indonesia</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="street-address" class="form-label">Alamat jalan</label>
                            <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label for="city" class="form-label">Kota</label>
                            <input type="text" name="city" id="city" autocomplete="address-level2" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label for="region" class="form-label">Provinsi</label>
                            <input type="text" name="region" id="region" autocomplete="address-level1" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label for="postal-code" class="form-label">Kode POS</label>
                            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="form-control">
                        </div>
                    </div>
                </div>

                <!-- Bagian Notifikasi -->
                <div class="border-bottom pb-5 mb-5">
                    <h2 class="h4 fw-semibold">Notifikasi</h2>
                    <p class="mt-1 text-muted">Kami akan selalu memberi tahu Anda tentang perubahan penting, tetapi Anda memilih apa lagi yang ingin Anda dengar.</p>

                    <div class="mt-4">
                        <fieldset>
                            <legend class="h6 fw-semibold">Melalui Email</legend>
                            <div class="mt-3 d-grid gap-3">
                                <div class="form-check">
                                    <input id="comments" name="comments" type="checkbox" class="form-check-input" checked>
                                    <label for="comments" class="form-check-label">Komentar</label>
                                    <div class="form-text">Dapatkan notifikasi ketika seseorang memposting komentar.</div>
                                </div>
                                <div class="form-check">
                                    <input id="candidates" name="candidates" type="checkbox" class="form-check-input">
                                    <label for="candidates" class="form-check-label">Kandidat</label>
                                    <div class="form-text">Dapatkan notifikasi ketika seorang kandidat melamar pekerjaan.</div>
                                </div>
                                <div class="form-check">
                                    <input id="offers" name="offers" type="checkbox" class="form-check-input">
                                    <label for="offers" class="form-check-label">Penawaran</label>
                                    <div class="form-text">Dapatkan notifikasi ketika kandidat menerima atau menolak tawaran.</div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mt-5">
                            <legend class="h6 fw-semibold">Notifikasi Push</legend>
                            <p class="text-muted small">Ini dikirim melalui SMS ke ponsel Anda.</p>
                            <div class="mt-3 d-grid gap-3">
                                <div class="form-check">
                                    <input id="push-everything" name="push-notifications" type="radio" class="form-check-input" checked>
                                    <label for="push-everything" class="form-check-label">Semuanya</label>
                                </div>
                                <div class="form-check">
                                    <input id="push-email" name="push-notifications" type="radio" class="form-check-input">
                                    <label for="push-email" class="form-check-label">Sama seperti email</label>
                                </div>
                                <div class="form-check">
                                    <input id="push-nothing" name="push-notifications" type="radio" class="form-check-input">
                                    <label for="push-nothing" class="form-check-label">Tidak ada notifikasi push</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="mt-4 d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-light">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
    <!-- End of Main Content -->
@endsection    
