            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

              <div class="col-md-10">
                <h1 class="page-header">Alterar Usuário</h1>
              </div>


              <div class="col-md-12">

                <form action="<?=base_url()?>usuario/alterar/<?=$usuario[0]->idusuario?>"  method="post">
                  <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required value="<?=$usuario[0]->nome?>">
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="cpf">Cpf:</label>
                        <input type="text" class="form-control cpf" id="cpf" name="cpf" placeholder="Digite seu cpf" required value="<?=$usuario[0]->cpf?>">
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu Endereço" required value="<?=$usuario[0]->endereco?>">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="nivel">Nivel:</label>
                        <select id="nivel" name="nivel" class="form-control">
                          <option value="1"  <?=($usuario[0]->nivel==1)?'selected="selected"':''?> >Administrador</option>
                          <option value="0" <?=($usuario[0]->nivel==0)?'selected="selected"':''?> >Usuário</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" 
                        value="<?=$usuario[0]->email?>">
                      </div>
                    </div>
                                      
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="status">Status:</label>
                        <select id="status" name="status" class="form-control">
                          <option value="1" <?=($usuario[0]->status==1)?'selected="selected"':''?>>Ativo</option>
                          <option value="0" <?=($usuario[0]->status==0)?'selected="selected"':''?>>Inativo</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success"> Alterar </button>
                  <button type="reset" class="btn btn-default"> Cancelar </button>
                </form>
              </div>


            </div>

