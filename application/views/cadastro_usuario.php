            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            	<div class="col-md-10">
            		<h1 class="page-header">Novo Usuário</h1>
            	</div>


            	<div class="col-md-12">

            		<form action="<?=base_url()?>usuario/cadastro"  method="post">
            			<div class="form-group">
            				<label for="nome">Nome:</label>
            				<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required value="<?=(isset($nome))? $nome:''; ?>">
            			</div>
            			<div class="row">
            				<div class="col-md-3">
            					<div class="form-group">
            						<label for="cpf">Cpf:</label>
            						<input type="text" class="form-control cpf" id="cpf" name="cpf" placeholder="Digite seu cpf" required value="<?=(isset($cpf))? $cpf:''; ?>">
            					</div>
            				</div>
            				<div class="col-md-7">
            					<div class="form-group">
            						<label for="endereco">Endereço:</label>
            						<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu Endereço" required value="<?=(isset($endereco))? $endereco:''; ?>">
            					</div>
            				</div>
            				<div class="col-md-2">
            					<div class="form-group">
            						<label for="nivel">Nivel:</label>
            						<select id="nivel" name="nivel" class="form-control">
            							<option value="1" checked="checked">Administrador</option>
            							<option value="0">Usuário</option>
            						</select>
            					</div>
            				</div>
            			</div>
            			<div class="row">
            				<div class="col-md-4">
            					<div class="form-group">
            						<label for="email">Email:</label>
            						<input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" 
            						value="<?=(isset($email))? $email:''; ?>">
            					</div>
            				</div>
            				<div class="col-md-3">
            					<div class="form-group">
            						<label for="senha">Senha:</label>
            						<input type="password" class="form-control" id="senha" name="senha" placeholder="Digite seu senha" required>
            					</div>
            				</div>
            				<div class="col-md-3">
            					<div class="form-group">
            						<label for="senha2">Repita a senha:</label>
            						<input type="password" class="form-control" id="senha2" name="senha2" placeholder="Digite seu senha" required>
            					</div>
            				</div>
            				<div class="col-md-2">
            					<div class="form-group">
            						<label for="status">Status:</label>
            						<select id="status" name="status" class="form-control">
            							<option value="1" checked="checked">Ativo</option>
            							<option value="0">Inativo</option>
            						</select>
            					</div>
            				</div>
            			</div>
            			<button type="submit" class="btn btn-success"> Enviar </button>
            			<button type="reset" class="btn btn-default"> Cancelar </button>
            		</form>
            	</div>


            </div>

