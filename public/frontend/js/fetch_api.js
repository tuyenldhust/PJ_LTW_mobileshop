document.getElementById(".addToCartBtn").addEventListener("click", function() {
    loadcart();
});

function loadcart() {
    fetch('load-cart-data', {
        method: 'GET'
    })
        .then(response => response.json())
        .then(response => {
            document.querySelector('.cart-count').innerHTML = '';
            document.querySelector('.cart-count').innerHTML = response.count;
        })
        .catch(error => console.error(error));
}

function loadwishlist() {
    fetch('/load-wishlist-count', {
        method: 'GET'
    })
        .then(response => response.json())
        .then(response => {
            document.querySelector('.wishlist-count').innerHTML = '';
            document.querySelector('.wishlist-count').innerHTML = response.count;
        })
        .catch(error => console.error(error));
}

$('.addToCartBtn').click(function (e){
    e.preventDefault();

    var product_id = $(this).closest('.product_data').find('.prod_id').val();
    var product_qty = $(this).closest('.product_data').find('.qty-input').val();

    var csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch('/add-to-cart', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf_token
        },
        body: JSON.stringify({
            product_id: product_id,
            product_qty: product_qty
        })
    })
        .then(response => response.json())
        .then(response => {
            swal(response.status);
            loadcart();
        })
        .catch(error => console.error('Error:', error));
});

$('.addToWishlist').click(function (e) {
    e.preventDefault();
    var product_id = $(this).closest('.product_data').find('.prod_id').val();

    fetch("/add-to-wishlist", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            product_id: product_id
        })
    })
        .then(response => response.json())
        .then(data => {
            swal(data.status);
            loadwishlist();
        })
        .catch(error => console.error('Error:', error));
});

document.querySelector('.decrement-btn').addEventListener('click', (e) => {
    e.preventDefault();
    const dec_value = e.target.closest('.product_data').querySelector('.qty-input').value;
    let value = parseInt(dec_value, 10);
    value = isNaN(value) ? 0 : value;
    if (value > 1) {
        value--;
        e.target.closest('.product_data').querySelector('.qty-input').value = value;
    }
});

$(document).on('click', '.delete-cart-item', function (e) {
    e.preventDefault();

    var prod_id = $(this).closest('.product_data').find('.prod_id').val();
    fetch("delete-cart-item", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        body: JSON.stringify({
            prod_id: prod_id
        })
    })
        .then(response => response.json())
        .then(data => {
            // window.location.reload();
            loadcart();
            $('.cartitems').load(location.href + " .cartitems");
            swal("", data.status, "success");
        });
});

$(document).on('click', '.remove-wishlist-item', async function (e) {
    e.preventDefault();
    var prod_id = $(this).closest('.product_data').find('.prod_id').val();

    try {
        const response = await fetch("delete-wishlist-item", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                prod_id: prod_id
            })
        });

        const data = await response.json();

        if (response.ok) {
            loadwishlist();
            $('.wishlistitems').load(location.href + " .wishlistitems");
            swal("", data.status, "success");
        } else {
            throw new Error(data.status);
        }
    } catch (error) {
        console.error(error);
        swal("Error", error.message, "error");
    }
});

$(document).on('click', '.changeQuantity', function (e) {
    e.preventDefault();

    var prod_id = $(this).closest('.product_data').find('.prod_id').val();
    var qty = $(this).closest('.product_data').find('.qty-input').val();
    data = {
        'prod_id' : prod_id,
        'prod_qty' : qty,
    }
    fetch('update-cart', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
        .then(response => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(data => {
            $('.cartitems').load(location.href + " .cartitems");
        })
        .catch(error => {
            console.error('Error:', error);
        });
});
