<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Luxury Premium</title>

<style>
    body {
        background: #000;
        color: <?= $cor_texto_primario ?>;
        font-family: <?= $fonte ?>, sans-serif;
    }

    .hero {
        height: 100vh;
        background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)),
        url('<?= base_url("lp/$img1") ?>') center/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 40px;
    }

    .hero h1 {
        font-size: 3.8rem;
        color: <?= $cor_primaria ?>;
        font-weight: bold;
    }

    .hero p {
        max-width: 650px;
        font-size: 1.3rem;
        color: <?= $cor_texto_secundario ?>;
        margin: 20px auto;
    }

    .btn-main {
        padding: 15px 35px;
        background: <?= $cor_primaria ?>;
        color: #000;
        border-radius: 40px;
        font-weight: bold;
        transition: .3s;
        text-decoration: none;
    }

    .btn-main:hover {
        filter: brightness(.7);
    }

    .section {
        padding: 80px 20px;
        text-align: center;
    }

    .title {
        font-size: 2.6rem;
        margin-bottom: 20px;
        color: <?= $cor_primaria ?>;
        font-weight: bold;
    }

    .features {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        margin-top: 40px;
    }

    .card {
        background: #111;
        padding: 30px;
        width: 300px;
        border-radius: 12px;
        border: 1px solid <?= $cor_primaria ?>;
    }

    .card img {
        width: 100%;
        border-radius: 10px;
    }

    .whatsapp {
        position: fixed;
        bottom: 25px;
        right: 25px;
        background: #25d366;
        padding: 15px 20px;
        border-radius: 50px;
        color: white;
        font-size: 18px;
        text-decoration: none;
        box-shadow: 0 0 15px #25d366;
    }

    form {
        max-width: 500px;
        margin: 0 auto;
        text-align: left;
        background: #111;
        padding: 30px;
        border-radius: 12px;
        border: 1px solid <?= $cor_secundaria ?>;
    }

    input {
        width: 100%;
        padding: 12px;
        margin-top: 12px;
        background: #222;
        border: 1px solid <?= $cor_texto_secundario ?>;
        border-radius: 6px;
        color: white;
    }

    button {
        width: 100%;
        padding: 15px;
        margin-top: 15px;
        background: <?= $cor_primaria ?>;
        color: black;
        font-weight: bold;
        border-radius: 6px;
        border: none;
        cursor: pointer;
        transition: .3s;
    }
</style>
</head>

<body>

<!-- HERO -->
<section class="hero">
    <div>
        <h1>Experiência Premium</h1>
        <p>Produtos de alto padrão com acabamento impecável e tecnologia avançada. Exclusividade ao seu alcance.</p>
        <a href="#form" class="btn-main">Receber Oferta Exclusiva</a>
    </div>
</section>

<!-- FEATURES -->
<section class="section">
    <h2 class="title">Destaques Premium</h2>

    <div class="features">
        <div class="card">
            <img src="<?= base_url("lp/$img2") ?>">
            <h3>Design Sofisticado</h3>
            <p>Qualidade impecável em cada detalhe.</p>
        </div>

        <div class="card">
            <img src="<?= base_url("lp/$img3") ?>">
            <h3>Tecnologia Exclusiva</h3>
            <p>Alta performance e durabilidade.</p>
        </div>

        <div class="card">
            <img src="<?= base_url("lp/$img4") ?>">
            <h3>Luxo e Conforto</h3>
            <p>Feito para quem exige o melhor.</p>
        </div>
    </div>
</section>

<!-- FORM -->
<section class="section" id="form">
    <h2 class="title">Receba uma Oferta Especial</h2>
    <form action="#" method="post">
        <input type="text" placeholder="Seu nome" required>
        <input type="email" placeholder="Seu melhor e-mail" required>
        <input type="text" placeholder="Telefone / WhatsApp" required>
        <button type="submit">Quero Receber</button>
    </form>
</section>

<!-- WHATSAPP -->
<a href="https://wa.me/5599999999999" class="whatsapp">WhatsApp</a>

</body>
</html>
