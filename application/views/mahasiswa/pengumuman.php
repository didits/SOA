        
      <main class="mdl-layout__content mdl-color--grey-100" style="padding:20px">
                  <?php foreach ($h->result() as $key) { ?>
        <div class="kartu">
          <div class="mdl-card" style="width:100%; heigth:auto">
            <div class="mdl-card__title">
               <h2 class="mdl-card__title-text"><?php echo $key->p_judul;?></h2>
            </div>
            <div class="mdl-card__supporting-text"><?php echo $key->p_isi;?><br><BR>
            </div>
          </div>
        </div>
        <br>
        <?php }?>
      </main>
    </div>

    <!-- Colored FAB button -->
    
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
  </body>
</html>
