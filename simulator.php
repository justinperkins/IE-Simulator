<?php
$url = $_GET['url'];
if (empty($url)) {
  header('Location: index.php');
  return;
}
$simulator = <<<EOF
  (function(){
    function addEvent(obj, evType, fn){ 
     if (obj.addEventListener){ 
       obj.addEventListener(evType, fn, false); 
       return true; 
     } else if (obj.attachEvent){ 
       var r = obj.attachEvent("on"+evType, fn); 
       return r; 
     } else { 
       return false; 
     } 
    }
    addEvent(window, 'load', function(){
      function getRandomItems(collection){
        var items = [];
        for (var i=0;i<Math.ceil(collection.length/3);i++) items.push(collection[Math.floor(Math.random()*collection.length)]);
        return items;
      }

      var divs = document.getElementsByTagName('div'), spans = document.getElementsByTagName('span'), links = document.getElementsByTagName('a');
      var randomDivs = getRandomItems(divs), randomSpans = getRandomItems(spans), randomLinks = getRandomItems(links);
      
      for (var i=0;i<randomDivs.length;i++){
        randomDivs[i].style.position = 'relative';
        randomDivs[i].style.left = '-50px';
      }

      for (var i=0;i<randomSpans.length;i++){
        randomSpans[i].style.paddingTop = '5px';
        randomSpans[i].style.backgroundImage = 'none';
      }

      for (var i=0;i<randomLinks.length;i++){
        randomLinks[i].style.visibility = 'hidden';
        randomLinks[i].style.backgroundImage = 'none';
      }
    });
  })();
EOF;
$output = str_replace('</head>', '<base href="' . $url . '" /><script type="text/javascript">' . $simulator . '</script>', file_get_contents($url));
echo $output;
?>