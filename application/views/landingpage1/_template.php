<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
 * application/views/lp/landing1.php
 * Landing Page 1 — Concessionária / Honda (completa, responsiva, parametrizável)
 *
 * Variáveis esperadas (fornecidas pelo controller):
 *  $cor_primaria
 *  $cor_secundaria
 *  $cor_texto_primario
 *  $cor_texto_secundario
 *  $fonte
 *  $img1 ... $img5
 *
 * Imagens públicas: base_url('lp/' . $imgX)
 */
$whatsapp_number = '5511999999999'; // troque para seu número real
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Concessionária — Honda</title>

  <!-- Bootstrap 4.6 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- Google Fonts (fallbacks). A font escolhida no admin vai ser a primeira da pilha -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

  <style>
    :root{
      --lp-primary: <?= isset($cor_primaria) ? $cor_primaria : '#007bff' ?>;
      --lp-secondary: <?= isset($cor_secundaria) ? $cor_secundaria : '#6c757d' ?>;
      --lp-txt-prim: <?= isset($cor_texto_primario) ? $cor_texto_primario : '#212529' ?>;
      --lp-txt-sec: <?= isset($cor_texto_secundario) ? $cor_texto_secundario : '#6c757d' ?>;
      --lp-font: '<?= addslashes(isset($fonte) ? $fonte : 'Poppins') ?>', Poppins, Roboto, sans-serif;
      --lp-radius: 12px;
    }

    html,body{height:100%;margin:0;font-family:var(--lp-font);color:var(--lp-txt-prim);-webkit-font-smoothing:antialiased}
    a{color:var(--lp-primary)}
    .btn-lp-primary{background:var(--lp-primary); color:#fff; border:0; padding:10px 18px; border-radius:8px; font-weight:600}
    .btn-lp-secondary{background:var(--lp-secondary); color:#fff; border:0; padding:9px 16px; border-radius:8px; font-weight:600}
    .hero { padding:60px 0; background: linear-gradient(180deg, rgba(0,0,0,0.02), rgba(0,0,0,0.00)); }
    .hero-card { background: #fff; border-radius:20px; padding:28px; box-shadow: 0 12px 36px rgba(18,38,63,0.08); }
    .hero-title { font-size: clamp(26px, 4.5vw, 44px); margin:0 0 8px; line-height:1.03; }
    .hero-sub { color: var(--lp-txt-sec); margin-bottom:18px; }
    .hero-image { width:100%; height:420px; object-fit:cover; border-radius:12px; box-shadow: 0 12px 36px rgba(18,38,63,0.08); }
    .features { padding:48px 0; }
    .feature-card { border-radius:14px; overflow:hidden; background:#fff; padding:16px; text-align:center; box-shadow:0 10px 30px rgba(18,38,63,0.06); transition:transform .18s ease; }
    .feature-card:hover{ transform:translateY(-8px) }
    .feature-card img { width:100%; height:160px; object-fit:cover; border-radius:8px; margin-bottom:12px; }
    .gallery { padding:40px 0; }
    .testimonial { background:#fff; border-radius:12px; padding:18px; box-shadow:0 8px 22px rgba(0,0,0,0.06); }
    .cta { background: var(--lp-primary); color:#fff; padding:34px 18px; border-radius:12px; display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap; }
    .footer { background: var(--lp-primary); color:#fff; padding:20px 10px; text-align:center; }
    .whatsapp-fixed { position: fixed; right: 18px; bottom: 18px; z-index: 99999; display:flex; align-items:center; gap:10px; padding:10px 14px; background: linear-gradient(90deg, var(--lp-secondary), var(--lp-primary)); color:#fff; border-radius:999px; box-shadow: 0 12px 30px rgba(0,0,0,0.22); text-decoration:none;}
    .whatsapp-fixed img{ width:38px; height:38px; background:#fff; padding:6px; border-radius:50%;}
    /* form */
    .lp-form { background: rgba(255,255,255,0.98); padding:14px; border-radius:10px; box-shadow: 0 8px 20px rgba(0,0,0,0.06); }
    .muted { color: var(--lp-txt-sec); }

    @media (max-width: 920px){
      .hero-image{ height:260px; }
      .cta { flex-direction: column; text-align:center; }
    }
  </style>
</head>
<body>

<!-- NAV minimal (visual only) -->
<nav class="navbar navbar-expand-lg navbar-light bg-white" style="box-shadow:0 4px 16px rgba(0,0,0,0.04);">
  <div class="container">
    <a class="navbar-brand font-weight-bold" href="#" style="color:var(--lp-primary)">Concessionária Honda</a>
    <div class="ml-auto d-none d-lg-block">
      <a href="#models" class="btn btn-link">Modelos</a>
      <a href="#form" class="btn btn-lp-primary">Solicitar Orçamento</a>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4">
        <div class="hero-card">
          <h1 class="hero-title">Encontre sua Moto Honda Ideal</h1>
          <p class="hero-sub">A melhor concessionária Honda da região. Financiamento facilitado e assistência técnica autorizada.</p>

          <!-- Form capture -->
          <form id="leadForm" class="lp-form" method="post" action="<?= base_url('contato/enviar') ?>">
            <input type="hidden" name="origem" value="landing1">
            <div class="form-row">
              <div class="col-12 col-md-6 mb-2">
                <input type="text" name="nome" class="form-control" placeholder="Seu nome" required>
              </div>
              <div class="col-12 col-md-6 mb-2">
                <input type="tel" name="telefone" class="form-control" placeholder="Telefone (com DDD)" required>
              </div>
              <div class="col-12 mb-2">
                <input type="email" name="email" class="form-control" placeholder="Seu melhor e-mail" required>
              </div>
              <div class="col-12 text-right">
                <button class="btn-lp-primary" type="submit">Quero receber oferta</button>
              </div>
            </div>
          </form>

          <div class="mt-3 d-flex flex-wrap">
            <a href="#models" class="btn btn-link mr-2">Ver Modelos</a>
            <a href="#gallery" class="btn btn-link">Galeria</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 text-center">
        <?php if (!empty($img1)): ?>
          <img src="<?= base_url('lp/'.$img1) ?>" alt="Moto destaque" class="hero-image">
        <?php else: ?>
          <div class="hero-image d-flex align-items-center justify-content-center" style="background:#f2f2f2;color:#999">Adicione imagem1 no admin</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES / BENEFÍCIOS -->
<section class="features">
  <div class="container">
    <div class="text-center mb-4">
      <h2 style="margin-bottom:6px">Por que escolher a nossa concessionária?</h2>
      <p class="muted">Serviço especializado, peças originais e atendimento diferenciado.</p>
    </div>

    <div class="row">
      <?php 
        $titles = ['Economia', 'Segurança', 'Assistência']; 
        $desc = [
          'Modelos com excelente consumo e manutenção acessível.',
          'Tecnologia e componentes de alta confiabilidade.',
          'Rede autorizada com peças originais e garantia.'
        ];
        for ($i = 2; $i <= 4; $i++):
      ?>
      <div class="col-md-4 mb-3">
        <div class="feature-card">
          <?php if (!empty(${"img$i"})): ?>
            <img src="<?= base_url('lp/'.${"img$i"}) ?>" alt="feature<?=$i?>">
          <?php else: ?>
            <div style="height:160px;background:#f6f6f6;border-radius:8px;margin-bottom:12px;"></div>
          <?php endif; ?>
          <h5 style="color:var(--lp-primary)"><?= $titles[$i-2] ?></h5>
          <p class="muted"><?= $desc[$i-2] ?></p>
        </div>
      </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- GALLERY / MODELS -->
<section id="models" class="gallery bg-white">
  <div class="container">
    <div class="text-center mb-4">
      <h2>Modelos em destaque</h2>
      <p class="muted">Veja alguns dos modelos que oferecemos.</p>
    </div>

    <div class="row">
      <?php for ($i = 2; $i <= 5; $i++): ?>
        <div class="col-sm-6 col-md-3 mb-3">
          <div class="card" style="border-radius:12px;overflow:hidden;box-shadow:0 8px 20px rgba(0,0,0,0.06)">
            <?php if (!empty(${"img$i"})): ?>
              <img src="<?= base_url('lp/'.${"img$i"}) ?>" class="card-img-top" style="height:180px;object-fit:cover">
            <?php else: ?>
              <div style="height:180px;background:#f1f1f1"></div>
            <?php endif; ?>
            <div class="card-body text-center">
              <h6>Modelo <?= $i-1 ?></h6>
              <p class="muted small mb-2">A partir de R$ XX.XXX</p>
              <a class="btn btn-sm btn-lp-secondary" href="#form">Solicitar</a>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="section bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h3>O que nossos clientes dizem</h3>
    </div>
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="testimonial">
          <p class="mb-1">"Ótimo atendimento e rapidez na entrega."</p>
          <small class="muted">— João</small>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="testimonial">
          <p class="mb-1">"Pós-venda excelente e peças originais."</p>
          <small class="muted">— Maria</small>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="testimonial">
          <p class="mb-1">"Recomendo: financiamento sem dor de cabeça."</p>
          <small class="muted">— Carlos</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container">
    <div class="cta">
      <div>
        <h4 style="margin:0">Quer uma condição especial?</h4>
        <p class="muted mb-0">Solicite sua proposta e agende um test-drive hoje mesmo.</p>
      </div>
      <div>
        <a href="#form" class="btn btn-light" style="border-radius:10px;padding:10px 18px;color:var(--lp-primary)">Agendar Test-drive</a>
        <a href="https://wa.me/<?= $whatsapp_number ?>" target="_blank" class="btn btn-lp-primary">Falar no WhatsApp</a>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="container">
    <small>© <?= date('Y') ?> Concessionária Honda — Todos os direitos reservados</small>
  </div>
</footer>

<!-- WhatsApp floating -->
<a class="whatsapp-fixed" href="https://wa.me/<?= $whatsapp_number ?>" target="_blank" aria-label="WhatsApp">
  <img src="<?= base_url('assets/img/whatsapp-circle.png') ?>" alt="WhatsApp">
  <span style="font-weight:700">FALAR NO WHATSAPP</span>
</a>

<!-- Optional: small client-side validation/UX -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
  // quick UX: prevent double submit
  document.addEventListener('DOMContentLoaded', function(){
    var form = document.getElementById('leadForm');
    if(form){
      form.addEventListener('submit', function(e){
        var btn = form.querySelector('button[type="submit"]');
        if(btn){
          btn.disabled = true;
          btn.innerText = 'Enviando...';
        }
      });
    }
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
