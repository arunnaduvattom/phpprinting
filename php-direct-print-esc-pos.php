<?php
// This printing is specially for silent raw printing with localhost applications. POS, ERP etc. The printer should be accessible in the server. Printer ESC codes are executed


                                        $printer = 'Printer Name Here'; // Printer Should Be Shared And Accessible In The Server

                                        $bold1 = Chr(27) . Chr(69); // semi em. bold
										$bold0 = Chr(27) . Chr(70); // "" 
										$initialized = chr(27).chr(79);
										$initialized = chr(27).chr(64); // initialize printer
										$initialized .= chr(27).chr(51).chr(40); //Select 6 lines per inch Line Spacing
										$initialized .= chr(10).chr(12).chr(15).chr(50).chr(20); // Draft, Font, Pitch
										$initialized .= chr(27).chr(79); // Cancel Skip Perforation
										$initialized .= chr(27).chr(106).chr(108); // Reverse Line Feed
										$condensed0 = chr(18);
										
										$initialized .= chr(27).chr(97).chr(0); //justify left
										$initialized .= chr(27).chr(37).chr(0); // Selects normal character set
										
										$initialized .= chr(27).chr(67).chr(15); // Page Length
										$initialized .= chr(27).chr(67).chr(5);
										$initialized .= chr(13);
										$data  = $initialized;
										$data .= chr(27).chr(79); // Cancel Skip Perforation
										$data .= chr(27).chr(120).chr(48); // Select Draft Mode
										$data .= chr(27).chr(97).chr(0); // Justify Center
										//$data .= chr(14); // Double Width For One Line
										//$condensed1 = chr(15);									
										
										$data .= $bold1."	  		".HEADER TO PRINT."		".$bold0."\n";
										$data .= chr(10);
										$data .= "    		 TEXT	"."\n";
										//$data .= chr(10);
										//$data .= "	 	       "."TEST TEXT 123456".""."\n";
										//$data .= chr(10);
										$data .= "	 "."\n";
										
										$data .= "|----------------------------------------------------------|\n";
										
										$data .= "Thank You! Print Testing Successfull"."\n";
										
										$data .= "|----------------------------------------------------------|\n";
										$data .= chr(27).chr(102).chr(49).chr(s);
										$data .= " \n"; // Line Breaks
										$data .= " \n";
										$data .= " \n";
                                        
										$fp = fopen($printer, "w");

										if (!$fp){
										echo 'Selected Printer: '.$printer;
										echo  'Sorry! Could Not Connect To The Selected Printer';
										print "<br/>";
										}
										else
										{
										print "<br/>";
										echo  'Printer Connected Successfully';	
										}
										$data .= "\x00\x1Bi\x00"; // Tear Paper
										
										if (!fwrite($fp,$data)){
										echo 'Printing Failed!';
										print "<br/>";
										}  
										else
										{
										print "<br/>";
										echo 'Printing Succeeded!';
										print "<br/>";
										}

?>