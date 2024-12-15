<?php
/* Smarty version 5.4.2, created on 2024-12-15 10:24:29
  from 'file:upload.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675eae5d9270e9_62660777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceb191ba8ca89ec29b07966b8b2fe929a0979a74' => 
    array (
      0 => 'upload.tpl',
      1 => 1734258222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_675eae5d9270e9_62660777 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

 <div class="container mt-5">
        <h1 class="text-center mb-4">Upload a File</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <form method="post" action="/process-upload" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="file" class="form-label">Choose File</label>
                                <input type="file" class="form-control" id="file" name="file" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
