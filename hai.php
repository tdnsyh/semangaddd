<?php
session_start();
$nama = $_SESSION["nama"] ?? "Teman";
$foto = $_SESSION["foto"] ?? "";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Semangat!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
    .foto-user {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 15px;
    }

    .carousel-card {
        height: 200px;
    }

    body {
        background-image: url('https://media.giphy.com/media/JIX9t2j0ZTN9S/giphy.gif');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        min-height: 100vh;
        color: white;
    }

    .overlay {
        background-color: rgba(0, 0, 0, 0.5);
        min-height: 100vh;
        padding: 20px;
    }
    </style>
</head>

<body>
    <div class="overlay">
        <div class="container py-5 text-center">
            <?php if ($foto): ?>
            <img src="<?= htmlspecialchars($foto) ?>" class="foto-user" alt="Foto Kamu" />
            <?php endif; ?>
            <h2 class="mb-4">
                Semangat Selalu,
                <?= htmlspecialchars($nama) ?>!
            </h2>

            <!-- Carousel -->
            <div id="carouselSemangat" class="carousel slide mb-3">
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <div
                            class="bg-primary text-white d-flex justify-content-center align-items-center rounded carousel-card p-4">
                            <h4>
                                Capek? Wajar. Kita bukan power bank, <?= htmlspecialchars($nama) ?>. Tapi ingat, kamu
                                udah
                                sejauh ini. Rehat bentar, terus gas lagi. Hidup nggak nungguin yang nyerah.
                            </h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div
                            class="bg-success text-white d-flex justify-content-center align-items-center rounded carousel-card p-4">
                            <h4>
                                Nggak semua hari itu cerah, tapi kamu tetap bisa bersinar... kayak lampu kosan yang lupa
                                dimatiin. Tapi serius, kamu keren. Jangan mikir kamu nggak cukup, karena kenyataannya
                                kamu
                                luar biasa.
                            </h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div
                            class="bg-warning text-dark d-flex justify-content-center align-items-center rounded carousel-card p-4">
                            <h4>
                                Hidup emang nggak semulus filter Instagram. Tapi kabar baiknya: kamu nggak sendiri,
                                <?= htmlspecialchars($nama) ?>. Kita semua sama-sama berjuang—bedanya cuma gaya rambut
                                doang.
                            </h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div
                            class="bg-light text-dark d-flex flex-column justify-content-center align-items-center rounded carousel-card p-4">
                            <h4 class="mb-4">
                                Oke serius dikit nih, <?= htmlspecialchars($nama) ?>. Hari ini kamu ngerasa semangat
                                nggak?
                                Jawab jujur, jangan kayak pas ditanya “udah makan belum” padahal belum.
                            </h4>
                            <div>
                                <button class="btn btn-success me-2" onclick="jawabSemangat(true)">Ya!</button>
                                <button class="btn btn-danger" onclick="jawabSemangat(false)">Nggak juga sih</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal semangat -->
                <div class="modal fade" id="modalSemangat" tabindex="-1" aria-labelledby="modalSemangatLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-warning text-dark">
                                <h5 class="modal-title" id="modalSemangatLabel">Ups! Lagi kurang semangat ya?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body">
                                Wajar kok. Bahkan Batman juga pernah lelah (walau dia kaya). Tapi kamu jauh lebih hebat
                                dari
                                yang kamu pikirin. Yuk, rebahan sebentar, terus bangkit lagi. Kita nggak bisa nyerah
                                sekarang, udah terlalu jauh buat mundur. 💪
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke deh, coba
                                    semangat lagi 😌</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="carousel-controls text-center mt-3 d-flex justify-content-between">
                    <button class="btn btn-outline-secondary me-2" type="button" data-bs-target="#carouselSemangat"
                        data-bs-slide="prev">
                        &laquo; Sebelumnya
                    </button>
                    <button class="btn btn-primary" type="button" data-bs-target="#carouselSemangat"
                        data-bs-slide="next">
                        Selanjutnya &raquo;
                    </button>
                </div>
            </div>
        </div>
        <div class="container">
            <a href="/index.html" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
    <script>
    function jawabSemangat(isYes) {
        if (isYes) {
            alert(
                "Yeeey! Seneng dengernya. Terima kasih udah semangat hari ini, <?= htmlspecialchars($nama) ?>. Tetep keren ya! ✨"
            );
        } else {
            const modal = new bootstrap.Modal(document.getElementById('modalSemangat'));
            modal.show();
        }
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>