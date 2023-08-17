  <?php
  $fileName = $_GET['pdf']; // pega o endereço do arquivo
                         // ou o nome dele se o arquivo
                         // estiver na mesma pagina
  $file= "images/uploads/".$fileName;

  header("Content-Type: application/save");
  header("Content-Length:".filesize($file));
  header('Content-Disposition: attachment; filename="' . $fileName . '"');
  header("Content-Transfer-Encoding: binary");
  header('Expires: 0');
  header('Pragma: no-cache');

  // nesse momento ele le o arquivo e envia
  $fp = fopen("$file", "r");
  fpassthru($fp);
  fclose($fp);
  ?>
