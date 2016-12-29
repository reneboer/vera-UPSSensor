<php
  $nas_ip = '192.168.x.x';
  $output = shell_exec('upsc ups@'.$nas_ip);
  echo "<pre>$output</pre>";
?>
