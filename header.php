<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE html>
<html lang="<?php $this->options->lang(); ?>">

<head>
    <!-- Basic Page Needs -->
    <meta charset="<?php $this->options->charset(); ?>">

    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>

    <meta name="keywords" content="<?php $this->options->keywords(); ?>">
    <?php if ($this->is('post') || $this->is('page') || $this->is('author')): ?>
        <meta name="author" content="<?php $this->author(); ?>">
    <?php endif; ?>

    <?php if (in_array('SocialPreviewMeta', $this->options->socialMetaToogle)): ?>
        <!-- Open Graph / Twitter Card -->
        <meta property="og:image" content="<?php $this->options->themeUrl('source/images/thumbnail.jpg'); ?>">
        <meta property="og:site_name" content="<?php $this->options->title(); ?>" />
        <meta property="og:type" content="<?php echo(($this->is('post') || $this->is('page')) ? 'article' : 'website'); ?>" />
        <meta property="og:title" content="<?php $this->archiveTitle([
                'category' => _t('分类 %s 下的文章'),
                'search'   => _t('包含关键字 %s 的文章'),
                'tag'      => _t('标签 %s 下的文章'),
                'author'   => _t('%s 发布的文章')
            ], '', ' - '); ?><?php $this->options->title(); ?>" />

        <meta name="twitter:card" content="<?php $this->options->twitterCardType() ?>">
        <meta name="twitter:site" content="<?php $this->archiveTitle([
                'category' => _t('分类 %s 下的文章'),
                'search'   => _t('包含关键字 %s 的文章'),
                'tag'      => _t('标签 %s 下的文章'),
                'author'   => _t('%s 发布的文章')
            ], '', ' - '); ?><?php $this->options->title(); ?>">
        <meta name="twitter:image" content="<?php $this->options->themeUrl('source/images/thumbnail.jpg'); ?>">

        <?php if ($this->description): ?>
            <meta property="og:description" content="<?php echo(htmlspecialchars($this->description)); ?>">
            <meta name="twitter:description" content="<?php echo(htmlspecialchars($this->description)); ?>">
        <?php endif; ?>
    <?php endif; ?>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Preload Fonts -->
    <link rel="preload" href="<?php $this->options->themeUrl('source/fonts/dm-serif-display-v4-latin-regular.woff2'); ?>" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php $this->options->themeUrl('source/fonts/inter-v2-latin-regular.woff2'); ?>" as="font" type="font/woff2" crossorigin>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('source/css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('source/css/skeleton.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('source/css/minima.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-okaidia.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/plugins/line-numbers/prism-line-numbers.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('source/css/custom.css'); ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php $this->options->themeUrl('source/images/favicon.png'); ?>">

    <!-- Custom Theme Color Style -->
    <?php $this->need('partial/tcolor.php'); ?>

    <!-- Typecho Default Headers -->
    <?php $this->header(); ?>

    <!-- User Custom Header Code -->
    <?php $this->options->headerCode(); ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div>
                <?php $this->need('partial/header.php'); ?>
                <div class="trans">
