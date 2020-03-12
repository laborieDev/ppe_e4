<h1>Liste des visiteurs</h1>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date</th>
            <th>fiche</th>
        </tr>
    </thead>
    <tbody>
      <?php
      //echo date("m");
        foreach ($LesVisiteur as $unVisiteur)
        { ?>
        <tr>
            <td><?php echo $unVisiteur['nom'];?><?php echo $unVisiteur['id']; ?></td>
            <td><?php echo $unVisiteur['prenom'];?></td>
            <td><select name="mois">
              <?php
                for ($i=1; $i <13 ; $i++) {
                  if($i==date("m")){
                    ?>
                    <option selected value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php
                  }else{
                    ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php
                  }
                }
              ?>
                </select>
            </td>
            <td><a href="index.php?uc=validerFrais&action=lesFiches&id=<?php echo $unVisiteur['id']; ?>"><input type="button" value="Voir"></a></td>

        </tr>
        <?php } ?>
    </tbody>
</table>
