$(document).ready(function() {
$("p").hide();
$("h2").click(function() {
$(this).next().slideToggle(300);
});
});

$(document).ready(function() {
$("form").hide();
$("h1").click(function() {
$(this).next().slideToggle(300);
});
});
