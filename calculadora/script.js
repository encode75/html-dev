const result = document.querySelector("#resultado");

function clean() {
    result.innerHTML = "";
}

function back() {
    let x = result.innerHTML.length;
    if (x>0) {
        result.innerHTML = result.innerHTML.substring(0, x-1);
    }
}

function insert(num) {
    result.innerHTML += num;
}

function calcular() {
    if (result.innerHTML && result.innerHTML != "error!") {
        try {
            let x = eval(result.innerHTML);
            result.innerHTML = x;
        } catch(e) {
            result.innerHTML = "error!";    
        }
    } else {
        result.innerHTML = "";
    }     
}