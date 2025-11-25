<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech Premium</title>

    <style>
        body {
            margin: 0;
            font-family: <?= $fonte ?>;
            background: <?= $cor_secundaria ?>;
            color: <?= $cor_texto_primario ?>;
        }

        /* HERO PREMIUM DIVIDIDO */
        .hero {
            display: flex;
            flex-wrap: wrap;
            min-height: 100vh;
        }

        .hero-text {
            flex: 1;
            padding: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(135deg, <?= $cor_primaria ?>, <?= $cor_secundaria ?>);
            color: <?= $cor_texto_secundario ?>;
        }

        .hero-text h1 {
            font-size: 58px;
            font-weight: bold;
            margin-bottom: 20px;
            line-height: 1.1;
        }

        .hero-text p {
            font-size: 20px;
            opacity: 0.9;
            margin-bottom: 30px;
            max-width: 500px;
        }

        .hero-text .btn {
            background: <?= $cor_texto_secundario ?>;
            color: <?= $cor_primaria ?>;
            padding: 16px 32px;
            border-radius: 8px;
            font-size: 20px;
            text-decoration: none;
            width: fit-content;
        }

        .hero-img {
            flex: 1;
            background: url('<?= base_url("lp/$img1") ?>') center/cover no-repeat;
        }

        /* TÍTULO DE SESSÃO */
        .title {
            text-align: center;
            font-size: 42px;
            margin-top: 80px;
            margin-bottom: 40px;
        }

        /* CARDS FUTURISTAS */
        .cards {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            padding: 20px;
        }

        .card {
            width: 320px;
            background: rgba(255, 255, 255, 0.07);
            border-radius: 12px;
            backdrop-filter: blur(10px);
            padding: 25px;
            text-align: center;
            transition: .3s;
            border: 1px solid rgba(255,255,255,0.15);
        }

        .card:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 15px 40px rgba(0,0,0,.3);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: contain;
            margin-bottom: 20px;
        }

        /* PRODUTOS GRADE */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            padding: 40px;
        }

        .product {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            color: #333;
            box-shadow: 0 4px 20px rgba(0,0,0,.08);
            transition: .3s;
        }

        .product:hover {
            transform: scale(1.03);
        }

        .product img {
            width: 100%;
            height: 200px;
            object-fit: contain;
        }

        /* FORMULÁRIO GLASS */
        .form-section {
            margin-top: 100px;
            text-align: center;
        }

        .form-box {
            max-width: 450px;
            margin: 40px auto;
            padding: 30px;
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.25);
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        input, button {
            width: 100%;
            padding: 14px;
            margin-top: 12px;
            border-radius: 8px;
            border: none;
        }

        button {
            background: <?= $cor_primaria ?>;
            color: <?= $cor_texto_secundario ?>;
            cursor: pointer;
            font-size: 18px;
        }

        /* WHATSAPP FLUTUANTE */
        .whatsapp {
            position: fixed;
            right: 25px;
            bottom: 25px;
            background: #25D366;
            padding: 18px;
            color: #fff;
            border-radius: 50%;
            font-size: 28px;
            text-decoration: none;
            box-shadow: 0 4px 20px rgba(0,0,0,.3);
        }

        footer {
            text-align: center;
            padding: 25px;
            background: <?= $cor_primaria ?>;
            color: <?= $cor_texto_secundario ?>;
            margin-top: 80px;
        }

        @media(max-width: 900px) {
            .hero {
                flex-direction: column;
            }
            .hero-text {
                padding: 50px;
            }
        }
    </style>
</head>
<body>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-text">
            <h1>Tecnologia que Transforma</h1>
            <p>Explore o futuro com dispositivos criados para elevar sua experiência em performance, inovação e estilo.</p>
            <a href="#form" class="btn">Quero Receber Ofertas</a>
        </div>

        <div class="hero-img"></div>
    </section>

    <!-- CARDS FUTURISTAS -->
    <h2 class="title">Novidades de Alta Performance</h2>

    <div class="cards">
        <div class="card">
            <img src="<?= base_url("lp/$img2") ?>">
            <h3>Notebook Ultra-X</h3>
            <p>Poder, mobilidade e velocidade extrema.</p>
        </div>

        <div class="card">
            <img src="<?= base_url("lp/$img3") ?>">
            <h3>Smartphone Pro+</h3>
            <p>Câmera cinematográfica e IA avançada.</p>
        </div>

        <div class="card">
            <img src="<?= base_url("lp/$img4") ?>">
            <h3>Headset Quantum</h3>
            <p>Imersão total em jogos e música.</p>
        </div>
    </div>

    <!-- PRODUTOS GRID -->
    <h2 class="title">Mais Produtos Premium</h2>

    <div class="product-grid">
        <div class="product">
            <img src="<?= base_url("lp/$img5") ?>">
            <h3>Console Elite</h3>
            <p>Experiência gamer definitiva.</p>
        </div>

        <div class="product">
            <img src="<?= base_url("lp/$img3") ?>">
            <h3>Smartwatch Titan</h3>
            <p>Controle total em seu pulso.</p>
        </div>

        <div class="product">
            <img src="<?= base_url("lp/$img2") ?>">
            <h3>Tablet Vision</h3>
            <p>Design elegante e multitarefa real.</p>
        </div>
    </div>

    <!-- FORM GLASS -->
    <div class="form-section" id="form">
        <h2 class="title">Receba Ofertas Exclusivas</h2>

        <div class="form-box">
            <form action="<?= base_url('lp/salvarLead') ?>" method="post">
                <input type="text" name="nome" placeholder="Seu nome" required>
                <input type="email" name="email" placeholder="Seu melhor e-mail" required>
                <input type="tel" name="telefone" placeholder="WhatsApp" required>
                <button type="submit">Quero Receber Promoções</button>
            </form>
        </div>
    </div>

    <!-- WHATSAPP FLOAT -->
    <a class="whatsapp" href="https://wa.me/55SEUNUMERO">☎</a>

    <footer>
        © <?= date('Y') ?> • Tech Premium • Inovação Sem Limites.
    </footer>

</body>
</html>
