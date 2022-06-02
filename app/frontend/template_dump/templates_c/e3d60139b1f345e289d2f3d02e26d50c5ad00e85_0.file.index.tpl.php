<?php
/* Smarty version 4.0.4, created on 2022-02-06 15:32:28
  from '/Applications/MAMP/htdocs/templates/article/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_61ffea0c0d31e3_99623196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3d60139b1f345e289d2f3d02e26d50c5ad00e85' => 
    array (
      0 => '/Applications/MAMP/htdocs/templates/article/index.tpl',
      1 => 1644161513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:article/read.tpl' => 1,
  ),
),false)) {
function content_61ffea0c0d31e3_99623196 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106239095461ffea0c0ccbc0_49471515', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main/base.tpl');
}
/* {block 'articles_by_categories'} */
class Block_201039550461ffea0c0cd3e1_70594783 extends Smarty_Internal_Block
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
class Block_106239095461ffea0c0ccbc0_49471515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_106239095461ffea0c0ccbc0_49471515',
  ),
  'articles_by_categories' => 
  array (
    0 => 'Block_201039550461ffea0c0cd3e1_70594783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201039550461ffea0c0cd3e1_70594783', 'articles_by_categories', $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
}
