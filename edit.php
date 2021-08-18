<?php include_once 'config/init.php';?>

<?php
$job = new JOB;

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['aktualisieren'])){
    //update data array
    $data = array();
    $data['job_titel'] = $_POST['job_titel'];
    $data['firma'] = $_POST['firma'];
    $data['kategorie_id'] = $_POST['kategorie'];
    $data['beschreibung'] = $_POST['beschreibung'];
    $data['standort'] = $_POST['standort'];
    $data['kontakt_benutzer'] = $_POST['kontakt_benutzer'];
    $data['kontakt_email'] = $_POST['kontakt_email'];

    if($job->update($job_id, $data)){
        redirect('index.php', 'Job ist erfolgreich Aktualisiert', 'success');
    }
    else{
        redirect('index.php', 'Etwas ist schief gelaufen', 'error');
    }
}


$template = new Template('templates/job-edit.php');

$template->job = $job->getJob($job_id);
$template->kategories = $job->getKategories();

 echo $template;