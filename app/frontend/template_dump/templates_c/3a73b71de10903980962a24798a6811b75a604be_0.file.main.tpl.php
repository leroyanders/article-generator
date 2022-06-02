<?php
/* Smarty version 4.0.4, created on 2022-02-07 14:20:01
  from '/home/l96351/public_html/meranda.info/templates/header/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_620100619b8c69_02453656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a73b71de10903980962a24798a6811b75a604be' => 
    array (
      0 => '/home/l96351/public_html/meranda.info/templates/header/main.tpl',
      1 => 1644232799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620100619b8c69_02453656 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>


<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 d-flex">
                <a href="/" class="site-logo">
                    <?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>

                </a>
                <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black">
                    <span class="icon-menu h3"></span>
                </a>
            </div>
            <div class="col-12 col-lg-6 ml-auto d-flex">
                <div class="ml-md-auto top-social d-none d-lg-inline-block">
                    <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                </div>
                <form method="post" action="/search" class="search-form d-inline-block">
                    <div class="d-flex">
                        <input type="text" class="form-control" placeholder="Найти статью..." name="q">
                        <button type="submit" class="btn btn-secondary">
                            <span class="icon-search"></span>
                        </button>
                        <select data-placeholder="Choose a Language..." class="language-toggle">
                            <option value="EN" selected>EN</option>
                            <option value="RU">RU</option>
                            <option value="DE">DE</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-6 d-block d-lg-none text-right"></div>
        </div>
    </div>


    <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
        <div class="container">
            <div class="d-flex align-items-center" style="width: fit-content; margin: auto;">
                <div class="mr-auto" style="width: 100%">
                    <nav class="site-navigation position-relative text-right d-flex" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navtabs']->value, 'arr');
$_smarty_tpl->tpl_vars['arr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->do_else = false;
?>
                                <li>
                                    <a href="/category/<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" class="nav-link text-left">
                                        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array());
$_block_repeat=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['arr']->value['unique_name'];
$_block_repeat=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    </a>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
