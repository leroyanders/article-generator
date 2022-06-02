<?php
/* Smarty version 4.0.4, created on 2022-02-07 14:24:28
  from '/home/l96351/public_html/meranda.info/templates/article/read.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6201016c2003f2_26563395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c12b3efd26464668320d05f5781d014c7b8c4123' => 
    array (
      0 => '/home/l96351/public_html/meranda.info/templates/article/read.tpl',
      1 => 1644232797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6201016c2003f2_26563395 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/l96351/public_html/meranda.info/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/home/l96351/public_html/meranda.info/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
?>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 single-content">

                <p class="mb-5">
                    <img src="/assets/<?php echo $_smarty_tpl->tpl_vars['article_data']->value['photo'];?>
" alt="Image" class="img-fluid">
                </p>
                <h1 class="mb-4"><?php echo $_smarty_tpl->tpl_vars['article_data']->value['title'];?>
</h1>
                <div class="post-meta d-flex mb-5">
                    <div class="vcard">
                        <span class="d-block"><a href="#"><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</a> in <a href="#"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['article_data']->value['category_id']];?>
</a></span>
                        <span class="date-read">
                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article_data']->value['published_at'],"%B %e, %Y");?>

                            <span class="mx-1">&bullet;</span>
                            <?php $_smarty_tpl->_assignInScope('alength', preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['article_data']->value['summary'], $tmp));?>
                            <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php if ($_smarty_tpl->tpl_vars['alength']->value < 3000) {?>
                                    3 min read
                                <?php } elseif ($_smarty_tpl->tpl_vars['alength']->value > 3000) {?>
                                    5 min read
                                <?php } else { ?>
                                    10 min read
                                <?php }?>
                            <?php $_block_repeat=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <span class="icon-star2"></span></span>
                    </div>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['summary']->value;?>

                <div class="pt-5">
                    <p>Categories: 
                        <a href="/category/<?php echo $_smarty_tpl->tpl_vars['article_data']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['article_data']->value['category_id']];?>
</a>
                        <br>Tags: 
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons_keywords']->value, 'keyword', false, 'k');
$_smarty_tpl->tpl_vars['keyword']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['keyword']->value) {
$_smarty_tpl->tpl_vars['keyword']->do_else = false;
?>
                            <a href="/search/<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">#<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</a>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </p>
                </div>
                <div class="pt-5">
                    <p>Share this article with friends:</p>
                    <div class="social-share-btns">
                        <a class="share-btn share-btn-twitter" href="https://twitter.com/intent/tweet?text=<?php echo $_smarty_tpl->tpl_vars['article_url']->value;?>
" rel="nofollow" target="_blank">
                            <i class="ion-social-twitter"></i>
                            Tweet
                        </a>
                        <a class="share-btn share-btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['article_url']->value;?>
" rel="nofollow" target="_blank">
                            <i class="ion-social-facebook"></i>
                            Share
                        </a>
                        <a class="share-btn share-btn-linkedin" href="https://www.linkedin.com/cws/share?url=<?php echo $_smarty_tpl->tpl_vars['article_url']->value;?>
 rel="nofollow" target="_blank">
                            <i class="ion-social-linkedin"></i>
                            Share
                        </a>
                        <a class="share-btn share-btn-reddit" href="https://www.reddit.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['article_url']->value;?>
" rel="nofollow" target="_blank">
                            <i class="ion-social-reddit"></i>
                            Share
                        </a>
                        <a class="share-btn share-btn-mail" href="mailto:?subject=<?php echo $_smarty_tpl->tpl_vars['article_data']->value['title'];?>
;body=<?php echo $_smarty_tpl->tpl_vars['article_url']->value;?>
" rel="nofollow" target="_blank" title="via email">
                            <i class="ion-paper-airplane"></i>
                            Share
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 ml-auto">
                <div class="section-title">
                    <h2><?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin2)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin2(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Popular Posts<?php $_block_repeat=false;
echo $_block_plugin2(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h2>
                </div>

                <?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['popular']->value, 'article');
$_smarty_tpl->tpl_vars['article']->iteration = 0;
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['article']->iteration++;
$__foreach_article_1_saved = $_smarty_tpl->tpl_vars['article'];
?>
                    <div class="trend-entry d-flex">
                        <div class="number align-self-start">0<?php echo $_smarty_tpl->tpl_vars['article']->iteration;?>
</div>
                        <div class="trend-contents">
                            <h2>
                                <a href="/read/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a>
                            </h2>
                            <div class="post-meta">
                                <span class="d-block">
                                    <a href="#"><?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin3)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin3(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['app_name']->value;
$_block_repeat=false;
echo $_block_plugin3(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a> <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin4)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin4(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>in<?php $_block_repeat=false;
echo $_block_plugin4(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> 
                                    <a href="/category/<?php echo $_smarty_tpl->tpl_vars['article']->value['category_id'];?>
"><?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin5)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin5(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['article']->value['category_id']];
$_block_repeat=false;
echo $_block_plugin5(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
                                </span>
                                <span class="date-read">
                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['published_at'],"%B %e, %Y");?>

                                <span class="mx-1">&bullet;</span>
                                <?php $_smarty_tpl->_assignInScope('alength', preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['article']->value['summary'], $tmp));?>
                                <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin6)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin6(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['alength']->value < 3000) {?>
                                        3 min read
                                    <?php } elseif ($_smarty_tpl->tpl_vars['alength']->value > 3000) {?>
                                        5 min read
                                    <?php } else { ?>
                                        10 min read
                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin6(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <p>
                    <a href="/category/popular" class="more"><?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin7)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin7(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>See All Popular<?php $_block_repeat=false;
echo $_block_plugin7(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><span class="icon-keyboard_arrow_right"></span></a>
                </p>
            </div>


        </div>

    </div>
</div><?php }
}
