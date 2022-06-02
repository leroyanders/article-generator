<?php
/* Smarty version 4.0.4, created on 2022-02-06 16:25:18
  from '/Applications/MAMP/htdocs/templates/search/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_61fff66eb42767_30022345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e3977fc7efc35a9b58ced65832486bf22b66da1' => 
    array (
      0 => '/Applications/MAMP/htdocs/templates/search/index.tpl',
      1 => 1644164712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:search/results.tpl' => 1,
  ),
),false)) {
function content_61fff66eb42767_30022345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125607696061fff66eb3ba98_07773842', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main/base.tpl');
}
/* {block 'articles_by_categories'} */
class Block_130327190961fff66eb3c3e0_22809784 extends Smarty_Internal_Block
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
class Block_125607696061fff66eb3ba98_07773842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_125607696061fff66eb3ba98_07773842',
  ),
  'articles_by_categories' => 
  array (
    0 => 'Block_130327190961fff66eb3c3e0_22809784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130327190961fff66eb3c3e0_22809784', 'articles_by_categories', $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
}
