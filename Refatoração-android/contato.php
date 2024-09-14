<?php
include 'includes/header.php';
include 'includes/menu.php';
?>

<main>
    <div>
        <h1 id="clique_exercicio">Contato</h1>
        <p>Fale conosco</p>
        <div>
            <form action="" method="post" id="form_exercicio">
                <div>
                    <label for="form_nome">Digite seu nome</label>
                    <input type="text" id="form_nome" name="nome">
                </div>
                <div>
                    <label for="form_email">Digite seu e-mail</label>
                    <input type="text" id="form_email" name="email">
                </div>
                <div>
                    <label for="form_mensagem">Digite sua mensagem</label>
                    <textarea id="form_mensagem" placeholder="Digite a mensagem completa" name="mensagem"></textarea>
                </div>
                <input type="submit" value="Enviar via atributo do input">
            </form>
        </div>
    </div>
</main>

<?php 
include 'includes/footer.php';
?>

<script src="../assets/js/scripts.js"></script>