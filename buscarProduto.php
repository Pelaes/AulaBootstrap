<?php
    include 'conexao.php';

    $sql = $conn->prepare("SELECT * FROM Produtos where ativo = 1");
    $sql->execute();
    $resultado = $sql->get_result();
    while($linha = $resultado->fetch_assoc()){
        echo "
            <div class='col-lg-3 col-sm-6 mb-5'>
                <div class='card h-100'>
                    <img class='card-img-top' src='".$linha['imagem']."'>
                    <div class='card-body'>   
                        <h4 class='card-title text-center'>".$linha['nome']."</h4>
                        <p class='card-text text-justify'>".$linha['descricao']."</p>
                    </div>
                    <div class='card-footer bg-white border-0'>
                        <form action='' method='POST'>
                            <button class='btn btn-outline-success btn-block card-link'>
                                <label class='mr-3 mt-2'>R$ ".$linha['preco']."</label>
                                <img src='imagens/carrinho_p.png' alt='Carrinho de compras'>
                            </button>
                            <input type='hidden' name='id' value='".$linha['id']."'>
                            <input type='hidden' name='preco' value='".$linha['preco']."'>
                        </form>
                    </div>            
                </div>
            </div>
        ";
    }   

?>
