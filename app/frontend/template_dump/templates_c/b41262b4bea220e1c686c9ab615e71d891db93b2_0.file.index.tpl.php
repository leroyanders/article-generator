<?php
/* Smarty version 4.0.4, created on 2022-02-14 10:15:24
  from '/home/l96351/public_html/meranda.info/templates/search/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620a018cf02c46_23792019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b41262b4bea220e1c686c9ab615e71d891db93b2' => 
    array (
      0 => '/home/l96351/public_html/meranda.info/templates/search/index.tpl',
      1 => 1644232797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:search/results.tpl' => 1,
  ),
),false)) {
function content_620a018cf02c46_23792019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1237299575620a018cef8566_76185584', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main/base.tpl');
}
/* {block 'articles_by_categories'} */
class Block_1561233877620a018cef9315_08266986 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:search/results.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'articles_by_categories'} */
/* {block 'body'} */
class Block_1237299575620a018cef8566_76185584 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1237299575620a018cef8566_76185584',
  ),
  'articles_by_categories' => 
  array (
    0 => 'Block_1561233877620a018cef9315_08266986',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1561233877620a018cef9315_08266986', 'articles_by_categories', $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
}
