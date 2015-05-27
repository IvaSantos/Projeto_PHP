<div class="container">
	<div class="jumbotron">
    	<h1>Contato</h1>
        <div class="page-header">
			
			<?php if(!isset($_POST['submit'])){ ?>
        
                <form method="post">
                    <div class="form-group">
                        <label for="inputNome">Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="Enter Nome" required="required">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
                    </div>
                    <div class="form-group">
                        <label for="inputAssunto">Assunto</label>
                        <input type="text" class="form-control" name="assunto" placeholder="Assunto" required="required">
                    </div>
                    <div class="form-group">
                        <label for="inputMensagem">Mensagem</label>
                        <textarea class="form-control" name="mensagem" rows="3" required="required" placeholder="Mensagem"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-default">Submit</button>
                </form>
			<?php }else{?>
            
                <h3>Dados enviados com sucesso, abaixo seguem os dados que você enviou:</h3>
                
            <?php 
                echo "<p>Nome: ".$_POST['nome'].'<br />';
                echo "E-mail: ".$_POST['email'].'<br />';
                echo "Assunto: ".$_POST['assunto'].'<br />';
                echo "Mensagem: ".$_POST['mensagem'].'</p>';
            
            }?> 
		</div>               
    </div>
</div>
