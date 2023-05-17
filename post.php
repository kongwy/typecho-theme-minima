<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

<h2><?php $this->title(); ?></h2>

<?php $this->content(); ?>
<p><?php $this->tags(', ', true, 'none'); ?> — <?php $this->date(); ?></p>
<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
