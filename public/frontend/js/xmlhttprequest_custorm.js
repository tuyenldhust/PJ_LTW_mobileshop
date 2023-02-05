function loadcart() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/load-cart-data', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            document.querySelector('.cart-count').innerHTML = response.count;
        }
    };
    xhr.send();
}
