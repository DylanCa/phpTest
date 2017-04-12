$('document').ready(function() {

    $('#addpass, #confirmpass').on('change', function() {
        var pass = $('#addpass'),
            confirmpass = $('#confirmpass');
        if (pass.val() == confirmpass.val()) {
            $('#createButton').prop('disabled', false);
        } else { $('#createButton').prop('disabled', true); }
    });

    $('#createAccount').click(function(){
    	$(this).prop('hidden', true);
    	$("#loginForm").prop('hidden', true);
    	$("#createAccountForm").prop('hidden', false);
    	$("#alreadyCreated").prop('hidden', false);
    });

    $('#alreadyCreated').click(function(){
    	$(this).prop('hidden', true);
    	$("#loginForm").prop('hidden', false);
    	$("#createAccountForm").prop('hidden', true);
    	$("#createAccount").prop('hidden', false);
    });

});
