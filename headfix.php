<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<style type="text/css">
    /*根据操作系统及浏览器优化font-family*/
<?php if(isELCapitanOrAbove()): ?>
    /*Mac OS X - El Capitan*/
    body {
        font-weight: 400;
    }
    #index .post .post-title,#archive .post .post-title{
        font-weight: 400;
    }
    #post .post-title {
        font-weight: 300;
    }
    #nav .menu li a {
        font-weight: 400;
    }
    .post-content h1 {
        font-weight: 300;
    }
    .post-content h2 {
        font-weight: 300;
    }
    @media screen and (min-device-pixel-ratio: 1.5){
        body {
            font-weight: 300;
        }
        #post .post-title {
            font-weight: 300;
        }
        #index .post .post-title,#archive .post .post-title{
            font-weight: 300;
        }
        #nav .menu li a {
            font-weight: 300;
        }
        .github-box, .github-box .github-box-title h3 {
        }
        .post-content h1 {
            font-weight: 300;
        }
        .post-content h2 {
            font-weight: 300;
        }
    }
    @media screen and (-webkit-min-device-pixel-ratio: 1.5){
        body {
            font-weight: 300;
        }
        #post .post-title {
            font-weight: 300;
        }
        #index .post .post-title,#archive .post .post-title{
            font-weight: 300;
        }
        #nav .menu li a {
            font-weight: 300;
        }
        .github-box, .github-box .github-box-title h3 {
        }
        .post-content h1 {
            font-weight: 300;
        }
        .post-content h2 {
            font-weight: 300;
        }
    }
    @media screen and (-o-min-device-pixel-ratio: 1.5/1.5){
        body {
            font-weight: 300;
        }
        #post .post-title {
            font-weight: 300;
        }
        #index .post .post-title,#archive .post .post-title{
            font-weight: 300;
        }
        #nav .menu li a {
            font-weight: 300;
        }
        .github-box, .github-box .github-box-title h3 {
        }
        .post-content h1 {
            font-weight: 300;
        }
        .post-content h2 {
            font-weight: 300;
        }
    }
    @media screen and (min--moz-device-pixel-ratio: 1.5){
        body {
            font-weight: 400;
        }
        #post .post-title {
            font-weight: 400;
        }
        #index .post .post-title,#archive .post .post-title{
            font-weight: 400;
        }
        #nav .menu li a {
            font-weight: 400;
        }
        .github-box, .github-box .github-box-title h3 {
        }
        .post-content h1 {
            font-weight: 400;
        }
        .post-content h2 {
            font-weight: 400;
        }
    }
<?php endif?>

</style>
<style type="text/css">
    /*根据操作系统及浏览器进行样式修正*/

<?php if(isMobile()):?>
    /*移动端*/
    html, body, div, p, ol, ul, li, dl, dt, dd, h1, h2, h3, h4, h5, h6, form, input, select, button, textarea, iframe, table, th, td, blockquote, img{
        -webkit-font-smoothing: auto !important;
    }
    #backtop.show {
        opacity: 0;
        display: none;
    }
    #nav .menu li a:hover{
        background: #191919;
        color: #9ba3ad;
    }
    #nav .category-list li a:hover{
        background: #131313;
        color: #9ba3ad;
    }
    #nav .menu li a:focus{
        background: #2a2b2c;
        color: #fff;
    }
    #index .more>a:hover,#archive .more>a:hover {
        width: 250px;
    }
    .link-box a:active {
        box-shadow: 0 22px 43px rgba(0, 0, 0, 0.15);
        -webkit-box-shadow: 0 22px 43px rgba(0, 0, 0, 0.15);
        -webkit-transform: translateY(-4px);
        transform: translateY(-4px);
        -moz-transform: none;
    }
<?php else:?>
    /*桌面端*/
    #index .post .post-title:hover,#archive .post .post-title:hover {
        color: #1abc9c;
    }
    #index .more>a:hover,#archive .more>a:hover {
        color: #FFF !important;
        border: 1px dashed #1abc9c;
        background-color: rgba(24,188,156,0.5);
        width: 250px;
    }
    .link-box a:hover {
        box-shadow: 0 22px 43px rgba(0, 0, 0, 0.15);
        -webkit-box-shadow: 0 22px 43px rgba(0, 0, 0, 0.15);
        -webkit-transform: translateY(-4px);
        transform: translateY(-4px);
        -moz-transform: none;
    }
<?php endif?>
<?php if(isPhone()):?>
    /*Phone*/
    .post-content {
        font-weight: 400;
        font-size: 18px;
    }
    .post-content pre {
        font-size: 14px;
    }
    .container {
        max-width: 620px;
    }
<?php endif?>
<?php if(deviceIs("iPad")):?>
    /*iPad*/
    .post-content {
        font-weight: 400;
        font-size: 18px;
    }
    .post-content pre {
        font-size: 14px;
    }
<?php endif?>
<?php if(shouldEnableBlurFilter()):?>
    #wrap.display-nav #body, #footer.display-nav {
        -webkit-filter: blur(10px);
        -moz-filter: blur(10px);
        -ms-filter: blur(10px);
        -o-filter: blur(10px);
        filter: blur(10px);
    }
<?php else:?>
    #wrap.display-nav #body, #footer.display-nav {
        opacity: 0.1;
    }
<?php endif?>

<?php if(isSafari()):?>
    /*Safari*/
    a#toggle-nav {
        padding-bottom: 0;
    }
<?php else:?>
    /*Not Safari*/
    /*
    *webkit浏览器滚动条样式
    */
    ::-webkit-scrollbar {
        height:8px;
        width:6px;
    }
    ::-webkit-scrollbar-button {
        height:0;
        width:0;
    }
    ::-webkit-scrollbar-button:start:decrement,::-webkit-scrollbar-button:end:increment {
        display:block;
    }
    ::-webkit-scrollbar-button:vertical:start:increment,::-webkit-scrollbar-button:vertical:end:decrement {
        display:none;
    }
    ::-webkit-scrollbar-track:vertical,::-webkit-scrollbar-track:horizontal,::-webkit-scrollbar-thumb:vertical,::-webkit-scrollbar-thumb:horizontal,::-webkit-scrollbar-track:vertical,::-webkit-scrollbar-track:horizontal,::-webkit-scrollbar-thumb:vertical,::-webkit-scrollbar-thumb:horizontal {
        border-style:solid;
        border-color:transparent;
    }
    ::-webkit-scrollbar-track:vertical::-webkit-scrollbar-track:horizontal{
        background-clip:padding-box;
        background-color:#fff;
    }
    ::-webkit-scrollbar-thumb {
        -webkit-box-shadow:inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);
        background-clip:padding-box;
        background-color:rgba(0,0,0,.5);
        min-height:28px;
        padding-top:100px;
    }
    ::-webkit-scrollbar-thumb:hover {
        -webkit-box-shadow:inset 1px 1px 1px rgba(0,0,0,.25);
        background-color:rgba(0,0,0,.4);
    }
    ::-webkit-scrollbar-thumb:active {
        -webkit-box-shadow:inset 1px 1px 3px rgba(0,0,0,.35);
        background-color:rgba(0,0,0,.5);
    }
    ::-webkit-scrollbar-track:vertical,::-webkit-scrollbar-track:horizontal,::-webkit-scrollbar-thumb:vertical,::-webkit-scrollbar-thumb:horizontal {
        border-width:0;
    }
    ::-webkit-scrollbar-track:hover {
        -webkit-box-shadow:inset 1px 0 0 rgba(0,0,0,.1);
        background-color:rgba(0,0,0,.05);
    }
    ::-webkit-scrollbar-track:active {
        -webkit-box-shadow:inset 1px 0 0 rgba(0,0,0,.14),inset -1px -1px 0 rgba(0,0,0,.07);
        background-color:rgba(0,0,0,.05);
    }
    /*
     *  end webkit浏览器滚动条样式
     */
<?php endif?>
<?php if(deviceIs('Edge')):?>
    /*Edge*/
    #footer a:after,#header .nav li a:after,#post .post-meta a:after,#index .comments a:after,#index .post-content a:after,#post .post-content a:after,#archive .post-content a:after, #archive .comments a:after{
        transition: none
    }
<?php endif?>
<?php if(isWindows()): ?>
    /*Windows*/
    .post-content p {
        letter-spacing: 0;
    }
    @media screen and (min-width: 1600px){
        #index .more>a, #archive .more>a {
            width: 220px;
        }
        #index .more>a:hover, #archive .more>a:hover {
            width: 300px;
        }
        .container {
            max-width: 768px;
        }
    }
    @media screen and (min-width: 1900px){
        .container {
            max-width: 852px;
        }
    }
<?php endif?>
<?php if(isWindowsAboveVista()): ?>
    /*Windows Vista +*/
    #index .more>a, #archive .more>a {
        letter-spacing: 0;
    }
<?php endif?>
</style>
<style type="text/css">
    /** 页面样式调整 */
<?php if(!hasValue($this->options->postQRCodeURL) || !hasValue($this->options->rewardQRCodeURL)): ?>
    .post-buttons a {
        width: calc(100% / 2);
    }
<?php endif?>

<?php if(hasValue($this->options->duoshuoShortName)):?>
    #ds-thread #ds-reset a.ds-user-name[data-user-id='<?=$this->options->duoshuoUserId?>']:after {
        content: "博主";
        margin-left: 6px;
        font-size: 12px;
        color: #fff;
        background: rgba(255, 255, 255, .35);
        border-radius: 4px;
        padding: 0 3px;
    }
    body.theme-white #ds-thread #ds-reset a.ds-user-name[data-user-id='<?=$this->options->duoshuoUserId?>']:after {
        background: rgba(0, 0, 0, .35);
    }
<?php endif?>
</style>
<?php 
    if(isHexColor($this->options->themeColor)) {
        $this->need('head_colors.php');
    }
?>
<style type="text/css">
<?php
    if(hasValue($this->options->customCss)) {
        echo $this->options->customCss;
    }
?> 
</style>