<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-15 16:53:42
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3135057daa775d36d64-21459957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d06fa9c0b25d941af12b6d490b9441c02661833' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1473947618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3135057daa775d36d64-21459957',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57daa775da04f0_67711941',
  'variables' => 
  array (
    'getServers' => 0,
    'ADMIN' => 0,
    'Server' => 0,
    'color' => 0,
    'colspan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57daa775da04f0_67711941')) {function content_57daa775da04f0_67711941($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <title>Game Nation</title>
    <link rel="shortcut icon" href='http://g-nation.ru/favicon.ico'/>
    <link rel="image_src" href='http://g-nation.ru/public/style_images/g_nation/meta_image.png'/>
    <meta property="og:title" content="Game Nation"/>
    <meta property="og:site_name" content="Game Nation"/>
    <meta name="description"
          content="������ ������ �� ������ �������� ������. ������������� � ���������� action - ���� �ounter-Strike. ������ �������� ������������� ���������� � �������, ��� ������������, � ��� �� ����.���� ��� ����� �������� � ���������. ���������� � ���������� �����������."/>
    <meta property="og:description"
          content="������ ������ �� ������ �������� ������. ������������� � ���������� action - ���� �ounter-Strike. ������ �������� ������������� ���������� � �������, ��� ������������, � ��� �� ����.���� ��� ����� �������� � ���������. ���������� � ���������� �����������."/>
    <meta name="keywords" content="Counter Strike, cs 16, ������, ������� ������"/>
    <meta property="og:image" content="http://g-nation.ru/public/style_images/g_nation/meta_image.png"/>
    <!-- jQuery -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.10.2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//code.jquery.com/ui/1.11.3/jquery-ui.js"><?php echo '</script'; ?>
>
    <!-- jQuery -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
    <!-- Bootstrap -->
    <!-- Custom -->
    <?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom -->
    <!-- ��������� -->
    <?php echo '<script'; ?>
 src="//vk.com/js/api/openapi.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- ��������� -->
</head>
<body>
<?php if (isset($_smarty_tpl->tpl_vars['getServers']->value['error'])) {?>
	<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['getServers']->value['error_message'];?>
</div>
<?php } else { ?>
	<a href="monitoring.php"> qwe</a>
<table class='table table-bordered'>
    <tr class="center" style="    background-color: #6b6a6a;" id="">
        <th>������</th>
        <th>��������</th>
        <th>����</th>
        <th>������������</th>
        <th>�����</th>
        <th>������</th>
		<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
			<th>�������</th>
		<?php }?>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['Server'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Server']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getServers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Server']->key => $_smarty_tpl->tpl_vars['Server']->value) {
$_smarty_tpl->tpl_vars['Server']->_loop = true;
?>
        <?php if (!$_smarty_tpl->tpl_vars['Server']->value['Status']) {?>
            <?php $_smarty_tpl->createLocalArrayVariable('Server', null, 0);
$_smarty_tpl->tpl_vars['Server']->value['Status'] = 'Offline';?>
            <?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('red', null, 0);?>
            <?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable(5, null, 0);?>
            <tr class="danger" id="">
                <td><span class=<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
><?php echo $_smarty_tpl->tpl_vars['Server']->value['Status'];?>
</span></td>
                <td colspan= <?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
><?php echo $_smarty_tpl->tpl_vars['Server']->value['ip'];?>
</td>
				<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
					<td class="center"><input id=<?php echo $_smarty_tpl->tpl_vars['Server']->value['id'];?>
 type="button" class="btn btn-primary	 serverdel" name="serverdel"
							   value="�������">
						<input type="hidden" class="button serverdel" name="" value=>

					</td>
				<?php }?>
            </tr>
        <?php } else { ?>
            <?php $_smarty_tpl->createLocalArrayVariable('Server', null, 0);
$_smarty_tpl->tpl_vars['Server']->value['Status'] = 'Online';?>
            <?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('green', null, 0);?>
            <?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable(0, null, 0);?>
            <tr class="success hovered" id="" title="<?php echo $_smarty_tpl->tpl_vars['Server']->value['description'];?>
">
                <td colspan= <?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
><span class=<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
><?php echo $_smarty_tpl->tpl_vars['Server']->value['Status'];?>
</span></td>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['Server']->value['HostName'];?>
</strong></td>
                <td class="center"><img src="img/<?php echo $_smarty_tpl->tpl_vars['Server']->value['ModDir'];?>
.png"></td>
                <td class="center"><a href=steam://connect/<?php echo $_smarty_tpl->tpl_vars['Server']->value['ip'];?>
:<?php echo $_smarty_tpl->tpl_vars['Server']->value['GamePort'];?>
><?php echo $_smarty_tpl->tpl_vars['Server']->value['ip'];
if ($_smarty_tpl->tpl_vars['Server']->value['GamePort']!=27015) {?>:<?php echo $_smarty_tpl->tpl_vars['Server']->value['GamePort'];
}?></a></td>
                <td class="center"><?php echo $_smarty_tpl->tpl_vars['Server']->value['Map'];?>
 </td>
                <td class="center"><?php echo $_smarty_tpl->tpl_vars['Server']->value['Players'];?>
 �� <?php echo $_smarty_tpl->tpl_vars['Server']->value['MaxPlayers'];?>
 </td>
				<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
					<td class="center"><input id=<?php echo $_smarty_tpl->tpl_vars['Server']->value['id'];?>
 type="button" class="btn btn-primary serverdel" name="serverdel"
							   value="�������">
						<input type="hidden" class="button serverdel" name="" value=>

					</td>
				<?php }?>
            </tr>
        <?php }?>
    <?php } ?>
</table>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>

<?php }?><?php }} ?>
