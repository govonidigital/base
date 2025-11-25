<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>Neon Glass • Tecnologia</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

  <style>
    :root{
      --p: <?= isset($cor_primaria) ? $cor_primaria : '#00e5ff' ?>;
      --s: <?= isset($cor_secundaria) ? $cor_secundaria : '#8a00ff' ?>;
      --tp: <?= isset($cor_texto_primario) ? $cor_texto_primario : '#0b1320' ?>;
      --ts: <?= isset($cor_texto_secundario) ? $cor_texto_secundario : '#8b98a5' ?>;
      --ff: '<?= addslashes(isset($fonte)?$fonte:'Inter') ?>', Inter, system-ui, -apple-system, "Segoe UI", Roboto, Arial;
    }

    *{box-sizing:border-box}
    html,body{height:100%;margin:0;font-family:var(--ff);background:linear-gradient(180deg,#071028 0%, #04060a 60%);color:var(--tp);-webkit-font-smoothing:antialiased}

    a{color:inherit;text-decoration:none}
    .container{width:92%;max-width:1200px;margin:0 auto}

    /* NAV */
    .nav{display:flex;align-items:center;justify-content:space-between;padding:18px 0;color:#fff}
    .brand{font-weight:800;letter-spacing:0.6px;color:var(--p);font-size:20px}
    .nav-links{display:flex;gap:12px;align-items:center}
    .nav-links a{color:rgba(255,255,255,0.85);padding:8px 12px;border-radius:8px}
    .nav-links a.cta{background:linear-gradient(90deg,var(--p),var(--s));color:#021;box-shadow:0 6px 18px rgba(0,0,0,0.45)}

    /* HERO split */
    .hero{display:flex;gap:30px;align-items:center;padding:70px 0;min-height:78vh}
    .hero-left{flex:1;color:#fff}
    .kicker{display:inline-block;padding:6px 12px;border-radius:999px;background:linear-gradient(90deg,rgba(255,255,255,0.06),rgba(255,255,255,0.02));color:var(--p);font-weight:700;margin-bottom:14px}
    .hero-title{font-size:clamp(28px,6vw,56px);line-height:1.02;margin:8px 0 14px;font-weight:800}
    .hero-sub{color:rgba(255,255,255,0.85);max-width:56ch;margin-bottom:20px}
    .hero-cta{display:flex;gap:12px;flex-wrap:wrap}

    /* GLASS PANEL */
    .glass {
      backdrop-filter: blur(10px) saturate(140%);
      -webkit-backdrop-filter: blur(10px) saturate(140%);
      background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(255,255,255,0.02));
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: 16px;
      padding: 18px;
      color: #fff;
      box-shadow: 0 10px 30px rgba(0,0,0,0.5), inset 0 1px 0 rgba(255,255,255,0.02);
    }

    .lead-form{display:flex;gap:10px;align-items:center}
    .lead-form input{flex:1;padding:12px;border-radius:10px;border:none;background:rgba(255,255,255,0.06);color:#fff}
    .lead-form button{padding:12px 18px;border-radius:10px;border:none;background:linear-gradient(90deg,var(--p),var(--s));color:#021;font-weight:800;cursor:pointer}

    /* HERO VISUAL */
    .hero-right{flex:1;display:flex;align-items:center;justify-content:center;position:relative}
    .visual-card{width:92%;max-width:520px;height:480px;border-radius:22px;overflow:hidden;position:relative;background:linear-gradient(135deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));box-shadow: 0 30px 80px rgba(6,10,20,0.7);border:1px solid rgba(255,255,255,0.04)}
    .visual-card img{width:100%;height:100%;object-fit:cover;display:block}
    .neon-outline{position:absolute;inset:0;border-radius:22px;pointer-events:none;box-shadow: 0 0 28px var(--p), inset 0 0 48px var(--s);mix-blend-mode:screen;opacity:0.9}
    .floating-badge{position:absolute;right:18px;top:18px;background:linear-gradient(90deg,var(--p),var(--s));padding:10px 14px;border-radius:12px;color:#021;font-weight:800;box-shadow:0 10px 30px rgba(0,0,0,0.4)}

    /* FEATURES grid neon */
    .features{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:18px;padding:48px 0}
    .fcard{padding:18px;border-radius:12px;background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));border:1px solid rgba(255,255,255,0.03);color:#fff;min-height:120px}
    .fcard h4{color:var(--p);margin:0 0 6px}
    .fcard p{margin:0;color:rgba(255,255,255,0.82)}

    /* PRODUCT CARDS - glass with neon accent */
    .products{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px;padding:28px 0}
    .pcard{border-radius:12px;padding:16px;background:linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01));border:1px solid rgba(255,255,255,0.04);text-align:center;color:#fff;transition:transform .28s}
    .pcard:hover{transform:translateY(-10px);box-shadow:0 30px 60px rgba(0,0,0,0.6)}
    .pcard img{height:160px;object-fit:contain;width:100%;margin-bottom:12px}
    .price{display:inline-block;padding:8px 12px;border-radius:999px;background:linear-gradient(90deg,var(--p),var(--s));color:#021;font-weight:800}

    /* FOOTER */
    footer{padding:28px 0;color:rgba(255,255,255,0.7);text-align:center}

    /* WHATSAPP */
    .whatsapp{position:fixed;right:20px;bottom:20px;width:64px;height:64px;border-radius:50%;background:linear-gradient(90deg,#25D366,#14C875);display:flex;align-items:center;justify-content:center;box-shadow:0 10px 30px rgba(0,0,0,0.5);z-index:999}
    .whatsapp img{width:34px;height:34px}

    @media(max-width:920px){
      .hero{flex-direction:column;padding:40px 0}
      .visual-card{height:360px;width:92%}
    }
  </style>
</head>
<body>

  <div class="container">
    <nav class="nav">
      <div class="brand">NeonTech</div>
      <div class="nav-links">
        <a href="#products">Produtos</a>
        <a href="#features">Diferenciais</a>
        <a href="#form" class="cta">Receber Oferta</a>
      </div>
    </nav>

    <main class="hero" role="main">
      <div class="hero-left">
        <span class="kicker">NOVO</span>
        <h1 class="hero-title">Dispositivos que acendem o futuro</h1>
        <p class="hero-sub">Design arrojado, performance sem concessões e bateria inteligente. Linha premium com ofertas limitadas.</p>

        <div style="margin-bottom:16px">
          <div class="glass" style="max-width:680px">
            <form class="lead-form" action="<?= base_url('lp/salvarLead') ?>" method="post">
              <input name="nome" placeholder="Seu nome" required>
              <input name="email" type="email" placeholder="Seu melhor e-mail" required>
              <button type="submit">Quero Receber</button>
            </form>
          </div>
        </div>

        <div class="hero-cta">
          <a class="nav-links cta" href="#products">Ver Produtos</a>
          <a class="nav-links" href="https://wa.me/55SEUNUMERO" target="_blank" style="background:rgba(255,255,255,0.03);padding:10px 12px;border-radius:10px">Falar no WhatsApp</a>
        </div>
      </div>

      <div class="hero-right" aria-hidden="true">
        <div class="visual-card">
          <?php if(!empty($img1)): ?>
            <img src="<?= base_url('lp/'.$img1) ?>" alt="destaque">
          <?php else: ?>
            <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,0.5)">Adicione img1</div>
          <?php endif; ?>
          <div class="neon-outline"></div>

          <div class="floating-badge">Limited Edition</div>
        </div>
      </div>
    </main>

    <section id="features" class="features">
      <div class="fcard">
        <h4>Performance Neural</h4>
        <p>Processadores com capacidade de realizar tarefas de IA local com latência mínima.</p>
      </div>
      <div class="fcard">
        <h4>Bateria Inteligente</h4>
        <p>Gerenciamento adaptativo que prolonga a vida útil real da bateria.</p>
      </div>
      <div class="fcard">
        <h4>Som Imersivo</h4>
        <p>Áudio espacial com certificação para conteúdo de alta resolução.</p>
      </div>
      <div class="fcard">
        <h4>Conectividade 5G/6G</h4>
        <p>Pronto para redes ultrarrápidas e baixa latência.</p>
      </div>
    </section>

    <section id="products" class="products">
      <?php for($i=2;$i<=5;$i++): ?>
        <div class="pcard">
          <?php if(!empty(${"img$i"})): ?>
            <img src="<?= base_url('lp/'.${"img$i"}) ?>" alt="prod<?=$i?>">
          <?php else: ?>
            <div style="height:160px;background:rgba(255,255,255,0.02);border-radius:8px"></div>
          <?php endif; ?>
          <h3 style="margin:10px 0 6px">Produto <?= $i-1 ?></h3>
          <p style="margin:0 0 10px;color:var(--ts)">Especificações top e design premium</p>
          <div class="price">R$ 2.499</div>
        </div>
      <?php endfor; ?>
    </section>

    <section class="subscribe" id="form">
      <div class="glass" style="margin-bottom:40px">
        <div class="left" style="flex:1">
          <h3 style="margin:0 0 6px;color:#fff">Quer receber novidades exclusivas?</h3>
          <p style="margin:0;color:rgba(255,255,255,0.8)">Promoções, lançamentos e early-access para produtos limitados.</p>
        </div>

        <div class="right" style="display:flex;align-items:center;justify-content:flex-end">
          <form id="leadMini" action="<?= base_url('lp/salvarLead') ?>" method="post" style="display:flex;gap:8px">
            <input type="email" name="email" placeholder="Seu e-mail" required style="width:260px;padding:10px;border-radius:8px;border:none;background:rgba(255,255,255,0.03);color:#fff">
            <button type="submit" style="padding:10px 14px;border-radius:8px;border:none;background:linear-gradient(90deg,var(--p),var(--s));color:#021;font-weight:800">Quero</button>
          </form>
        </div>
      </div>
    </section>

    <footer>
      © <?= date('Y') ?> NeonTech • Inovação & Performance
    </footer>
  </div>

  <a class="whatsapp" href="https://wa.me/55SEUNUMERO" target="_blank" aria-label="WhatsApp">
    <img src="<?= base_url('assets/img/whatsapp-circle.png') ?>" alt="wp">
  </a>

  <!-- small entrance animations (no external libs) -->
  <script>
    (function(){
      document.querySelectorAll('.fcard, .pcard').forEach((el,i)=>{ el.style.opacity=0; el.style.transform='translateY(18px)'; setTimeout(()=>{ el.style.transition='all .6s cubic-bezier(.2,.9,.3,1)'; el.style.opacity=1; el.style.transform='translateY(0)'; }, 120 + i*80) });
      // floating visual subtle tilt
      const card = document.querySelector('.visual-card');
      if(card){
        let pos=0;
        setInterval(()=>{ pos = (pos+1)%360; card.style.transform = 'rotateY(' + (Math.sin(pos*Math.PI/180)*4) + 'deg) translateY(' + (Math.cos(pos*Math.PI/180)*3) + 'px)'; }, 2800);
      }
      // disable submit double-click
      document.querySelectorAll('form').forEach(f=>f.addEventListener('submit', function(){ const btn=this.querySelector('button'); if(btn){ btn.disabled=true; btn.innerText='Enviando...'; } }));
    })();
  </script>
</body>
</html>
