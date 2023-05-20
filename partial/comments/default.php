<hr>
<a href="#" id="comments-display" class="button button-primary"><?php _e('View / Make Comments'); ?></a>
<section id="comments" class="mt-2 mb-3" style="display: none;">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
        <h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
        <?php 
        $commentOptions = [
            'before'        => '<ol class="comment-list">',
            'after'         => '</ol>',
            'beforeAuthor'  => '',
            'afterAuthor'   => '',
            'beforeDate'    => '',
            'afterDate'     => '',
            'dateFormat'    => $this->options->commentDateFormat,
            'replyWord'     => _t('回复'),
            'commentStatus' => _t('您的评论正等待审核!'),
            'avatarSize'    => 48,
            'defaultAvatar' => null
        ];
        $comments->listComments($commentOptions);
        ?>
        <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
        <?php $comments->pageLink(_t('Recent'),'prev'); ?>
        <?php $comments->pageLink(_t('Older'),'next'); ?>
    <?php endif; ?>

    <?php if ($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="cancel-comment-reply">
                <?php $comments->cancelReply(); ?>
            </div>

            <h3 id="response"><?php _e('添加新评论'); ?></h3>
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                <?php if ($this->user->hasLogin()): ?>
                    <p>
                        <?php _e('登录身份: '); ?>
                        <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. 
                        <a href="<?php $this->options->logoutUrl(); ?>" title="Logout">
                            <?php _e('退出'); ?> &raquo;
                        </a>
                    </p>
                <?php else: ?>
                    <p>
                        <label for="author" class="required"><?php _e('称呼'); ?></label>
                        <input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
                    </p>
                    <p>
                        <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>>
                            <?php _e('Email'); ?>
                        </label>
                        <input type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                    </p>
                    <p>
                        <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>>
                            <?php _e('网站'); ?>
                        </label>
                        <input type="url" name="url" id="url" class="text" placeholder="<?php _e('https://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
                    </p>
                <?php endif; ?>
                <p>
                    <label for="textarea" class="required"><?php _e('内容'); ?></label>
                    <textarea name="text" id="textarea" class="textarea" required><?php $this->remember('text'); ?></textarea>
                </p>
                <button type="submit" class="submit button button-primary"><?php _e('提交评论'); ?></button>
            </form>
        </div>
    <?php else: ?>
        <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>

    <script>
        const comment_button = document.querySelector("#comments-display");
        comment_button.addEventListener("click", showComments);
        function showComments() {
            const comment = document.querySelector("#comments");
            comment.style.display = "block";
            comment_button.style.display = "none";
        }
        if (window.location.href.endsWith("#comments")) {
            showComments();
        }
    </script>
    <noscript>Please enable JavaScript to view comments.</a></noscript>
</section>
