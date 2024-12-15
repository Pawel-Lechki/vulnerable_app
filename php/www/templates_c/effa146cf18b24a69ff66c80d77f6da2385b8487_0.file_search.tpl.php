<?php
/* Smarty version 5.4.2, created on 2024-12-15 10:27:05
  from 'file:search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675eaef9b93955_33452460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'effa146cf18b24a69ff66c80d77f6da2385b8487' => 
    array (
      0 => 'search.tpl',
      1 => 1734258322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_675eaef9b93955_33452460 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container mt-5">
        <h1 class="text-center mb-4">Search Users</h1>
        <form method="get" action="/search" class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" name="q" placeholder="Enter username">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('results'), 'result');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('result')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('result')['id'];?>
</td>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('result')['username'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('result')['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
