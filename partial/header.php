<div class="row">
    <div class="two columns" style="max-width: 50px">
        <h1 class="mt-2 mode">
            <div onclick=setDarkMode(true) id="darkBtn">🌑</div>
            <div onclick=setDarkMode(false) id="lightBtn" class=hidden>☀️</div>
            <script >
                if (localStorage.getItem('preferredTheme') == 'dark') {
                    setDarkMode(true)
                }
                function setDarkMode(isDark) {
                    var darkBtn = document.getElementById('darkBtn')
                    var lightBtn = document.getElementById('lightBtn')
                    if (isDark) {
                        lightBtn.style.display = "block"
                        darkBtn.style.display = "none"
                        localStorage.setItem('preferredTheme', 'dark');
                    } else {
                        lightBtn.style.display = "none"
                        darkBtn.style.display = "block"
                        localStorage.removeItem('preferredTheme');
                    }
                    document.body.classList.toggle("darkmode");
                }
            </script>
        </h1>
    </div>
    
    <div class="six columns ml-1">
        <h1 class="mt-2">
            <?php $this->options->title(); ?>
        </h1>
    </div>
    
    <div class="twelve columns">
        <div class="row">
            <div class="nine columns left">
                <a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
                <?php while ($pages->next()): ?>
                    <a href="<?php $pages->permalink(); ?>" class="ml"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
                <?php if ($this->options->email): ?>
                    <a href="mailto:<?php $this->options->email(); ?>" target="_blank" class="ml">Email</a>
                <?php endif; ?>
            </div>
        </div>
        <hr style="margin-bottom: 2.6rem">
    </div>
</div>
