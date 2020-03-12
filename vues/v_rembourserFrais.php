<?php
if($_GET['action']=="Valider"){?>

    <form action = "index.php" method="get">
        <input type="hidden" name="uc" value="Remboursement">  
        <input type="hidden" name="action" value="OK">  
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="hidden" name="mois" value="<?php echo $mois ?>">
        <h2>Confirmez-vous ce remboursement ?</h2><br>
        <div class="confirm">
          <input type="submit" name="yes" value="Oui"/>
          <input type="submit" name="no" value="Non"/>
        </div>
    </form>
<?php } else{ ?>
<h3>Fiche de frais de <?php echo $nom." ".$prenom?> : 
    </h3>
    <div class="encadre">
  	<table class="listeLegere">
             <tr>
                <th class="date">Date</th>
                <th class="libelle">Nombres de justificatifs</th>
                <th class='montant'>Montant</th> 
                <th>Rembourser</th>               
             </tr>
             <tr>
                <td><?php echo $dateModif ?></td>
                <td><?php echo $nbJustificatifs ?></td>
                <td><?php echo $montantValide." €" ?></td>
                <th><a href = "index.php?uc=Remboursement&action=Valider&id=<?php echo $id ?>&mois=<?php echo $mois ?>">🆗</a>
             </tr>
    </table>
  </div>
  </div>
<?php } ?>













