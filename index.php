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

$local_data_hora = 'Cuiabá, 30 de março de 2023.';
$conteudo = 'Concluiu com aproveitamento a Capacitação sobre Assédio Moral, Assédio Sexual e Demais Violências no Ambiente de Trabalho, com carga horária de 2 (duas) horas, em atendimento à Lei n. 14.457/2022, NR 01 e Anexos.';

$alunos_array = [
  'Murilo Victor Filipe Moura',
  'Olivia Eloá Ester Caldeira',
  'Sebastião Antonio Diego da Paz',
  'Débora Luana Nogueira'
];

foreach($alunos_array as $item){

  ################################################################################
  // PAGINA 1
  ################################################################################
  $mpdf->AddPage('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'one');
  $mpdf->WriteHTML('<div style="width:100%;height:100%;color:#424242;"><div style="padding:250px 115px 0 115px;"><table style="width:100%;text-align:center;"><tr><td style="color:#5F3D7D;font-size:26px;font-weight:bold;">' . $item . '</td></tr></table></div><div style="padding:20px 75px 0 75px;"><div style="width:100%;text-align:center;font-size:20px;color:#542872;line-height: 1.4;font-weight:bold;">' . $conteudo . '</div></div><div style="padding:30px 75px 0 75px;"><div style="width:100%;text-align:center;font-size:18px;color:#542872;line-height: 1.4;font-weight:normal;">' . $local_data_hora . '</div></div></div>');
  ################################################################################

  ################################################################################
  // PAGINA 2
  ################################################################################
  $mpdf->AddPage('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'two');
  $mpdf->WriteHTML('');
  ################################################################################

}

$mpdf->Output('certificado-techlex.pdf', 'I');