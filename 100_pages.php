<?php

for ($i = 1; $i <= 100; $i++) {
    $file_name = "./pages/page_".$i.".html";
    echo $file_name."<br>";

    $page_number = $i;
    if ($page_number > 1) {
        $page_prev ='<a href="'."page_".($i-1).'.html"'.'>Go to Previous Page '.($i-1).'</a>';
    } else {
        $page_prev ='<a href="../index.html"'.'>Go to Generator Main Page</a>';
    }

    if ($page_number <100) {
        $page_next ='<a href="'."page_".($i+1).'.html"'.'>Go to Next Page '.($i+1).'</a>';
    } else {
        $page_next ='<a href="../index.html"'.'>Go to Generator Main Page</a>';
    }

    $page_break = "<br>";

    $website_text = <<<EOT
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page $page_number</title>
  </head>
  <body>
    <h1>This is page $page_number</h1>
    <br />
    $page_prev <-------------> $page_next
  </body>
</html>
EOT;

  $myfile = fopen($file_name, "w") or die("Unable to open file!");
  fwrite($myfile,$website_text);
  fclose($myfile);
}

header("Location: ./pages/page_1.html");

?>
