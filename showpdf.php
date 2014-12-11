    <?php
    $line = "<html>";
    $line .= "<head>";
    $line .= "<title>PDF test</title>";
    $line .= "<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>";
    $line .= "</head>";
    $line .= "<body>";
     $line .= "<p>asdasdasdasd asd asdas das gda djas das dgasdg asgdjgajdasgdasdgasjd asjgdjasg</p>";
     $line .= "<p>asdasdasdasd asd asdas das gda djas das dgasdg asgdjgajdasgdasdgasjd asjgdjasg</p>";
     $line .= "<p>asdasdasdasd asd asdas das gda djas das dgasdg asgdjgajdasgdasdgasjd asjgdjasg</p>";
     $line .= "<p>asdasdasdasd asd asdas das gda djas das dgasdg asgdjgajdasgdasdgasjd asjgdjasg</p>";
     $line .= "<p>asdasdasdasd asd asdas das gda djas das dgasdg asgdjgajdasgdasdgasjd asjgdjasg</p>";
     $line .= "<p>asdasdasdasd asd asdas das gda djas das dgasdg asgdjgajdasgdasdgasjd asjgdjasg</p>";

    $file = "/home/agl20/Downloads/5228XXXX0000XXXX_19-03-2014.pdf";
    $length = filesize($file);

    header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=filename.pdf");
@readfile('/home/agl20/Downloads/5228XXXX0000XXXX_19-03-2014.pdf');

    echo $line;
    $line .= "</body>";
    $line .= "</html>";
    ?> 

