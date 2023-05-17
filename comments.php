<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<section id="comments" class="mt-2 mb-3">
    <?php if ($this->allow('comment')): ?>
        <div id="disqus_thread">
            <a href="#" class="button button-primary" onclick="loadDisqus();return false;">View / Make Comments</a>
        </div>

        <script>
            var disqus_config = function() {
                this.page.url = '<?php $this->permalink(); ?>';
                this.page.identifier = '<?php $this->cid(); ?>';
                this.page.title = '<?php $this->title(); ?>';
            };

            var is_disqus_loaded = false;

            function loadDisqus() {
                if (!is_disqus_loaded) {
                    is_disqus_loaded = true;

                    var d = document,
                        s = d.createElement('script');
                    s.src = 'https://<?php $this->options->disqus(); ?>.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                }
            }
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <?php endif; ?>
</section>
