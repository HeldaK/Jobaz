<?php include_once 'config/init.php';?>

<?php
$job = new JOB;

if(isset($_POST['anlegen'])){
    if(!empty($_POST['job_titel']) && !empty($_POST['firma']) && !empty($_POST["kategorie"]) && !empty($_POST['beschreibung']) && !empty($_POST['standort']) && !empty($_POST['kontakt_benutzer']) && !empty($_POST['kontakt_email'])){
    //create data array
    $data = array();
    $data['job_titel'] = $_POST['job_titel'];
    $data['firma'] = $_POST['firma'];
    $data['kategorie_id'] = $_POST['kategorie'];
    $data['beschreibung'] = $_POST['beschreibung'];
    $data['standort'] = $_POST['standort'];
    $data['kontakt_benutzer'] = $_POST['kontakt_benutzer'];
    $data['kontakt_email'] = $_POST['kontakt_email'];

    if($job->create($data)){
        redirect('index.php', 'Jobs erfolgreich hinzugefügt', 'success');
    }
    else{
        redirect('index.php', 'Etwas ist schief gelaufen', 'error');
    }
    }else{
        echo "Bitte füllen Sie alle Felder aus";
    }
}



$template = new Template('templates/job-create.php');




$template->kategories = $job->getKategories();

 echo $template;