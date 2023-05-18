import Alpine from "alpinejs";
Alpine.data('PaypalCheckoutButtons',
    () => ({
        // ...attrs,
        init() {
            console.log("This is demo alpinejs");
        }
    }))
paypal.Buttons({

    // Order is created on the server and the order id is returned
    createOrder() {
        const body = {
            // cart: [{
            //   sku: "HGMA011",
            //   quantity: "1",
            // }],
        }
        const config = { headers: { 'Content-Type': 'application/json' } }

        return axios.post('/create/order', body, config).then(({ data }) => data.id);
    },

    // Finalize the transaction on the server after payer approval
    onApprove(data) {
        const body = { orderID: data.orderID }

        const config = { headers: { "Content-Type": "application/json" } }

        return axios.post('/capture/order', body, config).then((orderData) => {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            const element = document.getElementById('paypal-checkout-button-container');
            element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  window.location.href = 'thank_you.html';
        });
    }

}).render('#paypal-checkout-button-container');
