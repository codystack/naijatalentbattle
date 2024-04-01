const paymentForm = document.getElementById('multi-step-form');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_live_6be014dfb87245a15b9e0fb7ee46f801d7d5af7f', // Replace with your public key
    email: document.getElementById('email').value,
    firstname: document.getElementById('firstName').value,
    lastname: document.getElementById('lastName').value,
    amount: document.getElementById('amount').value * 100,
    currency: 'NGN',
    ref: 'REF_'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    metadata: {
      custom_fields: [
        {
        display_name: "Phone",
        variable_name: "phone",
        value: document.getElementById('phone').value
        },

        {
        display_name: "Age",
        variable_name: "age",
        value: document.getElementById('age').value
        },

        {
        display_name: "Gender",
        variable_name: "gender",
        value: document.getElementById('gender').value
        },

        {
        display_name: "Address",
        variable_name: "address",
        value: document.getElementById('address').value
        },

        {
        display_name: "Health Condition",
        variable_name: "healthCondition",
        value: document.getElementById('healthCondition').value
        },

        {
        display_name: "If Yes, Indicate",
        variable_name: "reasonForCondition",
        value: document.getElementById('reasonForCondition').value
        },

        {
        display_name: "State of Origin",
        variable_name: "stateOfOrigin",
        value: document.getElementById('stateOfOrigin').value
        },

        {
        display_name: "Occupation",
        variable_name: "occupation",
        value: document.getElementById('occupation').value
        },

        {
        display_name: "Performance Type",
        variable_name: "performanceType",
        value: document.getElementById('performanceType').value
        },

        {
        display_name: "Stage Name",
        variable_name: "stageName",
        value: document.getElementById('stageName').value
        },

        {
        display_name: "Hobbies",
        variable_name: "hobbies",
        value: document.getElementById('hobbies').value
        },

        {
        display_name: "Talent Category",
        variable_name: "talentCategory",
        value: document.getElementById('talentCategory').value
        },

        {
        display_name: "Parent/Guardian Full Name",
        variable_name: "parentsFullName",
        value: document.getElementById('parentsFullName').value
        },

        {
        display_name: "Parent/Guardian Email",
        variable_name: "parentEmail",
        value: document.getElementById('parentEmail').value
        },

        {
        display_name: "Parent/Guardian Phone Number",
        variable_name: "parentPhone",
        value: document.getElementById('parentPhone').value
        },

        {
        display_name: "Parent/Guardian Residential Address",
        variable_name: "parentAddress",
        value: document.getElementById('parentAddress').value
        }

      ]
    },
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      //let message = 'Payment complete! Reference: ' + response.reference;
      //alert(message);
      window.location = "./verify_transaction?reference=" + response.reference;
    }
  });
  handler.openIframe();
}