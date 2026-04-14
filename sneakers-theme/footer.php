<footer class="site-footer">
    <div class="container">
        <p>© <?php echo date('Y'); ?> Sneakers Shop</p>
    </div>
</footer>

<?php wp_footer(); ?>
<script>
const btn = document.getElementById('theme-toggle');

btn.addEventListener('click', () => {
    document.body.classList.toggle('light-mode');

    if(document.body.classList.contains('light-mode')) {
        btn.textContent = '☀️';
    } else {
        btn.textContent = '🌙';
    }
});
</script>
</body>
</html>