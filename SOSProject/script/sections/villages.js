/**
 * Created by Dayalan A on 7/2/2019.
 */
$(document).ready(function () {
    $('#save').click(function () {
        var villageid,villagename,address1,address2,city,zipcode,districtid,telephone,email,web;
        villageid=$('#villageid').val();
        villagename=$('#villagename').val();
        address1=$('#address1').val();
        address2=$('#address2').val();
        city=$('#city').val();
        zipcode=$('#zipcode').val();
        districtid=$('#districtid').val();
        telephone=$('#telephone').val();
        email=$('#email').val();
        web=$('#web').val();
        $.post("proccessvillagedata.php", {Action: "add",villagename:villagename,address1:address1,address2:address2,city:city,zipcode:zipcode,districtid:districtid,telephone:telephone,email:email,web:web}, function (data) {
                console.log(data);
                var response=JSON.parse(data);
                var result=response.result;
                if(result=='true'){
                    alert('Village Inserted Successfully');
                    $('#village_form').trigger("reset");
                    $('#container').toggle()
                    $('#tableContainer').toggle()
                }else{
                    alert('Failed to insert');
                }

            }
        )
    });
    $('#showForm').click(function(){
        $('#container').toggle()
        $('#tableContainer').toggle()

    })
});

function deleteItem(id){

   $.post("proccessvillagedata.php", {Action: "Delete",villageid:id}, function (data) {
            console.log(data);
            var response=JSON.parse(data);
            var result=response.result;
            if(result=='true'){
                alert('Village Deleted Successfully');
            }else{
                alert('Failed to Delete');
            }
        }
    )
}