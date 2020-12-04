<h1>Lista de Clients</h1>
<table class="table table striped">
    <tr>
        <th>ID Cliente</th>
        <th>Nome</th>
        
        <th>E-mail</th>
        
    </tr>
    <?php
    foreach($clients as $client){
    ?>
        <tr>
            <td>
                <?=$client['idClient']?>
            </td>
            <td>
                <?=$client['name']?>
            </td>
            
            <td>
                <?=$client['email']?> 
            </td>
            <td>
                <a href="<?=base_url("clients/{$client['idClient']}")?>">Ver Detalhes</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>