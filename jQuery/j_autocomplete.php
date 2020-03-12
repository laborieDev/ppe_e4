<script>
  $( function() {
    var availableVisiteursVa = [
        <?php foreach ($LesVisiteurR as $Visit){
            echo "'".$Visit['nom']."',";
        }
        ?>
    ];
    $( "#visiteursVa" ).autocomplete({ //#visiteursVa est l'id de l'input type text de la recherche
      source: availableVisiteursVa
    });
  } );
  </script>