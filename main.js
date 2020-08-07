$(() => {

    $('.loctren-tim').on('keydown keypress keyup change', function() {
        var $this = $(this)
            $val = $this.val().toLowerCase();
        $this.parent('.card-body').find('label').hide();
        $this.parent('.card-body').find("span").filter(function() {
            return $(this).data("text").indexOf($val) >= 0;
        }).parent('label').show();
    });

});