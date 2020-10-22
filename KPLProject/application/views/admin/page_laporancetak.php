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

$this->db->select('*');
$this->db->from('tb_dokumen');
$this->db->join('tb_r_trader', 'tb_r_trader.id_trader = tb_dokumen.id_trader','left');
$this->db->where('id_doc', $id_doc);
$trader = $this->db->get()->result_array();


$filename = $id_doc.'.png';
$substr_nosurat = substr($nosurat,4,26);
$substr_awal    = str_repeat('&nbsp;', 8);


ob_start();

echo '  
    <html>
    <head><title></title>
        <style type="text/css">
    p{
        text-align:left;
        font-size:7px;
        font-family:"Times New Roman", Times, serif;
        color:#000066;
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

    <h2> Laporan Perjalanan Dinas </h2>
 <br>
     <table border=1  width="100%" cellspacing="5" cellpadding="5" 
     style="font-family:Arial;font-size:14px;" text-align="justify">
 
       <tr>
         <td width="30px" align="center">I</td>
         <td width="300px"> Nama  </td>
         <td width="10px"> :  </td>
         <td colspan="2"> '.$NamaPeg.' <br></td>
       </tr>

       <tr>
         <td align="center"></td>
         <td width="300px"> NIP </td>
         <td width="20px"> :  </td>
         <td colspan="2">'.$NIP.' <br></td>
         </td>
       </tr>

       <tr>
        <td align="center"></td>
        <td width="300px">  Pangkat/Gol </td>
        <td width="20px"> :  </td>
        <td colspan="2"> '.$golongan.' </td>
        </td>
       </tr>
       <tr>
            <td align="center"></td>
            <td width="300px">  Jabatan  </td>
            <td width="20px"> :  </td>
            <td colspan="2"> '.$Jabatan.'<br> </td>
        </td>
        </tr>

       <tr>
        <td width="30px" align="center">II</td>
        <td width="300px"> Dasar Kegiatan  </td>
        <td width="20px"> :  </td>
        <td colspan="2">'.$dasar.' <br></td>
       </tr>

       <tr>
       <td width="30px" align="center">III</td>
       <td width="300px"> Tanggal 
       <br> Pelaksanaan </br> </td>
       <td width="20px"> :  </td>
       <td colspan="2">'.$tanggalttd.' <br></td>
      </tr>
      <tr>
       <td width="30px" align="center"></td>
       <td width="300px"> Tempat Tujuan </td>
       <td width="20px"> :  </td>
       <td colspan="2">'.$tujuandl.'</td>
      </tr>
  
      <tr>
       <td width="30px" align="center">IV</td>
       <td width="300px"> Tujuan Kegiatan </td>
       <td width="20px"> :  </td>
       <td colspan="2">'.$trader[0]['nm_trader'].'<br></td>
      </tr>

      <tr>
      <td width="30px" align="center">V</td>
      <td width="300px"> Hasil Perjalanan Dinas </td>
      <td width="20px"> :  </td>
      <td colspan="2"> '.$hsldinas.'<br></td>
     </tr>

</table>

<br>
    <br>
     <tr>
        <td valign="center" text-align="justify"> A. </td>
        <tr><td align=center style="font-size:14px;">Latar Belakang</td></tr> 
        <td valign="top" text-align="justify">'.$ltrblkng.'</td>
     </tr>
    </br>

    <br>
    <br> <br> <br> 
     <tr>
        <td valign="center" text-align="justify"> B. </td>
        <td valign="center" text-align="justify"> Maksud, Tujuan dan Sasaran </td>
        <td valign="top" text-align="justify">'.$mksdtujuansasaran.'</td>
     </tr>
    </br> 

    <br>
    <br> <br> <br> 
     <tr>
        <td valign="center" text-align="justify"> C. </td>
        <td valign="center" text-align="justify"> Hasil Perjalanan Dinas </td>
        <td valign="top" text-align="justify">'.$hsldinas.'</td>
     </tr>
    </br>
</br>
            
        <br> <br>
        <br>  <br> <br>
        <br>  <br> <br>
        <br>  <br> <br>
        <br> <br> <br>
        <br> <br> <br>
        
        <td >
                <tr><td width="60px">Kepala,</td></tr>

                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>

                <tr><td width="60px" text-align="right"> Pelaksana,</td></tr>
                
            
            <br>

        <tr>
            <left>
            <br><br><br><br>

            '.$pjttd.'
    
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> <right> <right>
                <right> <right> <right> <right> <right> 
            
            '.$pjttd.'<br>
            <br>
            </right>
            </left>
    
        </tr>

            <table width="60%" cellspacing="0" >
        <tr><td rowspan="6" width="15%" align=center><img src='.$filename.'  width="60px" height="60px" ></img></td>
        

        
        </td>
        </tr>

   
    </body></html>';


$html   = ob_get_contents();
ob_end_clean();
$mpdf = new mPDF('utf-8','A4');
$mpdf->setFooter('');
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf",'I');
exit;
  
?>

