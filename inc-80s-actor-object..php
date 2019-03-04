<?php
class bratpack
{
private $actorName;


    
public function randomName()

	{
		echo 'made to top of random method';
		
		$actorName = rand(1-4);
			if ($actorName == 1)
				return $this->actorName = "Emilio Estevez";
			elseif ($actorName == 2)
				return $this->actorName = "Rob Lowe";
			elseif ($actorName == 3)
				return $this->actorName = "Molly Ringwald";
			elseif ($actorName == 4)
				return $this->actorName = "Anthony Michael Hall";
			
	}	

public function getName()
	{
		return $this->actorName;
	}
	
public function setName($actorName)	
	{
		$this->actorName = $actorName;
	}


}


?>