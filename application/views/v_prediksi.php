<div class="card">
    <section id="prediction-form">
        <h2><span class="gradient-text">Analisis Emosi dari Chat 💬</span></h2>
        <p>Masukkan kalimat chat di bawah ini untuk mengetahui prediksi emosinya.</p>
        <form method="post" action="<?= site_url('deteksi/prediksi'); ?>">
            <label for="chatInput">Kalimat Anda:</label>
            <textarea id="chatInput" name="chat_input" rows="4"
                placeholder="Contoh: Hari ini aku senang sekali!"><?= isset($text_input) ? htmlspecialchars($text_input) : ''; ?></textarea>
            <button type="submit">Prediksi Emosi</button>
        </form>
    </section>

    <?php if (isset($hasil)): ?>
    <section id="result-section">
        <div id="hasilPrediksi">
            Emosi yang terdeteksi adalah:
            <strong><?= htmlspecialchars($hasil); ?></strong>
        </div>
    </section>
    <?php endif; ?>
</div>