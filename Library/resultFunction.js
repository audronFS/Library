
function resultFunction(str) {
    if (str.length === 0) { 
        document.getElementById("txt").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("txt").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "connection.php?searching="+str, true);
        xmlhttp.send();
    }
    }

