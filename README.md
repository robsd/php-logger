# php-logger 👀

A simple PHP and JavaScript AJAX logger that logs IP addresses, their URI request and their user-agent with timestamps.

## Installing on your own site

1. Copy the `<script src="logger/js/script.js"></script>` declaration on every page you want to enable logging.
2. Copy the **logger** folder.
3. Thats it! If everything works, you should start seeing entries added to the **logger/log.txt** file.

## IMPORTANT NOTICE

- Please be aware of the data privacy laws in your country or rules set by your web host.
- Make sure the **logger/log.txt** file has **user read and write** permissions (`600` or `u+rw`) **only** and **nothing else**. Otherwise the public Internet could access this data.
- I accept no responsibility for how this logger is used.

## Need a hint?

See the bottom of **example.html** for how to declare the JavaScript.