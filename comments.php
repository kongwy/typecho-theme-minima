<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php 
switch ($this->options->commentMode) {
    case 'default':
        $this->need('partial/comments/default.php');
        break;
    case 'disqus':
        $this->need('partial/comments/disqus.php');
        break;
}
?>
