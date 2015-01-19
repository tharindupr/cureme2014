<?php 
require_once '../../core/init.php';




/*$db=DB::getInstance();
$query="SELECT patient_Id from patient";
$db->query($query);*/



echo
"
<script>
$(function() {
		var availableTags = [
		  'ActionScript',
		  'AppleScript',
		  'Asp',
		  'BASIC',
		  'C',
		  'C++',
		  'Clojure',
		  'COBOL',
		  'ColdFusion',
		  'Erlang',
		  'Fortran',
		  'Groovy',
		  'Haskell',
		  'Java',
		  'JavaScript',
		  'Lisp',
		  'Perl',
		  'PHP',
		  'Python',
		  'Ruby',
		  'Scala',
		  'Scheme'
		];
		$( '#tags' ).autocomplete({
		  source: availableTags
		});
	  });

</script>


";


?>