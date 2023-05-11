<script src="/front/assets/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="/front/assets/js/bootstrap.bundle.min.js"></script>

<!-- Owl Carousel JS -->
<script src="/front/assets/js/owl.carousel.min.js"></script>

<!-- Slick JS -->
<script src="/front/assets/js/slick.js"></script>

<!-- Feather Icon JS -->
<script src="/front/assets/js/feather.min.js"></script>

<!-- Animation JS -->
<script src="/front/assets/js/aos.js"></script>

<!-- Custom JS -->
<script src="/front/assets/js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.60/inputmask/jquery.inputmask.js"></script>
<script>
    document.getElementById('phone').addEventListener('input', function(event) {
        var inputValue = event.target.value;

        // İlk karakter 0 ise, input değerini sadece "-" ile değiştir
        if (inputValue.charAt(0) === '0') {
            event.target.value = '-'.repeat(inputValue.length);
        }
    });
</script>
@yield('scripts')
