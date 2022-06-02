<?php
/* Smarty version 4.0.4, created on 2022-02-07 14:20:01
  from '/home/l96351/public_html/meranda.info/templates/footer/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62010061a664c4_77879300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff0056c814a953eea09d87129e511d5bced428cd' => 
    array (
      0 => '/home/l96351/public_html/meranda.info/templates/footer/main.tpl',
      1 => 1644232796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62010061a664c4_77879300 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="site-section subscribe bg-light">
    <div class="container">
        <form method="post" action="/subscribe" class="row align-items-center">
            <div class="col-md-5 mr-auto">
                <h2>Newsletter Subcribe</h2>
                <p>Enter your email to receive notifications of new articles!</p>
            </div>
            <div class="col-md-6 ml-auto">
                <div class="d-flex">
                    <input type="email" class="form-control" placeholder="Enter your email">
                    <button type="submit" class="btn btn-secondary" ><span class="icon-paper-plane"></span></button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="copyright">
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
 &copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
