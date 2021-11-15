jQuery(document).ready(function() {

    var mainWindow = jQuery('#custom-form-main-window');
    var companyName = jQuery('#custom-form-company-name');
    var companyNameInitials = jQuery('#custom-form-company-name .initials');
    var message = jQuery('#custom-form-message');
    var inputMessage = jQuery('#custom-form-input-message');
    var inputCompanyName = jQuery('#custom-form-input-company-name');
    var inputMainColor = jQuery('#custom-form-input-main-color');
    var pickerMainColor = jQuery('#custom-form-picker-main-color');
    var inputAccentColor = jQuery('#custom-form-input-accent-color');
    var pickerAccentColor = jQuery('#custom-form-picker-accent-color');
    var buttonApprove = jQuery('#custom-form-button-approve');
    var watch = jQuery('#custom-form-image-watch');
    var computer = jQuery('#custom-form-image-computer');


    // Company Name
    inputCompanyName.on('keyup', function() {
        companyNameInitials.text(this.value.substr(0, 2));
    });

    // Message
    inputMessage.on('keyup', function() {
        message.text(this.value.substr(this.value, 30) + (this.value.length > 30 ? '...' : ''));
    });

    // Main Color
    inputMainColor.on('change keyup keydown', function() {
        updateMainColor(this.value);
    });
    pickerMainColor.on('change keyup keydown', function() {
        updateMainColor(this.value);
    });

    // jQuery('.customizable-form').on('mousemove', function() {
    //     updateMainColor(pickerMainColor.val());
    // });

    // Accent Color
    inputAccentColor.on('change keyup', function() {
        updateAccentColor(this.value);
    });

    pickerAccentColor.on('change keyup', function() {
        updateAccentColor(this.value);
    });

    function updateMainColor(color) {
        mainWindow.css('background-color', color);
        inputMainColor.val(color);
        pickerMainColor.val(color);
    }

    function updateAccentColor(color) {
        companyName.css('background-color', color);
        watch.find('.circle').css('fill', color);
        watch.find('.hands').css('stroke', color);
        computer.find('.screen').css('fill', color);
        computer.find('.keyboard').css('stroke', color);
        buttonApprove.css('background-color', color);
        inputAccentColor.val(color);
        pickerAccentColor.val(color);
    }
});