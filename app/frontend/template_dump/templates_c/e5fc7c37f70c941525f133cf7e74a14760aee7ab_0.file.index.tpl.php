<?php
/* Smarty version 4.0.4, created on 2022-02-07 14:24:28
  from '/home/l96351/public_html/meranda.info/templates/article/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6201016c1e7506_12999805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5fc7c37f70c941525f133cf7e74a14760aee7ab' => 
    array (
      0 => '/home/l96351/public_html/meranda.info/templates/article/index.tpl',
      1 => 1644232797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:article/read.tpl' => 1,
  ),
),false)) {
function content_6201016c1e7506_12999805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10208359726201016c1e5057_44790063', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main/base.tpl');
}
/* {block 'articles_by_categories'} */
class Block_12883184296201016c1e5682_71958042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:article/read.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'articles_by_categories'} */
/* {block 'body'} */
class Block_10208359726201016c1e5057_44790063 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10208359726201016c1e5057_44790063',
  ),
  'articles_by_categories' => 
  array (
    0 => 'Block_12883184296201016c1e5682_71958042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12883184296201016c1e5682_71958042', 'articles_by_categories', $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
}
