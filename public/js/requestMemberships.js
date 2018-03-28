$(function() {
    updateDateReturn();

    
    $(".selectmembership").on("change", function() {
        updateDateReturn();
    })
})


function updateDateReturn() {
    var selectedID = $(".selectmembership").val();
    var days = 30;

    $.each(memberships, function(membershipkey, membership) {
        if (membership["MembershipID"] == selectedID) {
            days = parseInt(membership["days"]) + 30;
        }
    });

    var returnDate = new Date();
    returnDate.setTime(returnDate.getTime() + days * 86400000);
    console.log(days)
    $('#returndate').val(returnDate.getDate() + "." + returnDate.getMonth() + "." + returnDate.getFullYear());
}