$(document).ready(function () {

    // Hide error and success alerts
    $('#success').hide();
    $('#error').hide();

    // click event on submit button
    $('#submit').click(function (e) {

        e.preventDefault();

        // Create variables
        var url = 'php/sendmail.php';
        var name = $('#form_name').val();
        var email = $('#form_email').val();
        var phone = $('#form_phone').val();
        var subject = $('#form_subject').val();
        var message = $('#form_message').val();

        // Check if variable are empty.
        if (name === '') {
            $('#error').html("Kindly provide your name.").slideDown().delay(1000).slideUp();
        } else {
            if (email === '') {
                $('#error').html('Kindly provide your email').slideDown().delay(1000).slideUp();
            } else {
                if (subject === '') {
                    $('#error').html('Please enter the subject').slideDown().delay(1000).slideUp();
                } else {
                    if (phone === '') {
                        $('#error').html('Kindly provide your phone number').slideDown().delay(1000).slideUp();
                    } else {
                        if (message === '') {
                            $('#error').html('Kindly enter your message').slideDown().delay(1000).slideUp();
                        } else {

                            // if variables are not empty, send data to the server
                            $.ajax({
                                url: url,
                                method: "POST",
                                data: {name: name, email: email, phone: phone, subject: subject, message: message},
                                dataType: "json",
                                success: function (data) {
                                    $('#success').html(data).slideDown().delay(3000).slideUp();
                                },
                                error: function (data) {
                                    $('#error').html(data).slideDown().delay(1000).slideUp();
                                }
                            });

                        }
                    }
                }
            }
        }
    });

});