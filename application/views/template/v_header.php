<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/style.css'); ?>">
</head>

<body>
    <div class="background-texture"></div>
    <nav>
        <div class="container nav-container">
            <a href="<?= site_url('deteksi'); ?>" class="logo">EmotionAI</a>
            <ul>
                <?php $current_method = $this->uri->segment(2, 'index'); ?>
                <li><a href="<?= site_url('deteksi'); ?>"
                        class="<?= ($current_method == 'index') ? 'active' : ''; ?>">Beranda</a></li>
                <li><a href="<?= site_url('deteksi/prediksi'); ?>"
                        class="<?= ($current_method == 'prediksi') ? 'active' : ''; ?>">Coba Prediksi</a></li>
            </ul>
        </div>
    </nav>
    <main class="container">