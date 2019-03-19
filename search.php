<?php
$term = $_GET[ "term" ];
$companies = array(
   array( "label" => "Adobe Photoshop", "value" => "Adobe Photoshop" ),
   array( "label" => "Backbone.js", "value" => "Backbone.js" ),
   array( "label" => "Blockchain", "value" => "Blockchain" ),
   array( "label" => "Bootstrap", "value" => "Bootstrap" ),
   array( "label" => "MS-Excel", "value" => "MS-Excel" ),
   array( "label" => "HTML", "value" => "HTML" ),
   array( "label" => "C Programming", "value" => "C Programming" ),
   array( "label" => "C#", "value" => "C#" ),
   array( "label" => "C#.NET", "value" => "C#.NET" ),
   array( "label" => "C++ Programming", "value" => "C++ Programming" ),
   array( "label" => "Creative Writing", "value" => "Creative Writing" ),
   array( "label" => "Data Analytics", "value" => "Data Analytics" ),
   array( "label" => "Data Structures", "value" => "Data Structures" ),
   array( "label" => "Financial Modeling", "value" => "Financial Modeling" ),
   array( "label" => "GitHub", "value" => "GitHub" ),
   array( "label" => "MS-Office", "value" => "MS-Office" ),
   array( "label" => "Java", "value" => "Java" ),
   array( "label" => "JavaScript", "value" => "JavaScript" ),
   array( "label" => "jQuery", "value" => "jQuery" ),
   array( "label" => "JSON", "value" => "JSON" ),
   array( "label" => "LARAVEL", "value" => "LARAVEL" ),
   array( "label" => "Linear Programming", "value" => "Linear Programming" ),
   array( "label" => "Machine Learning", "value" => "Machine Learning" ),
   array( "label" => "Natural Language Processing (NLP)", "value" => "Natural Language Processing (NLP)" ),
   array( "label" => "Node.js", "value" => "Node.js" ),
   array( "label" => "MS-PowerPoint", "value" => "MS-PowerPoint" ),
   array( "label" => "PHP", "value" => "PHP" ),
   array( "label" => "R Programming", "value" => "R Programming" ),
   array( "label" => "React Native", "value" => "React Native" ),
   array( "label" => "ReactJS", "value" => "ReactJS" ),
   array( "label" => "Vue Js", "value" => "Vue Js" ),
   array( "label" => "MS-Word", "value" => "MS-Word" ),
   array( "label" => "Windows Mobile Application Development", "value" => "Windows Mobile Application Development" ),
   array( "label" => "WordPress", "value" => "WordPress" ),
   array( "label" => "Web Development", "value" => "Web Development" ),
   array( "label" => "XML", "value" => "XML" )
	
);

$result = array();
foreach ($companies as $company) {
   $companyLabel = $company[ "label" ];
   if ( strpos( strtoupper($companyLabel), strtoupper($term) )!== false ) {
      array_push( $result, $company );
   }
}

echo json_encode( $result );
?>