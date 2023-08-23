
    document.addEventListener("DOMContentLoaded", function() {
    var exportButton = document.getElementById("exportButton");
    exportButton.addEventListener("click", function() {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "./exportSale.php", true);

    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    try {
                        var response = JSON.parse(xhr.responseText);
                        var downloadLink = document.createElement("a");
                        downloadLink.href = response.filename;
                        downloadLink.download = response.filename;
                        downloadLink.style.display = "none";
                        document.body.appendChild(downloadLink);
                        downloadLink.click();
                        document.body.removeChild(downloadLink);
                    } catch (error) {
                        console.error("Error parsing JSON: " + error);
                    }
                } else {
                    console.error("Error exporting data: " + xhr.statusText);
                }
            }
        };
    xhr.send("export_type=Sale Report");
    });
});



