<?php
/* Smarty version 3.1.36, created on 2020-12-23 14:33:47
  from 'C:\OpenServer\domains\test_abr\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe32b1ba96835_56908247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb91b8d2c483722bba918502381b3ccd1aec364b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\test_abr\\smarty\\templates\\index.tpl',
      1 => 1608723187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fe32b1ba96835_56908247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1 class="text-center mt-5">Олимпийские игры <br/> Медальный зачет</h1>
        <table class="table shadow mt-5">
            <thead class="thead-dark">
                <tr>
                    <th><a class="text-decoration-none text-white" href="?sort=<?php if ($_GET['sort'] == 'rank_asc') {?>rank_desc<?php } else { ?>rank_asc<?php }?>">Место</a></th>
                    <th><a class="text-decoration-none text-white" href="?sort=<?php if ($_GET['sort'] == 'country_asc') {?>country_desc<?php } else { ?>country_asc<?php }?>">Страна</a></th>
                    <th><a class="text-decoration-none text-warning" href="?sort=<?php if ($_GET['sort'] == 'gold_asc') {?>gold_desc<?php } else { ?>gold_asc<?php }?>">1</a></th>
                    <th><a class="text-decoration-none text-white" href="?sort=<?php if ($_GET['sort'] == 'silver_asc') {?>silver_desc<?php } else { ?>silver_asc<?php }?>">2</a></th>
                    <th><a class="text-decoration-none text-danger" href="?sort=<?php if ($_GET['sort'] == 'bronze_asc') {?>bronze_desc<?php } else { ?>bronze_asc<?php }?>">3</a></th>
                    <th><a class="text-decoration-none text-white" href="?sort=<?php if ($_GET['sort'] == 'all_medals_asc') {?>all_medals_desc<?php } else { ?>all_medals_asc<?php }?>">Все</a></th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultSumMedals']->value, 'sumMedals');
$_smarty_tpl->tpl_vars['sumMedals']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sumMedals']->value) {
$_smarty_tpl->tpl_vars['sumMedals']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['newArray']->value[$_smarty_tpl->tpl_vars['sumMedals']->value['country_id']];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sumMedals']->value['country'];?>
</td>
                        <td><a class="text-decoration-none text-secondary" href="/statistic/index/?index_country=<?php echo $_smarty_tpl->tpl_vars['sumMedals']->value['country_id'];?>
&type_medal=1"><?php echo $_smarty_tpl->tpl_vars['sumMedals']->value['gold'];?>
</a></td>
                        <td><a class="text-decoration-none text-secondary" href="/statistic/index/?index_country=<?php echo $_smarty_tpl->tpl_vars['sumMedals']->value['country_id'];?>
&type_medal=2"><?php echo $_smarty_tpl->tpl_vars['sumMedals']->value['silver'];?>
</a></td>
                        <td><a class="text-decoration-none text-secondary" href="/statistic/index/?index_country=<?php echo $_smarty_tpl->tpl_vars['sumMedals']->value['country_id'];?>
&type_medal=3"><?php echo $_smarty_tpl->tpl_vars['sumMedals']->value['bronze'];?>
</a></td>
                        <td><a class="text-decoration-none text-secondary" href="/statistic/index/?index_country=<?php echo $_smarty_tpl->tpl_vars['sumMedals']->value['country_id'];?>
&type_medal="><?php echo $_smarty_tpl->tpl_vars['sumMedals']->value['all_medals'];?>
</a></td>
                    </tr>
                <?php
}
if ($_smarty_tpl->tpl_vars['sumMedals']->do_else) {
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
