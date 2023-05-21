<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

                    <?php $this->need('partial/footer.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php $this->options->themeUrl('source/js/nanobar.min.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-core.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>
    <script>
        var options = {
            classname: 'nanobar',
            id: 'myNanobar'
        };
        var nanobar = new Nanobar(options);
        nanobar.go(30);
        nanobar.go(76);
        nanobar.go(100);
    </script>

    <!-- User Custom Header Code -->
    <?php $this->options->footerCode(); ?>
</body>

</html>
