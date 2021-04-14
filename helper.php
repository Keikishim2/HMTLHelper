<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>HTML Helper</title>
        </head>
        <body>
<?php
            $new_helper = new HTML_Helper();  
            $users = [
                        ["id" => 1, "First Name" => "Hinata", "Last Name" => "Shoyo", "Nickname" => "Chibi"],
                        ["id" => 2, "First Name" => "Kei", "Last Name" => "Tsukishima", "Nickname" => "Giant"],
                        ["id" => 3, "First Name" => "Nishinoya", "Last Name" => "Yu", "Nickname" => "Dwarf"]
                    ];
        echo $new_helper->print_table($users);  
        echo "<h4>Select State</h4>";

        $sample_array = array("CA", "WA", "UT", "TX", "AZ", "NY");
        echo $new_helper->print_select("state", $sample_array); 
?>

<?php
	class HTML_Helper 
	{
		function print_table($array)
		{
			$item1 = $array[0]; 
			$html="
			<table>
				<thead>
					<tr>";
					foreach ($item1 as $key => $value) 
					{
						$html .= "<th>" . $key . "</th>";
					}
			$html .= "</tr>
				</thead>
				<tbody>";
	
				foreach ($array as $item)
				{
					$html .= "<tr>";

					foreach ($item as $key => $value)
					{
						$html .= "<td>" . $value . "</td>";
					}
					$html .= "</tr>";
				}
			$html .= "
				</tbody>
			</table>";
			return $html;
		}
		function print_select($select, $array)
		{
			$string = "<select name=" . $select . ">";
			foreach($array as $item)
			{
				$string .= "<option>" . $item . "</option>";
			}
			return $string;
		}
	}
?>



    </body>
</html>