const EventEmitter = require('events');
let http = require("http");

let myListener = new EventEmitter();


let App = {
    start: function (port) {
        let listener = new EventEmitter();
        let server = http.createServer((req, res) => {

            res.writeHead(200, {
                'Content-type': 'text/html; charset=utf-8'
            });

            if (req.url === '/') {
                listener.emit('root', res);
            }
            res.end();
        }).listen(port)

        return listener;
    }
}

myListener.on('jump', function () {
    console.log('My listener is jumping');
});

let app = App.start(8080);
app.on('root', function (response) {
    response.write("I'm at root.");
});

