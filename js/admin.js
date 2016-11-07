$(document).ready(function () {
    $('.edt').click(function () {
      var $this = $(this);
      var data = $this.parents('tr').data('info');
      $('body').find('#myModal .modal-title').text('Edit Event');  
      $('#myModal').modal('show');
      $('#myModal').html('<div class="modal-dialog">'+
                        '<div class="modal-content">'+
                    '<div class="modal-header">'+
                        '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                        '<h4 class="modal-title"></h4>'+
                    '</div>'+
                    '<div class="modal-body">'+
                        '<p>Description:</p>'+
                        '<textarea style="width: 500px"></textarea>'+
                        '<br>'+
                        '<br>'+
                        '<div class="upld">'+
                          '<p>Upload Image:</p>'+
                          '<input type="file">'+
                        '</div>'+
                    '</div>'+
                    '<div class="modal-footer">'+
                        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
                        '<button type="button" class="btn btn-success" data-dismiss="modal">Save</button>'+
                    '</div>'+
                '</div></div>');
      if(data.Img != null) {
        $('#myModal').find('.modal-body').append('<img src="'+data.Desc+'">');
        $('#myModal').find('.upld').remove();
      }
    });
    
    $('.new').click(function () {
      $('body').find('#myModal .modal-title').text('Create Event');  
      $('#myModal').modal('show');
      $('#myModal').html('<div class="modal-dialog">'+
                        '<div class="modal-content">'+
                    '<div class="modal-header">'+
                        '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                        '<h4 class="modal-title"></h4>'+
                    '</div>'+
                    '<div class="modal-body">'+
                        '<p>Description:</p>'+
                        '<textarea style="width: 500px"></textarea>'+
                        '<br>'+
                        '<br>'+
                        '<div class="upld">'+
                          '<p>Upload Image:</p>'+
                          '<input type="file">'+
                        '</div>'+
                    '</div>'+
                    '<div class="modal-footer">'+
                        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
                        '<button type="button" class="btn btn-success" data-dismiss="modal">Save</button>'+
                    '</div>'+
                '</div></div>');
    });
    
    $('.rmv').click(function () {
        var el = $(this);
        alert('rmv');
    });
});
