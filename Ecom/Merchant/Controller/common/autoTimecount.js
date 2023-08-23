function updateTime() {
    var now = new Date();
    var formattedTime = now.toTimeString().slice(0, 8); // Extracts HH:MM:SS from the time string
    setTimeout(updateTime, 1000); // Update every second
    return formattedTime;

  
}

