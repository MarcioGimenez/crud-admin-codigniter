            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

              <div class="col-md-9">
                <h1 class="page-header">Usuários</h1>
              </div>
              <div class="col-md-3">
                <a class="btn btn-primary" href="<?=base_url()?>usuario/cadastro"> Novo Usuário </a>
              </div>
              <br>
              <div class="row">
              <div class="col-md-12">
              <table  class="table table-striped">
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Nível</th>
                  <th>Status</th>
                  <th></th>
                  
                </tr>
                  <?php 
                  if($usuarios):
                  foreach ($usuarios as $usuario): ?>
           
                
                <tr>
                  <td><?=$usuario->idusuario?></td>
                  <td><?=$usuario->nome?></td>
                  <td><?=$usuario->email?></td>
                  <td><?=$usuario->nivel==1?'Administrador':'Usuário'?></td>
                  <td><?=$usuario->status==1?'Ativo':'Inativo'?></td>
                  <td><a href="<?=base_url('usuario/alterar/'.$usuario->idusuario)?>" class="btn btn-primary">Alterar</a>
                  <a href="<?=base_url('usuario/excluir/'.$usuario->idusuario)?>" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir o usuário ?')">Excluir</a></td>
                </tr>
              <?php endforeach; endif;?>
              </table>
      
                

              </div>
              </div>
            </div>

