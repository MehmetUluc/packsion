<?php
// We change the headers of the page so that the browser will know what sort of file is dealing with. Also, we will tell the browser it has to treat the file as an attachment which cannot be cached.
 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=exceldata.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border='1'>
  <tr>
    <td>Cinsiyet</td>
    <td>Dogum Tarihi</td>
    <td>Meslek</td>
    <td>Boy</td>
    <td>Kilo</td>
    <td>Vucut Tipi</td>
    <td>Standard Beden</td>
    <td>Ust Beden</td>
    <td>Alt Beden</td>
    <td>Ayakkabi No</td>
    <td>Stil</td>
    <td>Bussines Stil</td>
    <td>Renk Grubu</td>
    <td>Tercih Edilmeyen Desenler</td>
    <td>Tercih Edilmeyen Renkler</td>
    <td>Tisort Tipi</td>
    <td>Pantolon Tipi</td>
    <td>Etek Tipi</td>
    <td>Tercihli Sıralama</td>
    <td>Facebook</td>
    <td>Instagram</td>
    <td>Telefon</td>
    <td>Mail</td>

  </tr>

  <tr>

    <td><?php echo isset($quiz->gender) ? $quiz->gender : ''; ?></td>
    <td><?php echo isset($quiz->dob) ? $quiz->dob : ''; ?></td>
    <td><?php echo isset($quiz->job) ? $quiz->job : ''; ?></td>
    <td><?php echo isset($quiz->boy) ? $quiz->boy : ''; ?></td>
    <td><?php echo isset($quiz->kilo) ? $quiz->kilo : ''; ?></td>
    <td><?php echo ucwords($quiz->vucut); ?></td>
    <td><?php echo isset($quiz->standart_beden) ? $quiz->standart_beden : ''; ?></td>
    <td><?php echo isset($quiz->üst_beden) ? $quiz->üst_beden : ''; ?></td>
    <td><?php echo isset($quiz->alt_beden) ? $quiz->alt_beden : ''; ?></td>
    <td><?php echo isset($quiz->ayakkabi_no) ? $quiz->ayakkabi_no : ''; ?></td>
    <?php if(!isset($quiz->stil))
    $quiz->stil = ['seçilmemiş']; ?>
    <td><?php foreach($quiz->stil as $stil) : ?>
                <?php echo ucwords($stil) . "\r\n"; ?>
                <?php endforeach ?></td>
                <?php if(!isset($quiz->bussiness_stil))
    $quiz->bussiness_stil = ['seçilmemiş']; ?>
    <td><?php foreach($quiz->bussiness_stil as $stil) : ?>
             
                <?php echo ucwords($stil) . "\r\n"; ?>
                <?php endforeach ?></td>
                <?php if(!isset($quiz->renk_group))
    $quiz->renk_group = ['seçilmemiş']; ?>
    <td><?php foreach($quiz->renk_group as $stil) : ?>
              <?php echo ucwords($stil) . "\r\n"; ?>
                <?php endforeach ?></td>
                <?php if(!isset($quiz->desen))
    $quiz->desen = ['seçilmemiş']; ?>
    <td><?php foreach($quiz->desen as $stil) : ?>
             <?php echo ucwords($stil) . "\r\n"; ?>
                <?php endforeach ?></td>
                <?php if(!isset($quiz->renk))
    $quiz->renk = ['seçilmemiş']; ?>
    <td><?php foreach($quiz->renk as $stil) : ?>
             <?php echo ucwords($stil). "\r\n"; ?>
                <?php endforeach ?></td>
                <?php if(!isset($quiz->tshirt))
    $quiz->tshirt = ['seçilmemiş']; ?>
    <td><?php foreach($quiz->tshirt as $stil) : ?>
              <?php echo ucwords($stil) ."\r\n"; ?>
                <?php endforeach ?></td>
                <?php if(!isset($quiz->pantolon))
    $quiz->pantolon = ['seçilmemiş']; ?>
    <td><?php foreach($quiz->pantolon as $stil) : ?>
              <?php echo ucwords($stil) . "\r\n"; ?>
                <?php endforeach ?></td>
                <?php if(!isset($quiz->etek))
    $quiz->etek = ['seçilmemiş']; ?>
    <td><?php foreach($quiz->etek as $stil) : ?>
              <?php echo ucwords($stil) . "\r\n"; ?>
                <?php endforeach ?></td> 
    <td>Günlük <?php echo isset($quiz->gunluk) ? $quiz->gunluk."\r\n" : 'Tercih edilmemiş' . "\r\n"; ?>
              Gece <?php echo isset($quiz->gece) ? $quiz->gece."\r\n" : 'Tercih edilmemiş' . "\r\n"; ?>
              Ofis <?php echo isset($quiz->ofis) ? $quiz->ofis."\r\n" : 'Tercih edilmemiş' . "\r\n"; ?>
              Davet <?php echo isset($quiz->davet) ? $quiz->davet."\r\n" : 'Tercih edilmemiş' . "\r\n"; ?>
    <td><?php echo $quiz->facebook; ?></td>
    <td><?php echo $quiz->instagram; ?></td>
    <td><?php echo $quiz->telefon; ?></td>
    <td><?php echo isset($quiz->mail) ? $quiz->mail : ''; ?></td>
  </tr>


</table>