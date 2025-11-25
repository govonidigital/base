<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Móveis Premium • Transforme Seu Lar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    margin:0;
    font-family: <?= $fonte ?>;
    background:#f9f9f9;
    color: <?= $cor_texto_primario ?>;
}

/* HERO BLOCO */
.hero {
    padding:80px 20px;
    background-color: <?= $cor_primaria ?>;
    color:#fff;
    text-align:center;
}

.hero h1 {
    font-size:42px;
    margin-bottom:20px;
}

.hero p {
    font-size:18px;
    max-width:600px;
    margin:0 auto 30px auto;
}

.hero a.cta-btn {
    background: <?= $cor_secundaria ?>;
    color:#fff;
    padding:15px 35px;
    border-radius:30px;
    font-weight:bold;
    text-decoration:none;
    transition:.3s;
}

.hero a.cta-btn:hover {
    background: <?= $cor_texto_secundario ?>;
}

/* GRID DE PRODUTOS */
.products {
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
    gap:25px;
    padding:60px 30px;
}

.product-card {
    background:#fff;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 6px 20px rgba(0,0,0,0.1);
    transition: transform .3s, box-shadow .3s;
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow:0 12px 30px rgba(0,0,0,0.15);
}

.product-card img {
    width:100%;
    height:200px;
    object-fit:cover;
}

.product-info {
    padding:15px 20px;
    text-align:center;
}

.product-info h3 {
    color: <?= $cor_primaria ?>;
    margin-bottom:10px;
}

.product-info p {
    color: <?= $cor_texto_secundario ?>;
    font-size:14px;
    margin-bottom:15px;
}

.product-info a.btn-buy {
    background: <?= $cor_secundaria ?>;
    color:#fff;
    padding:10px 25px;
    border-radius:30px;
    font-weight:bold;
    text-decoration:none;
    transition:.3s;
}

.product-info a.btn-buy:hover {
    background: <?= $cor_primaria ?>;
}

/* PROMOÇÃO */
.promo {
    background: <?= $cor_secundaria ?>;
    color:#fff;
    padding:60px 20px;
    text-align:center;
}

.promo h2 {
    font-size:36px;
    margin-bottom:20px;
}

.promo p {
    font-size:18px;
}

/* CONTATO */
.contact {
    padding:60px 20px;
    background:#fff;
    text-align:center;
}

.contact h2 {
    font-size:32px;
    margin-bottom:20px;
}

.contact form {
    max-width:500px;
    margin:0 auto;
}

.contact input, .contact textarea {
    width:100%;
    padding:15px;
    margin-bottom:15px;
    border-radius:8px;
    border:1px solid #ccc;
    font-size:16px;
}

.contact button {
    background: <?= $cor_primaria ?>;
    color:#fff;
    padding:15px 30px;
    border:none;
    border-radius:40px;
    font-weight:bold;
    cursor:pointer;
    transition:.3s;
    width:100%;
}

.contact button:hover {
    background: <?= $cor_secundaria ?>;
}

/* FOOTER */
footer {
    background:#222;
    color:#ccc;
    text-align:center;
    padding:25px;
    font-size:14px;
}
</style>
</head>
<body>

<!-- HERO -->
<div class="hero">
    <h1>Móveis Premium para Sua Casa</h1>
    <p>Design sofisticado e conforto para transformar seu lar em um ambiente único.</p>
    <a href="#produtos" class="cta-btn">Ver Produtos</a>
</div>

<!-- PRODUTOS -->
<div id="produtos" class="products">
    <div class="product-card">
        <img src="<?= base_url('lp/' . $img2) ?>" alt="Sofá Luxo">
        <div class="product-info">
            <h3>Sofá Luxo</h3>
            <p>Conforto e sofisticação para a sala de estar.</p>
            <a href="#" class="btn-buy">Comprar</a>
        </div>
    </div>
    <div class="product-card">
        <img src="<?= base_url('lp/' . $img3) ?>" alt="Poltrona Elegante">
        <div class="product-info">
            <h3>Poltrona Elegante</h3>
            <p>Acabamento premium e design moderno.</p>
            <a href="#" class="btn-buy">Comprar</a>
        </div>
    </div>
    <div class="product-card">
        <img src="<?= base_url('lp/' . $img4) ?>" alt="Mesa de Jantar">
        <div class="product-info">
            <h3>Mesa de Jantar</h3>
            <p>Ideal para momentos especiais com a família.</p>
            <a href="#" class="btn-buy">Comprar</a>
        </div>
    </div>
</div>

<!-- PROMOÇÃO -->
<div class="promo">
    <h2>Promoção Exclusiva!</h2>
    <p>Compre agora e receba 10% de desconto em toda linha de móveis.</p>
</div>

<!-- CONTATO -->
<div class="contact">
    <h2>Fale Conosco</h2>
    <form method="post" action="#">
        <input type="text" name="nome" placeholder="Seu nome" required>
        <input type="email" name="email" placeholder="Seu e-mail" required>
        <input type="tel" name="telefone" placeholder="Telefone / WhatsApp" required>
        <textarea name="mensagem" rows="4" placeholder="Mensagem"></textarea>
        <button type="submit">Enviar</button>
    </form>
</div>

<footer>
    © <?= date('Y') ?> Móveis Premium – Todos os direitos reservados.
</footer>

</body>
</html>
