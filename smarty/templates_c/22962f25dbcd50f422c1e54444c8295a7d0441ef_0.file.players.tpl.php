<?php
/* Smarty version 3.1.36, created on 2020-12-23 14:14:16
  from 'C:\OpenServer\domains\test_abr\smarty\templates\players.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe326881c43b3_02171456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22962f25dbcd50f422c1e54444c8295a7d0441ef' => 
    array (
      0 => 'C:\\OpenServer\\domains\\test_abr\\smarty\\templates\\players.tpl',
      1 => 1608722051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fe326881c43b3_02171456 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1 class="text-center mt-5">Игроки</h1>
        <form method="POST" action="store">
            <div class="form-group mt-3">
                <label for="firstname">Фамилия</label>
                <input type="text" class="form-control" id="firstname" name="add_last_name" placeholder="Фамилия">
                <small class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Имя</label>
                <input type="text" class="form-control" id="exampleInput" name="add_first_name" placeholder="Имя">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Отчество</label>
                <input type="text" class="form-control" id="exampleInput" name="add_middle_name" placeholder="Отчество">
            </div>
            <button type="submit" class="btn btn-secondary">Добавить</button>
        </form>
        <table class="table shadow mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Действие</th>
                </tr>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultPlayers']->value, 'palyer');
$_smarty_tpl->tpl_vars['palyer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['palyer']->value) {
$_smarty_tpl->tpl_vars['palyer']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['palyer']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['palyer']->value['lastname'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['palyer']->value['firstname'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['palyer']->value['middlename'];?>
</td>
                            <td><a href="/player/delete?delete=<?php echo $_smarty_tpl->tpl_vars['palyer']->value['id'];?>
" class="btn btn-outline-danger btn-sm">Удалить</a></td>
                        </tr>
                        <?php
}
if ($_smarty_tpl->tpl_vars['palyer']->do_else) {
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
