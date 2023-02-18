<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY>
  <?php

$json = file_get_contents('http://www.nfl.com/liveupdate/scorestrip/scorestrip.json');
echo $json;
// you can save $json to a file, if needed :
//file_put_contents('file/path/my-file.txt', $json);

$json = str_replace('{"ss":[', "", $json );
$json = str_replace(']}', "", $json );
//echo $json;
$pieces = explode("[", $json);
//echo $pieces[0]; // piece1
//echo $pieces[1]; // piece2

//$data = json_decode($json);
// echo $json ;
//var_dump($pieces);
echo "<br><br>";
//echo $pieces[2]; 
//echo count($pieces);
$aq=1;
$hrefs = array();
 while ($aq < count($pieces))
 {
list($day, $time, $quarter, $empty,$vist, $vist_score, $home, $home_score,$empty,$empty,$gameid,$empty,$week,$year)  = str_replace('"', "", explode(",", $pieces[$aq]));
echo $day, $vist, $vist_score, $home, $home_score;
 //echo $aq . $pieces[$aq]; 
 echo "<br>";
 $aq++;
 }

//list($day, $time, $quarter, $empty,$vist, $vist_score, $home, $home_score,$empty,$empty,$gameid,$empty,$week,$year) = explode(",", $json);
//echo $day, $time, $quarter, $vist, $vist_score, $home, $home_score;
//  = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

//$json2 = '{"ss":[["Sun","1:00","Final",,"GB","31","CLE","3",,,"54558",,"REG7","2009"],["Sun","1:00","Final",,"SF","21","HOU","24",,,"54559",,"REG7","2009"],["Sun","1:00","Final",,"SD","37","KC","7",,,"54560",,"REG7","2009"],["Sun","1:00","Final",,"IND","42","STL","6",,,"54562",,"REG7","2009"],["Sun","1:00","Final",,"NE","35","TB","7",,,"54563",,"REG7","2009"],["Sun","1:00","Final",,"MIN","17","PIT","27",,,"54561",,"REG7","2009"],["Sun","4:05","Final",,"BUF","20","CAR","9",,,"54564",,"REG7","2009"],["Sun","4:05","Final",,"NYJ","38","OAK","0",,,"54565",,"REG7","2009"],["Sun","4:15","Final",,"CHI","10","CIN","45",,,"54557",,"REG7","2009"],["Sun","4:15","Final",,"ATL","21","DAL","37",,,"54566",,"REG7","2009"],["Sun","4:15","Final",,"NO","46","MIA","34",,,"54567",,"REG7","2009"],["Sun","8:20","Final",,"ARI","24","NYG","17",,,"54568",,"REG7","2009"],["Mon","8:30","Final",,"PHI","27","WAS","17",,,"54569",,"REG7","2009"]]}';
//var_dump(json_decode($json2, true));
  ?>
 </BODY>
</HTML>
