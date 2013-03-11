<?php

class Vote_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function addVotes($num_of_votes){


    	
    }

    public function getVotesTeamOne(){

		$sql = "SELECT SUM(votes) AS votes FROM `votes` WHERE `team_id` = 'vote_team_a'";

    	$query = $this->db->query($sql);
    	$result = $query->row();
    	$votes = $result->votes;

    	return $votes;
    }



     public function getVotesTeamTwo(){

		$sql = "SELECT SUM(votes) AS votes FROM `votes` WHERE `team_id` = 'vote_team_b'";

    	$query = $this->db->query($sql);
    	$result = $query->row();
    	$votes = $result->votes;

    	return $votes;

    }

    
}
