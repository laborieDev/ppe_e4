<?php include('jQuery/j_autocomplete.php'); ?>

<!-- Formulaire de recherche  -->
<form action="index.php?uc=Remboursement&action=ValidFicheR" method="post">
  <div class="ui-widget">
    <label for="visiteursVa">Rechercher un nom: </label>
    <input id="visiteursV" name="nom">
    <input type="submit" value="&#128269;" id="recherche"/>
  </div>
</form>

<h1>Liste des visiteurs</h1>
<table class="liste_visiteurs">
    <thead>
        <tr>
            <th>identifiant</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>fiche</th>
        </tr>
    </thead>
    <tbody>
      <?php
        foreach ($LesVisiteur as $unVisiteur)
        { ?>
        <tr>
            <td><?php echo $unVisiteur['id']; ?></td>
            <td><?php echo $unVisiteur['nom'];?></td>
            <td><?php echo $unVisiteur['prenom'];?></td>
            <td><a href="index.php?uc=Remboursement&action=lesFiches&id=<?php echo $unVisiteur['id']; ?>"><input type="button" value="Rembourser"></a></td>

        </tr>
        <?php } ?>
    </tbody>
</table>