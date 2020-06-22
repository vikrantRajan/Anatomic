<?php
Class Specimens extends Model {

   // ALL STUDENT RELATED MODELS BELOW THIS LINE -------------------------------------------------------------------------------------
	public function getAllSpecimens()
	{
		$student_id = $_SESSION['user_id'];
		$sql = "SELECT * FROM Specimens";
		
		
		$results = mysqli_query(ConnectToDb::con(), $sql);

		while($record = mysqli_fetch_assoc($results))
		{
			$arrAssignments[] = $record;
			// print_r($record);
		}
		return $arrAssignments;
	}


} 


?>