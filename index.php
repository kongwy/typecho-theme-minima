<?php
/**
 * Minima is an undoubtedly simple and lightweight dark/light theme.
 * Original from Hexo by <a href="https://github.com/adisaktijrs/hexo-theme-minima">Adi Sakti Jrs</a>. 
 * Ported to Typecho by <a href="https://github.com/kongwy/typecho-theme-minima">Davis Kong</a>.
 * 
 * @package Minima
 * @author Davis Kong
 * @version 2.0-1
 * @link https://github.com/kongwy/typecho-theme-minima
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<?php if ($this->getCurrentPage() == 1): ?>
    <div class="row">
        <div class="column">
            <!-- Main information, edit it on theme config -->
            <?php if ($this->options->owner): ?>
                <h2 class="mb-2"><?php $this->options->owner(); ?></h2>
            <?php endif; ?>
            <?php if ($this->options->info): ?>
                <p><?php $this->options->info(); ?></p>
            <?php endif; ?>
            <?php if ($this->options->desc): ?>
                <p><?php $this->options->desc(); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <h3><?php _e('Recent Posts'); ?></h3>
<?php else: ?>
    <h3><?php _e('Previous Posts'); ?></h3>
<?php endif; ?>

<?php while ($this->next()): ?>
    <div class="row">
        <div class="three columns left lit">
            <p class="bottom"><?php $this->date(); ?></p>
        </div>
        <div class="nine columns left mb-3">
            <a href="<?php $this->permalink(); ?>" >
                <?php if (empty($this->title)): ?>
                    <?php _e('untitled'); ?>
                <?php else: ?>
                    <?php $this->title(); ?>
                <?php endif; ?>
            </a>
        </div>
    </div>
<?php endwhile; ?>

<?php $this->need('partial/pagination.php'); ?>

<?php $this->need('footer.php'); ?>
