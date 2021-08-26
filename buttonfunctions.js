function submit() {
    var node = document.createElement('li');
    node.id = "user";
    node.appendChild(document.createTextNode(document.getElementById('inputName').value));

    document.querySelector('ol').appendChild(node);
}
function clean() {
    console.log("test")
    for(var i = 0; i < 100; i++) {
        var lis = document.getElementById("user");
        lis.remove();
        console.log(i);


    }
}

