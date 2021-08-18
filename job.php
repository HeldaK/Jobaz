<?php include_once 'config/init.php';?>

<?php
$job = new JOB;

if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($job->delete($del_id)){
        redirect('index.php', 'Job erfolgreich gelöscht', 'success');
    }else{
        redirect('index.php', 'Job nicht gelöscht', 'error');
    }
}

$template = new Template('templates/job-single.php');

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);

 echo $template;