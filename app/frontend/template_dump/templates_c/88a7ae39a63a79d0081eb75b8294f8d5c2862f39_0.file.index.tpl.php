<?php
/* Smarty version 4.0.4, created on 2022-02-07 14:20:01
  from '/home/l96351/public_html/meranda.info/templates/main/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6201006197e603_08453569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88a7ae39a63a79d0081eb75b8294f8d5c2862f39' => 
    array (
      0 => '/home/l96351/public_html/meranda.info/templates/main/index.tpl',
      1 => 1644232798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/carousel.tpl' => 1,
    'file:main/articles.tpl' => 1,
    'file:main/recent.tpl' => 1,
  ),
),false)) {
function content_6201006197e603_08453569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177496464962010061974685_11625855', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main/base.tpl');
}
/* {block 'carousel'} */
class Block_1579100977620100619752a6_58747739 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:main/carousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'carousel'} */
/* {block 'articles_by_categories'} */
class Block_15396896236201006197c9b5_79389424 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:main/articles.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'articles_by_categories'} */
/* {block 'recent_and_top'} */
class Block_19175194866201006197d764_66397615 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:main/recent.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'recent_and_top'} */
/* {block 'body'} */
class Block_177496464962010061974685_11625855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_177496464962010061974685_11625855',
  ),
  'carousel' => 
  array (
    0 => 'Block_1579100977620100619752a6_58747739',
  ),
  'articles_by_categories' => 
  array (
    0 => 'Block_15396896236201006197c9b5_79389424',
  ),
  'recent_and_top' => 
  array (
    0 => 'Block_19175194866201006197d764_66397615',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1579100977620100619752a6_58747739', 'carousel', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15396896236201006197c9b5_79389424', 'articles_by_categories', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19175194866201006197d764_66397615', 'recent_and_top', $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
}
