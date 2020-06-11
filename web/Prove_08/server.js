const http = require('http');
const fileSystem = require('fs');
const path = require('path');

function greeting(request, response) {
    console.log("Received a request for: " + request.url);

    if (request.url == '/home') {
        response.writeHead(200, {'Content-Type': 'text/html'});
        response.write(
            "<!DOCTYPE html>" +
            "<html lang='en-US'>" +
            "<head>" +
                "<meta charset='utf-8'>" +
                "<meta name='viewport' content='width=device-width, initial-scale=1'>" +
                "<link rel='stylesheet' href='home_styleSheet.css'>" +
                "<title>Local Home Page</title>" +
            "<body>" +
                "<h1 id='fistH1'>Welcome to Local Home Page</h1>" +
                "<p>Click on the button below to go to Adam's Home Page.</p>" +
                "<button onclick=\"window.location.href = 'https://safe-reef-84965.herokuapp.com/home.php';\">Adam's Home Page</button>" +
            "</body>" +
            "</html>"
        );
        response.end();
    }
    else if (request.url == '/getData') {
        response.writeHead(200, {"Content-Type": "application/json"});
        response.write('{"name":"Adam Goff","class":"CSE 314"}');
        response.end();
    }
    else {
        response.writeHead(400, {'Content-Type': 'text/html'});
        response.write(
            "<!DOCTYPE html>" +
            "<html lang='en-US'>" +
            "<head>" +
                "<meta charset='utf-8'>" +
                "<meta name='viewport' content='width=device-width, initial-scale=1'>" +
                "<link rel='stylesheet' href='home_styleSheet.css'>" +
                "<title>Page Not Found</title>" +
            "<body>" +
                "<h1 id='fistH1'>Error 404: Page Not Found</h1>" +
            "</body>" +
            "</html>"
        );
        response.end();
    }
}

var server = http.createServer(greeting);
server.listen(8888);

console.log("The Server is Awake...")