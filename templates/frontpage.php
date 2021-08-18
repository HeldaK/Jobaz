<?php include 'inc/header.php'; ?>



    <div class="jumbotron">
        <h1 class="display-3">Job Finden</h1>
        <form method="GET" action="index.php">
            <select name="kategorie" class="form-select">
                <option value="0">Kategorie Wählen</option>
                <?php foreach($kategories as $kategorie): ?>
                    <option value="<?php echo $kategorie->id; ?>"><?php echo $kategorie->name; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" class="btn btn-lg btn-danger" value="Finden">
            <br>
        </form>
    </div>
    <h3><?php echo $title; ?></h3>
    <?php foreach($jobs as $job): ?>
    <div class="row marketing">
        <div class="col-md-10">
            <h4><?php echo $job->job_titel; ?></h4>
            <p><?php echo $job->beschreibung; ?></p>
        </div>
        <div class="col-md-2">
            <a class="btn btn-secondary" href="job.php?id=<?php echo $job->id; ?>">Anzeigen</a>
        </div>
    </div>
    <?php endforeach; ?>

    

<?php include 'inc/footer.php'; ?>