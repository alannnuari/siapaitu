
<script src="<?=$base_url?>assets/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
        <?php 
          $query_form = mysql_query("SELECT * FROM pembangkit_mesin_form as a, pembangkit_mesin_atribut as b WHERE a.id_atribut = b.id_atribut AND b.id_atribut='$param'");
          while ($data_form=mysql_fetch_array($query_form)) {
            ?>
            $( "#<?=$data_form['id_form'];?>" ).on('input', function() {

            $maks = <?=$data_form['nilai_maks'];?>;
            if ($maks!=0 && $(this).val()>$maks) {
                alert('Anda mencapai batas maksimal <?=$data_form['nilai_maks'];?>');       
            }
        });
        <?php } ?>
  });
</script>