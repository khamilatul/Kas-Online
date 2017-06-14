<?php
/**
 * Created by PhpStorm.
 * User: - INDIEGLO -
 * Date: 27/10/2015
 * Time: 8:45
 */

namespace App\Http\Controllers\Cetak;


use App\Domain\Repositories\TransactionRepository;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DepartmentsController;

class CetakKas extends Controller
{
    protected $crud;
    protected $paginate;
//330 210
    public $kertas_pjg = 297; // portrait
    public $kertas_lbr = 290; // landscape
    public $kertas_pjg1 = 320; // portrait khusus refrensi


    public $font = 'Arial';
    public $field_font_size = 10;
    public $row_font_size = 8;

    public $butuh = false; // jika perlu fungsi AddPage()
    protected $padding_column = 5;
    protected $default_font_size = 8;
    protected $line = 0;

    public function __construct(
        
        
        TransactionRepository $transactionRepository
    )
    {
        $this->transaksi = $transactionRepository;
        $this->middleware('auth');

    }

    function repeatColumn($pdf, $id, $orientasi = '', $column = '', $height = 29.7)
    {

        $height_of_cell = $height; // mm
        if ($orientasi == 'P') {
            $page_height = $this->kertas_pjg; // orientasi kertas Potrait
        } else if ($orientasi == 'K') {
            $page_height = $this->kertas_pjg1; // orientasi kertas Portait
        } else if ($orientasi == 'L') {
            $page_height = $this->kertas_lbr; // orientasi kertas Landscape
        }
        $space_bottom = $page_height - $pdf->GetY(); // space bottom on page
        if ($height_of_cell > $space_bottom) {
            $this->$column($pdf, $id);
        }

        $this->line = $space_bottom;

//        echo $space_bottom . ' + ';
    }

    function Column($pdf, $id)
    {
        $pdf->AddFont('Tahoma', '', 'tahoma.php');
        $pdf->AddFont('Tahoma', 'B', 'tahomabd.php');
        $set = $this->butuh;
        if ($set == true) {
            $pdf->AddPage();
        }
        $pdf->SetFont($this->font, 'B', 16);
        $pdf->Ln(10);
        $pdf->Cell(8, 15, 'No', 1, 0, 'C');
        $pdf->Cell(50, 15, 'NIS', 1, 0, 'C');
        $pdf->Cell(50, 15, 'Siswa', 1, 0, 'C');
        $pdf->Cell(50, 15, 'Bulan', 1, 0, 'C');
        $pdf->Cell(50, 15, 'Kurang Angsuran', 1, 0, 'C');
        $pdf->Cell(50, 15, 'Deskripsi', 1, 0, 'C');


        $pdf->Ln(0);
        $pdf->Ln(15);
        
    }

    public function Transaksi($id)
    {
//        array(215, 330)

        $pdf = new PdfClass('L', 'mm', 'A4');
        $pdf->AliasNbPages();
        $pdf->orientasi = 'L';
        $pdf->AddFont('Arial', '', 'arial.php');

        //Disable automatic page break
        $pdf->SetAutoPageBreak(false);
        $pdf->SetMargins(8, 10, 10);
        $pdf->SetAutoPageBreak(0, 20);
//        $this->Cover($pdf, $id);
        $pdf->AddPage();
        $pdf->SetTitle('Laporan Register Surat Asal Usul');

        $pdf->with_cover = true;
        $pdf->is_footer = false;
        $pdf->set_widths = 80;
        $pdf->set_footer = 25;
//        $this->Column2($pdf);
        $gambar = 'assets/images/logoo.jpg';
        $pdf->Image($gambar, 240, 10, 40, 40);
        $gambar = 'assets/images/malangkab.png';
        $pdf->Image($gambar, 10, 10, 40, 40);
        $pdf->Ln(15);
        $pdf->AddFont('Tahoma', 'B', 'tahomabd.php');
        $pdf->AddFont('Tahoma', '', 'tahoma.php');
        $pdf->SetFont('Tahoma', '', 16);
        $pdf->Cell(0, 0, 'PEMERINTAH KABUPATEN MALANG', 0, 0, 'C');
        $pdf->Ln(5);
        $pdf->Cell(0, 0, 'DINAS PENDIDIKAN KABUPATEN MALANG', 0, 0, 'C');
        $pdf->Ln(5);
        $pdf->SetFont('Tahoma', 'B', 14);
        $pdf->Cell(0, 0, 'SMK NEGERI 1 KEPANJEN', 0, 0, 'C');
        $pdf->Ln(5);
        $pdf->SetFont('Tahoma', '', 12);
        $pdf->Cell(0, 0, 'NSS : 321051816023 NPSN : 20564067', 0, 0, 'C');
        $pdf->Ln(5);
        $pdf->Cell(0, 0, 'Jl. Raya Kedungpedaringan Telp. 0341-3957770341 Fax. 0341-394776', 0, 0, 'C');
        $pdf->Ln(5);
        $pdf->Cell(0, 0, 'Kode Pos 65163 Email : smkn1kepanjen@ymail.com Web : smkn1kepanjen.sch.id', 0, 0, 'C');
        $pdf->SetFont('Tahoma', '', 12);
        
        $pdf->Ln(5);
        $pdf->Cell(280, 0, '', 1, 0, 'C');
        $pdf->Ln(0);
        $pdf->Cell(280, 0, '', 1, 0, 'C');
        $pdf->Ln(0);
        $pdf->Cell(280, 0, '', 1, 0, 'C');
        $pdf->Ln(0);
        $pdf->Cell(280, 0, '', 1, 0, 'C');
        $pdf->Ln(0);
        $pdf->Cell(280, 0, '', 1, 0, 'C');
        $pdf->Ln(0);
        $pdf->Cell(280, 0.5, '', 1, 0, 'C');
        $pdf->Ln(1);
        $pdf->Cell(280, 0, '', 1, 0, 'C');
        $pdf->Ln(10);
                
        $pdf->SetFont('Tahoma', 'B', 16);

        $pdf->Cell(0, 0,'Daftrar Transaksi Kelas '. $id, 0, 0, 'C');
$pdf->SetFont('Tahoma', '', 11);
        $this->Column($pdf,$id);

        $jumlah = $this->transaksi->getByPagecetak($id);
 
 $pdf->SetAligns(['C','C','C', 'C', 'C','C']);
        $pdf->SetWidths([8,50,50, 50, 50,50]);
         if ($jumlah == null) {
        } else {
            $no =1;
            foreach ($jumlah as $row) {
            if($row->description ==0){
            $deskripsi='Belum Bayar';
            }
            if($row->description ==1){
            $deskripsi='Belum Lunas';
            }
            if($row->description ==2){
            $deskripsi='Lunas';
            }

                $pdf->Row([$no++,$row->nis, $row->name, $row->month, $row->kurang,$deskripsi]);
            }
            $this->butuh = true;
            $pdf->Ln(20);
            if ($pdf->y >= '240') {
                $pdf->Ln(40);
            }
        }

        $pdf->Ln(10);

        $tanggal = date('d-m-y');

        $pdf->Output('cetak-data-register-' . $tanggal . '.pdf', 'I');
        exit;
    }
}