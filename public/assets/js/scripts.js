$(document).ready(function() {

  $(".togglePassword").on("click", function(e) {
    e.preventDefault()

    var input_group = $(this).closest('.input-group ')
    var input = input_group.find('input.form-control')
    var icon = input_group.find('i')

    input.attr('type', input.attr("type") === "text" ? 'password' : 'text')

    icon.toggleClass('fa-eye-slash fa-eye')
  })

})