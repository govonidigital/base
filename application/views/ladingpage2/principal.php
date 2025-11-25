<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>Tech Futurista — Inovação</title>

  <!-- GSAP + ScrollTrigger (CDN) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

  <!-- Inter (fallback) e sua fonte admin será aplicada como primeiro fallback -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

  <style>
    :root{
      --p: <?= isset($cor_primaria) ? $cor_primaria : '#0d6efd' ?>;
      --s: <?= isset($cor_secundaria) ? $cor_secundaria : '#6c757d' ?>;
      --tp: <?= isset($cor_texto_primario) ? $cor_texto_primario : '#0f1724' ?>;
      --ts: <?= isset($cor_texto_secundario) ? $cor_texto_secundario : '#6b7280' ?>;
      --font: '<?= addslashes(isset($fonte)?$fonte:'Inter') ?>', Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }

    /* Reset */
    *{box-sizing:border-box}
    html,body{height:100%;margin:0;font-family:var(--font);color:var(--tp);background:linear-gradient(180deg, rgba(0,0,0,0.02), rgba(0,0,0,0.00));-webkit-font-smoothing:antialiased}
    a{color:inherit;text-decoration:none}

    /* Layout */
    .nav {
      display:flex;align-items:center;justify-content:space-between;padding:18px 32px;
      position:fixed;left:0;right:0;top:0;z-index:60;background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.00));
      backdrop-filter: blur(6px);
    }
    .brand{font-weight:800;color:var(--p);letter-spacing:0.6px}
    .nav .cta{background:var(--p);color:#fff;padding:10px 16px;border-radius:10px;font-weight:700}

    /* HERO split */
    .hero { display:flex;flex-wrap:wrap;min-height:86vh;padding-top:80px; }
    .hero-left{flex:1;min-width:320px;display:flex;align-items:center;padding:64px 6vw;flex-direction:column;justify-content:center}
    .hero-right{flex:1;min-width:320px;position:relative;display:flex;align-items:center;justify-content:center;padding:40px}

    .hero-title{font-size:clamp(28px,6vw,54px);line-height:1;margin:0 0 14px;font-weight:800;color:var(--tp)}
    .hero-sub{color:var(--ts);max-width:56ch;margin-bottom:22px}

    .hero-cta{display:flex;gap:12px;flex-wrap:wrap}
    .btn-primary{background:var(--p);color:#fff;padding:12px 20px;border-radius:10px;font-weight:700}
    .btn-outline{border:2px solid var(--p);color:var(--p);padding:10px 18px;border-radius:10px;background:transparent;font-weight:700}

    /* Hero visual (futuristic device mock) */
    .device-wrap{width:420px;max-width:86%;height:520px;border-radius:28px;overflow:hidden;position:relative;box-shadow:0 40px 80px rgba(2,6,23,0.24);background:linear-gradient(135deg,var(--p),var(--s))}
    .device-wrap img{width:100%;height:100%;object-fit:cover;display:block;opacity:.96;mix-blend-mode:normal}
    .device-glow{position:absolute;left:-20%;top:-20%;width:140%;height:140%;filter:blur(60px);opacity:.42;background:radial-gradient(circle at 30% 30%, rgba(255,255,255,0.20), transparent 20%), radial-gradient(circle at 70% 70%, rgba(0,0,0,0.12), transparent 30%)}

    /* Animated specs band */
    .specs-band{position:absolute;bottom:18px;left:18px;right:18px;height:86px;border-radius:12px;background:rgba(255,255,255,0.06);display:flex;align-items:center;gap:18px;padding:12px 18px;color:#fff}
    .specs-item{flex:1;text-align:center}
    .specs-item h4{margin:0;font-size:14px;font-weight:700;color:#fff}
    .specs-item p{margin:4px 0 0;font-size:13px;color:rgba(255,255,255,0.85)}

    /* FEATURES */
    .features{padding:60px 6vw;background:linear-gradient(180deg, rgba(0,0,0,0.01), rgba(0,0,0,0));display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px}
    .feature{background:#fff;border-radius:14px;padding:18px;box-shadow:0 10px 30px rgba(12,18,30,0.06);transition:transform .28s}
    .feature:hover{transform:translateY(-10px)}
    .feature h3{margin:0 0 8px;color:var(--p)}
    .feature p{margin:0;color:var(--ts)}

    /* GRID product showcase */
    .products{padding:48px 6vw}
    .prod-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px}
    .prod{background:linear-gradient(180deg,#fff,#f8f9fb);border-radius:12px;padding:12px;box-shadow:0 10px 30px rgba(10,20,40,0.05);text-align:center}
    .prod img{width:100%;height:160px;object-fit:contain;margin-bottom:8px}

    /* Newsletter / glass */
    .subscribe{padding:54px 6vw;display:flex;align-items:center;justify-content:center}
    .glass{max-width:920px;width:100%;padding:28px;border-radius:14px;background:linear-gradient(180deg, rgba(255,255,255,0.06), rgba(255,255,255,0.03));box-shadow:0 10px 30px rgba(2,6,23,0.06);backdrop-filter: blur(8px);display:flex;gap:20px;align-items:center}
    .glass .left{flex:1}
    .glass .right{width:380px}
    input[type="email"]{width:100%;padding:14px;border-radius:10px;border:1px solid rgba(0,0,0,0.06);font-size:16px}

    /* WhatsApp floating circle */
    .whatsapp-float{position:fixed;right:22px;bottom:22px;width:68px;height:68px;border-radius:50%;background:#25D366;display:flex;align-items:center;justify-content:center;z-index:120;box-shadow:0 12px 36px rgba(0,0,0,0.28)}
    .whatsapp-float img{width:36px;height:36px}

    footer{padding:30px 6vw;text-align:center;color:var(--ts);background:transparent}
    @media(max-width:880px){ .hero{flex-direction:column}.hero-left{padding:36px 6vw}.device-wrap{height:360px} .specs-band{position:relative;bottom:auto;left:auto;right:auto;margin-top:12px} }
  </style>
</head>
<body>

  <!-- NAV -->
  <div class="nav">
    <div class="brand">TechPulse</div>
    <div>
      <a class="cta" href="#form">Receber Oferta</a>
    </div>
  </div>

  <!-- HERO -->
  <main class="hero" role="main">
    <div class="hero-left">
      <div style="max-width:960px;text-align:left">
        <h1 class="hero-title">Dispositivos de Alto Desempenho para o Futuro</h1>
        <p class="hero-sub">Processamento extremo, bateria inteligente e design que redefine o que é mobilidade. Descubra agora ofertas exclusivas.</p>

        <div class="hero-cta">
          <a class="btn-primary" href="#form">Quero Receber</a>
          <a class="btn-outline" href="#products">Ver Produtos</a>
        </div>
      </div>
    </div>

    <div class="hero-right" aria-hidden="true">
      <div class="device-wrap" id="deviceWrap">
        <div class="device-glow"></div>
        <?php if (!empty($img1)): ?>
          <img src="<?= base_url('lp/'.$img1) ?>" alt="produto destaque">
        <?php else: ?>
          <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,0.6)">Adicione img1</div>
        <?php endif; ?>

        <div class="specs-band" id="specsBand">
          <div class="specs-item">
            <h4>CPU</h4>
            <p>Octa-Core A14</p>
          </div>
          <div class="specs-item">
            <h4>Bateria</h4>
            <p>5000mAh — 2 dias</p>
          </div>
          <div class="specs-item">
            <h4>Câmera</h4>
            <p>108MP + NightAI</p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- FEATURES -->
  <section class="features" aria-label="Destaques">
    <div class="feature">
      <h3>Performance Extrema</h3>
      <p>Arquitetura otimizada com resfriamento avançado para sustained performance.</p>
    </div>
    <div class="feature">
      <h3>Inteligência de Bateria</h3>
      <p>Carregamento adaptativo e modo de economia inteligente para até 48h.</p>
    </div>
    <div class="feature">
      <h3>Conectividade Ultrafast</h3>
      <p>Wi-Fi 6E e 5G para latência mínima e transferências instantâneas.</p>
    </div>
    <div class="feature">
      <h3>Segurança Avançada</h3>
      <p>Criptografia de hardware e biometria multifatorial.</p>
    </div>
  </section>

  <!-- PRODUCT SHOWCASE -->
  <section id="products" class="products" aria-label="Produtos">
    <div class="prod-grid">
      <?php for($i=2;$i<=5;$i++): ?>
        <div class="prod">
          <?php if(!empty(${"img$i"})): ?>
            <img src="<?= base_url('lp/'.${"img$i"}) ?>" alt="produto<?=$i?>">
          <?php else: ?>
            <div style="height:160px;background:#f4f6f8;border-radius:8px"></div>
          <?php endif; ?>
          <h4 style="margin:12px 0 6px;color:var(--p)">Produto <?= $i-1 ?></h4>
          <p style="margin:0;color:var(--ts)">Especificações de alto nível e design premium.</p>
        </div>
      <?php endfor; ?>
    </div>
  </section>

  <!-- SUBSCRIBE / FORM (glass) -->
  <section class="subscribe" id="form" aria-label="Assine">
    <div class="glass" role="form">
      <div class="left">
        <h2 style="margin:0 0 8px;color:#fff">Receba Ofertas & Lançamentos</h2>
        <p style="color:rgba(255,255,255,0.85);margin:0 0 8px">Promoções exclusivas direto no seu e-mail.</p>
        <form action="<?= base_url('lp/salvarLead') ?>" method="post" id="leadFormGlass">
          <input type="email" name="email" placeholder="Seu melhor e-mail" required style="display:block;margin-top:12px">
        </form>
      </div>

      <div class="right">
        <button form="leadFormGlass" type="submit" style="background:#fff;color:var(--p);border-radius:10px;padding:12px 18px;font-weight:700">Quero Receber</button>
      </div>
    </div>
  </section>

  <!-- FLOATING WHATSAPP -->
  <a class="whatsapp-float" href="https://wa.me/55SEUNUMERO" target="_blank" aria-label="WhatsApp">
    <img src="<?= base_url('assets/img/whatsapp-circle.png') ?>" alt="wp">
  </a>

  <footer>
    © <?= date('Y') ?> TechPulse — Inovação sem limites.
  </footer>

  <!-- GSAP animations -->
  <script>
    gsap.registerPlugin(ScrollTrigger);

    // intro hero left: stagger in
    gsap.from('.hero-left .hero-title', { y: 30, opacity: 0, duration: .9, ease: 'power3.out' });
    gsap.from('.hero-left .hero-sub', { y: 20, opacity: 0, duration: .9, delay: .12, ease: 'power3.out' });
    gsap.from('.hero-cta .btn-primary', { scale: .92, opacity: 0, duration: .6, delay: .22, ease: 'back.out(1.5)' });
    gsap.from('.hero-cta .btn-outline', { scale: .92, opacity: 0, duration: .6, delay: .28, ease: 'back.out(1.5)' });

    // floating device parallax
    gsap.to('#deviceWrap', {
      y: -20,
      ease: 'sine.inOut',
      scrollTrigger: { trigger: '#deviceWrap', start: 'top center', end: 'bottom top', scrub: .8 }
    });

    // specs band entrance
    gsap.from('#specsBand', { y: 40, opacity: 0, duration: .8, delay: .12, ease: 'power2.out' });

    // feature reveal
    gsap.utils.toArray('.feature').forEach((el, i) => {
      gsap.from(el, {
        y: 30, opacity: 0, duration: .9, delay: i * 0.12,
        scrollTrigger: { trigger: el, start: 'top 80%', toggleActions: 'play none none none' }
      });
    });

    // product cards
    gsap.utils.toArray('.prod').forEach((el,i)=>{
      gsap.from(el,{y:20,opacity:0,duration:.8,delay:i*0.08,scrollTrigger:{trigger:el,start:'top 90%'}});
    });

    // simple CTA pulse
    gsap.to('.btn-primary', { scale: 1.03, repeat: -1, yoyo: true, duration: 2, ease: 'sine.inOut', delay: 2 });

    // form submit UX
    document.getElementById('leadFormGlass').addEventListener('submit', function(e){
      var btn = document.querySelector('.glass button');
      if(btn){ btn.disabled = true; btn.innerText = 'Enviando...' }
    });
  </script>

</body>
</html>
