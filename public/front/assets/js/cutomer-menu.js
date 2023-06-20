
    var menu = document.querySelector('.customer-menu');
    var menuToggle = document.getElementById('customer-menu-toggle');
    var backdrop = document.querySelector('.backdrop');
    menuToggle.addEventListener('change', function() {
        menu.style.display = this.checked ? 'block' : 'none';
        backdrop.style.display = this.checked ? 'block' : 'none';
    });
    backdrop.addEventListener('click', function() {
    menu.style.display = 'none';
    menuToggle.checked = false;
    document.body.style.boxShadow = 'none';
    backdrop.style.display = 'none';
});
