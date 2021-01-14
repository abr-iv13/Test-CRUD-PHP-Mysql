<?php
/* Smarty version 3.1.36, created on 2020-12-23 14:35:19
  from 'C:\OpenServer\domains\test_abr\smarty\templates\statistics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe32b77391c69_60790972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1034d84d3e1c0a585807d16c241d115c763511f7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\test_abr\\smarty\\templates\\statistics.tpl',
      1 => 1608723316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fe32b77391c69_60790972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1 class="text-center mt-5">Статистика</h1>
        <table class="table shadow mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>Вид спорта</th>
                    <th>Медаль</th>
                    <th>Страна</th>
                    <th>Участники</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultMedalsFromCountry']->value, 'stat');
$_smarty_tpl->tpl_vars['stat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['sport'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['medal'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['country'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['group_name'];?>
</td>
                    </tr>
                    <?php
}
if ($_smarty_tpl->tpl_vars['stat']->do_else) {
?>
                        Нет данных
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </thead>
        </table>
    </div>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
