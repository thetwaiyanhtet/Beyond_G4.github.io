document.getElementById("photo1").onchange = function (evt) {
  var tgt = evt.target || window.event.srcElement,
    files = tgt.files;
    console.log("Zero");

  // FileReader support
  if (FileReader && files && files.length) {
    var fr = new FileReader();
    fr.onload = function () {
      document.getElementById("photoimg1").src = fr.result;
      console.log("Zero");
    };
    fr.readAsDataURL(files[0]);
    
  }
};

document.getElementById("photo2").onchange = function (evt) {
  var tgt = evt.target || window.event.srcElement,
    files = tgt.files;

  // FileReader support
  if (FileReader && files && files.length) {
    var fr = new FileReader();
    fr.onload = function () {
      document.getElementById("photoimg2").src = fr.result;
    };
    fr.readAsDataURL(files[0]);
  }
};

document.getElementById("photo3").onchange = function (evt) {
  var tgt = evt.target || window.event.srcElement,
    files = tgt.files;

  // FileReader support
  if (FileReader && files && files.length) {
    var fr = new FileReader();
    fr.onload = function () {
      document.getElementById("photoimg3").src = fr.result;
    };
    fr.readAsDataURL(files[0]);
  }
};

document.getElementById("photo4").onchange = function (evt) {
  var tgt = evt.target || window.event.srcElement,
    files = tgt.files;
  console.log("joken");
  // FileReader support
  if (FileReader && files && files.length) {
    var fr = new FileReader();
    fr.onload = function () {
      document.getElementById("photoimg4").src = fr.result;
    };
    fr.readAsDataURL(files[0]);
  }
};

document.getElementById('photo5').onchange = function (evt) {
    var tgt = evt.target || window.event.srcElement,
        files = tgt.files;
    
    // FileReader support
    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            console.log('File loaded successfully.'); // Add this line
            document.getElementById("photoimg5").src = fr.result;   
        }
        fr.readAsDataURL(files[0]);
    }
};


document.getElementById('photo6').onchange = function (evt) {
    var tgt = evt.target || window.event.srcElement,
        files = tgt.files;
        console.log("joken");
    // FileReader support
    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById("photoimg6").src = fr.result;   
        }
        fr.readAsDataURL(files[0]);
       
    }}

