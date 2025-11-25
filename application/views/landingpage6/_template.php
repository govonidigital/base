<!-- application/views/lp/landing_estetica.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Clínica Premium de Estética</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    margin:0;
    font-family: <?= $fonte ?>;
    color: <?= $cor_texto_primario ?>;
    background:#fafafa;
}

/* HEADER */
.hero {
    background: linear-gradient(120deg, <?= $cor_primaria ?>, <?= $cor_secundaria ?>);
    padding: 100px 20px;
    text-align: center;
    color: #fff;
}
.hero h1 {
    font-size: 48px;
    margin-bottom: 10px;
}
.hero p { font-size:20px; }

/* CARDS */
.services {
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap:20px;
    padding:50px;
}
.card {
    background:#fff;
    padding:20px;
    border-radius:10px;
    box-shadow:0 4px 14px rgba(0,0,0,0.1);
    transition: transform .3s;
}
.card:hover { transform:translateY(-6px); }
.card img { width:100%; border-radius:10px; margin-bottom:15px; }

/* CTA */
.cta {
    background: <?= $cor_primaria ?>;
    padding:50px 20px;
    text-align:center;
    color:#fff;
}
.cta a {
    background:#fff;
    color:<?= $cor_primaria ?>;
    padding:15px 35px;
    border-radius:50px;
    text-decoration:none;
    font-weight:bold;
    transition:.3s;
}
.cta a:hover { opacity:.85; }

/* FOOTER */
footer {
    text-align:center;
    padding:20px;
    background:#111;
    color:#ddd;
    font-size:14px;
}
</style>
</head>
<body>

<div class="hero">
    <h1>Beleza e Bem-Estar ao Seu Alcance</h1>
    <p>Tratamentos modernos com resultados reais. Agende agora mesmo.</p>
</div>

<div class="services">
    <div class="card">
        <img src="<?= base_url('lp/' . $img1) ?>">
        <h3>Limpeza de Pele</h3>
        <p>Sessões profundas com especialistas certificados.</p>
    </div>

    <div class="card">
        <img src="<?= base_url('lp/' . $img2) ?>">
        <h3>Harmonização Facial</h3>
        <p>Técnicas avançadas para realçar sua beleza natural.</p>
    </div>

    <div class="card">
        <img src="<?= base_url('lp/' . $img3) ?>">
        <h3>Massagem Relaxante</h3>
        <p>Reduza o estresse e restaure sua energia.</p>
    </div>
</div>

<div class="cta">
    <h2>Agenda Limitada – Garanta Sua Avaliação</h2>
    <a href="#">Agendar Agora</a>
</div>

<footer>
    © <?= date('Y') ?> Clínica Premium de Estética – Todos os direitos reservados.
</footer>

</body>
</html>
