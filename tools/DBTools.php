<?php
class DBTools
{
	private $db_conn;

	public function __construct($dbVerbindung)
	{
		$this->db_conn=$dbVerbindung;
	}

	public function machTabelle($sql)
	{
		$result = $this->db_conn->query($sql);
		if ($this->db_conn->errno != 0)
		{
			die('Fehler bei Datenbankabfrage: '.$dbm->error);
		}
		$finfo = mysqli_fetch_fields($result);
		$max=count($finfo);
		echo '<table class="table">';
		echo "<tr>";
		for($i=0;$i<$max;$i++)
		{
			echo "<th>".$finfo[$i]->name."</th>";
		}
		echo "</tr>";
		while($row = mysqli_fetch_array($result,MYSQLI_NUM))
		{
		$max=count($row);
			echo "<tr>";
			for($i=0;$i<$max;$i++)
			{
	           echo "<td>".$row[$i]."</td>";
			}
            echo "</tr>";
		}
	    echo "</table>";		
	}

		public function machSelect($sql, $nameElem, $class)
	{
		$result = $this->db_conn->query($sql);
		if ($this->db_conn->errno != 0)
		{
			die('Fehler bei Datenbankabfrage: '.$this->db_conn->error);
		}
		echo '<select name="'.$nameElem.'" class="'.$class.'">';
		while($row = mysqli_fetch_array($result,MYSQLI_NUM))
		{
			echo '<option value="'.$row[0].'">'.$row[1].'</option>';
		}
	    echo '</select>';		
	}
} 