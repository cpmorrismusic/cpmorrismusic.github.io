var $form = $('form#test-form'),
    url = 'https://script.google.com/macros/s/AKfycbx6w2H2B8IafDlNvKhTJKONOH-cOQf61GpiD_ACqDL9bmvr2lCwVhSljrYbBKW990v3HQ/exec'

$('#submit-form').on('click', function(e) {
    e.preventDefault();
    var jqxhr = $.ajax({
        url: url,
        method: "GET",
        dataType: "json",
        data: $form.serializeObject()
    }).success(
        // do something
    );
})