    <footer class="pt-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 my-auto mx-auto text-muted text-center">
            <p>&copy; <?= date("Y"); ?>. All rights reserved</p>
          </div>
        </div>
      </div>
    </footer>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/@fortawesome/fontawesome-free/js/all.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/jquery-confirm/dist/jquery-confirm.min.js"></script>
    <script src="node_modules/glightbox/dist/js/glightbox.min.js"></script>
    <script src="assets/js/main/main.js"></script>
    <?php
    //import manually

    //import from param controller view
    if (isset($libs) && count($libs) > 0) 
    {
      foreach ($libs as $lib)
      {
        echo '<script src="' . $lib . '?no_cache=' . rand(0, 10) . '"></script>';
      }
    }    
    ?>
  </body>
</html>