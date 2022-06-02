<?php
/* Smarty version 4.0.4, created on 2022-02-06 14:37:22
  from '/Applications/MAMP/htdocs/templates/main/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_61ffdd22313e31_92178410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9359bb2b01e65fc27283ff799fa7db404a223808' => 
    array (
      0 => '/Applications/MAMP/htdocs/templates/main/index.tpl',
      1 => 1644158211,
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
function content_61ffdd22313e31_92178410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131616494561ffdd2230c315_23232993', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main/base.tpl');
}
/* {block 'carousel'} */
class Block_187015794761ffdd2230ce34_73410202 extends Smarty_Internal_Block
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
class Block_133833559061ffdd22311373_87655368 extends Smarty_Internal_Block
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
class Block_144792508861ffdd22312819_38878068 extends Smarty_Internal_Block
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
class Block_131616494561ffdd2230c315_23232993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_131616494561ffdd2230c315_23232993',
  ),
  'carousel' => 
  array (
    0 => 'Block_187015794761ffdd2230ce34_73410202',
  ),
  'articles_by_categories' => 
  array (
    0 => 'Block_133833559061ffdd22311373_87655368',
  ),
  'recent_and_top' => 
  array (
    0 => 'Block_144792508861ffdd22312819_38878068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187015794761ffdd2230ce34_73410202', 'carousel', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133833559061ffdd22311373_87655368', 'articles_by_categories', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144792508861ffdd22312819_38878068', 'recent_and_top', $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
}
