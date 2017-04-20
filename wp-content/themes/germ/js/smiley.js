/**
 * Created by ASUS on 2017-04-20.
 */
jQuery(document).ready(function($){
    var smiley_button='';
    if ($('#comments-form').length || $('#activity-widget').length) {
        $.get('/wp-admin/admin-ajax.php/?action=get_smiley',
            function (data) {
                smiley_button=data;
                $('#qt_comment_toolbar input:last').after(smiley_button);
            }
        );
    }
});

jQuery(document).on("click", ".add-smily",
    function() {
        var myField;
        tag = ' ' + jQuery(this).data("smilies") + ' ';
        if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
            myField = document.getElementById('comment');
        } else {
            return false;
        }
        if (document.selection) {
            myField.focus();
            sel = document.selection.createRange();
            sel.text = tag;
            myField.focus();
        }
        else if (myField.selectionStart || myField.selectionStart == '0') {
            var startPos = myField.selectionStart;
            var endPos = myField.selectionEnd;
            var cursorPos = endPos;
            myField.value = myField.value.substring(0, startPos)
                + tag
                + myField.value.substring(endPos, myField.value.length);
            cursorPos += tag.length;
            myField.focus();
            myField.selectionStart = cursorPos;
            myField.selectionEnd = cursorPos;
        }
        else {
            myField.value += tag;
            myField.focus();
        }
        return false;
    });
