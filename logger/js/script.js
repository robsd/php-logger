uri = window.location.pathname;

request = new XMLHttpRequest();
request.open('GET', 'logger/logger.php?uri=' + uri);
request.send();