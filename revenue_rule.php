<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <title>InvolveAsia Test</title>
  </head>
  <body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModalCenter">
  Press the button
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Revenue Group</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Revenue group title</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="insert revenue group title" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                  <div class="form-inline">
                    <label>if &nbsp;</label>
                   <select id="inputState" class="form-control">
                       <option selected>ALL</option>
                       <option>HTML</option>
                       <option>JAVASCRIPT</option>
                       <option>CSS</option>
                    </select>
                      <label> &nbsp;of the below conditions are met</label>
                  </div>
              </div>
             <table class="table table-borderless bg-secondary" id="tab_logic">
                <tbody>
                    <tr id='addr0'>
                        <td>rule 1</td>
                        <td>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <select id="inputState" class="form-control">
                                        <option selected>aff_sub</option>
                                        <option>aff_sub2</option>
                                        <option>aff_sub3</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                  <select id="inputState" class="form-control">
                                    <option selected>is</option>
                                    <option>...</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                    <ul class="" id="addDomains" style="list-style-type:none;">
                                        <li class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="domain" name="rule" placeholder="insert parameter" aria-label="insert parameter" aria-describedby="">
                                                <div class="input-group-append">
                                                <span class="input-group-text" id="addDomain">add rule</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td>&nbsp;&nbsp;<span href="#" id="add_row" class=""><i class="fas fa-plus"></i> &nbsp;</span>
                            <span href="#" id="" class="float-right"><i class="fas fa-minus"></i></span>
                        </td>
                        
                    </tr>
                    <tr id='addr1'></tr>
                </tbody>
            </table>
             <div class="form-inline">
                 <label>then revenue is&nbsp;</label>
                 <input type="number" class="form-control" placeholder=" %">
             </div>
          </form>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Confirm</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
      
<script>
//add input field
var addDomains = $('#addDomains');
var i = $('#addDomains .form-group').length + 1;
// var index = $("li").index(this) + 1;
// var i = $('#p_scents p').size() + 1;
     
$('#addDomain').on('click', function() {
    $('<li class="form-group">'+
        '<div class="input-group">'+
        '<input type="text" class="form-control" id="domain_'+ i +'" name="rule_'+ i +'" placeholder="insert parameter" aria-label="insert parameter" aria-describedby="">'+
        '<div class="input-group-append">'+
        '<span class="input-group-text" id="remove">Remove rule</span>'+
        '</div>'+
        '</div>'+
        '</li>').appendTo(addDomains);
    i++;
    return false;
});
$(document).on('click', '#remove', function() {
    if( i > 1 ) {
        $(this).parents('.form-group').remove();
        // i--;
    }
    return false;
});

    //add row

$(document).ready(function(){
  var i=1;
  $("#add_row").click(function(){
    $('#addr'+i).html("<td>rule "+ (i+1) +"</td>"+"<td><div class='form-row'><div class='col-md-3'><select id='inputState' class='form-control'><option selected>aff_sub</option><option>aff_sub2</option><option>aff_sub3</option></select></div><div class='form-group col-md-3'><select id='inputState' class='form-control'><option selected>is</option><option>...</option></select></div><div class='col-md-6'><ul class='' id='addDomains' style='list-style-type:none;'><li class='form-group'><div class='input-group'><input type='text' class='form-control' id='domain' name='rule' placeholder='insert parameter' aria-label='insert parameter' aria-describedby=''><div class='input-group-append'><span class='input-group-text' id='addDomain'>add rule</span></div></div></li></ul></div></div></td>"+"<td>&nbsp;<span href='#' id='delete_row' class='float-right'><i class='fas fa-minus'></i> &nbsp;</span></td>");

    $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
    });
});
$(document).on('click', '#delete_row', function () {
  $(this).closest('tr').remove();
  return false;
});
    
</script>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>