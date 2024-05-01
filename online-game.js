campo = new Array()
for(i=1;i<10;i++){
    campo.push(document.getElementById(i))
}

i = 0
function set(id){
    if(i % 2 == 0){
        x = new Array()
        for(c=1;c<10;c++){
            x.push(document.getElementById(c))
        }
        campo[id].value = "X"
        if(
            x[0].value == "X" && x[1].value == "X" && x[2].value == "X" || 
            x[3].value == "X" && x[4].value == "X" && x[5].value == "X" ||
            x[6].value == "X" && x[7].value == "X" && x[8].value == "X" ||

            x[0].value == "X" && x[3].value == "X" && x[6].value == "X" ||
            x[1].value == "X" && x[4].value == "X" && x[7].value == "X" ||
            x[2].value == "X" && x[5].value == "X" && x[8].value == "X" ||
           
            x[0].value == "X" && x[4].value == "X" && x[8].value == "X" ||
            x[2].value == "X" && x[4].value == "X" && x[6].value == "X" 
        )
        {
            document.getElementById("j1").innerHTML = "Jogador 1 venceu!"
            for(i=1;i<10;i++){
                document.getElementById(i).disabled = true
            }
        }

    } else {
        o = new Array()
        for(c=1;c<10;c++){
            o.push(document.getElementById(c))
        }
        campo[id].value = "O"
        if(
            o[0].value == "O" && o[1].value == "O" && o[2].value == "O" || 
            o[3].value == "O" && o[4].value == "O" && o[5].value == "O" ||
            o[6].value == "O" && o[7].value == "O" && o[8].value == "O" ||

            o[0].value == "O" && o[3].value == "O" && o[6].value == "O" ||
            o[1].value == "O" && o[4].value == "O" && o[7].value == "O" ||
            o[2].value == "O" && o[5].value == "O" && o[8].value == "O" ||
           
            o[0].value == "O" && o[4].value == "O" && o[8].value == "O" ||
            o[2].value == "O" && o[4].value == "O" && o[6].value == "O" 
        )
        {
            document.getElementById("j2").innerHTML = "Jogador 2 venceu!"
            for(i=1;i<10;i++){
                document.getElementById(i).disabled = true
            }
        }
    }

    campo[id].disabled = true
    campo[id].style.color = "black"

i++
}










