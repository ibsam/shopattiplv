$(function () {

    var table = $('#users-table').DataTable({
        processing: true,
  
        serverSide: true,
  
        responsive : true,
  
        ajax: "/admin/campaign",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data:"name",name:"Name"},
            {data: 'slug', name: 'slug'},
            {data:'product_price_start',name:'Product Price Start'},
            {data:'product_price_end',name:'Product Price End'},
            {data:'starting_date',name:'Starting Date'},
            {data:'ending_date',name:'End Date'},
            // {data: 'action', name: 'action', orderable: false, searchable: false},
  
        ]
    }); 
  
  });
  