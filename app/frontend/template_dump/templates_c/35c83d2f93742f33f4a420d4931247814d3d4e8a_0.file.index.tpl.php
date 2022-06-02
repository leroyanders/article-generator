<?php
/* Smarty version 4.0.4, created on 2022-02-07 14:23:48
  from '/home/l96351/public_html/meranda.info/templates/category/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6201014419c8b2_31023514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35c83d2f93742f33f4a420d4931247814d3d4e8a' => 
    array (
      0 => '/home/l96351/public_html/meranda.info/templates/category/index.tpl',
      1 => 1644232796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:category/articles.tpl' => 1,
  ),
),false)) {
function content_6201014419c8b2_31023514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131302554262010144194373_01561579', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main/base.tpl');
}
/* {block 'articles_by_categories'} */
class Block_55708096262010144194dc6_45911313 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:category/articles.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'articles_by_categories'} */
/* {block 'body'} */
class Block_131302554262010144194373_01561579 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_131302554262010144194373_01561579',
  ),
  'articles_by_categories' => 
  array (
    0 => 'Block_55708096262010144194dc6_45911313',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55708096262010144194dc6_45911313', 'articles_by_categories', $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
}
