

jQuery(document).ready(function ($) {
    
    $(".form-check :checkbox").click(function() {

        var re = new RegExp($(".form-check :checkbox:checked").map(function() {
                               return this.value;
                            }).get().join("|") );
        $(".mycard").each(function() {
           var $this = $(this);
           $this[re.source!="" && re.test($this.attr("class")) ? "show" : "hide"]();
        });
     });

    
});

