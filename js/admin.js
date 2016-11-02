$(document).ready(function () {
    $('.edt').click(function () {
      $('body').find('#myModal .modal-title').text('Edit Event');  
      $('#myModal').modal('show');
    });
    
    $('.new').click(function () {
      $('body').find('#myModal .modal-title').text('Create Event');  
      $('#myModal').modal('show');
    });
    
    $('.rmv').click(function () {
        var el = $(this);
        alert('rmv');
    });
});
