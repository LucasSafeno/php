<?php 
ob_start();
?>

<h1>Converter HTML para PDF </h1>
<h4>B7WEB - Aula 27 PHP SUPER AVANÇADO</h4>
<?php 
$html = ob_get_contents();

ob_end_clean();

echo $html;

require "vendor/autoload.php";

$mpdf = new Mpdf();

$mpdf->WriteHTML($html);
$mpdf->Output('arquivo.pdf', 'D');

// I -> Abra no browser
// D -> Download
// F -> Salva no servidor
?>