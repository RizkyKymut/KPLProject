
<?php

error_reporting(0);

$timezone = "Asia/Jakarta";
if(function_exists(date_default_timezone_set)) date_default_timezone_set($timezone);

$this->db->select('*');
$this->db->from('tb_detail_dokumen');
$this->db->join('tb_pegawai', 'tb_pegawai.NIP = tb_detail_dokumen.NIP','left');
$this->db->where('id_doc', $id_doc);
$this->db->order_by('tb_pegawai.no_duk', "Asc");
$query = $this->db->get()->result_array();

$filename = $id_doc.'.png';
$substr_nosurat = substr($nosurat,4,26);
$substr_awal    = str_repeat('&nbsp;', 8);


ob_start();

echo '  
    <html>
    <head><title></title>
        <style type="text/css">
    .kiri{
        text-align:left;
        font-size:15px;
        font-family:"Arial", Times, serif;
        color: black;
    }

    .kanan{
      text-align: right;
      font-size: 15px;
      font-family:"Arial", Times, serif;
      color: black;
  }

    body{
        font-size:14px;
        font-family:"Times New Roman", Times, serif;    
    }

    h2{
        text-align: center;
        font-size: 15px;
        font-family:"Arial";
        color: black;
    }
    
    table{
        border-style:none;
        border-width:thin;
        border-spacing:inherit;
    }
     table, th, td {
            border: 1px solid black;
            height: justify;
         }
        
    </style>
    
    </head>
    <body>
    
    <tr>
        <td width="100%" cellspacing="5" cellpadding="5" style= "font-family: Arial; font-size: 13px;"> KEMENTRIAN KELAUTAN DAN PERIKANAN
        <br>BADAN KARANTINA IKAN, PENGENDALIAN MUTU DAN</td>
        <td colspan="2" text-align="right" cellspacing="5" cellpadding="5" style= "font-family: Arial; font-size: 13px;">Lembar Ke : 1</td>
        <br>KEAMANAN HASIL PERIKANAN
        <td colspan="2" cellspacing="5" cellpadding="5" style= "font-family: Arial; font-size: 13px;">Kode No   : </td>
        <br>BALAI KIPM SEMARANG
        <td colspan="2" cellspacing="5" cellpadding="5" style= "font-family: Arial; font-size: 13px;">Nomor     : </td>
    </tr>


    <h2>Surat Perjalanan Dinas (SPD)</h2>
 
     <table border=1  width="100%" cellspacing="5" cellpadding="5" 
     style="font-family:Arial;font-size:14px;" text-align="justify">
 

       <tr>
         <td width="30px" align="center">1</td>
         <td width="300px">Pejabat Pembuat Komitmen</td>
         <td colspan="2">Balai KIPM Semarang</td>
       </tr>
       <tr>
         <td align="center">2</td>
         <td>Nama/NIP Pegawai yang melaksanakan
         <br>Perjalanan Dinas</td>
         <td colspan="2">Ely Musyarofah, S.Pi
         <br> 1978xxxx
         </td>
       </tr>
       <tr>
         <td align="center">3</td>
         <br>
         <br>
         <br>
         <br>
         <td></td>
         <td colspan="2"></td>
       </tr>
       <tr>
         <td align="center">4</td>
         <br>
         <br>
         <br>
         <br>
         <td></td>
         <td colspan="2"></td>
       </tr>
       <tr>
         <td align="center">5</td>
         <td></td>
         <td colspan="2"></td>
       </tr>
       <tr>
         <td align="center">6</td>
         <br>
         <br>
         <br>
         <td></td>
         <td colspan="2"></td>
       </tr>
       <tr>
         <td align="center">7</td>
         <br>
         <br>
         <br>
         <td></td>
         <td colspan="2"></td>
       </tr>
       <tr>
         <td align="center">8</td>
         <td>Pengikut: Nama</td>
         <td align="center">Tanggal Lahir</td>
         <td align="center">Keterangan</td>
       </tr>
       <tr>
         <td></td>
         <td>1.
         <br>2.
         <br>3.
         <br>4.
         <td></td>
         <td></td>
       </tr>
       <tr>
         <td align="center">9</td>
         <br>
         <br>
         <br>
         <td></td>
         <td colspan="2"></td>
       </tr>
       <tr>
         <td align="center">10</td>
         <td>Keterangan lain-lain</td>
         <td colspan="2"></td>
       </tr>
     </table>
   
   
    </body></html>';

$html   = ob_get_contents();
ob_end_clean();
$mpdf = new mPDF('utf-8','A4');
$mpdf->setFooter('');
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf",'I');
exit;
  
?>

