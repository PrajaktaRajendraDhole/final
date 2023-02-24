function fetchemp(){


    alert("hello");

    var id = document.getElementById["location"].value;
    alert(id);

    $.ajax(
        {
            url : "fetchlocation.php",
            method : "POST",
            data:{
                x : id
            },
            dataType:"JSON",
            success:function(data){
              document.getElementById("location").value = data.name1;  
              document.getElementById("slot_id").value = data.name2;  
              document.getElementById("slots").value = data.name3;  
            }

        }
    )
}