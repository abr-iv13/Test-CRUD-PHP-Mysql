<?php
/* Smarty version 3.1.36, created on 2020-12-23 14:19:33
  from 'C:\OpenServer\domains\test_abr\smarty\templates\country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe327c55fde12_30902069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4431b8d15ef7cb4669c350b08d2c96f74a7da54b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\test_abr\\smarty\\templates\\country.tpl',
      1 => 1608721820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fe327c55fde12_30902069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1 class="text-center mt-5"><?php echo $_smarty_tpl->tpl_vars['wow']->value;?>
 </h1>
        <form method="POST" action="store" class="mt-5 mb-3">
            <div class="form-group ">
                <input type="text" class="form-control " name="country" placeholder="Выберите страну ">
            </div>
            <button type="submit" class="btn btn-secondary">Добавить</button>
        </form>
        <table class="table shadow mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Страна</th>
                    <th>Действие</th>
                </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultCountres']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
                            <td><a href="/country/delete?delete_country=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn btn-outline-danger btn-sm">Удалить</a></td>
                        </tr>
                        <?php
}
if ($_smarty_tpl->tpl_vars['value']->do_else) {
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
