<?php include 'inc/header.php'; ?>

    <h2 class="page-header"><?php echo $job->job_titel; ?> (<?php echo $job->standort; ?>)</h2>
    <small>postet von <?php echo $job->kontakt_benutzer; ?> am <?php echo $job->post_date; ?></small>
    <hr>
    <br>
    <p class="lead"><?php echo $job->beschreibung; ?></p>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"> <strong>Firma:</strong> <?php echo $job->firma; ?></li>
        <li class="list-group-item"> <strong>Kontakt Email:</strong> <?php echo $job->kontakt_email; ?></li>
    </ul>
    <br><br>
    <a href="index.php" class="btn btn-secondary">Zurück</a>
    <br><br>
    <div class="well">
        <a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-secondary">Bearbeiten</a>

        <form style="display:inline;" method="post" action="job.php">
            <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
            <input type="submit" class="btn btn-danger" value="Löschen">
        </form>
    </div>
    
<?php include 'inc/footer.php'; ?>