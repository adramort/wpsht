            </div>
        </section>
        <footer class="footer">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) : endif; ?>
            <?php wp_footer(); ?>
        </footer>
    </div>
</body>
</html>