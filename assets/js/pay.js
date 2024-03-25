document.getElementById('multi-step-form').addEventListener('submit', function(e) {
    e.preventDefault();

    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var email = document.getElementById('email').value;
    var amount = document.getElementById('amount').value;
    var phone = document.getElementById('phone').value;
    var age = document.getElementById('age').value;
    var address = document.getElementById('address').value;
    var healthCondition = document.getElementById('healthCondition').value;
    var reasonForCondition = document.getElementById('reasonForCondition').value;
    var stateOfOrigin = document.getElementById('stateOfOrigin').value;
    var occupation = document.getElementById('occupation').value;
    var performanceType = document.getElementById('performanceType').value;
    var stageName = document.getElementById('stageName').value;
    var hobbies = document.getElementById('hobbies').value;
    var parentsFullName = document.getElementById('parentsFullName').value;
    var parentEmail = document.getElementById('parentEmail').value;
    var parentPhone = document.getElementById('parentPhone').value;
    var parentAddress = document.getElementById('parentAddress').value;

    payWithPaystack(firstName, lastName, email, phone, age, address, healthCondition, reasonForCondition, stateOfOrigin, occupation, performanceType, stageName, hobbies, parentsFullName, parentEmail, parentPhone, parentAddress, amount);
});

function payWithPaystack(firstName, lastName, email, phone, age, address, healthCondition, reasonForCondition, stateOfOrigin, occupation, performanceType, stageName, hobbies, parentsFullName, parentEmail, parentPhone, parentAddress, amount) {
    var handler = PaystackPop.setup({
        key: 'pk_test_c1ff9832479e57844403e068516234c701d625ab',
        email: email,
        amount: amount * 100,
      currency: 'NGN',
        ref: 'NTB'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        onClose: function(){
            alert('Window closed.');
        },
        callback: function(response){
            // this happens after the payment is completed successfully
            var reference = response.reference;

            // you can pass the reference to your server to verify the transaction

            // After payment success, save form information to MySQL database
            saveFormInformation(firstName, lastName, email, phone, age, address, healthCondition, reasonForCondition, stateOfOrigin, occupation, performanceType, stageName, hobbies, parentsFullName, parentEmail, parentPhone, parentAddress, amount, reference);
        }
    });
    handler.openIframe();
}

function saveFormInformation(firstName, lastName, email, phone, age, address, healthCondition, reasonForCondition, stateOfOrigin, occupation, performanceType, stageName, hobbies, parentsFullName, parentEmail, parentPhone, parentAddress, amount, reference) {
    // Save form information to MySQL database using PHP
    var formData = new FormData();
    formData.append('firstName', firstName);
    formData.append('lastName', lastName);
    formData.append('email', email);
    formData.append('amount', amount);
    formData.append('phone', phone);
    formData.append('age', age);
    formData.append('address', address);
    formData.append('healthCondition', healthCondition);
    formData.append('reasonForCondition', reasonForCondition);
    formData.append('stateOfOrigin', stateOfOrigin);
    formData.append('occupation', occupation);
    formData.append('performanceType', performanceType);
    formData.append('stageName', stageName);
    formData.append('hobbies', hobbies);
    formData.append('parentsFullName', parentsFullName);
    formData.append('parentEmail', parentEmail);
    formData.append('parentPhone', parentPhone);
    formData.append('parentAddress', parentAddress);
    formData.append('reference', reference);

    fetch('auth/save-form.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error(error);
    });
}