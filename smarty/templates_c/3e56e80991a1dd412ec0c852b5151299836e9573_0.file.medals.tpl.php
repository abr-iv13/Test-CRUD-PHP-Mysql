<?php
/* Smarty version 3.1.36, created on 2020-12-23 14:18:35
  from 'C:\OpenServer\domains\test_abr\smarty\templates\medals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe3278bc2c766_34682391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e56e80991a1dd412ec0c852b5151299836e9573' => 
    array (
      0 => 'C:\\OpenServer\\domains\\test_abr\\smarty\\templates\\medals.tpl',
      1 => 1608722211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fe3278bc2c766_34682391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1 class="text-center mt-5">Медали</h1>
        <form method="POST" action="store">
            <select class="custom-select mt-5 shadow-sm" name="select_medal">
                <option selected>Выберите медаль</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultMedalsTypes']->value, 'medalType');
$_smarty_tpl->tpl_vars['medalType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['medalType']->value) {
$_smarty_tpl->tpl_vars['medalType']->do_else = false;
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['medalType']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['medalType']->value['name'];?>
</option>
                        <?php
}
if ($_smarty_tpl->tpl_vars['medalType']->do_else) {
?>
                            Нет данных
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <select class="custom-select mt-3 shadow-sm" name="select_country">
                <option selected>Выберите страну</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultCountres']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</option>
                        <?php
}
if ($_smarty_tpl->tpl_vars['country']->do_else) {
?>
                            Нет данных
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <select class="custom-select mt-3 shadow-sm" name="select_sport">
                <option selected>Выберите вид спорта</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultSports']->value, 'sport');
$_smarty_tpl->tpl_vars['sport']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sport']->value) {
$_smarty_tpl->tpl_vars['sport']->do_else = false;
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['sport']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['sport']->value['name'];?>
</option>
                        <?php
}
if ($_smarty_tpl->tpl_vars['sport']->do_else) {
?>
                            Нет данных
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <select class="custom-select mt-3 shadow-sm" multiple="multiple" name="select_player[]">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultPlayers']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['player']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['player']->value['lastname'];?>
 <?php echo $_smarty_tpl->tpl_vars['player']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['player']->value['middlename'];?>
</option>
                        <?php
}
if ($_smarty_tpl->tpl_vars['player']->do_else) {
?>
                            Нет данных
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <button type="submit" class="btn btn-secondary mt-4">Добавить</button>
        </form>
        <table class="table shadow mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Медаль</th>
                    <th>Страна</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Отчество</th>
                    <th>Вид спорта</th>
                    <th>Действие</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultQueryAll']->value, 'medal');
$_smarty_tpl->tpl_vars['medal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['medal']->value) {
$_smarty_tpl->tpl_vars['medal']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['medal']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['medal']->value['medal'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['medal']->value['country'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['medal']->value['lastname'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['medal']->value['firstname'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['medal']->value['middlename'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['medal']->value['sport'];?>
</td>
                        <td><a href="/medal/delete?delete_medal=<?php echo $_smarty_tpl->tpl_vars['medal']->value['id'];?>
" class="btn btn-outline-danger btn-sm">Удалить</a></td>
                    </tr>   
                    <?php
}
if ($_smarty_tpl->tpl_vars['medal']->do_else) {
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
