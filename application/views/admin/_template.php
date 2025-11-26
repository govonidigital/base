<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="title" content="<?php if (isset($seo_title)){echo $seo_title;}?>"/>
    <meta name="description" content="<?php if (isset($seo_description)){echo $seo_description;}?>"/>
    <meta name="Keywords" content="<?php if (isset($seo_keywords)){echo $seo_keywords;}?>" />
    <meta name="language" content="pt-BR" />
    <meta name="target_country" content="br" />
    <meta name="rating" content="general"/>
    <meta name="robots" content="index,follow"/>
    <meta name="revisit-after" content="1 days"/>
    <meta name="author" content="Felipe Govoni" />
    <meta name="reply-to" content="contato@govoni.com.br"/>
    <title><?php if (isset($seo_title)){echo $seo_title;}?></title>
    
    <!-- Bootstrap 4.6 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 260px;
            background: #2c3e50;
            overflow-y: auto;
            overflow-x: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        /* Sidebar Minimizado (Desktop) */
        .sidebar.minimized {
            width: 70px;
        }

        .sidebar.minimized .sidebar-logo img {
            max-width: 40px;
        }

        .sidebar.minimized .sidebar-logo h4 {
            display: none;
        }

        .sidebar.minimized .sidebar-menu > li > a {
            padding: 15px 10px;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
        }

        .sidebar.minimized .sidebar-menu > li > a span {
            display: none;
        }

        .sidebar.minimized .sidebar-menu > li > a i {
            margin-right: 0;
            font-size: 1.3rem;
        }

        .sidebar.minimized .sidebar-menu .dropdown-toggle::after {
            display: none;
        }

        .sidebar-logo {
            padding: 20px;
            text-align: center;
            background: #1a252f;
            border-bottom: 1px solid #34495e;
            transition: all 0.3s ease;
        }

        .sidebar-logo img {
            max-width: 150px;
            height: auto;
            transition: all 0.3s ease;
        }

        .sidebar-logo h4 {
            color: #fff;
            margin: 10px 0 0 0;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        /* Menu Vertical */
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu > li {
            border-bottom: 1px solid #34495e;
            position: relative;
        }

        .sidebar-menu a {
            display: block;
            padding: 15px 20px;
            color: #ecf0f1;
            text-decoration: none;
            transition: all 0.2s;
            position: relative;
        }

        .sidebar-menu a:hover {
            background: #34495e;
            color: #fff;
            padding-left: 25px;
        }

        .sidebar.minimized .sidebar-menu a:hover {
            padding-left: 10px;
        }

        .sidebar-menu a i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
            transition: all 0.3s ease;
        }

        /* Dropdown Menu */
        .sidebar-menu .dropdown-toggle::after {
            float: right;
            margin-top: 5px;
            transition: all 0.3s ease;
        }

        .sidebar-menu .submenu {
            list-style: none;
            padding: 0;
            margin: 0;
            background: #1a252f;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .sidebar-menu .submenu.show {
            max-height: 500px;
            transition: max-height 0.3s ease-in;
        }

        .sidebar-menu .submenu a {
            padding: 12px 20px 12px 50px;
            font-size: 0.9rem;
            border-bottom: 1px solid #2c3e50;
        }

        /* Submenu Nível 2 */
        .sidebar-menu .submenu .submenu a {
            padding-left: 70px;
            font-size: 0.85rem;
        }

        /* ============================================ */
        /* POPUP LATERAL PARA MENU MINIMIZADO */
        /* ============================================ */
        
        /* Popup Container */
        .sidebar.minimized .sidebar-menu > li > .submenu {
            position: fixed;
            left: 70px;
            background: #2c3e50;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            border-radius: 0 4px 4px 0;
            max-height: none;
            overflow: visible;
            display: none;
            z-index: 1002;
            min-width: 220px;
            padding: 10px 0;
        }

        /* Mostrar popup quando ativo */
        .sidebar.minimized .sidebar-menu > li > .submenu.active-popup {
            display: block !important;
        }

        /* Ajustar itens do submenu no popup */
        .sidebar.minimized .sidebar-menu .submenu a {
            padding: 12px 20px;
            text-align: left;
            font-size: 0.9rem;
            white-space: nowrap;
        }

        .sidebar.minimized .sidebar-menu .submenu a span {
            display: inline;
        }

        .sidebar.minimized .sidebar-menu .submenu a i {
            margin-right: 10px;
            font-size: 1rem;
        }

        /* Indicador visual do item ativo no menu minimizado */
        .sidebar.minimized .sidebar-menu > li.has-active-popup > a {
            background: #34495e;
        }

        /* Submenu Nível 2 no modo minimizado */
        .sidebar.minimized .sidebar-menu .submenu .submenu {
            position: absolute;
            left: 100%;
            top: 0;
            background: #34495e;
            display: none;
            margin-left: 0;
            padding: 10px 0;
        }

        .sidebar.minimized .sidebar-menu .submenu .submenu.active-popup {
            display: block !important;
        }

        .sidebar.minimized .sidebar-menu .submenu li {
            position: relative;
        }

        /* Tooltip para itens sem submenu no modo minimizado */
        .sidebar.minimized .sidebar-menu > li > a:not(.dropdown-toggle)::after {
            content: attr(data-title);
            position: absolute;
            left: 70px;
            top: 50%;
            transform: translateY(-50%);
            background: #2c3e50;
            color: #fff;
            padding: 8px 15px;
            border-radius: 4px;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s;
            z-index: 1001;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }

        .sidebar.minimized .sidebar-menu > li > a:not(.dropdown-toggle):hover::after {
            opacity: 1;
        }

        /* Top Navbar */
        .top-navbar {
            position: fixed;
            top: 0;
            left: 260px;
            right: 0;
            height: 60px;
            background: #fff;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            z-index: 999;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: left 0.3s ease;
        }

        .sidebar.minimized ~ .top-navbar {
            left: 70px;
        }

        .top-navbar-left {
            display: flex;
            align-items: center;
        }

        .menu-toggle {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #2c3e50;
            cursor: pointer;
            margin-right: 15px;
            transition: all 0.2s;
        }

        .menu-toggle:hover {
            color: #3498db;
        }

        .top-navbar-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .top-shortcuts a {
            color: #2c3e50;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s;
            font-size: 0.95rem;
        }

        .top-shortcuts a:hover {
            background: #f8f9fa;
        }

        .top-shortcuts a i {
            margin-right: 5px;
        }

        /* User Dropdown */
        .user-menu .dropdown-toggle {
            background: none;
            border: none;
            color: #2c3e50;
            font-size: 0.95rem;
            padding: 5px 10px;
            cursor: pointer;
        }

        .user-menu .dropdown-toggle:hover {
            background: #f8f9fa;
            border-radius: 5px;
        }

        .user-menu .dropdown-toggle::after {
            margin-left: 8px;
        }

        .user-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin-right: 8px;
            background: #3498db;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: bold;
        }

        /* Atalhos no dropdown (mobile apenas) */
        .mobile-shortcuts {
            display: none;
        }

        /* Main Content */
        .main-content {
            margin-left: 260px;
            margin-top: 60px;
            padding: 30px;
            min-height: calc(100vh - 60px);
            background: #f8f9fa;
            transition: margin-left 0.3s ease;
        }

        .sidebar.minimized ~ * .main-content,
        .sidebar.minimized ~ .main-content {
            margin-left: 70px;
        }

        /* Scrollbar Sidebar */
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: #1a252f;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: #34495e;
            border-radius: 3px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: #4a5f7f;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                left: -260px;
            }

            .sidebar.active {
                left: 0;
            }

            /* No mobile, não aplicar o estilo minimizado */
            .sidebar.minimized {
                width: 260px;
                left: -260px;
            }

            .sidebar.minimized.active {
                left: 0;
            }

            .sidebar.minimized .sidebar-logo img {
                max-width: 150px;
            }

            .sidebar.minimized .sidebar-logo h4 {
                display: block;
            }

            .sidebar.minimized .sidebar-menu > li > a span {
                display: inline;
            }

            .sidebar.minimized .sidebar-menu > li > a i {
                margin-right: 10px;
                font-size: 1rem;
            }

            .sidebar.minimized .sidebar-menu > li > a {
                text-align: left;
                padding: 15px 20px;
            }

            .sidebar.minimized .sidebar-menu .dropdown-toggle::after {
                display: block;
            }

            /* Restaura comportamento normal dos submenus no mobile */
            .sidebar.minimized .sidebar-menu > li > .submenu {
                position: static;
                width: auto;
                box-shadow: none;
                border-radius: 0;
                display: block;
                min-width: auto;
            }

            .sidebar.minimized .sidebar-menu .submenu.show {
                max-height: 500px;
            }

            .sidebar.minimized .sidebar-menu > li > a::after {
                display: none;
            }

            .top-navbar {
                left: 0;
            }

            .sidebar.minimized ~ .top-navbar {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar.minimized ~ * .main-content,
            .sidebar.minimized ~ .main-content {
                margin-left: 0;
            }

            /* Esconde os atalhos da barra superior */
            .top-shortcuts {
                display: none !important;
            }

            /* Mostra os atalhos dentro do dropdown */
            .mobile-shortcuts {
                display: block !important;
            }

            /* Ajusta o dropdown do usuário no mobile */
            .user-menu .dropdown-menu {
                min-width: 250px;
            }
        }

        /* Card Styles */
        .content-card {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .content-card h5 {
            color: #2c3e50;
            margin-bottom: 15px;
            font-weight: 600;
        }

        /* Estilo para separador no dropdown */
        .dropdown-header {
            font-size: 0.85rem;
            font-weight: 600;
            color: #6c757d;
            padding: 0.5rem 1.5rem;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
        <!-- Logo -->
        <div class="sidebar-logo">
            <!-- Substitua pelo seu logo -->
            <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-fluid">
            <!-- Ou use apenas texto -->
            <!-- <h4>Admin Panel</h4> -->
        </div>

        <!-- Menu Vertical -->
        <ul class="sidebar-menu">



            <li><a href="<?php echo base_url('admin/principal'); ?>"><i class="fas fa-home"></i> <span>Principal</span></a></li>
            <li><a href="<?php echo base_url('admin/galeria'); ?>"><i class="fas fa-images"></i> <span>Galeria</span></a></li>
            <li><a href="<?php echo base_url('admin/banners'); ?>"><i class="fas fa-image"></i> <span>Banners</span></a></li>
            <li><a href="<?php echo base_url('admin/blog'); ?>"><i class="fas fa-blog"></i> <span>Blog</span></a></li>
            <li><a href="<?php echo base_url('admin/leads'); ?>"><i class="fas fa-users"></i> <span>Leads</span></a></li>

            <li><a href="<?php echo base_url('admin/layout'); ?>"><i class="fas fa-cog"></i> <span>Layout</span></a></li>
            <li><a href="<?php echo base_url('admin/codigos'); ?>"><i class="fas fa-code"></i> <span>Codigo</span></a></li>
            <li><a href="<?php echo base_url('admin/email'); ?>"><i class="fas fa-envelope"></i> <span>Email</span></a></li>
            <li><a href="<?php echo base_url('admin/usuarios'); ?>"><i class="fas fa-user"></i> <span>Usuários</span></a></li>
            <li><a href="<?php echo base_url('principal'); ?>"><i class="fas fa-sign-out-alt"></i> <span>Sair</span></a></li>












            
            <!-- Menu com Dropdown Nível 1
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#menu1" data-title="Usuários">
                    <i class="fas fa-users"></i> <span>Usuários</span>
                </a>
                <ul class="submenu collapse" id="menu1">
                    <li><a href="#"><i class="fas fa-list"></i> <span>Listar Todos</span></a></li>
                    <li><a href="#"><i class="fas fa-plus"></i> <span>Adicionar Novo</span></a></li>
                    <li><a href="#"><i class="fas fa-user-tag"></i> <span>Perfis</span></a></li>
                </ul>
            </li>

            

             
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#menu3" data-title="Estoque">
                    <i class="fas fa-box"></i> <span>Estoque</span>
                </a>
                <ul class="submenu collapse" id="menu3">
                    <li><a href="#"><i class="fas fa-warehouse"></i> <span>Inventário</span></a></li>
                    <li><a href="#"><i class="fas fa-exchange-alt"></i> <span>Movimentações</span></a></li>
                    
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#submenu3-1">
                            <i class="fas fa-chart-line"></i> <span>Relatórios</span>
                        </a>
                        <ul class="submenu collapse" id="submenu3-1">
                            <li><a href="#"><i class="fas fa-file-alt"></i> <span>Entrada/Saída</span></a></li>
                            <li><a href="#"><i class="fas fa-file-excel"></i> <span>Exportar Dados</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            

            <li>
                <a href="#" data-title="Configurações"><i class="fas fa-cog"></i> <span>Configurações</span></a>
            </li>

            <li>
                <a href="#" data-title="Ajuda"><i class="fas fa-question-circle"></i> <span>Ajuda</span></a>
            </li>-->
        </ul>
    </nav>

    <!-- Top Navbar -->
    <nav class="top-navbar">
        <div class="top-navbar-left">
            <button class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <div class="top-navbar-right">
            <!--
            <div class="top-shortcuts">
                <a href="#"><i class="fas fa-plus"></i> Novo</a>
                <a href="#"><i class="fas fa-bell"></i> Notificações</a>
                <a href="#"><i class="fas fa-envelope"></i> Mensagens</a>
            </div>

            
            <div class="user-menu dropdown">
                <button class="dropdown-toggle" data-toggle="dropdown">
                    <span class="user-avatar">JD</span>
                    <span>João Silva</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    
                    <div class="mobile-shortcuts">
                        <h6 class="dropdown-header">Atalhos Rápidos</h6>
                        <a class="dropdown-item" href="#"><i class="fas fa-plus"></i> Novo</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-bell"></i> Notificações</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-envelope"></i> Mensagens</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Conta</h6>
                    </div>
                    
                    
                    <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Meu Perfil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Sair</a>
                </div>
            </div>-->
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container-fluid">
            
            <?php echo $contents; ?>


        </div>
    </main>

    <!-- jQuery 3.6 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap 4.6 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Toggle Menu - Comportamento diferente para Desktop e Mobile
        document.getElementById('menuToggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const windowWidth = window.innerWidth;
            
            if (windowWidth > 768) {
                // Desktop: Minimiza/Expande o menu
                sidebar.classList.toggle('minimized');
                
                // Fecha todos os submenus quando minimizar
                if (sidebar.classList.contains('minimized')) {
                    $('.sidebar-menu .submenu').removeClass('show');
                    $('.sidebar-menu .submenu').removeClass('active-popup');
                    $('.sidebar-menu > li').removeClass('has-active-popup');
                }
            } else {
                // Mobile: Abre/Fecha o menu (comportamento atual)
                sidebar.classList.toggle('active');
            }
        });

        // ============================================
        // SISTEMA DE POPUP LATERAL POR CLIQUE
        // ============================================
        
        $(document).ready(function() {
            const sidebar = $('#sidebar');
            
            // Clique nos itens com dropdown quando o menu está minimizado
            $('.sidebar-menu > li > .dropdown-toggle').on('click', function(e) {
                const windowWidth = window.innerWidth;
                
                // Apenas ativar popup no desktop quando minimizado
                if (windowWidth > 768 && sidebar.hasClass('minimized')) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const $parentLi = $(this).parent('li');
                    const $submenu = $(this).next('.submenu');
                    const isActive = $submenu.hasClass('active-popup');
                    
                    // Fecha todos os outros popups
                    $('.sidebar-menu .submenu').removeClass('active-popup');
                    $('.sidebar-menu > li').removeClass('has-active-popup');
                    
                    // Toggle do popup atual
                    if (!isActive) {
                        $submenu.addClass('active-popup');
                        $parentLi.addClass('has-active-popup');
                        
                        // Posicionar o popup verticalmente alinhado com o item
                        const itemTop = $parentLi.offset().top;
                        $submenu.css('top', itemTop + 'px');
                    }
                }
                // No modo expandido ou mobile, usar comportamento padrão do Bootstrap
            });
            
            // Clique nos submenus nível 2 quando minimizado
            $('.sidebar-menu .submenu .dropdown-toggle').on('click', function(e) {
                const windowWidth = window.innerWidth;
                
                if (windowWidth > 768 && sidebar.hasClass('minimized')) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const $parentLi = $(this).parent('li');
                    const $submenu = $(this).next('.submenu');
                    const isActive = $submenu.hasClass('active-popup');
                    
                    // Fecha outros submenus do mesmo nível
                    $parentLi.siblings().find('.submenu').removeClass('active-popup');
                    
                    // Toggle do submenu atual
                    if (!isActive) {
                        $submenu.addClass('active-popup');
                        
                        // Posicionar o submenu nível 2
                        const itemTop = $parentLi.position().top;
                        $submenu.css('top', itemTop + 'px');
                    } else {
                        $submenu.removeClass('active-popup');
                    }
                }
            });
            
            // Fechar popups ao clicar fora
            $(document).on('click', function(e) {
                const windowWidth = window.innerWidth;
                
                if (windowWidth > 768 && sidebar.hasClass('minimized')) {
                    if (!$(e.target).closest('.sidebar-menu').length) {
                        $('.sidebar-menu .submenu').removeClass('active-popup');
                        $('.sidebar-menu > li').removeClass('has-active-popup');
                    }
                }
            });
            
            // Fechar popups ao redimensionar a janela
            $(window).on('resize', function() {
                const windowWidth = window.innerWidth;
                
                if (windowWidth <= 768 || !sidebar.hasClass('minimized')) {
                    $('.sidebar-menu .submenu').removeClass('active-popup');
                    $('.sidebar-menu > li').removeClass('has-active-popup');
                }
            });
        });

        // Fechar sidebar ao clicar fora (mobile apenas)
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const menuToggle = document.getElementById('menuToggle');
            
            if (window.innerWidth <= 768) {
                if (!sidebar.contains(event.target) && !menuToggle.contains(event.target)) {
                    sidebar.classList.remove('active');
                }
            }
        });

        // Prevenir que o menu minimize quando estiver no mobile e redimensionar para desktop
        window.addEventListener('resize', function() {
            const sidebar = document.getElementById('sidebar');
            const windowWidth = window.innerWidth;
            
            if (windowWidth <= 768) {
                // No mobile, remove a classe minimized se existir
                sidebar.classList.remove('minimized');
            } else {
                // No desktop, remove a classe active do mobile
                sidebar.classList.remove('active');
            }
        });

        // Smooth scroll para links internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#' && document.querySelector(href)) {
                    e.preventDefault();
                    document.querySelector(href).scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

</body>
</html>



