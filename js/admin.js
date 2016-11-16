$(document).ready(function () {
    $('.edt').click(function () {
      var $this = $(this);
      var data = $this.parents('tr').data('info');
      var tp = $this.data('tp');
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
                        '<textarea style="width: 500px" id="desc">'+data.Desc+'</textarea>'+
                        '<br>'+
                        '<br>'+
                        '<div class="upld">'+
                          '<p>Upload Image:</p>'+
                          '<input type="file">'+
                        '</div>'+
                    '</div>'+
                    '<div class="modal-footer">'+
                        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
                        '<button type="button" data-id='+data.Id+' id="edt-sve" data-tp='+tp+' class="btn btn-success" data-dismiss="modal">Save</button>'+
                    '</div>'+
                '</div></div>');
      if(data.Img != null) {
        $('#myModal').find('.modal-body').append('<img id="img" src="'+data.Img+'">');
        $('#myModal').find('.upld').remove();
      }
    });
    
    $('.new').click(function () {
      $('body').find('#myModal .modal-title').text('Create Event');  
      $('#myModal').modal('show');
      var $this = $(this);
      var data = $this.parents('tr').data('info');
      var tp = $this.data('tp');
      $('#myModal').html('<div class="modal-dialog">'+
                        '<div class="modal-content">'+
                    '<div class="modal-header">'+
                        '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                        '<h4 class="modal-title"></h4>'+
                    '</div>'+
                    '<div class="modal-body">'+
                        '<p>Description:</p>'+
                        '<textarea style="width: 500px" id="desc"></textarea>'+
                        '<br>'+
                        '<br>'+
                        '<div class="upld">'+
                          '<p>Upload Image:</p>'+
                          '<input type="file">'+
                        '</div>'+
                    '</div>'+
                    '<div class="modal-footer">'+
                        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
                        '<button type="button" id="new-sve" data-tp='+tp+' class="btn btn-success" data-dismiss="modal">Save</button>'+
                    '</div>'+
                '</div></div>');
    });
    
    $('.rmv').click(function () {
        var el = $(this);
    });
    
    $('#myModal, #edt-sve').on('click', function () {
       var $this = $(this);
       $.ajax({
            url: "admin.php",
            type: 'post',
            data: {
              id: $this.data('id'),
              img: $this.find("#img").text(),
              dsc: $this.find("#desc").text(),
              tp: $this.data('tp')
            },
            success: function (res) {
                alert('odc');
              res = JSON.parse(res);
              if(res.success == 1){
              }
              else {
              }
            }
          });
    });
    
    $('#myModal, #new-sve').on('click', function () {
       var $this = $(this);
       $.ajax({
            url: "admin.php",
            type: 'post',
            data: {
              img: $this.find("#img").text(),
              dsc: $this.find("#desc").text(),
              tp: $this.data('tp')
            },
            success: function (res) {
              res = JSON.parse(res);
              if(res.success == 1){
              }
              else {
              }
            }
          });
    });
});
