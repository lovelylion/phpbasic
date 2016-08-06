<!DOCTYPE html>
	<html>
		<head>
			<title>
				phpbasics			
			</title>
		</head>
		<body>
			<?php
				$charset = "abcdefghijk123456789";
				function random_string($randstring,$length){
					$rand_string = " ";
					for($count=0 ; $count<$length ; $count++){
						$rand_string .= random_char($randstring);
					}
					return $rand_string;
					}
					function random_char($string) {
						$length = strlen($string);
						$position = rand(0,$length-1);
						return ($string[$position]);
					}
					$charset = "abcdefghijk123456789";
					$random_string = random_string($charset,20);
					echo "random string is ".$random_string;
				?>
		</body>
	</html>