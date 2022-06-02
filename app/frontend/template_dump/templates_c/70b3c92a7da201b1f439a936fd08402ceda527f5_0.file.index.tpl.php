<?php
/* Smarty version 4.0.4, created on 2022-02-06 15:10:21
  from '/Applications/MAMP/htdocs/templates/category/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_61ffe4ddd54f29_66426677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70b3c92a7da201b1f439a936fd08402ceda527f5' => 
    array (
      0 => '/Applications/MAMP/htdocs/templates/category/index.tpl',
      1 => 1644160219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:category/articles.tpl' => 1,
  ),
),false)) {
function content_61ffe4ddd54f29_66426677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56725832361ffe4ddd4ff08_96500872', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main/base.tpl');
}
/* {block 'articles_by_categories'} */
class Block_58967707961ffe4ddd50803_88632376 extends Smarty_Internal_Block
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
class Block_56725832361ffe4ddd4ff08_96500872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_56725832361ffe4ddd4ff08_96500872',
  ),
  'articles_by_categories' => 
  array (
    0 => 'Block_58967707961ffe4ddd50803_88632376',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58967707961ffe4ddd50803_88632376', 'articles_by_categories', $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
}
