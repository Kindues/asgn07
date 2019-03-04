<?php
class Players
{
	private $playerName;
	private $score;
    private $role;

	public function getPlayerName()
	{
		return $this->playerName;
	}
	
	public function setPlayerName($playerName)	
	{
		$this->playerName = $playerName;
	}
  
  public function getScore()
	{
		return $this->score;
	}
	
	public function setScore($score)	
	{
		$this->score = $score;
	}
  
  public function getRole()
	{
		return $this->role;
	}
	
	public function setRole($role)	
	{
		$this->role = $role;
	}
	
} // end of class definition
?>