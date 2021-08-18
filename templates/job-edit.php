<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Job Aktualisieren</h2>
    <form method="post" action="edit.php?id=<?php echo $job->id; ?>">
        <div>
            <label>Firma Name</label>
            <input type="text" class="form-control" name="firma" value="<?php echo $job->firma; ?>">
        </div>
        <div>
            <label>kategorie</label>
            <select name="kategorie" class="form-select">
                <option value="0">Kategorie Wählen</option>
                <?php foreach($kategories as $kategorie) : ?> 
                    <?php if($job->kategorie_id == $kategorie->id) : ?>
                        <option value="<?php echo $kategorie->id; ?>" selected><?php echo $kategorie->name; ?></option>
                    <?php else: ?>
                        <option value="<?php echo $kategorie->id; ?>"><?php echo $kategorie->name; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label>Job Titel</label>
            <input type="text" class="form-control" name="job_titel" value="<?php echo $job->job_titel; ?>">
        </div>
        <div>
            <label>Beschreibung</label>
            <textarea class="form-control" name="beschreibung"><?php echo $job->beschreibung; ?></textarea>
        </div>
        <div>
            <label>Standort</label>
            <input type="text" class="form-control" name="standort" value="<?php echo $job->standort; ?>">
        </div>
        <div>
            <label>Benutzer Kontakt</label>
            <input type="text" class="form-control" name="kontakt_benutzer" value="<?php echo $job->kontakt_benutzer; ?>">
        </div>
        <div>
            <label>Email</label>
            <input type="text" class="form-control" name="kontakt_email" value="<?php echo $job->kontakt_email; ?>">
        </div>
        <br>
        <input type="submit" class="btn btn-danger float-end" name="aktualisieren" value="Aktualisieren" >
    </form>
<?php include 'inc/footer.php'; ?>