
    $("[name=range]").on("change", function() {
    $("[for=range]").val(this.value +"%" );
    }).trigger("change");

    $("[name=range1]").on("change", function() {
    $("[for=range1]").val(this.value +"%" );
    }).trigger("change");

    $("[name=range2]").on("change", function() {
    $("[for=range2]").val(this.value +"%" );
    }).trigger("change");