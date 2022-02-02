var cost = parseFloat(document.getElementById("payable").innerText.replace('$ ', ''))
paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value:cost
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("delivered.php")
        })
    },
    onCancel: function (data) {
        window.location.replace("location.html")
    }
}).render('#paypal-payment-button');