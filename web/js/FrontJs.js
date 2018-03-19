$(function() {
    /*  $('#images').on('change',function() {
          console.log("changer");*/

    /* $("#preview").each(function(e){
         this.remove();
     });
     var file = $(this);
     var reader = new FileReader;
     reader.onload = function(event) {
         var img = new Image();
         img.onload = function() {
             var width = 140;
             var height = 90
             var canvas = $('<canvas id="preview"></canvas>').attr({ width: width, height: height });
             file.after(canvas);
             var context = canvas[0].getContext('2d');
             context.drawImage(img, 0, 0, width, height);
         };
         img.src = event.target.result;
     };
     reader.readAsDataURL(file[0].files[0]); */
    // });
});
$('#in').on('click', function() {
        console.log("click");

    })
    //function drop() {
$('#dropzone input[type="file"]').change(function() {
    console.log("changer");


    /*  $("#preview").each(function(e) {
        this.remove();
    });
    var file = $(this);
    var reader = new FileReader;
    reader.onload = function(event) {
        var img = new Image();
        img.onload = function() {
            var width = 140;
            var height = 90
            var canvas = $('<canvas id="preview"></canvas>').attr({ width: width, height: height });
            file.after(canvas);
            var context = canvas[0].getContext('2d');
            context.drawImage(img, 0, 0, width, height);
        };
        img.src = event.target.result;
    };
    reader.readAsDataURL(file[0].files[1]);
*/
});