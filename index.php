<?php

require('fpdf.php');


$pdf= new FPDF();

$pdf->SetAuthor('Sm1ch Developer');
$pdf->SetTitle('FPDF');

$pdf->SetFont('Helvetica','B',20); // Дается значение шрифта (Шрифт,стиль и размер)
$pdf->SetTextColor(50,60,100); // Устанавливается цвет шрифта

$pdf->AddPage('P'); // Указывается ориентация страницы
$pdf->SetDisplayMode('real','default');

// $pdf->Image('logo.png',10,20,33,0,' ','http://www.fpdf.org/'); // Указывается лого 
// $pdf->Link(10, 20, 33,33, 'http://www.fpdf.org/'); // Указывается ссылка 

// Создание заголовка и рамки 
$pdf->SetXY(50,20);
$pdf->SetDrawColor(50,60,100);
$pdf->Cell(100,10,'Sm1ch',1,0,'C',0); 

// Добавление текста 
$pdf->SetXY(10,50);
$pdf->SetFontSize(10);
$pdf->Write(5,'You have generated a PDF. '); // Библиотека не поддерижвает русский язык, для этого в будущем будет использоваться расширение с русс языком

$pdf->Output('example1.pdf','I'); // Вывод PDF файла


// Создается футер и хедер
class PDF extends FPDF
{
  function Header()
  {
    $this->Image('https://app.logoza.ru/?logo=4312c3006ab4df342a28ff31af89b1f2',10,8,33);
    $this->SetFont('Helvetica','B',15);
    $this->SetXY(50, 10);
    $this->Cell(0,10,'This is a header',1,0,'C');
  }
  function Footer()
  {
    $this->SetXY(100,-15);
    $this->SetFont('Helvetica','I',10);
    $this->Write (5, 'This is a footer');
  }
}
$pdf=new PDF();
$pdf->AddPage();
$pdf->Output('example2.pdf','D');

?>