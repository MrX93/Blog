<!-- Blog Entries Column -->
<div class="col-md-8">

    <h1 class="page-header">
        Upravljanje ulogama
        <small>sekcija za administraciju</small>
    </h1>
    <?php print validation_errors('<div class="alert alert-danger" role="alert">','</div>'); ?>
    <?php print form_open('administracija/unesi/uloge'); ?>
    <div class="form-group">
        <label>Naziv:</label>
        <?php print form_input(array('id' => 'naziv', 'name' => 'naziv', 'class' => 'form-control','value'=>set_value('naziv'))); ?>
    </div>
    <?php print form_submit(array('id' => 'btnUnesi', 'name' => 'btnUnesi', 'value' => 'Unesi', 'class' => 'btn btn-default')) ?>
    <?php print form_close(); ?>

</div>

