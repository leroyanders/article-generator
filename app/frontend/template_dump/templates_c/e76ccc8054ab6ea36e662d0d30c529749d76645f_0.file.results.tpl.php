<?php
/* Smarty version 4.0.4, created on 2022-02-14 10:15:24
  from '/home/l96351/public_html/meranda.info/templates/search/results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620a018cf3e404_85825225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e76ccc8054ab6ea36e662d0d30c529749d76645f' => 
    array (
      0 => '/home/l96351/public_html/meranda.info/templates/search/results.tpl',
      1 => 1644232797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620a018cf3e404_85825225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/l96351/public_html/meranda.info/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/home/l96351/public_html/meranda.info/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'/home/l96351/public_html/meranda.info/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
?>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-title">
                    <span class="caption d-block small"><?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Search results on<?php $_block_repeat=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span>
                    <h2><?php echo $_smarty_tpl->tpl_vars['search_query']->value;?>
</h2>
                </div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->iteration = 0;
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['article']->iteration++;
$__foreach_article_0_saved = $_smarty_tpl->tpl_vars['article'];
?>
                    <div class="post-entry-2 d-flex">
                        <div class="thumbnail" style="background-image: url('/assets/<?php echo $_smarty_tpl->tpl_vars['article']->value['photo'];?>
')"></div>
                        <div class="contents">
                            <h2>
                                <a href="/read/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a>
                            </h2>
                            <p class="mb-3"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['summary'],150,"...",true);?>
</p>
                            <div class="post-meta">
                                <span class="d-block">
                                    <a href="#"><?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin2)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin2(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['app_name']->value;
$_block_repeat=false;
echo $_block_plugin2(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a> <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin3)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin3(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>in<?php $_block_repeat=false;
echo $_block_plugin3(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> 
                                    <a href="/category/<?php echo $_smarty_tpl->tpl_vars['article']->value['category_id'];?>
"><?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin4)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin4(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['article']->value['category_id']];
$_block_repeat=false;
echo $_block_plugin4(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
                                </span>
                                <span class="date-read">
                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['published_at'],"%A, %B %e, %Y");?>

                                <span class="mx-1">&bullet;</span>
                                <?php $_smarty_tpl->_assignInScope('alength', preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['article']->value['summary'], $tmp));?>
                                <?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin5)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin5(array(), null, $_smarty_tpl, $_block_repeat);
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
echo $_block_plugin5(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="col-lg-3">
                <div class="section-title">
                    <h2>Popular Posts</h2>
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
                                    <a href="#"><?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin6)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin6(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['app_name']->value;
$_block_repeat=false;
echo $_block_plugin6(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a> <?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin7)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin7(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>in<?php $_block_repeat=false;
echo $_block_plugin7(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> 
                                    <a href="/category/<?php echo $_smarty_tpl->tpl_vars['article']->value['category_id'];?>
"><?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin8)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin8(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['article']->value['category_id']];
$_block_repeat=false;
echo $_block_plugin8(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
                                </span>
                                <span class="date-read">
                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['published_at'],"%B %e, %Y");?>

                                <span class="mx-1">&bullet;</span>
                                <?php $_smarty_tpl->_assignInScope('alength', preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['article']->value['summary'], $tmp));?>
                                <?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin9)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin9(array(), null, $_smarty_tpl, $_block_repeat);
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
echo $_block_plugin9(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
                    <a href="/category/popular" class="more"><?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin10)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin10(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>See All Popular<?php $_block_repeat=false;
echo $_block_plugin10(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><span class="icon-keyboard_arrow_right"></span></a>
                </p>
            </div>
        </div>
    </div>
</div><?php }
}
