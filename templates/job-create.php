<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Jobs Hinzufügen</h2>
    <form method="post" action="create.php">
        <div>
            <label>Firma Name</label>
            <input type="text" class="form-control" name="firma">
        </div>
        <div>
            <label>kategorie</label>
            <select name="kategorie" class="form-select">
                <option value="">Kategorie Wählen</option>
                <?php foreach($kategories as $kategorie): ?>
                    <option value="<?php echo $kategorie->id; ?>"><?php echo $kategorie->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label>Job Titel</label>
            <input type="text" class="form-control" name="job_titel">
        </div>
        <div>
            <label>Beschreibung</label>
            <textarea class="form-control" name="beschreibung"></textarea>
        </div>
        <div>
            <label>Standort</label>
            <input type="text" class="form-control" name="standort">
        </div>
        <div>
            <label>Benutzer Kontakt</label>
            <input type="text" class="form-control" name="kontakt_benutzer">
        </div>
        <div>
            <label>Email</label>
            <input type="text" class="form-control" name="kontakt_email">
        </div>
        <br>
        <input type="submit" class="btn btn-danger float-end" name="anlegen" value="Anlegen" >
    </form>
<?php include 'inc/footer.php'; ?>