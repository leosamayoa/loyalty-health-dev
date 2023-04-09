(function($){

var meetingCodeInput = $('#meeting-code'),
    meetingCodeErrorP = $('#meeting-code-error'),
    submitCodeBtn = $('#meet-now-btn')

if(meetingCodeInput.length > 0) {

    function addErrorMsg(errorMsg) {
        meetingCodeErrorP.text(errorMsg)

        // setTimeout(function() {
        //     clearErrorMsg()
        // }, 2500)
    }

    function clearErrorMsg() {
        meetingCodeErrorP.text('')
    }
    function clearInput() {
        meetingCodeInput.val('')
    }

    function navigateToURL(code) {
        switch (code) {
            case 'A':
              window.location.href = 'https://loyaltyhealth.whereby.com/conference-a'
              break;
            case 'a':
                window.location.href = 'https://loyaltyhealth.whereby.com/conference-a'
              break;
            case 'B':
              window.location.href = 'https://loyaltyhealth.whereby.com/conference-b'
              break;
            case 'b':
               window.location.href = 'https://loyaltyhealth.whereby.com/conference-b'
               break;
            case '1':
              window.location.href = 'https://loyaltyhealth.whereby.com/room1'
              break;
            case '2':
                window.location.href = 'https://loyaltyhealth.whereby.com/room2'
              break;
            case '3':
                window.location.href = 'https://loyaltyhealth.whereby.com/room3'
              break;
            case '4':
                window.location.href = 'https://loyaltyhealth.whereby.com/room4'
              break;
            case '5':
                window.location.href = 'https://loyaltyhealth.whereby.com/room5'
              break;
            case '6':
                window.location.href = 'https://loyaltyhealth.whereby.com/room6'
                break;
			case '7':
                window.location.href = 'https://loyaltyhealth.whereby.com/room7'
                break;
            default:
                addErrorMsg('Please try a different code')
        }
    }

    var allowSubmit = false

    meetingCodeInput.on('keyup', function() {
        var inputValue = meetingCodeInput.val()

        if(inputValue.length > 1) {
            allowSubmit = false
            addErrorMsg('Codes can only be 1 character. Example: 1')

        } else {
            clearErrorMsg()
            allowSubmit = true
            submitCodeBtn.css('pointer-events', 'default')
        }
    })


    $(document).on('paste', function() {
        var inputValue = meetingCodeInput.val()
        submitCodeBtn.css('pointer-events', 'none')

        if(inputValue.length > 1) {
            allowSubmit = false
            addErrorMsg('Codes can only be 1 character. Example: 1')

        } else {
            clearErrorMsg()
            allowSubmit = true
            submitCodeBtn.css('pointer-events', 'default')
        }
    })


    submitCodeBtn.on('click', function(e) {
        e.preventDefault()
        var inputValue = meetingCodeInput.val()

        if(inputValue.length === 1) {

            navigateToURL(inputValue)

        } else if(inputValue.length === 0) {
            addErrorMsg('Codes must be 1 character. Example: A')
        } else {
            addErrorMsg('Please try a different code')
        }
    })
	
}
    
})(jQuery);