// $("#add_button").on('click', function() {
//     $("#add_course_div").removeAttr('hidden');
// });

$('#load_another_form').click(function() {
    var clone = $('#form_to_be_clone').clone();
    $('#add_course_div').append(clone);
  });