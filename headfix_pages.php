<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<style type="text/css">
    /** 页面样式调整 */
<?php if($this->is('post')):?>
    div#comments{
        margin-top: 0;
    }
<?php endif?>
<?php if(!$this->is('post') || isPhone()):?>
    #qr-box {
        background-color: transparent;
    }
<?php endif?>
<?php if(!($this->is('post') && !isPhone() && (hasValue($this->options->postQRCodeURL) || hasValue($this->options->rewardQRCodeURL)))):?>
    .post-buttons, #qr-box {
        display: none;
    }
    #body-bottom {
        margin-top: 0;
    }
<?php endif?>
<?php if($this->is('page','links')): ?>
    #wrap {
        font-weight: 300;
    }
    #body .container {
        margin-top: 50px;
    }
    .row{
        margin-left: 0;
        margin-right: 0;
    }
<?php endif ?>
<?php if($this->is('post') || $this->is('page')):?>
    #footer{
        padding: 20px 0;
    }
    <?php if(hasValue($this->fields->contentWidth)):?>
    @media(min-width: 992px) {
        .container {
            max-width: <?=is_numeric($this->fields->contentWidth)?($this->fields->contentWidth."px"):$this->fields->contentWidth?>;
        }
    }
    <?php endif?>
<?php endif?>

<?php if($this->fields->textAlign == 'left' || $this->fields->textAlign == 'center' || $this->fields->textAlign == 'right' || $this->fields->textAlign == 'justify'):?>
    .post-content p,.post-content blockquote,.post-content ul,.post-content ol,.post-content dl,.post-content table,.post-content pre {
        text-align: <?=$this->fields->textAlign?>;
    }
<?php endif?>
</style>
<style type="text/css">
<?php
    if(hasValue($this->fields->css)) {
        echo $this->fields->css;
    }
?> 
</style>