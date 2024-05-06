let websocket
websocket = new WebSocket("ws://localhost:8080")

currentPlayer = document.querySelector(".currentPlayer").value

campo = new Array()
for(i=1;i<10;i++){
    campo.push(document.getElementById(i))
}

let player = currentPlayer

function set(id) {
    
    const play = (event) => {
        event.preventDefault()

        websocket.send(campo[id].value)
        websocket.onmessage = process
    }

    if(player == 'mandante') {
        campo[id].value = 'X'
    } else {
        campo[id].value = 'O'
    }
    
    squareInput = document.getElementById(id)
    campo[id].addEventListener("click", play)
    
    const process = ({data}) => {
        squareInput = data
    }
}
