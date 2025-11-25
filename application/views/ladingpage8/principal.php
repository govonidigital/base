<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Fitness Premium • Alcance Seu Corpo Ideal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
    margin:0;
    font-family: <?= $fonte ?>;
    background:#f9f9f9;
    color: <?= $cor_texto_primario ?>;
}

/* HERO */
.hero {
    height: 90vh;
    background: linear-gradient(rgba(0,0,0,0.35), rgba(0,0,0,0.55)),
        url('<?= base_url("lp/" . $img1) ?>');
    background-size: cover;
    background-position: center;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:#fff;
    padding:20px;
}

.hero h1 {
    font-size:50px;
    font-weight:800;
    margin-bottom:10px;
}

.hero p {
    font-size:20px;
    max-width:700px;
    margin:auto;
}

.hero .cta-btn {
    margin-top:30px;
    padding:15px 40px;
    background: <?= $cor_primaria ?>;
    border-radius:50px;
    text-decoration:none;
    color:#fff;
    font-size:20px;
    transition:.3s;
    font-weight:bold;
}

.hero .cta-btn:hover { background: <?= $cor_secundaria ?>; }

/* SEÇÕES DE AULAS */
.section {
    padding:60px 30px;
}

.section h2 {
    text-align:center;
    font-size:36px;
    color: <?= $cor_primaria ?>;
    margin-bottom:40px;
    font-weight:700;
}

.cards {
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap:25px;
}

.card {
    background:#fff;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 6px 20px rgba(0,0,0,0.12);
    transition:.3s;
}

.card:hover { transform: translateY(-6px); }

.card img {
    width:100%;
    height:220px;
    object-fit:cover;
}

.card-content {
    padding:20px;
}

.card-title {
    font-size:20px;
    font-weight:bold;
    margin-bottom:8px;
}

.card-text {
    font-size:15px;
    color: <?= $cor_texto_secundario ?>;
}

/* FORMULÁRIO DE CONTATO */
.form-area {
    background: <?= $cor_primaria ?>;
    padding:60px 30px;
    color:#fff;
    text-align:center;
}

.form-area h3 {
    font-size:30px;
    margin-bottom:20px;
}

form {
    max-width:450px;
    margin:auto;
}

input, textarea {
    width:100%;
    padding:15px;
    margin-bottom:15px;
    border:none;
    border-radius:6px;
    font-size:16px;
}

button {
    width:100%;
    padding:15px;
    background:#fff;
    color: <?= $cor_primaria ?>;
    border:none;
    border-radius:40px;
    font-size:18px;
    font-weight:bold;
    cursor:pointer;
    transition:.3s;
}

button:hover {
    opacity:.85;
}

/* FOOTER */
footer {
    background:#111;
    padding:25px;
    text-align:center;
    color:#ccc;
    font-size:14px;
}
</style>
</head>

<body>

<!-- HERO -->
<div class="hero">
    <div>
        <h1>Transforme Seu Corpo • Transforme Sua Vida</h1>
        <p>Treinos personalizados, equipe especializada e estrutura premium para você alcançar seus objetivos.</p>
        <a class="cta-btn" href="#contato">Comece Agora</a>
    </div>
</div>

<!-- AULAS E PLANOS -->
<div class="section">
    <h2>Nossos Destaques</h2>

    <div class="cards">
        <div class="card">
            <img src="<?= base_url('lp/' . $img2) ?>">
            <div class="card-content">
                <h3 class="card-title">Treino Funcional</h3>
                <p class="card-text">Fortaleça seu corpo com exercícios que combinam força, resistência e mobilidade.</p>
            </div>
        </div>

        <div class="card">
            <img src="<?= base_url('lp/' . $img3) ?>">
            <div class="card-content">
                <h3 class="card-title">Musculação Premium</h3>
                <p class="card-text">Equipamentos modernos e acompanhamento profissional para resultados rápidos.</p>
            </div>
        </div>

        <div class="card">
            <img src="<?= base_url('lp/' . $img4) ?>">
            <div class="card-content">
                <h3 class="card-title">Aulas de Yoga e Pilates</h3>
                <p class="card-text">Equilíbrio, flexibilidade e foco para corpo e mente saudáveis.</p>
            </div>
        </div>
    </div>
</div>

<!-- FORMULÁRIO DE CONTATO -->
<div id="contato" class="form-area">
    <h3>Agende Sua Aula Experimental</h3>

    <form method="post" action="#">
        <input type="text" name="nome" placeholder="Seu nome" required>
        <input type="email" name="email" placeholder="Seu e-mail" required>
        <input type="tel" name="telefone" placeholder="Telefone / WhatsApp" required>
        <textarea name="mensagem" rows="4" placeholder="Mensagem"></textarea>

        <button type="submit">Enviar</button>
    </form>
</div>

<footer>
    © <?= date('Y') ?> Academia Premium – Todos os direitos reservados.
</footer>

</body>
</html>
