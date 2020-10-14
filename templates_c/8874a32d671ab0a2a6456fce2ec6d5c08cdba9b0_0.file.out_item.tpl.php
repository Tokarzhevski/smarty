<?php
/* Smarty version 3.1.32, created on 2018-10-23 21:06:35
  from 'D:\OpenServer\domains\smarty\templates\out_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bcf632be5cfd3_73675363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8874a32d671ab0a2a6456fce2ec6d5c08cdba9b0' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\templates\\out_item.tpl',
      1 => 1540317995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcf632be5cfd3_73675363 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="catalog">
    <table  style="border: solid; font-size: larger; width: 930px">
        <tr><th colspan="8"><a href="catalog.php">Back</a></th></tr>
        <tr bgcolor="aqua" style="font-family: 'Comic Sans MS'">
            <th>№</th>
            <th>model</th>
            <th>Data</th>
            <th>Count</th>
            <th>Photo</th>
            <th>Categories</th>
            <th>Price</th>
            <th>Comment</th>
        </tr>
            <tr bgcolor="#7fffd4" align="center">
                <td><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</td>
                <td width="400px"><img src="images/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" style="width: 100%"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['categories']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 $</td>
                <td><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</td>
            </tr>
    </table>
</div><?php }
}
