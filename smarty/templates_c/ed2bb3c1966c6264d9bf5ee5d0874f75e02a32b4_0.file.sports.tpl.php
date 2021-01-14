<?php
/* Smarty version 3.1.36, created on 2020-12-23 14:09:15
  from 'C:\OpenServer\domains\test_abr\smarty\templates\sports.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe3255bcabe72_23752734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed2bb3c1966c6264d9bf5ee5d0874f75e02a32b4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\test_abr\\smarty\\templates\\sports.tpl',
      1 => 1608721751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fe3255bcabe72_23752734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1 class="text-center mt-5">Вид спорта</h1>
        <form method="POST" action="store">
            <div class="form-group mt-5">
                <label for="sport">Вид спорта</label>
                <input type="text" class="form-control" id="sport" placeholder="Вид спорта" name="sport">
                <small class="form-text text-muted"></small>
                <button type="submit" class="btn btn-secondary mt-2">Добавить</button>
            </div>
        </form>
        <table class="table shadow mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Вид спорта</th>
                    <th>Действие</th>
                </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultSports']->value, 'sport');
$_smarty_tpl->tpl_vars['sport']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sport']->value) {
$_smarty_tpl->tpl_vars['sport']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['sport']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['sport']->value['name'];?>
</td>
                            <td><a href="/sport/delete?delete_item=<?php echo $_smarty_tpl->tpl_vars['sport']->value['id'];?>
 " class="btn btn-outline-danger btn-sm">Удалить</a></td>
                        </tr>
                        <?php
}
if ($_smarty_tpl->tpl_vars['sport']->do_else) {
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
