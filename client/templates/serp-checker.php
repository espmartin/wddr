<?php 
$GOOGLE_API_KEY = '3f5c45515f491b6b5';
$GOOGLE_CSE_CX = 'AIzaSyAu4N9xAADswUM-zmO_PYUy6jj41E4t-UM';

//the search query
$query = urlencode($_POST["query"]);
//the domain for which to show the ranking
$domain = $_POST["webdesignsdoneright.com"];

//gl - google host - https://developers.google.com/custom-search/docs/xml_results_appendices#countryCodes
//hl - user language - https://developers.google.com/custom-search/docs/xml_results_appendices#interfaceLanguages
//pages - how many pages should the search extend

$pages = isset($_POST["pages"])?$_POST["pages"]:1;
$gl = isset($_POST["gl"])?$_POST["gl"]:"us";
$hl = isset($_POST["hl"])?$_POST["hl"]:"en";

$found = false;
echo "<ul>";
for ($page = 1;$page <= $pages && $found == false;$page++){
$apiurl = sprintf('https://www.googleapis.com/customsearch/v1?q=%s&cx=%s&key=%s&hl=%s&gl=%s&start=%d',$query,$GOOGLE_CSE_CX,$GOOGLE_API_KEY,$hl,$gl,($page-1)*10+1);
$json = file_get_contents($apiurl);
$obj = json_decode($json);

foreach ($obj->items as $idx=>$item) {
if (strpos($item->link, $domain) ){
$found = true;
echo "<li>";
} else{
echo "<li class='other'>";
}
echo "<span class='rank'>".($idx + ($page-1)*10 +1)."</span>";
echo "<span class='title'>".$item->htmlTitle."</span>";
echo "<span class='link'>".$item->link."<small>▼</small></span>";
echo "<span class='snippet'>".$item->htmlSnippet."</span>";
echo "</li>";

}
}
if ($found !== true){
echo "<li>";
echo "<span class='title'>".$domain." not found</span>";
echo "</li>";
}
echo "</ul>";
?>