
    <h1>Voitures disponibles</h1>
    <a href="<?=base_url()?>voitures/ajout" class="btn btn-primary">Ajouter</a>
    <table class="table table-dark table-striped">
        <thead>
            <th>Id Voiture</th>
            <th>Marque</th>
            <th>Numéro</th>
            <th>Couleur</th>
            <th>Image</th>
        </thead>
        <tbody>
            <?php foreach($voitures as $voiture) : ?>
            <tr>
                <td><?=$voiture['idVoiture']?></td>
                <td><?=$voiture['marque']?></td>
                <td><?=$voiture['numero']?></td>
                <td><?=$voiture['couleur']?></td>
                <td><?=$voiture['img']?></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
