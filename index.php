<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdfConfig = [
  'orientation' => 'L',
  'fontDir' => __DIR__ . '/fonts', // Caminho para a pasta de fontes
  'fontdata' => [
    'poppins' => [
      'R' => 'Poppins-Regular.ttf',
      'B' => 'Poppins-Bold.ttf',
      'I' => 'Poppins-Italic.ttf',
      'BI' => 'Poppins-BoldItalic.ttf',
    ],
  ],
  'default_font' => 'poppins', // Defina 'poppins' como a fonte padrão
];

$mpdf = new \Mpdf\Mpdf($mpdfConfig);

$mpdf->SetTitle('Techlex | Conteúdo digital sobre rotinas trabalhistas');
$mpdf->WriteHTML(file_get_contents(__DIR__ . '/css/styles.css'), \Mpdf\HTMLParserMode::HEADER_CSS);


################################################################################
// PAGINA 1
################################################################################
$mpdf->AddPage('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'one');
$mpdf->WriteHTML('
<div style="width:100%;height:100%;color:#424242;">
  
  <div style="padding:365px 75px 0 75px;">
    <div style="width:100%;text-align:center;font-size:20px;color:#542872;line-height: 1.4;font-weight:bold;">Concluiu com aproveitamento a Capacitação sobre Assédio Moral, Assédio Sexual e Demais Violências no Ambiente de Trabalho, com carga horária de 2 (duas) horas, em atendimento à Lei n. 14.457/2022, NR 01 e Anexos.</div>
  </div>
  
  <div style="padding:45px 75px 0 75px;">
    <div style="width:100%;text-align:center;font-size:18px;color:#542872;line-height: 1.4;font-weight:normal;">Cuiabá, 30 de março de 2023.</div>
  </div>

  <div style="padding:10px 115px 0 115px;">
    <table style="width:100%;text-align:center;">
      <tr>
        <td width="205px">Rodrigo Golfeto de Queiroz</td>
        <td width=""></td>
        <td width="205px"><img src="images/assinatura-1.png" width="100px" /></td>
        <td width=""></td>
        <td width="205px"><img src="images/assinatura-2.png" width="100px" /></td>
      </tr>
      <tr>
        <td width="205px" style="color:#5F3D7D;border-top:1px solid #7F4A9D;padding:5px 0 0 0;">Aluno</td>
        <td width=""></td>
        <td width="205px" style="color:#5F3D7D;border-top:1px solid #7F4A9D;padding:5px 0 0 0;">Engº(a) do Trabalho</td>
        <td width=""></td>
        <td width="205px" style="color:#5F3D7D;border-top:1px solid #7F4A9D;padding:5px 0 0 0;">Instrutora Tech Lex</td>
      </tr>
    </table>
  </div>

</div>
');
################################################################################

################################################################################
// PAGINA 2
################################################################################
$mpdf->AddPage('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'two');
$mpdf->WriteHTML('');
################################################################################


$mpdf->Output();
