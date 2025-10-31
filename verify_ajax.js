$(document).ready(function() {
    $('#checkABC').on('submit', function(e) {
        e.preventDefault(); // prevent the page get reload 

        const username =  $('#username').val().trim(); // store the username input in the constant variable
        if (username === '') {   // check whether the input is empty 
            $('#info')
                .removeClass() // remove the class name 
                .addClass('warning') // add new class name 
                .html('Please enter a username.') // add in the new message
            return; 
        }

        $.ajax({
            url: 'info.php', // pass it to info.php so php will process the request
            type: 'POST', // http method
            data: { username: username }, // the data want to send to the server
            success: function(response) {
                console.log(response); // response in the browser console, i used for check whether the it return correctly
                $('#info').removeClass().html(response); // remove the other class so that will not affect the css design.
            },
            error: function() {
                $('#info').html('Error Occured');  // return the unknown error message
            }
        });
    });
});
