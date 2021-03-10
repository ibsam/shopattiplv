$(function () {

    var table = $('#users-table').DataTable({
        processing: true,
  
        serverSide: true,
  
     responsive : true,
  
        ajax: "/admin/banner",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'slider_type_id', name: 'Slider Type'},
            {data: 'title', name: 'Title'},
            {data: 'destination_url', name: 'Destination Url'},
            {data: 'banner', name: 'banner'},
            {data:'active',name:'active'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
  
  
  
        ]
    });
  
  });
  