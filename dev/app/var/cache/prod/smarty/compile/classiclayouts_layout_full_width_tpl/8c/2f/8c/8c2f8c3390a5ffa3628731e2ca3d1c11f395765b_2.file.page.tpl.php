<?php
/* Smarty version 4.3.4, created on 2024-03-06 09:21:51
  from '/app/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e8279f0d6123_92808857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c2f8c3390a5ffa3628731e2ca3d1c11f395765b' => 
    array (
      0 => '/app/themes/classic/templates/page.tpl',
      1 => 1697822646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e8279f0d6123_92808857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125611158265e8279f0d44e8_59065038', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_209204208065e8279f0d49e9_28679768 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_111023063765e8279f0d46f0_15338417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209204208065e8279f0d49e9_28679768', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_163937510665e8279f0d5353_50228316 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_132859783565e8279f0d5611_56418322 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_190642880965e8279f0d5178_29530169 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163937510665e8279f0d5353_50228316', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132859783565e8279f0d5611_56418322', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_163278298165e8279f0d5c05_42382834 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_126697660365e8279f0d5a56_35948093 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163278298165e8279f0d5c05_42382834', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_125611158265e8279f0d44e8_59065038 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_125611158265e8279f0d44e8_59065038',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_111023063765e8279f0d46f0_15338417',
  ),
  'page_title' => 
  array (
    0 => 'Block_209204208065e8279f0d49e9_28679768',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_190642880965e8279f0d5178_29530169',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_163937510665e8279f0d5353_50228316',
  ),
  'page_content' => 
  array (
    0 => 'Block_132859783565e8279f0d5611_56418322',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_126697660365e8279f0d5a56_35948093',
  ),
  'page_footer' => 
  array (
    0 => 'Block_163278298165e8279f0d5c05_42382834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111023063765e8279f0d46f0_15338417', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190642880965e8279f0d5178_29530169', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126697660365e8279f0d5a56_35948093', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
