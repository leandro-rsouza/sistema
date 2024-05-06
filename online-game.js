let websocket
websocket = new WebSocket("ws://localhost:8080")

currentPlayer = document.querySelector(".currentPlayer").value

campo = new Array()
for(i=1;i<10;i++){
    campo.push(document.getElementById(i))
}

let player = currentPlayer

function set(id) {
    if(player == 'mandante') {
        campo[id].value = 'X'
    } else {
        campo[id].value = 'O'
    }
}

const process = ({data}) => {
    console.log(data)
}

const play = (event) => {
    event.preventDefault()

    websocket.send(campo[0].value) // Só recebe o primeiro campo
    websocket.onmessage = process
}

campo[0].addEventListener("click", play) // Só recebe o primeiro campo
