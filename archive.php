<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

<h2>
    <?php $this->archiveTitle([
        'category' => _t('Posts Categorized as — %s'),
        'search'   => _t('Posts Found with — %s'),
        'tag'      => _t('Posts Related to — %s'),
        'author'   => _t('Posts Written by — %s')
    ], ''); ?>
</h2>

<?php if ($this->have()): ?>
    <?php while ($this->next()): ?>
        <article>
            <div class="row">
                <div class="three columns left lit">
                    <p class="bottom"><?php $this->date(); ?></p>
                </div>
                <div class="nine columns left mb-3">
                    <a href="<?php $this->permalink(); ?>" class="">
                        <?php if (empty($this->title)): ?>
                            <?php _e('untitled'); ?>
                        <?php else: ?>
                            <?php $this->title(); ?>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
<?php else: ?>
    <article>
        <p class="bottom"><?php _e('没有找到内容'); ?></p>
    </article>
<?php endif; ?>

<?php $this->need('partial/pagination.php'); ?>

<?php $this->need('footer.php'); ?>
