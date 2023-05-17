<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    // Appearance Settings
    $headerAppearance = new \Typecho\Widget\Helper\Form\Element\Text('headerAppearance', NULL, NULL, 
        _t('<h3>' . _t('外观设置') . '</h3>')
    );
    $headerAppearance->input->setAttribute('style', 'display:none');
    $form->addInput($headerAppearance);

    $tcolor = new \Typecho\Widget\Helper\Form\Element\Text(
        'tcolor',
        null,
        '#0FA0CE',
        _t('强调色'),
        _t('填入颜色的 HEX 值。默认值：<code>#0FA0CE</code>')
    );
    $form->addInput($tcolor);

    $switchLight = new \Typecho\Widget\Helper\Form\Element\Text(
        'switchLight',
        null,
        '☀️',
        _t('浅色图标'),
        _t('填入一个 emoji 作为切换至浅色模式的图标，该图标会在深色模式显示。默认值：☀️')
    );
    $form->addInput($switchLight);

    $switchDark = new \Typecho\Widget\Helper\Form\Element\Text(
        'switchDark',
        null,
        '🌑',
        _t('深色图标'),
        _t('填入一个 emoji 作为切换至深色模式的图标，该图标会在浅色模式显示。默认值：🌑')
    );
    $form->addInput($switchDark);


    // Basic Settings
    $headerBasic = new \Typecho\Widget\Helper\Form\Element\Text('headerBasic', NULL, NULL, 
        _t('<h3>' . _t('基本设置') . '</h3>')
    );
    $headerBasic->input->setAttribute('style', 'display:none');
    $form->addInput($headerBasic);

    $owner = new \Typecho\Widget\Helper\Form\Element\Text(
        'owner',
        null,
        null,
        _t('首页标题'),
        _t('与站点名称不同，该标题将只会显示在首页的站点名称下方。留空则不显示。')
    );
    $form->addInput($owner);

    $info = new \Typecho\Widget\Helper\Form\Element\Text(
        'info',
        null,
        null,
        _t('首页介绍（第一段）'),
        _t('该介绍将会显示在首页标题下方。留空则不显示。')
    );
    $form->addInput($info);

    $desc = new \Typecho\Widget\Helper\Form\Element\Text(
        'desc',
        null,
        null,
        _t('首页介绍（第二段）'),
        _t('该介绍将会显示在首页标题和首页介绍（第一段）下方。留空则不显示。')
    );
    $form->addInput($desc);

    $email = new \Typecho\Widget\Helper\Form\Element\Text(
        'email',
        null,
        null,
        _t('邮箱地址'),
        _t('如果在此处设置邮箱地址，将会作为链接在网站导航栏中显示。留空则不显示。')
    );
    $form->addInput($email);


    // Social Preview Settings
    $headerSocialPreview = new \Typecho\Widget\Helper\Form\Element\Text('headerSocialPreview', NULL, NULL, 
        _t('<h3>' . _t('社交媒体预览卡片设置') . '</h3>')
    );
    $headerSocialPreview->input->setAttribute('style', 'display:none');
    $form->addInput($headerSocialPreview);

    $socialMetaToogle = new \Typecho\Widget\Helper\Form\Element\Checkbox(
        'socialMetaToogle',
        [
            'SocialPreviewMeta' => _t('启用社交媒体预览卡片支持')
        ],
        ['SocialPreviewMeta'],
        '',
        _t('启用后，将在全站范围内启用社交媒体预览卡片支持。<br />请替换主题目录下的 <code>source/images/thumbnail.jpg</code> 为你自己的预览卡片图片。')
    );
    $form->addInput($socialMetaToogle->multiMode());

    $twitterCardType = new \Typecho\Widget\Helper\Form\Element\Radio(
        'twitterCardType',
        [
            'summary_large_image' => _t('大图预览'),
            'summary' => _t('普通预览')
        ],
        'summary_large_image',
        _t('Twitter 预览卡片样式'),
        _t('')
    );
    $form->addInput($twitterCardType);


    // Comment Settings
    $headerComment = new \Typecho\Widget\Helper\Form\Element\Text('headerComment', NULL, NULL, 
        _t('<h3>' . _t('评论服务设置') . '</h3>')
    );
    $headerComment->input->setAttribute('style', 'display:none');
    $form->addInput($headerComment);

    $commentMode = new \Typecho\Widget\Helper\Form\Element\Radio(
        'commentMode',
        [
            'default' => _t('内置评论'),
            'disqus' => _t('Disqus')
        ],
        'default',
        _t('评论系统'),
        _t('除了 Typecho 内置的评论系统，你也可选择使用第三方评论服务。')
    );
    $form->addInput($commentMode);

    $disqusShortname = new \Typecho\Widget\Helper\Form\Element\Text(
        'disqusShortname',
        null,
        null,
        _t('Disqus Shortname'),
        _t('如果你在上方选择使用 Disqus，请在这里填入你的 Disqus Shortname。该内容可在 <a href="https://disqus.com/admin/settings/general/">Disqus 后台</a> 中找到。')
    );
    $form->addInput($disqusShortname);


    // Footer Settings
    $headerFooter = new \Typecho\Widget\Helper\Form\Element\Text('headerFooter', NULL, NULL, 
        _t('<h3>' . _t('页脚设置') . '</h3>')
    );
    $headerFooter->input->setAttribute('style', 'display:none');
    $form->addInput($headerFooter);

    $footerToggle = new \Typecho\Widget\Helper\Form\Element\Checkbox(
        'footerToggle',
        [
            'Footer' => _t('显示页脚')
        ],
        ['Footer']
    );
    $form->addInput($footerToggle->multiMode());

    $placename = new \Typecho\Widget\Helper\Form\Element\Text(
        'placename',
        null,
        null,
        _t('地点名称'),
        _t('可在此处填入你所在的任意地点名称，该名称将会显示在页脚中。留空则不显示。')
    );
    $form->addInput($placename);

    $placelink = new \Typecho\Widget\Helper\Form\Element\Text(
        'placelink',
        null,
        null,
        _t('地点链接'),
        _t('可在此处填入你所在的任意地点链接，该链接将会作为地点名称的超链接。留空则不显示。')
    );
    $form->addInput($placelink);

    $github = new \Typecho\Widget\Helper\Form\Element\Text(
        'github',
        null,
        null,
        _t('GitHub'),
        _t('在此处填入你的 GitHub 地址，该地址将以图标形式显示在页脚。留空则不显示。')
    );
    $form->addInput($github);

    $linkedin = new \Typecho\Widget\Helper\Form\Element\Text(
        'linkedin',
        null,
        null,
        _t('LinkedIn'),
        _t('在此处填入你的 LinkedIn 地址，该地址将以图标形式显示在页脚。留空则不显示。')
    );
    $form->addInput($linkedin);

    $twitter = new \Typecho\Widget\Helper\Form\Element\Text(
        'twitter',
        null,
        null,
        _t('Twitter'),
        _t('在此处填入你的 Twitter 地址，该地址将以图标形式显示在页脚。留空则不显示。')
    );
    $form->addInput($twitter);

    $instagram = new \Typecho\Widget\Helper\Form\Element\Text(
        'instagram',
        null,
        null,
        _t('Instagram'),
        _t('在此处填入你的 Instagram 地址，该地址将以图标形式显示在页脚。留空则不显示。')
    );
    $form->addInput($instagram);


    // Footer Settings
    $headerInjection = new \Typecho\Widget\Helper\Form\Element\Text('headerInjection', NULL, NULL, 
        _t('<h3>' . _t('代码注入') . '</h3>')
    );
    $headerInjection->input->setAttribute('style', 'display:none');
    $form->addInput($headerInjection);

    $headerCode = new \Typecho\Widget\Helper\Form\Element\Textarea(
        'headerCode',
        null,
        null,
        _t('Header 代码'),
        _t('在此处插入你想添加的页头代码，例如统计代码等。')
    );
    $form->addInput($headerCode);

    $footerCode = new \Typecho\Widget\Helper\Form\Element\Textarea(
        'footerCode',
        null,
        null,
        _t('Footer 代码'),
        _t('在此处插入你想添加的页脚代码，例如统计代码等。')
    );
    $form->addInput($footerCode);
}
