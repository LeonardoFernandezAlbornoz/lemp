<?php
/* Smarty version 4.3.4, created on 2024-03-06 09:21:51
  from '/app/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e8279f0d2f12_17846311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df6ce1a8ddb421b61b7bc846e98a0cd584dce004' => 
    array (
      0 => '/app/themes/classic/templates/index.tpl',
      1 => 1697822646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e8279f0d2f12_17846311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164621823065e8279f0d1f58_35232497', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_143285137965e8279f0d2175_82127276 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_106097730565e8279f0d2713_45286224 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_121478167365e8279f0d2544_13968689 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106097730565e8279f0d2713_45286224', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_164621823065e8279f0d1f58_35232497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_164621823065e8279f0d1f58_35232497',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_143285137965e8279f0d2175_82127276',
  ),
  'page_content' => 
  array (
    0 => 'Block_121478167365e8279f0d2544_13968689',
  ),
  'hook_home' => 
  array (
    0 => 'Block_106097730565e8279f0d2713_45286224',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143285137965e8279f0d2175_82127276', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121478167365e8279f0d2544_13968689', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
