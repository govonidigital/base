
    document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener("scroll", function() {
        let header = document.querySelector('header');
        if (header) {
            header.classList.toggle('rolagem', window.scrollY > 0);
        }
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    let btnMenu = document.getElementById('btn-menu');
    let menu = document.getElementById('menu-mobile');
    let overlay = document.getElementById('overlay-menu');

    if (btnMenu && menu && overlay) {
        btnMenu.addEventListener('click', () => {
            menu.classList.add('abrir-menu');
            overlay.style.display = 'block';
        });

        document.querySelector('.btn-fechar').addEventListener('click', () => {
            menu.classList.remove('abrir-menu');
            overlay.style.display = 'none';
        });

        overlay.addEventListener('click', () => {
            menu.classList.remove('abrir-menu');
            overlay.style.display = 'none';
        });
    } else {
        console.error("One or more elements not found: btnMenu, menu, overlay");
    }
});

