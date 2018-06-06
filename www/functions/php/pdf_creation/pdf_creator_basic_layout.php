<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
if(isset($_POST['submit'])){
    if(isset($_POST['name'])){
        $html = get_include_contents('template.php');

        // create PDF
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream($_POST['name'].'.pdf');

        }


}else {
    require('../../../forms/pdfcreate/pdfcreateform.php');
}

// function to get file content after PHP has ran
function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }
    return false;
}
?>