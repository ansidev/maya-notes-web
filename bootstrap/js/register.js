window.onload = function() {
    $('#email').onfocus = show('email-tooltip');
    document.getElementById('email').onblur = hide('email-tooltip');

    document.getElementById('username').onfocus = show('username-tooltip');
    document.getElementById('username').onblur = hide('username-tooltip');

    document.getElementById('password').onfocus = show('password-tooltip');
    document.getElementById('password').onblur = hide('password-tooltip');

    document.getElementById('confirm-password').onfocus = show('confirm-password-tooltip');
    document.getElementById('confirm-password').onblur = hide('confirm-password-tooltip');

    document.getElementById('first-name').onfocus = show('first-name-tooltip');
    document.getElementById('first-name').onblur = hide('first-name-tooltip');

    document.getElementById('last-name').onfocus = show('last-name-tooltip');
    document.getElementById('last-name').onblur = hide('last-name-tooltip');

    document.getElementById('birthday').onfocus = show('birthday-tooltip');
    document.getElementById('birthday').onblur = hide('birthday-tooltip');

    document.getElementById('male').onfocus = show('gender-tooltip');
    document.getElementById('male').onblur = hide('gender-tooltip');

    document.getElementById('female').onfocus = show('gender-tooltip');
    document.getElementById('female').onblur = hide('gender-tooltip');

    document.getElementById('tos-checkbox').onfocus = isChecked('tos-checkbox-tooltip');
    document.getElementById('tos-checkbox').onblur = isChecked('tos-checkbox-tooltip');
}

function show(element) {
	return function() {
    	$('#'+element).css('display','inline');
	}
}

function isChecked(element) {
    return function() {
        if ($('#'+element).checked === false) {
            show(element);
        }
        else {
            hide(element);
        }
    }
}
function hide(element) {
	return function() {
        $('#'+element).css('display','none');
    }
}