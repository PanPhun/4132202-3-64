<form id="frm_add_member">
    <div>
        <label>ID : </label>
        <input type="text" name="id" required>
    </div>
    <div>
        <label>Username : </label>
        <input type="text" name="username">
    </div>
    <div>
        <label>Password : </label>
        <input type="text" name="password">
    </div>
    <div>
        <button type="submit">SAVE</button>
        <button type="reset">RESET</button>
    </div>
</form>

<div id="frm_msg"></div>

<script>
    $("#frm_add_member").submit(function(e) {
        e.preventDefault();

        let frm = $(this);

        $.ajax({
            url: "./query/add_member.php",
            method: "POST",
            data: frm.serialize(),
            success: function(msg) {
                console.log(msg);
                let err = msg == "" ? "Success !!" : msg;
                $("#frm_msg").html(err);
                frm[0].reset();
            }
        });
    });
</script>