<template>
  <div id="paypal-button-container"></div>
</template>

<script>
export default {
  name: 'PayPalButton',
  mounted() {
    // Load PayPal JS SDK dynamically
    const script = document.createElement('script');
    script.src = "https://www.paypal.com/sdk/js?client-id=AT23GogKhe2lwDDtUdGXNJuiaAKEj36Hu5w7nQYHYLjksBGUqAwGT9IbcgeQn-5r5YC-d5LhlDYT7vlw&currency=USD";

    script.addEventListener('load', this.renderPayPalButton);
    document.body.appendChild(script);
  },
  methods: {
    renderPayPalButton() {
      window.paypal.Buttons({
        createOrder: (data, actions) => {
          // You will call your Laravel backend here later
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '10' // Replace with the amount you want to charge
              }
            }]
          });
        },
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name);
          });
        }
      }).render('#paypal-button-container');
    }
  }
}
</script>

<style scoped>
#paypal-button-container {
  margin-top: 20px;
}
</style>
