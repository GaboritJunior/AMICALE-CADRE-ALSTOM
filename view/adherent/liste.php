<form class="form-horizontal" method="post" action="<?=BASE_URL?>/adherent/archiver">

<section class="table-responsive">
<table id="liste_tournoi" class="table table-bordered table-condensed table-striped">
    <! -- entête tableau -->
     <tr>
                    <td>ID Adherent</td>
                    <td>Mail</td>
                    <td>Password</td>
                    <td>Grade</td>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Genre</td>
                    <td>Matricule</td>
                    <td>Telephone</td>
                    <td>Membre actif </td>
                    <td>Date adhésion</td>
                    <td>Date départ</td>
                    <td>Archiver</td>
                </tr>
     <! -- valeur tableau -->
<?php foreach ($adherent as $a): ?>
                <tr>
                    <td> <a href="<?php echo BASE_URL . '/adherent/detail/' . $a->ID_ADHERENT ?>"><?= $a->ID_ADHERENT ?></td>
                    <td><?= $a->MAIL ?></td>
                    <td><?= $a->PASSWORD ?></td>
                    <td><?= $a->GRADE ?></td>
                    <td><?= $a->NOM ?></td>
                    <td><?= $a->PRENOM ?></td>
                    <td><?= $a->GENRE ?></td>
                    <td><?= $a->MATRICULE ?></td>
                    <td><?= $a->TELEPHONE ?></td>
                    <td><?= $a->MEMBRE_ACTIF ?></td>
                    <td><?= $a->DATE_ADHESION ?></td>
                    <td><?= $a->DATE_DEPART ?></td>
                    <td><input type="checkbox" name="ids[]" value="<?= $a->ID_ADHERENT ?>"></td>            
                   


                </tr>
            <?php endforeach; ?>
</table>
</section>
  
<div class="form-group">
            <label class="col-md-2 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-info">Archiver</button>
            </div>
        </div>
