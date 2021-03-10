$(function () {

    var table = $('#users-table').DataTable({
        processing: true,
  
        serverSide: true,
  
        responsive : true,
  
        ajax: "/admin/menu",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data:"type",name:"Menu Type"},
            {data: 'name', name: 'Title'},
            {data: 'destination_url', name: 'Link'},
            {data:'active',name:'active'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
  
  
  
        ]
    }); 
  
  });
  