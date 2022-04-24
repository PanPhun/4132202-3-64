// alert();
var number = 50;
var text = "Phunyanuch";
var array = [10, 20, 30];
var array2 = [10, [1, 3, "test"], 30];
var obj = { name: "Pan", age: 36, color: "Pink" };
var obj2 = {
  name: "Pan",
  address: {
    no: 74,
    road: "RP.1005",
    city: "buriram",
  },
};

console.log(obj2);

 document.getElementById("msg").innerHTML = array[1];
add(3, 8);

 function add(a,b) {
     var var_sum = a + b;
     let let_sum = a + b;
     document.getElementById("msg").innerHTML = let_sum;
 }
</script>
