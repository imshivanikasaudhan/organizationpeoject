@if(session('message'))
    <script>
        swal("Request Deleted", "{{session('message')}}", 'success',{
        button:true,
        button:"OK",
     });
    </script>
 @endif

return back()->with('message', 'Data Deleted Successfully');