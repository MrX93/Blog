<!-- Blog Entries Column -->
<div class="col-md-8">

    <h1 class="page-header">
        Upravljanje korisnicima
        <small>sekcija za administraciju</small>
    </h1>

    <?php print form_open('administracija/unesi/korisnik'); ?>
    <div class="form-group">
        <label>Korisnicko ime:</label>
        <?php print form_input(array('id' => 'tbKorisnickoIme', 'name' => 'tbKorisnickoIme', 'class' => 'form-control')); ?></div>
    <div class="form-group">
        <label>Lozinka:</label>
        <?php print form_password(array('id' => 'tbLozinka', 'name' => 'tbLozinka', 'class' => 'form-control')); ?>
    </div>
    <div class="form-group">
        <label>Email:</label>    
    <?php print form_input(array('id' => 'tbEmail', 'name' => 'tbEmail', 'class' => 'form-control')); ?>
    </div>
    <div class="form-group">
        <label>Uloga:</label>
    <?php print form_dropdown('ddlUloga', array('0' => 'Izaberite...', '1' => 'Administrator'),'','class="form-control"'); ?>
    </div>
    <?php print form_submit(array('id' => 'btnUnesi', 'name' => 'btnUnesi', 'value' => 'Unesi', 'class' => 'btn btn-default')) ?>
    <?php print form_close(); ?>

</div>

