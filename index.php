<?php include_once 'config/init.php';?>

<?php
$job = new JOB;

$template = new Template('templates/frontpage.php');

$kategorie = isset($_GET['kategorie']) ? $_GET['kategorie'] : null;

if($kategorie){
    $template->jobs = $job->getByKategorie($kategorie);
    $template->title = 'Jobs in '. $job->getKategorie($kategorie)->name;
}
else
{
    $template->title = 'Letzte Jobs';
    $template->jobs = $job->getAllJobs();
}


$template->kategories = $job->getKategories();

 echo $template;