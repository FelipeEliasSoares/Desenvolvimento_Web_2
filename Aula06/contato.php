<?php
    require 'header.php';
?>
    <div class="text-center">
        <h2>Formulario para contato</h2>
    </div>


    <div class="container form-group">
        <form action="contato-destino.php" method="post">
            <div class="row">
                <div class="col-sm">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
                </div>

                <div class="col-sm">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
                </div>    
            </div>
            <br>
            
            <label for="mensagem">Mensagem</label>
            <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Digite sua mensagem" style="height: 35vh;"></textarea>

            <br>

            <div class="d-flex d-flex justify-content-center">
                <button type="submit" class="btn btn-primary m-3 ">Enviar</button>
                <button type="reset" class="btn btn-secondary m-3 ">Limpar</button>
            </div>

        </form>
    </div>


<?php
    require 'footer.php';
?>
