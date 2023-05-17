<?php $tcolor = $this->options->tcolor ?? '#0FA0CE'; ?>
<style>
    a:not(.icon) {
        text-decoration-color: <?php echo $tcolor; ?>;
        background-image: linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0) 50%,
            <?php echo $tcolor; ?> 50%
        );
    }
    blockquote {
        border-left: 8px solid <?php echo $tcolor; ?>;
    }
    .nanobar .bar {
        background: <?php echo $tcolor; ?>;
    }
    .button.button-primary:hover,
    button.button-primary:hover,
    input[type="submit"].button-primary:hover,
    input[type="reset"].button-primary:hover,
    input[type="button"].button-primary:hover,
    .button.button-primary:focus,
    button.button-primary:focus,
    input[type="submit"].button-primary:focus,
    input[type="reset"].button-primary:focus,
    input[type="button"].button-primary:focus {
        background-color: <?php echo $tcolor; ?>;
        border-color: <?php echo $tcolor; ?>;
    }
    input[type="email"]:focus,
    input[type="number"]:focus,
    input[type="search"]:focus,
    input[type="text"]:focus,
    input[type="tel"]:focus,
    input[type="url"]:focus,
    input[type="password"]:focus,
    textarea:focus,
    select:focus {
        border: 1px solid <?php echo $tcolor; ?>;
    }
</style>
