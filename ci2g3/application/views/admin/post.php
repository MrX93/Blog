<!-- Blog Entries Column -->
<div class="col-md-8">

    <h1 class="page-header">
        Upravljanje postovima
        <small>sekcija za administraciju</small>
    </h1>

    <?php print form_open('administracija/unesi/post'); ?>
    <div class="form-group">
        <label>Naziv:</label>
        <?php print form_input(array('id' => 'tbNaslov', 'name' => 'tbNaslov', 'class' => 'form-control')); ?>
    </div>
    <div class="form-group">
        <label>Tekst:</label>
        <?php print form_textarea(array('id' => 'taTekst', 'name' => 'taTekst', 'class' => 'form-control')); ?>
    </div>
    <div class="checkbox">
    <label>
      <?php print form_checkbox(array('name'=> 'chbStatus','id'=>'chbStatus','value'=>'1')); ?>
    </label>
  </div>
  <div class="form-group">
        <label>Slike:</label>
        <?php print form_upload(array('id' => 'slika', 'name' => 'slika', 'class' => 'form-control')); ?>
    </div>  
    <?php print form_submit(array('id' => 'btnUnesi', 'name' => 'btnUnesi', 'value' => 'Unesi', 'class' => 'btn btn-default')) ?>
    <?php print form_close(); ?>

</div>

