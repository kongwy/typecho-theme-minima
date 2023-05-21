<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

<h2><?php $this->title(); ?></h2>

<div class="line-numbers">
<?php $this->content(); ?>
</div>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
