# the IP post form does not sanitize inputs

Run php -S <your ip>:8888

then direct your browser to index.php

Some valid tests include

- 1.0.0.1&& cat /etc/passwd
- || cat /etc/passwd
- ;cat /etc/passwd
