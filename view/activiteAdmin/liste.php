<div class="alert-info" name="info"><?= (isset($info) ? $info : '') ?></div> <br>
<section class="table-responsive">
    <form  class="form-horizontal" method="POST" action="<?= BASE_URL ?>/activiteAdmin/archivage">
  
    <table id="liste_tournoi" class="table table-bordered table-condensed table-striped">
        <!-- entête tableau -->
        <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Detail</td>
            <td>Date de creation</td>
            <td>Date de paiement</td>
            <td>Adresse de l'activité</td>
            <td>Code postal </td>
            <td>Ville</td>
            <td>Age Minimum </td>
            <td>Forfait </td>
            <td>Tarif forfait </td>
            <td>Tarif unitaire </td>
            <td>Statut</td>
            <td>Ouverture au personne extérieur </td>
            <td>Prix Adulte</td>
            <td>Prix Enfant </td>
            <td>Prix Adulte exterieur</td>
            <td>Prix Enfant exterieur</td>
            <td>Coût Adulte </td>
            <td>Coût Enfant </td>
            <td>Indication aux participant</td>
            <td>Information importante pour les participants</td>
            <td>Liste créneaux</td>
            <td>Créneau</td>
            <td>Archiver</td>
        </tr>

        <!-- valeur tableau -->           
        <?php foreach ($activite as $a): ?>
            <tr>
                <td> <a href="<?php echo BASE_URL . '/activiteAdmin/detail/' . $a->ID_ACTIVITE ?>"><?= $a->ID_ACTIVITE ?></td>
                <td><?= $a->NOM ?></td>
                <td><?= $a->DETAIL ?></td>
                <td><?= $a->DATE_CREATION ?></td>
                <td><?= $a->DATE_PAIEMENT ?></td>
                <td><?= $a->ADRESSE ?></td>
                <td><?= $a->CP ?></td>
                <td><?= $a->VILLE ?></td>
                <td><?= $a->AGE_MINIMUM ?></td>
                <td><?= $a->FORFAIT ?></td>
                <td><?= $a->TARIF_FORFAIT ?></td>
                <td><?= $a->TARIF_UNIT ?></td>
                <td><?= $a->STATUT ?></td>
                <td><?= $a->OUVERT_EXT ?></td>
                <td><?= $a->PRIX_ADULTE ?></td>
                <td><?= $a->PRIX_ENFANT ?></td>
                <td><?= $a->PRIX_ADULTE_EXT ?></td>
                <td><?= $a->PRIX_ENFANT_EXT ?></td>
                <td><?= $a->COUT_ADULTE ?></td>
                <td><?= $a->COUT_ENFANT ?></td>
                <td><?= $a->INDICATION_PARTICIPANT ?></td>
                <td><?= $a->INFO_IMPORTANT_PARTICIPANT ?></td>
                <td>
                    <?php
                    foreach ($creneau as $c) {
                        if ($a->ID_ACTIVITE == $c->ID_ACTIVITE) {
                            echo '<input type="button" id="singlebutton" name="singlebutton" class="btn btn-'. (($c->STATUT)=='A'? 'warning' : ($c->STATUT=='V'? 'info':($c->STATUT=='O'?'success':($c->STATUT=='F'?'danger':($c->STATUT=='T'?'secondary':'secondary')))) ) .'" onclick="window.location.href = \'../activiteAdmin/formulaireCreneau/' . $id['idActivite']=$a->ID_ACTIVITE .  $id['idCreneau']=(isset($c->NUM_CRENEAU) ? '_'.$c->NUM_CRENEAU : ''). '\'" value="' . $c->DATE_CRENEAU . ' - ' . $c->HEURE_CRENEAU . '">';
                        }
                    }
                    echo '<input type="button" id="singlebutton" name="singlebutton" class="btn btn-info" onclick="window.location.href = \'../activiteAdmin/formulaireCreneau/' . $a->ID_ACTIVITE . '\'" value="+">';
                    ?></td>
                <td></td>                
                <td><input type="checkbox" name="ids[]" value="<?= $a->ID_ACTIVITE ?>"></td>
            </tr>
        <?php endforeach; ?>                
    </table>
    <input type="submit" name="archiver" value="Archiver">
    </form>
</section>

