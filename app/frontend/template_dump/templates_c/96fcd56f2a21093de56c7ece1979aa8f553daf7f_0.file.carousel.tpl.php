<?php
/* Smarty version 4.0.4, created on 2022-02-20 19:43:00
  from '/Applications/MAMP/htdocs/templates/main/carousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_621299c4215ec6_87253610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96fcd56f2a21093de56c7ece1979aa8f553daf7f' => 
    array (
      0 => '/Applications/MAMP/htdocs/templates/main/carousel.tpl',
      1 => 1645386120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621299c4215ec6_87253610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/Applications/MAMP/htdocs/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="site-section py-0">
    <div class="owl-carousel hero-slide owl-style">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carousel_items']->value, 'carousel_item');
$_smarty_tpl->tpl_vars['carousel_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carousel_item']->value) {
$_smarty_tpl->tpl_vars['carousel_item']->do_else = false;
?>
            <div class="site-section">
                <div class="container">
                    <div class="half-post-entry d-block d-lg-flex bg-light">
                        <div class="img-bg" style="background-image: url('/assets/<?php echo $_smarty_tpl->tpl_vars['carousel_item']->value['photo'];?>
')"></div>
                        <div class="contents">
                            <span class="caption">Рекоммендуем к прочтению</span>
                            <h2>
                                <a href="/read/<?php echo $_smarty_tpl->tpl_vars['carousel_item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['carousel_item']->value['title'];?>
</a>
                            </h2>
                            <p class="mb-3"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['carousel_item']->value['summary']),150,"...",true);?>
</p>
                            <div class="post-meta">
                                <span class="d-block">
                                    <a href="#"><?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['app_name']->value;
$_block_repeat=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a> <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin2)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin2(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>in<?php $_block_repeat=false;
echo $_block_plugin2(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> 
                                    <a href="/category/<?php echo $_smarty_tpl->tpl_vars['carousel_item']->value['category_id'];?>
"><?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin3)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin3(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['carousel_item']->value['category_id']];
$_block_repeat=false;
echo $_block_plugin3(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
                                </span>
                                <span class="date-read">
                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['carousel_item']->value['published_at'],"%A, %B %e, %Y");?>

                                <span class="mx-1">&bullet;</span>
                                <?php $_smarty_tpl->_assignInScope('length', preg_match_all('/[^\s]/u',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['carousel_item']->value['summary']), $tmp));?>
                                <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin4)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin4(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['length']->value < 3000) {?>
                                        3 min read
                                    <?php } elseif ($_smarty_tpl->tpl_vars['length']->value > 3000) {?>
                                        5 min read
                                    <?php } else { ?>
                                        10 min read
                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin4(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
