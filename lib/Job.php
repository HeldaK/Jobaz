<?php
class Job{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    //Get All Jobs
    public function getAllJobs(){
        $this->db->query("SELECT jobs.*, kategorie.name AS kname 
                        FROM jobs
                        INNER JOIN kategorie 
                        ON jobs.kategorie_id = kategorie.id
                        ORDER BY post_date DESC
                        ");
        //Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }

    //Get Kategorie
    public function getKategories(){
        $this->db->query("SELECT * FROM kategorie");
        //Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }

    //Get Jobs By Kategorie
    public function getByKategorie($kategorie){
        $this->db->query("SELECT jobs.*, kategorie.name AS kname 
                        FROM jobs
                        INNER JOIN kategorie 
                        ON jobs.kategorie_id = kategorie.id
                        WHERE jobs.kategorie_id = $kategorie
                        ORDER BY post_date DESC
                        ");
        //Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }

    //Get Kategorie
    public function getKategorie($kategorie_id){
        $this->db->query("SELECT * FROM kategorie WHERE id = :kategorie_id");

        $this->db->bind(':kategorie_id', $kategorie_id);
        //Assign Row
        $row = $this->db->singel();
        
        return $row;
    }

    //Get Job
    public function getJob($id){
        $this->db->query("SELECT * FROM jobs WHERE id = :id");

        $this->db->bind(':id', $id);
        //Assign Row
        $row = $this->db->singel();
        
        return $row;
    }

    //Create Job
    public function create($data){
        $this->db->query("INSERT INTO jobs (kategorie_id, firma, job_titel, 
                        beschreibung, standort, kontakt_benutzer, kontakt_email)
                        VALUES (:kategorie_id, :firma, :job_titel, 
                        :beschreibung, :standort, :kontakt_benutzer, :kontakt_email)
                        ");

        $this->db->bind(':kategorie_id', $data['kategorie_id']);
        $this->db->bind(':firma', $data['firma']); 
        $this->db->bind(':job_titel', $data['job_titel']);
        $this->db->bind(':beschreibung', $data['beschreibung']);            
        $this->db->bind(':standort', $data['standort']);
        $this->db->bind(':kontakt_benutzer', $data['kontakt_benutzer']);
        $this->db->bind(':kontakt_email', $data['kontakt_email']);

        //Exsecute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

     //Update Job
     public function update($id, $data){
        $this->db->query("UPDATE jobs SET 
                        kategorie_id = :kategorie_id, 
                        firma = :firma,
                         job_titel = :job_titel, 
                        beschreibung = :beschreibung, 
                        standort = :standort, 
                        kontakt_benutzer = :kontakt_benutzer, 
                        kontakt_email = :kontakt_email
                        WHERE id=$id
                        ");

        $this->db->bind(':kategorie_id', $data['kategorie_id']);
        $this->db->bind(':firma', $data['firma']); 
        $this->db->bind(':job_titel', $data['job_titel']);
        $this->db->bind(':beschreibung', $data['beschreibung']);            
        $this->db->bind(':standort', $data['standort']);
        $this->db->bind(':kontakt_benutzer', $data['kontakt_benutzer']);
        $this->db->bind(':kontakt_email', $data['kontakt_email']);

        //Exsecute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    //Delete Job
    public function delete($id){
        $this->db->query("DELETE FROM jobs where id = $id");

        //Exsecute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

}
