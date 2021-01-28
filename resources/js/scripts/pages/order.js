$(function () {

    var table = $('#users-table').DataTable({
        processing: true,
  
        serverSide: true,
  
        responsive : true,
  
        ajax: "/admin/order",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data:"order_code",name:"Order Code"},
            {data: 'order_status', name: 'Order Status'},
            {data: 'payment_status', name: 'Payment Status'},
            {data:'total_price',name:'Total Price'},
            {data: 'created_at', name: 'Created At'},
            {data: 'updated_at', name: 'updated At'},
            // {data: 'action', name: 'action', orderable: false, searchable: false},
  
        ]
    }); 
  
  });
  